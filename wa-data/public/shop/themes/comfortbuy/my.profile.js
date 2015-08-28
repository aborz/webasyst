$(function() {
	$( "#my-sela-shops-dialog" ).dialog({
	  autoOpen: false,
	  show: {
	    effect: "blind",
	    duration: 100
	  },
	  hide: {
	    effect: "explode",
	    duration: 1000
	  },
	  width: '50%'
	});
	
	$( "#opener" ).click(function() {
	  $( "#my-sela-shops-dialog" ).dialog( "open" );
	  $( "#dialog-city" ).trigger( 'change' );
	});
	
	$( "#dialog-country" ).change(function(){
        var country=$("#dialog-country").val();
        $.ajax({
            url: '/index.php?module=bstfprofile&action=selaCities',
            dataType: 'json',
            data: {
	            country: country
            },
            success: function (response) {
				$('#dialog-city').html(response.data);
				$( "#dialog-city" ).trigger( 'change' );
            }
        });
    });
	
	$( "#dialog-city" ).change(function(){
        var city=$("#dialog-city").val();
        $.ajax({
            url: '/index.php?module=bstfprofile&action=selaShops',
            dataType: 'json',
            data: {
	            city: city
            },
            success: function (response) {
	            var shops = response.data;
	            $('#dialig-shop-list .shop-list').html('');
	            shops.forEach(function(item){
					shop = '<li><button onclick="contactAddShop(' + item.id + ');" style="display:inline-block;">+</button>' + item.address + '</li>';
					$('#dialig-shop-list .shop-list').append(shop);
	            });
            }
        });
    });
	
	var sela_shops = $('#contact-shop-list').html();
	if (sela_shops.length) sela_shops = JSON.parse(sela_shops);
	$('#contact-shop-list').html('');
	sela_shops.sela_shops.forEach(function(item){
        $.ajax({
            url: '/index.php?module=bstfprofile&action=selaShopInfo',
            dataType: 'json',
            data: {
	            shop_id: item
            },
            success: function (response) {
				shop = '<li data-shop-id="' + response.data.id + '"><button onclick="contactDeleteShop(' + response.data.id + ');" style="float:right;">x</button>' + response.data.address + '</li>';
				$('#contact-shop-list').append(shop);
            }
        });
	});
	
	var sela_cards = $('#contact-selacards-list').html();
	if (sela_cards.length) sela_cards = JSON.parse(sela_cards);
	$('#contact-selacards-list').html('');
	sela_cards.forEach(function(item){
		card = '<li data-card-id="' + item + '"><button onclick="contactDeleteCard(' + item + ');" style="float:right;">x</button>' + item + '</li>';
		$('#contact-selacards-list').append(card);
	});

	$('input[name="profile[photo]"]').closest('form').attr('enctype', 'multipart/form-data');
	$('.wa-field-photo .wa-value img:not(:first-child)').remove();
});

$('input[name="profile[phone]"]').mask("+7 (999) 999-9999");
$('#card-number-input').mask("99999999999");

var custom_fields;

var custom_sizez = $('input[name="profile[my_sizes]"]').val();
if (custom_sizez.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_sizez);
    $('form#my-sizes-custom select[name="size_top"]').val(custom_fields.size_top);
    $('form#my-sizes-custom select[name="size_low"]').val(custom_fields.size_low);
}
$('form#my-sizes-custom select').on('change', function(){
	$('input[name="profile[my_sizes]"]').val($('form#my-sizes-custom').serializeJSON());
});

var custom_stylez = $('input[name="profile[fav_style]"]').val();
if (custom_stylez.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_stylez);
	custom_fields.style.forEach(function(entry) {
	    $('form#fav-style-custom select:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#fav-style-custom select').on('change', function(){
	$('input[name="profile[fav_style]"]').val($("form#fav-style-custom :input[value!='']").serializeJSON());
});

var custom_color = $('input[name="profile[fav_color]"]').val();
if (custom_color.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_color);
	custom_fields.color.forEach(function(entry) {
	    $('form#fav-color-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#fav-color-custom input').on('change', function(){
	$('input[name="profile[fav_color]"]').val($("form#fav-color-custom :input[value!='']").serializeJSON());
});
	
var custom_hobbies = $('input[name="profile[hobbies]"]').val();
if (custom_hobbies.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_hobbies);
	custom_fields.hobbies.forEach(function(entry) {
	    $('form#my-hobbies-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-hobbies-custom input').on('change', function(){
	$('input[name="profile[hobbies]"]').val($("form#my-hobbies-custom :input[value!='']").serializeJSON());
});
	
var custom_pets = $('input[name="profile[pets]"]').val();
if (custom_pets.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_pets);
	custom_fields.pets.forEach(function(entry) {
	    $('form#my-pets-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-pets-custom input').on('change', function(){
	$('input[name="profile[pets]"]').val($("form#my-pets-custom :input[value!='']").serializeJSON());
});
	
var custom_heroes = $('input[name="profile[heroes]"]').val();
if (custom_heroes.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_heroes);
	custom_fields.heroes.forEach(function(entry) {
	    $('form#my-heroes-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-heroes-custom input').on('change', function(){
	$('input[name="profile[heroes]"]').val($("form#my-heroes-custom :input[value!='']").serializeJSON());
});
	
var custom_cloths = $('input[name="profile[cloth_brands]"]').val();
if (custom_cloths.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_cloths);
	custom_fields.clothing.forEach(function(entry) {
	    $('form#my-clothing-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-clothing-custom input').on('change', function(){
	$('input[name="profile[cloth_brands]"]').val($("form#my-clothing-custom :input[value!='']").serializeJSON());
});
	
var custom_shoes = $('input[name="profile[shoe_brands]"]').val();
if (custom_shoes.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_shoes);
	custom_fields.shoes.forEach(function(entry) {
	    $('form#my-shoes-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-shoes-custom input').on('change', function(){
	$('input[name="profile[shoe_brands]"]').val($("form#my-shoes-custom :input[value!='']").serializeJSON());
});
	
var custom_selfcare = $('input[name="profile[cosmetic_shops]"]').val();
if (custom_selfcare.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_selfcare);
	custom_fields.selfcare.forEach(function(entry) {
	    $('form#my-selfcare-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-selfcare-custom input').on('change', function(){
	$('input[name="profile[cosmetic_shops]"]').val($("form#my-selfcare-custom :input[value!='']").serializeJSON());
});
	
var custom_groceries = $('input[name="profile[grocery_stores]"]').val();
if (custom_groceries.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_groceries);
	custom_fields.groceries.forEach(function(entry) {
	    $('form#my-groceries-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-groceries-custom input').on('change', function(){
	$('input[name="profile[grocery_stores]"]').val($("form#my-groceries-custom :input[value!='']").serializeJSON());
});
	
var custom_othershops = $('input[name="profile[other_shops]"]').val();
if (custom_othershops.length > 2) {
	var i = 0;
	custom_fields = JSON.parse(custom_othershops);
	custom_fields.othershops.forEach(function(entry) {
	    $('form#my-othershops-custom input:eq(' + i + ')').val(entry);
	    i++;
	});
}
$('form#my-othershops-custom input').on('change', function(){
	$('input[name="profile[other_shops]"]').val($("form#my-othershops-custom :input[value!='']").serializeJSON());
});

function contactDeleteShop(id) {
	if (confirm('Удалить магазин?')) {
        $.ajax({
            url: '/index.php?module=bstfprofile&action=deleteShop',
            dataType: 'json',
            data: {
	            shop_id: id
            },
            success: function (response) {
				if(response.data == true) {
					$('#contact-shop-list li[data-shop-id="' + id + '"]').remove();
				}
            }
        });
	}
}

function contactAddShop(id) {
    $.ajax({
        url: '/index.php?module=bstfprofile&action=addShop',
        dataType: 'json',
        data: {
            shop_id: id
        },
        success: function (response) {
            if(response.data > 1) {
		        $.ajax({
		            url: '/index.php?module=bstfprofile&action=selaShopInfo',
		            dataType: 'json',
		            data: {
			            shop_id: id
		            },
		            success: function (response) {
						shop = '<li data-shop-id="' + response.data.id + '"><button onclick="contactDeleteShop(' + response.data.id + ');" style="float:right;">x</button>' + response.data.address + '</li>';
						$('#contact-shop-list').append(shop);
		            }
		        });
            }
        }
    });
}

function contactDeleteCard(id) {
	if (confirm('Удалить карту №' + id + '?')) {
        $.ajax({
            url: '/index.php?module=bstfprofile&action=deleteCard',
            dataType: 'json',
            data: {
	            card_id: id
            },
            success: function (response) {
				if(response.data == true) {
					$('#contact-selacards-list li[data-card-id="' + id + '"]').remove();
				}
            }
        });
	}
}

function contactAddCard(id) {
    $.ajax({
        url: '/index.php?module=bstfprofile&action=addCard',
        dataType: 'json',
        data: {
            card_id: id
        },
        success: function (response) {
            if(response.data > 1) {
				card = '<li data-card-id="' + id + '"><button onclick="contactDeleteCard(' + id + ');" style="float:right;">x</button>' + id + '</li>';
				$('#contact-selacards-list').append(card);
            }
        }
    });
}
	
