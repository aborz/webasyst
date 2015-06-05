$(document).ready(function () {
    /*$('.bxslider').bxSlider({ auto : true, pause : 5000, autoHover : true });*/
    /*plugin referral*/
    var $reff = $('table.referral-channels-report');
    if($reff.length){
        $reff.addClass('table');
        $reff.find('tr:first').addClass('coll-name ahover');
        $reff.find('tr:even:not(:first)').addClass('zebra');
    }

    $("#main").on('submit', 'form.addtocart', function () {
        var f = $(this);
		if (f.data('url')) {
            var d = $('#dialog');
            var c = d.find('.cart');
            c.addClass('product').load(f.data('url'), function () {
                d.show();
                if($('#dialog-image-product').length) {
                    c.parent().prepend(c.find('h4'));
                    c.css('margin-top', d.find('h4').innerHeight());
                }
                if ((c.height() > c.find('form').height())) {
                    c.css('bottom', 'auto');
                } else {
                    c.css('bottom', '15%');
                }
            });
            return false;
        }
        $.post(f.attr('action') + (sumbolrub ? '?html=1' : ''), f.serialize(), function (response) {
            if (response.status == 'ok') {
                var cart_total = $(".cart-total");
                if ( $(window).scrollTop()>=35 ) {
                    cart_total.closest('#cart').addClass( "fixed" );
    	        }
                cart_total.closest('#cart').removeClass('empty');
                
                if ($("table.cart").length) {
                    $(".content").parent().load(location.href, function () {
                        cart_total.html(response.data.total);
                        $(window).unbind('load.jcarousel, resize.jcarousel');
                        $('ul[class^="products-slider-"]').jcarousel({
                  	        scroll: 1,
                	        buttonNextHTML: '<div><i class="icon-caret-right"></i></div>',
                            buttonPrevHTML: '<div><i class="icon-caret-left"></i></div>',
                            reloadCallback: function(carousel){ carousel.scroll(1, false); carousel.list.css('left', 0); }
                        });
                    });
                } else {
                    var origin = f.closest('li');
                    var block = $('<div></div>').append(origin.html());
                    block.css({
                        'z-index': 10,
                        top: origin.offset().top,
                        left: origin.offset().left,
                        width: origin.width()+'px',
                        height: origin.height()+'px',
                        position: 'absolute',
                        overflow: 'hidden'
                    }).insertAfter('#main').animate({//code origin => .content
                        top: cart_total.offset().top,
                        left: cart_total.offset().left,
                        width: 0,
                        height: 0,
                        opacity: 0.5
                    }, 500, function() {
                        $(this).remove();
                        cart_total.html(response.data.total);
                    });
                    
                    var $scd = f.closest('li').find('.soaring-cart-data').data();
                    if($scd){
                        var $item = $('#soaring-cart li[data-id="'+response.data.item_id+'"]');
                        var cnt = parseInt(f.find('input[name="quantity"]').val()) || 1;
                        
                        if($item.length){
                            var $qty = $item.find('input.soaring-cart-qty');
                            cnt += parseInt($qty.val());
                            $qty.val(cnt);
                            $item.find('.price').html(currency_format($scd.price*cnt, !sumbolrub, $.comfortbuy.currency));//*
                        }else{
                            $.extend($scd, { id: response.data.item_id, cnt: cnt, price: ''+currency_format($scd.price*cnt, !sumbolrub, $.comfortbuy.currency) });//*
                            $('#soaring-cart ul').prepend(newItem($scd));
                            setSoaringHeight();
                        }
                        
                        $('#soaring-cart').scrollTop( $('#soaring-cart li[data-id="'+response.data.item_id+'"]').position().top );
                    }
                }
                if (response.data.error) {
                    alert(response.data.error);
                }
            } else if (response.status == 'fail') {
                alert(response.errors);
            }
        }, "json");
        return false;
    });
    
    /*brands*/
    var brands = $('.menu-v.brands');
    brands.find('a').prepend('<i class="icon-circle"></i>');
    if(brands.find('li').length>5){
        brands.find('li').filter(':gt(4)').hide();
        brands.append('<li class="align-right"><a id="brands-switch" class="type1" href="#">'+$.comfortbuy.locale.showall+'</a></li>');
        $('#brands-switch').click(function(){
            brands.find('li:hidden').show();
            $(this).parent().hide();
            return false;
        });
    }
    
    $('.filters.ajax form input').change(function () {
        var f = $(this).closest('form');
    	var fields = f.serializeArray();
    	var params = [];
    	for (var i = 0; i < fields.length; i++) {
    		if (fields[i].value !== '') {
    			params.push(fields[i].name + '=' + fields[i].value);
    		}
    	}
    	var url = '?' + params.join('&');
        $(window).lazyLoad && $(window).lazyLoad('sleep');
        var loading_filter = $('<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255,255,255,0.4); z-index: 10;"><i class="icon16 loading" style="position: absolute; top: 50%; margin-top: -8px; left: 50%; margin-left: -8px; border: none !important"></i></div>');
        f.css('position', 'relative').append(loading_filter);
        $.get(url, function(html) {
            var tmp = $('<div></div>').html(html);
            $('#product-list').html(tmp.find('#product-list').html());
            if (!!(history.pushState && history.state !== undefined)) {
                window.history.pushState({}, '', url);
            }
            $(window).lazyLoad && $(window).lazyLoad('reload');
            event_category();
            loading_filter.remove();
        });
    });
    
    var event_category = function(){
        $('#products-per-page a').click(function(){
            if(!$(this).hasClass('selected')){
                if($(this).data('pppc')){
                    $.cookie('products_per_page', $(this).data('pppc'), { expires: 30, path: '/'});
                }else{
                    $.cookie('products_per_page', '', { expires: 0, path: '/'});
                }
            }else{ return false; }
        });
        $('#sorting').change(function(){
            location.assign($(this).val());
        });
        $('.view-select span').click(function(){
            var self = $(this);
            if($(this).hasClass('selected')) return false;
            $('.view-select span').removeClass('selected'); $(this).addClass('selected');
            if($(this).data('view')){
                $('ul.product-list').addClass('thumbs').removeClass('list');
                $.cookie('shop_view', 'thumbs', { expires: 30, path: '/'});
            }else{
                $('ul.product-list').addClass('list').removeClass('thumbs');
                $.cookie('shop_view', 'list', { expires: 30, path: '/'});
            }
            return false;
        });
    }
    event_category();
});

var currency_format = function(number, no_html, currency) {
    // Format a number with grouped thousands
    //
    // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +	 bugfix by: Michael White (http://crestidg.com)

    var i, j, kw, kd, km;
    var decimals = currency.frac_digits;
    var dec_point = currency.decimal_point;
    var thousands_sep = currency.thousands_sep;

    // input sanitation & defaults
    if( isNaN(decimals = Math.abs(decimals)) ){
        decimals = 2;
    }
    if( dec_point == undefined ){
        dec_point = ",";
    }
    if( thousands_sep == undefined ){
        thousands_sep = ".";
    }

    i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

    if( (j = i.length) > 3 ){
        j = j % 3;
    } else{
        j = 0;
    }

    km = (j ? i.substr(0, j) + thousands_sep : "");
    kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
    //kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
    kd = (decimals && (number - i) ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


    var number = km + kw + kd;
    var s = no_html ? currency.sign : currency.sign_html;
    if (!currency.sign_position) {
        return s + currency.sign_delim + number;
    } else {
        return number + currency.sign_delim + s;
    }
}

var newItem = function($item) {
    return '<li data-id="'+$item.id+'">'+
            '<div class="soaring-cart-img">'+
                '<a href="'+$item.url+'" title="'+$item.name+'">'+
                    '<img src="'+($item.img_url || $.comfortbuy.default_img_url.dummy96)+'" alt="'+$item.name+'">'+
                '</a>'+
            '</div>'+
            '<div class="soaring-cart-name">'+
                '<a href="'+$item.url+'" class="bold">'+$item.name+'</a>&nbsp;<span class="gray">'+(typeof $item.sku_name !== 'undefined' ? $item.sku_name : "")+'</span>'+
            '</div>'+
            '<div class="soaring-cart-price">'+
                '<span class="price nowrap">'+$item.price+'</span>'+//*
            '</div>'+
            '<div class="soaring-cart-quantity">'+
                /*'<a class="soaring-cart-minus" href="javascript:void(0);"><i class="icon-minus-sign"></i></a>'+*/
                '<input type="text" size="3" value="'+$item.cnt+'" class="soaring-cart-qty"> '+$.comfortbuy.locale.pcs+
                /*'<a class="soaring-cart-plus" href="javascript:void(0);"><i class="icon-plus-sign"></i></a>'+*/
            '</div>'+
            '<div class="soaring-cart-delete">'+
                '<a href="javascript:void(0);" class="soaring-cart-del" title="'+$.comfortbuy.locale.remove+'"><i class="icon-remove"></i></a>'+
            '</div>'+
        '</li>';
}
