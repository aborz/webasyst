<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:45:05
         compiled from "C:\msktestw2008\trunk\webasyst\wa-apps\shop\templates\actions\products\product_list_thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:26548557064715baef9-50135078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f4a057c3a10dffaa273919287d4839f6a67809' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-apps\\shop\\templates\\actions\\products\\product_list_thumbs.html',
      1 => 1375446362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26548557064715baef9-50135078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5570647164b7b6_23966574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570647164b7b6_23966574')) {function content_5570647164b7b6_23966574($_smarty_tpl) {?><ul class="thumbs li250px" id="product-list">
    <script id="template-product-list-thumbs" type="text/html">
    
    {% for (var i = 0, n = o.products.length, p = o.products[0]; i < n; p = o.products[++i]) { %}
    <li class="product 
        {% if (i == n-1) { %}last{% } %} 
        {% if (p.status == '0') { %}gray{% } %} 
        {% if (p.alien) { %}s-alien{% } %}"
        data-product-id="{%#p.id%}"
        {% if (p.alien) { %}title="Этот товар находится в одной из подкатегорий"{% } %}
    >
        <div class="s-product-image s-image">
            <a href="#/product/{%#p.id%}/">
                {% if (p.badge) { %}
                    <div class="s-image-corner top right">{%#p.badge%}</div>
                {% } %}
                {% if (p.image) { %}
                    <img src="{%#p.image.thumb_url%}" class="drag-handle">
                {% } else { %}
                    <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-dummy.png" class="drag-handle not-found">
                {% } %}
            </a>
        </div>
        <div class="s-product-details">
            <input type="checkbox" id="s-product-checkbox-{%#p.id%}">
            <label for="s-product-checkbox-{%#p.id%}">
                <strong>{%#p.name%}</strong>
            </label>
            <span class="small nowrap">{%#p.price_range%}</span>
            <!-- extend info according to sorting method -->
            {% if (o.sort == 'rating') { %}
                <span class="rate nowrap" title="{%#'Средняя оценка покупателей: %s / 5'.replace('%s', p.rating)%}">
                    {%#p.rating_str%}
                </span>
            {% } else if (o.sort == 'total_sales') { %}
                <span class="hint total-sales nowrap">
                    Общие продажи: <strong>{%#p.total_sales_str%}</strong>
                </span>
            {% } else if (o.sort == 'count') { %}
                <span class="small stock nowrap">
                    {%#p.icon%} {%#((p.count === null)?'<span class="gray">∞</span>':''+p.count)%}
                </span>
            {% } else if (o.sort == 'create_datetime') { %}
                <br>
                <span class="hint stock nowrap">
                    {%#'Добавлен %s'.replace('%s', p.create_datetime_str)%}
                </span>
            {% } %}
        </div>
    </li>
    {% } %}
    
    </script>
</ul><?php }} ?>