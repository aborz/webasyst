$(document).ready(function () {
    $('.dialog').on('click', 'a.dialog-close', function () {
	    /*$(this).closest('.dialog').hide().find('.cart').empty();*/
	    $(this).closest('.dialog').hide().find('.dialog-window').empty().append('<div class="cart"></div>');
	    return false;
	});
    $(document).bind('keyup.dialog', function(e) { 
        if (e.keyCode == 27) { $(".dialog:visible").hide().find('.dialog-window').empty().append('<div class="cart"></div>'); }
    });
    //autofit for jQuery UI Autocomplete 1.8.2!
    $("#search.autofit, #search-m.autofit").each(function(){
        var self = $(this);
        self.autocomplete({
            delay: 500,
            minLength: 3,
            search: function(event, ui) {
                if($(this).val().replace(/^\s+|\s+$/g, '').length < 3){
                    $(this).autocomplete("close");
                    return false;
                }
            },
            source: function(request, response){
                request.term = request.term.replace(/^\s+|\s+$/g, '');
                var query = request.term.replace(/\s+/g, '+');
                $.ajax({
                    url: $.comfortbuy.shop_url+'search/?query='+query,
                    type: "GET",
                    dataType: "html",
                    success: function(data){
                        var items = $.map($(data).find('.product-list li:lt('+$.comfortbuy.autofit_visible_item+')'), function(item){
                            var regexp = new RegExp("(" + request.term.replace(/\s+/, "|", 'g') +")", "ig");
                            var name = $(item).find('h5[itemprop="name"]').text();
                            return {
                                label: name,
                                value: name,
                                url: $(item).find('h5[itemprop="name"]').parent().attr('href'),
                                text: '<img width="48" height="48" src="'+$(item).find('img').attr('src').replace(/^(.*\/[0-9]+\.)(.*)(\..*)$/, '$1' + '96x96' + '$3')+'" alt=""><span class="autofit-name">'+name.replace(regexp, '<span class="match">$1</span>')+'</span><span class="autofit-price">'+$(item).find('.product-price').html()+'</span>'
                            }
                        });
                        if($(data).find('.product-list li').length > $.comfortbuy.autofit_visible_item) items[items.length] = {
                            label: ''+query,
                            value: ''+query,
                            url: $.comfortbuy.shop_url+'search/?query='+query,
                            text: $.comfortbuy.locale.showall
                        }
                        response(items);
                    }
                });
            },
            select: function( event, ui ) {
                location.href = ui.item.url;
                //return false;
            }
        }).data("autocomplete")._renderMenu = function( ul, items ) {
            //var _width = Math.max(self.innerWidth()+30, 200);
            var _width = self.innerWidth()+30;
            ul.addClass('autofit-product');
            
            $.each( items, function( index, item ) {
    			$('<li style="width: '+_width+'px;"></li>')
                    .data('item.autocomplete', item)
                    .append('<a href="'+item.url+'">'+item.text+'</a>')
                    .appendTo(ul);
    		});
        };
        $(window).bind('resize', function(){ self.autocomplete("close"); });
    });
    
    var auth_load = function(auth_url, data, submit){
        if(data == 'undefined') data = {};
        if(submit == 'undefined') sumbit = false;
        var loading = $('<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255,255,255,0.5);"><i class="icon16 loading" style="position: absolute; top: 50%; margin-top: -8px; left: 50%; margin-left: -8px;"></i></div>');
        var d = $('#dialog');
        var c = d.find('.cart');
        d.show();
        c.addClass('authentification').append(loading).load(auth_url + ' .content', data, function () {
            if(submit && !c.find('.wa-error').length){
                if(auth_url == $.comfortbuy.auth_base_url){
                    c.empty();
                    var text = '<div id="page"><h1>'+$.comfortbuy.locale.cong+'</h1><p>'+$.comfortbuy.locale.isauth+'</p>'+
                        '<br><br><div>'+$.comfortbuy.auth_my_link+$.comfortbuy.auth_home_link+'</div></div>';
                    c.append(text);
                    $(document).unbind('keyup.dialog');
                    $('.dialog').off('click').on('click', 'a.dialog-close', function(){
                        $(this).attr('href', c.find('.auth-home-link').attr('href'));
                    });
                }else{
                    if(!c.find('#page>a').length){
                        var text = '<br><br><div>'+$.comfortbuy.auth_my_link+$.comfortbuy.auth_home_link+'</div>';
                        c.find('#page').append(text);
                        $(document).unbind('keyup.dialog');
                        $('.dialog').off('click').on('click', 'a.dialog-close', function(){
                            $(this).attr('href', c.find('.auth-home-link').attr('href'));
                        });
                    }
                }
            }
            c.parent().prepend(c.find('h1'));
            c.css('margin-top', d.find('h1').innerHeight());
            d.find('h1').append('<a href="#" class="dialog-close"><i class="icon-remove"></i></a>');
            
            c.find('form').attr('action', auth_url).submit(function(){
                var fields = $(this).serializeArray();
            	var params = {};
            	for (var i = 0; i < fields.length; i++) {
            		if (fields[i].value !== '') {
            		    params[fields[i].name] = ''+fields[i].value;
            		}
            	}
            	d.find('.dialog-window').empty().append('<div class="cart"></div>');
            	auth_load(auth_url, params, true);
                
                return false;
            });
            c.find('div.wa-auth-adapters a').click(function () {
                var left = (screen.width - 600) / 2;
                var top = (screen.height - 400) / 2;
                window.open($(this).attr('href'),'oauth', "width=600,height=400,left="+left+",top="+top+",status=no,toolbar=no,menubar=no");
                d.hide().find('.dialog-window').empty().append('<div class="cart"></div>');
                return false;
            });
            c.find('.wa-captcha-refresh, .wa-captcha-img').unbind('click').click(function(){
                var div = $(this).parents('div.wa-captcha');
                var captcha = div.find('.wa-captcha-img');
                if(captcha.length) {
                    captcha.attr('src', captcha.attr('src').replace(/\?.*$/,'?rid='+Math.random()));
                    captcha.one('load', function() {
                        div.find('.wa-captcha-input').focus();
                    });
                };
                div.find('input').val('');
                return false;
            });
            c.find('.wa-submit a, #page>a').click(function(){
                d.find('.dialog-window').empty().append('<div class="cart"></div>');
                auth_load($(this).attr('href'));
                return false;
            });
            
            if ((($(window).height()*2/3) > c.outerHeight(true))) {
                c.css('bottom', 'auto');
            } else {
                c.css('bottom', '15%');
            }
        });
    }

    $('.auth-popup').click(function(){ auth_load($(this).attr('href')); return false; });
    
    // scroll-dependent animations
    $(window).scroll(function() {    
      	if ( $(this).scrollTop()>=35 ) {
            if (!$("#cart").hasClass('empty')) { $("#cart").addClass( "fixed" ); }
    	}else if ( $(this).scrollTop()<30 ) {
    		$("#cart").removeClass( "fixed" );
    	}
    	// scrollUp
    	var back = $("#scrollUp");
		if ($(this).scrollTop() > 100) { back.fadeIn();	} else { back.fadeOut(); }
    });
	$('#scrollUp').click(function () { $('body,html').animate({ scrollTop: 0 }, 800); return false;	});
	
	if(!$('#footer .social li').length){ $('#footer .contact .caption').css('display', 'block'); }
    
    // push-up
    $('#push-up').height($('.wrapper-bottom').height());
    // logo
    var logo = $('.logo-link:first p.first');
    logo.html(logo.text().replace(/([друфцщДЦЩgjpq])/g, '<span class="letter">$1</span>'));
    //last photo
    $('.slphotos, .lphotos').jcarousel({
      	scroll: 1,
      	vertical: true,
    	buttonNextHTML: '<div><i class="icon-caret-down"></i></div>',
        buttonPrevHTML: '<div><i class="icon-caret-up"></i></div>'
    });
    //last posts, products-slider
    $('.slposts, .lposts, ul[class^="products-slider-"]').jcarousel({
      	scroll: 1,
    	buttonNextHTML: '<div><i class="icon-caret-right"></i></div>',
        buttonPrevHTML: '<div><i class="icon-caret-left"></i></div>',
        //reloadCallback: function(carousel){ carousel.scroll(1, false); carousel.list.css('left', 0); }
    });
    //mobile
    $('#mobile-close a').click(function(){
        var sid = $('.sidebar'), con = $('.content');
        sid.animate({ left: -260 }, 500, function(){ $(this).css('display', 'none'); $('body').css('height', 'auto'); });
        
        return false;
    });
    $('#mobile-open a').click(function(){
        var sid = $('.sidebar'), con = $('.content');
        if(sid.height() > $('body').height()){
            $('body').height(sid.height());
        }else{ sid.css('height', 'auto'); }
        sid.css('display', 'block').animate({ left: 0 }, 500);
        
        return false;
    });
    if($('#tagsCanvasContent').length){
        var option = {
            textColour: $('.tags.block a').css('color'),
            outlineColour: $('.tags.block').css('border-top-color'),
            outlineMethod: "colour",
            outlineThickness: 1,
            reverse: true,
            hideTags: false,
            depth: 0.8,
            wheelZoom: false,
            maxSpeed: 0.05
        }
        if($('html').hasClass('no-canvas') || !$('#tagsCanvas').tagcanvas(option, 'tagsCanvasContent')){
            $('#tagsCanvas').parent().hide();
            $('#tagsCanvasContent').show();
        }
    }
    
    if($('.comfortbuy-horizontal-tree').length){
        var wl = $('.container').width(), lil = 0, id = 0;
        $('.comfortbuy-horizontal-tree>li').each(function(i){
            lil += $(this).width();
            if((wl*10/17) > lil){ $(this).addClass('drop-right'); }//*
            if((wl-75) < lil){ id = i; return false; }
        });
        if(id > 1){
            id--;
            $('.comfortbuy-horizontal-tree>li').filter(':gt('+id+')').wrapAll('<li class="dots"><ul></ul></li>');
            $('.comfortbuy-horizontal-tree>li.dots').prepend('<span><i class="icon-circle"></i><i class="icon-circle"></i><i class="icon-circle"></i></span>');
        }
        $('ul.comfortbuy-horizontal-tree ul li:last-child, ul.comfortbuy-horizontal-tree li:last-child').addClass('last');
        $('ul.comfortbuy-horizontal-tree ul').parent().addClass('parent');
        $('.comfortbuy-horizontal-tree').css('visibility', 'visible');
        
        $('.horizontal-tree-zero>li>ul').each(function(){
            if(!$(this).parent().hasClass('dots')){ if(!$(this).children('.selected').length){ $(this).children(':first-child.parent').addClass('selected'); } }
        });
        $('.horizontal-tree-zero>li>ul>li').hover(function(){
            $(this).parent().children('li.selected').removeClass('selected').addClass('aselected');
        }, function(){
            $(this).parent().children('li.aselected').removeClass('aselected').addClass('selected');
        });
    }
    
    $('ul.vertical-tree-two ul').parent().addClass('parent');
	if(!$('ul.vertical-tree-zero.dhtml').hasClass('dynamized'))
	{		
		$('ul.vertical-tree-zero.dhtml ul').prev().before("<span class='grower icon-angle-down OPEN'> </span>");
		$('ul.vertical-tree-zero.dhtml ul li:last-child, ul.vertical-tree-zero.dhtml li:last-child').addClass('last');
		$('ul.vertical-tree-zero.dhtml ul li:first-child, ul.vertical-tree-zero.dhtml li:first-child').addClass('first');
		$('ul.vertical-tree-zero.dhtml span.grower.OPEN').addClass('CLOSE').removeClass('OPEN').parent().find('ul:first').hide();
		$('ul.vertical-tree-zero.dhtml').show();
		$('ul.vertical-tree-zero.dhtml .selected').parents('ul').not('.comfortbuy-vertical-tree').each( function() { toggleBranch($(this).prev().prev(), true); });
		toggleBranch($('ul.vertical-tree-zero.dhtml .selected').find('span:first'), true);
		$('ul.vertical-tree-zero.dhtml span.grower').click(function(){ toggleBranch($(this)); });		
		$('ul.vertical-tree-zero.dhtml').addClass('dynamized');
		$('ul.vertical-tree-zero.dhtml').removeClass('dhtml');
	}
    
    if(!$('.bph-mobile-tree.dhtml').hasClass('dynamized'))
	{		
		$('.bph-mobile-tree.dhtml ul').prev().before("<span class='grower icon-angle-down OPEN'> </span>");
		$('.bph-mobile-tree.dhtml ul li:last-child, .bph-mobile-tree.dhtml li:last-child').addClass('last');
		$('.bph-mobile-tree.dhtml ul li:first-child, .bph-mobile-tree.dhtml li:first-child').addClass('first');
		$('.bph-mobile-tree.dhtml span.grower.OPEN').addClass('CLOSE').removeClass('OPEN').parent().find('ul:first').hide();
		$('.bph-mobile-tree.dhtml').show();
		$('.bph-mobile-tree.dhtml .selected').parents('ul').each( function() { toggleBranch($(this).prev().prev(), true); });
		toggleBranch($('.bph-mobile-tree.dhtml .selected').find('span:first'), true);
		$('.bph-mobile-tree.dhtml a:first').click(function(){ return false; });
		$('.bph-mobile-tree.dhtml span.grower').click(function(){ toggleBranch($(this)); });		
		$('.bph-mobile-tree.dhtml').addClass('dynamized');
		$('.bph-mobile-tree.dhtml').removeClass('dhtml');
	}
	
	if($('#cart').length){
	    
	    $('#cart').hover(function(){
	        var self = $(this), soa = self.find('.soaring-block');
	        if(self.hasClass('empty')) return false;
	        clearTimeout(soa.data('timer'));
	        if(soa.is(':animated') || soa.hasClass('active')) return false;
	        soa.css('top', -soa.outerHeight()-8);
	        soa.stop().animate({top: self.outerHeight()}, 'slow', function(){
	            $(this).addClass('active');
	            //self.find('a:first').css('border-bottom', 'none');
	        });
	    }, function(){
	        if($('#cart').hasClass('empty')) return false;
	        var soa = $(this).find('.soaring-block');
	        soa.data('timer', setTimeout(function(){
	            soa.stop().animate({top: -soa.outerHeight()-8}, "slow", function(){
	                $(this).removeClass('active').css('top', -1000);
	                //soa.parent().find('a:first').css('border-bottom', '1px solid');
	            });
	        }, 1000));
	    });
	    
        $("body").off('click.soaring-cart-del').on('click.soaring-cart-del', '.soaring-cart-del', function(){
            var li = $(this).closest('li');
            
            addSoaringLoading();
            $.post($.comfortbuy.shop_url + 'cart/delete/', {html: sumbolrub, id: li.data('id')}, function (response) {
                li.animate({opacity: 0}, 'slow', function(){
                    
                    if (response.data.count == 0) {
                        response.data.total = 'пусто';
                        $('#cart').addClass('empty').removeClass('fixed');
                        $('.soaring-block').removeClass('active').css('top', -1000);
                    }
                    $(".cart-total").html(response.data.total);
                    
                    li.remove();
                    setSoaringHeight();
                });
                removeSoaringLoading();
            }, "json");
            return false;
        });
        
        $("body").off('change.soaring-cart-qty').on('change.soaring-cart-qty', '.soaring-cart-qty', function(){
            var self = $(this), li = self.closest('li');
            self.val(self.val() > 0 ? self.val() : 1);
            
            addSoaringLoading();
            $.post($.comfortbuy.shop_url + 'cart/save/', {html: sumbolrub, id: li.data('id'), quantity: self.val()}, function (response) {
                li.find('.price').html(response.data.item_total);
                if (response.data.q) {
                    self.val(response.data.q);
                }
                if (response.data.error) {
                    alert(response.data.error);
                } else {
                    self.removeClass('error');
                }
                
                $(".cart-total").html(response.data.total);
                removeSoaringLoading();
            }, "json");
        });
        /*
        $("body").off('click.soaring-cart-minus').on('click.soaring-cart-minus', '.soaring-cart-minus', function(){
            var input = $(this).parent().find('input');
    		if(parseInt(input.val()) >= 2){ input.val(parseInt(input.val()) - 1).change(); }
    		return false;
        });
        
        $("body").off('click.soaring-cart-plus').on('click.soaring-cart-plus', '.soaring-cart-plus', function(){
            var input = $(this).parent().find('input');
    		input.val(parseInt(input.val()) + 1).change();
    		return false;
        });
        */
        if($('#soaring-cart').length) setSoaringHeight();
        
    }
	
});

function openBranch(jQueryElement, noAnimation) {
	jQueryElement.addClass('OPEN icon-angle-up').removeClass('CLOSE icon-angle-down');
	if(noAnimation)
		jQueryElement.parent().find('ul:first').show();
	else
		jQueryElement.parent().find('ul:first').slideDown();
}
function closeBranch(jQueryElement, noAnimation) {
	jQueryElement.addClass('CLOSE icon-angle-down').removeClass('OPEN icon-angle-up');
	if(noAnimation)
		jQueryElement.parent().find('ul:first').hide();
	else
		jQueryElement.parent().find('ul:first').slideUp();
}
function toggleBranch(jQueryElement, noAnimation) {
	if(jQueryElement.hasClass('OPEN'))
		closeBranch(jQueryElement, noAnimation);
	else
		openBranch(jQueryElement, noAnimation);
}

setTimeout(function(){
    var timerResize='sidebar';
    window.onresize = function(){
        if(timerResize!=='sidebar')clearTimeout(timerResize);
        timerResize=setTimeout(function(){
            if($(window).width() > 1000){
                $('.sidebar').show();
                $('.sidebar.hide-for-desktop').hide();
                $('body').height('auto');
            }
            $('#push-up').height($('.wrapper-bottom').height());
        },20)
    }
}, 200);

function goToByScroll(id){
    $('html, body').animate({ scrollTop: $("#"+id).offset().top },'slow');
}

var addSoaringLoading = function(){
    if(typeof loading == 'undefined')
        var loading = $('<div id="soaring-cart-loading"><i class="icon16 loading"></i></div>');
    $('#soaring-cart').parent().append(loading);
    $('#soaring-cart-total .button, #cart>a').addClass('disabled').bind('click', function(){ return false; });
}
var removeSoaringLoading = function(){
    $('#soaring-cart-loading').remove();
    $('#soaring-cart-total .button, #cart>a').removeClass('disabled').unbind('click');
}
var setSoaringHeight = function(){
    var soa_h = 0;
    $('#soaring-cart li').filter(':lt('+$.comfortbuy.soaring_visible_item+')').each(function(){
        soa_h += $(this).outerHeight();
    });
    $('#soaring-cart').css('max-height', soa_h);
}