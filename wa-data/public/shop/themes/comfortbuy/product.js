//sku-no-stock
function Product(form, options) {
    this.form = $(form);
    this.add2cart = this.form.find(".add2cart");
    this.button = this.add2cart.find("input[type=submit]");
    for (var k in options) {
        this[k] = options[k];
    }
    var self = this;
    // add to cart block: cart-form-dialog
    this.form.find(".services input[type=checkbox]").click(function () {
        var obj = $('select[name="service_variant[' + $(this).val() + ']"]');
        if (obj.length) {
            if ($(this).is(':checked')) {
                obj.removeAttr('disabled');
            } else {
                obj.attr('disabled', 'disabled');
            }
        }
        self.updatePrice();
    });

    this.form.find(".services .service-variants").on('change', function () {
        self.updatePrice();
    });

    this.form.find(".skus input[type=radio]").click(function () {
        var image_id =$(this).data('image-id');
        if (image_id) {
            setTimeout(function(){ $("#product-image-" + image_id).click() },500);
            if(self.form.find('.soaring-cart-data').data('img_url')){
                self.form.find('.soaring-cart-data').data('img_url', self.images[image_id].url_crop);
            }
        }
        if ($(this).data('disabled')) {
            self.button.attr('disabled', 'disabled');
            self.form.find('.quantity-wrap').hide();
        } else {
            self.button.removeAttr('disabled');
            self.form.find('.quantity-wrap').show();
        }
        self.form.find('.soaring-cart-data').data('sku_name', $(this).parent().find('[itemprop="name"]:first').text());
        self.form.find('input[name="quantity"]').val(1);
        var sku_id = $(this).val();
        self.updateSkuServices(sku_id);
        self.updatePrice();
    });
    this.form.find(".skus input[type=radio]:checked").click();

    this.form.find("select.sku-feature").change(function () {
        $(this).parent().find('.feature-btn.selected').removeClass('selected');
        $(this).parent().find(".feature-btn[data-value-id='" + $(this).val() + "']").addClass('selected');
        var key = "", sku_name = [];
        self.form.find("select.sku-feature").each(function () {
            key += $(this).data('feature-id') + ':' + $(this).val() + ';';
            sku_name.push($(this).find(':selected').text());
        });
        var sku = self.features[key];
        if (sku) {
            if (sku.image_id) {
                setTimeout(function(){ $("#product-image-" + sku.image_id).click() }, 500);
                if(self.form.find('.soaring-cart-data').data('img_url')) {
                    self.form.find('.soaring-cart-data').data('img_url', self.images[sku.image_id].url_crop);
                }
            }
            self.updateSkuServices(sku.id);
            if (sku.available) {
                self.button.removeAttr('disabled');
                self.form.find('.quantity-wrap').show();
            } else {
                self.form.find("div.stocks div").hide();
                self.form.find(".sku-no-stock").show();
                self.button.attr('disabled', 'disabled');
                self.form.find('.quantity-wrap').hide();
            }
            self.form.find('.soaring-cart-data').data('sku_name', sku_name.join(', '));
            self.form.find('input[name="quantity"]').val(1);
            self.add2cart.find(".price").data('price', sku.price);
            self.updatePrice(sku.price, sku.compare_price);
        } else {
            self.form.find('.quantity-wrap').hide();
            self.form.find("div.stocks div").hide();
            self.form.find(".sku-no-stock").show();
            self.button.attr('disabled', 'disabled');
            self.add2cart(".compare-at-price").hide();
            self.add2cart(".price").empty();
        }
    });
    this.form.find("select.sku-feature:first").change();

    if (!this.form.find(".skus input:radio:checked").length) {
        this.form.find(".skus input:radio:enabled:first").attr('checked', 'checked');
    }
    
    this.form.find("span.feature-btn").click(function(){
        if($(this).hasClass("selected")) return false;
        $(this).parent().find('select.sku-feature').val($(this).data("value-id")).change();
    });
    
    this.form.find(".quantity-wrap input").change(function(){
        var max = $(this).data('max');
      	if(parseInt($(this).val()) > 0){
          	if(max && parseInt($(this).val()) > parseInt(max)){
            	$(this).val(parseInt(max));
          		alert($.comfortbuy.locale.err_cnt_prd);
            }
			$(this).val(parseInt($(this).val()));
        }else{
        	$(this).val(1);
        }
    });
    
    this.form.find(".quantity-btn-plus").click(function(){
        var inp = $(this).closest('.quantity-wrap').find('input'), max = inp.data('max');
        if(max){
            if(parseInt(inp.val()) < parseInt(max)) inp.val(parseInt(inp.val()) + 1);
        }else{
            inp.val(parseInt(inp.val()) + 1);
        }
        return false;
    });
    
    this.form.find(".quantity-btn-minus").click(function(){
        var inp = $(this).closest('.quantity-wrap').find('input');
        if(parseInt(inp.val()) >= 2) inp.val(parseInt(inp.val()) - 1);
        return false;
    });

    this.form.submit(function () {
        var f = $(this);
        $.post(f.attr('action') + (sumbolrub ? '?html=1' : ''), f.serialize(), function (response) {
            if (response.status == 'ok') {
                var cart_total = $(".cart-total");
                var cart_div = f.closest('.cart');
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
                    var clone = $('<div class="cart"></div>').append(f.clone());
                    if (cart_div.closest('.dialog').length) {
                        clone.insertAfter(cart_div.closest('.dialog'));
                    } else {
                        clone.insertAfter(cart_div);
                    }
                    clone.css({
                        top: cart_div.offset().top,
                        left: cart_div.offset().left,
                        width: cart_div.width()+'px',
                        height: cart_div.height()+'px',
                        position: 'absolute',
                        overflow: 'hidden'
                    }).animate({
                        top: cart_total.offset().top,
                        left: cart_total.offset().left,
                        width: 0,
                        height: 0,
                        opacity: 0.5
                    }, 500, function() {
                        $(this).remove();
                        cart_total.html(response.data.total);
                    });
                    
                    var $scd = self.form.find('.soaring-cart-data').data();
                    if($scd){
                        var $item = $('#soaring-cart li[data-id="'+response.data.item_id+'"]');
                        var cnt = parseInt(self.form.find('input[name="quantity"]').val()) || 1;
                        
                        if($item.length){
                            var $qty = $item.find('input.soaring-cart-qty');
                            cnt += parseInt($qty.val());
                            $qty.val(cnt);
                            $item.find('.price').html(self.currencyFormat($scd.price*cnt, !sumbolrub));//*
                        }else{
                            $.extend($scd, { id: response.data.item_id, cnt: cnt, price: ''+self.currencyFormat($scd.price*cnt, !sumbolrub) });//*
                            $('#soaring-cart ul').prepend(newItem($scd));
                            setSoaringHeight();
                        }
                        
                        $('#soaring-cart').scrollTop( $('#soaring-cart li[data-id="'+response.data.item_id+'"]').position().top );
                    }
                }
                if (cart_div.closest('.dialog').length) {
                    cart_div.closest('.dialog').hide().find('.dialog-window').empty().append('<div class="cart"></div>');
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
}

Product.prototype.currencyFormat = function (number, no_html) {
        // Format a number with grouped thousands
        //
        // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
        // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
        // +	 bugfix by: Michael White (http://crestidg.com)

        var i, j, kw, kd, km;
        var decimals = this.currency.frac_digits;
        var dec_point = this.currency.decimal_point;
        var thousands_sep = this.currency.thousands_sep;

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
        var s = no_html ? this.currency.sign : this.currency.sign_html;
        if (!this.currency.sign_position) {
            return s + this.currency.sign_delim + number;
        } else {
            return number + this.currency.sign_delim + s;
        }        
};


Product.prototype.serviceVariantHtml= function (id, name, price) {
        return $('<option data-price="' + price + '" value="' + id + '"></option>').text(name + ' (+' + this.currencyFormat(price, 1) + ')');
};

Product.prototype.updateSkuServices = function (sku_id) {
        this.form.find("div.stocks div").hide();
        this.form.find(".sku-" + sku_id + "-stock").show();
        this.form.find("div.selectable-articul div").hide();
        this.form.find(".sku-" + sku_id + "-articul").show();
        var max = 0;
        this.form.find(".sku-" + sku_id + "-stock .bold").each(function(){ max += isNaN(parseInt($(this).data('max'))) ? 0 : parseInt($(this).data('max')); });
        this.form.find('input[name="quantity"]').data('max', max == 0 ? '' : max);
        for (var service_id in this.services[sku_id]) {
            var v = this.services[sku_id][service_id];
            if (v === false) {
                this.form.find(".service-" + service_id).hide().find('input,select').attr('disabled', 'disabled').removeAttr('checked');
            } else {
                this.form.find(".service-" + service_id).show().find('input').removeAttr('disabled');
                if (typeof (v) == 'string') {
                    this.form.find(".service-" + service_id + ' .service-price').html(this.currencyFormat(v, !sumbolrub));
                    this.form.find(".service-" + service_id + ' input').data('price', v);
                } else {
                    var select = this.form.find(".service-" + service_id + ' .service-variants');
                    var selected_variant_id = select.val();
                    for (var variant_id in v) {
                        var obj = select.find('option[value=' + variant_id + ']');
                        if (v[variant_id] === false) {
                            obj.hide();
                            if (obj.attr('value') == selected_variant_id) {
                                selected_variant_id = false;
                            }
                        } else {
                            if (!selected_variant_id) {
                                selected_variant_id = variant_id;
                            }
                            obj.replaceWith(this.serviceVariantHtml(variant_id, v[variant_id][0], v[variant_id][1]));
                        }
                    }
                    this.form.find(".service-" + service_id + ' .service-variants').val(selected_variant_id);
                }
            }
        }
};
Product.prototype.updatePrice = function (price, compare_price) {
        if (price === undefined) {
            var input_checked = this.form.find(".skus input:radio:checked");
            if (input_checked.length) {
                var price = parseFloat(input_checked.data('price'));
                var compare_price = parseFloat(input_checked.data('compare-price'));
            } else {
                var price = parseFloat(this.add2cart.find(".price").data('price'));
            }
        }
        this.add2cart.find(".price").removeClass('red');
        if (compare_price) {
            if (!this.add2cart.find(".compare-at-price").length) {
                this.add2cart.find('.product-price').prepend('<span class="compare-at-price nowrap"></span>');
            }
            this.add2cart.find(".compare-at-price").html(this.currencyFormat(compare_price, !sumbolrub)).show();
            this.add2cart.find(".price").addClass('red');
        } else {
            this.add2cart.find(".compare-at-price").hide();
        }
        var self = this;
        this.form.find(".services input:checked").each(function () {
            var s = $(this).val();
            if (self.form.find('.service-' + s + '  .service-variants').length) {
                price += parseFloat(self.form.find('.service-' + s + '  .service-variants :selected').data('price'));
            } else {
                price += parseFloat($(this).data('price'));
            }
        });
        this.add2cart.find(".price").html(this.currencyFormat(price, !sumbolrub));
        this.form.find('.soaring-cart-data').data('price', price);
}

$(function () {
    // product images
    $("#product-gallery a").click(function () {
        $("#product-image").parent().find("div.loading").remove();
        $("#product-image").parent().append('<div class="loading" style="position: absolute; left: 50%; top: 50%; margin: -8px 0 0 -8px;"><i class="icon16 loading"></i></div>');
        var img = $(this).find('img');
        var size = $("#product-image").attr('src').replace(/^.*\/[0-9]+\.(.*)\..*$/, '$1');
        var src = img.attr('src').replace(/^(.*\/[0-9]+\.)(.*)(\..*)$/, '$1' + size + '$3');
        $('<img>').attr('src', src).load(function () {
            $("#product-image").attr('src', src);
            $("#product-image").parent().find("div.loading").remove();
        }).each(function() {
            //ensure image load is fired. Fixes opera loading bug
            if (this.complete) { $(this).trigger("load"); }
        });
        
        /*replace big image url*/
        var big_size = $("#product-image").data('zoom-image').replace(/^.*\/[0-9]+\.(.*)\..*$/, '$1');
        var big_src = img.attr('src').replace(/^(.*\/[0-9]+\.)(.*)(\..*)$/, '$1' + big_size + '$3');
        $("#product-image").attr('data-zoom-image', big_src);
        $("#product-image").closest('a').attr('href', big_src);
        
        /*select active*/
        $(this).closest('ul').find('a.thumbActive').removeClass('thumbActive');
        $(this).addClass('thumbActive');
        return false;
    });
    //print  	
  	$('#product-print').click(function() {  
		window.print();  
		return false;  
	});
});