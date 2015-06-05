<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:45:01
         compiled from "C:\msktestw2008\trunk\webasyst\wa-apps\shop\templates\actions\backend\BackendProductsSubmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:147695570646dd3b778-63769167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a8123d4d96870c0d46e82c87fd7cf0d06eb7113' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-apps\\shop\\templates\\actions\\backend\\BackendProductsSubmenu.html',
      1 => 1360765464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147695570646dd3b778-63769167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5570646dd89994_75056163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570646dd89994_75056163')) {function content_5570646dd89994_75056163($_smarty_tpl) {?><li class="float-right s-search-form">
    <input type="search" class="search" placeholder="Поиск товаров" id="s-products-search">
</li>

<li>
    <a href="#/product/new/edit/" class="bold"><i class="icon16 add"></i>Новый товар</a>
</li>
<li>
    <a href="?action=products&importexport">Импорт/экспорт</a>
</li><?php }} ?>