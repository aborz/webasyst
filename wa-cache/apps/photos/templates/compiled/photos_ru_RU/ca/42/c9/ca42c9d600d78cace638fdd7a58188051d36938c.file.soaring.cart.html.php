<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:21
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\soaring.cart.html" */ ?>
<?php /*%%SmartyHeaderCode:849557067c9279087-21900877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca42c9d600d78cace638fdd7a58188051d36938c' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\soaring.cart.html',
      1 => 1403268718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '849557067c9279087-21900877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'item' => 0,
    'ip' => 0,
    'wa_theme_url' => 0,
    'theme_settings' => 0,
    'cart_total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067c9324ec6_72230842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067c9324ec6_72230842')) {function content_557067c9324ec6_72230842($_smarty_tpl) {?>
<div class="soaring-block">
    <div id="soaring-cart">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->shop->cart->items(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <div class="soaring-cart-img">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                        
                        <?php $_smarty_tpl->tpl_vars['ip'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->product($_smarty_tpl->tpl_vars['item']->value['product_id']), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['ip']->value['skus'][$_smarty_tpl->tpl_vars['item']->value['sku_id']]['image_id']){?><?php $_smarty_tpl->createLocalArrayVariable('item', null, 0);
$_smarty_tpl->tpl_vars['item']->value['product']['image_id'] = $_smarty_tpl->tpl_vars['ip']->value['skus'][$_smarty_tpl->tpl_vars['item']->value['sku_id']]['image_id'];?><?php }?>
                        
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['item']->value['product'],'96x96',array('default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy96.png"));?>

                    </a>
                </div>
                <div class="soaring-cart-name">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['item']->value['product']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['product']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                    &nbsp;<span class="gray"><?php if ($_smarty_tpl->tpl_vars['item']->value['sku_name']&&$_smarty_tpl->tpl_vars['item']->value['sku_name']!=$_smarty_tpl->tpl_vars['item']->value['product']['name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['sku_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
                </div>
                <div class="soaring-cart-price">
                        <?php $_smarty_tpl->createLocalArrayVariable('item', null, 0);
$_smarty_tpl->tpl_vars['item']->value['price'] = $_smarty_tpl->tpl_vars['wa']->value->shop->cart->getItemTotal($_smarty_tpl->tpl_vars['item']->value['id']);?>
                        <span class="price nowrap"><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><?php echo wa_currency($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
<?php }else{ ?><?php echo wa_currency_html($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
<?php }?></span>
                </div>
                <div class="soaring-cart-quantity">
                    
                  	<input type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
" class="soaring-cart-qty"> шт.
                    
                </div>
                <div class="soaring-cart-delete">
                    <a href="javascript:void(0);" class="soaring-cart-del" title="Удалить"><i class="icon-remove"></i></a>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div id="soaring-cart-total">
        <p><span class="bold">Общая сумма</span> (с учетом скидки)<span class="bold cart-total"><?php if (!$_smarty_tpl->tpl_vars['cart_total']->value){?>пусто<?php }else{ ?><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><?php echo wa_currency($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
<?php }else{ ?><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
<?php }?><?php }?></span></p>
        <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
">Перейти в корзину</a>
    </div>
</div><?php }} ?>