<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:19
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\products.slider.html" */ ?>
<?php /*%%SmartyHeaderCode:100265570674fe35094-55511091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d5d6d99235e3118bf3fbdf32ab68698aa59fa3' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\products.slider.html',
      1 => 1428051770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100265570674fe35094-55511091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sliderId' => 0,
    's_products' => 0,
    'p' => 0,
    'wa' => 0,
    'badge_html' => 0,
    'wa_theme_url' => 0,
    'theme_settings' => 0,
    'no_submit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067500564a2_60274327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067500564a2_60274327')) {function content_557067500564a2_60274327($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?>
<?php $_smarty_tpl->tpl_vars['compare_p'] = new Smarty_variable(waRequest::cookie('shop_compare',array(),waRequest::TYPE_ARRAY_INT), null, 0);?>
<?php $_smarty_tpl->tpl_vars['favorite_p'] = new Smarty_variable(waRequest::cookie('shop_favorite',array(),waRequest::TYPE_ARRAY_INT), null, 0);?>

<ul class="products-slider-<?php echo $_smarty_tpl->tpl_vars['sliderId']->value;?>
">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
    <li itemscope itemtype ="http://schema.org/Product">
        <div class="product-block">
            <div class="image">
                <a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?> &mdash; <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                    <?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['p']->value['badge']), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['badge_html']->value){?>
                        <div class="corner bottom left"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'300',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy300.png"));?>

                    
                </a>
            </div>
            <div class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?> &mdash; <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"><h5 itemprop="name"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['name'],60);?>
</h5></a></div>
            <div itemprop="offers" class="offers" itemscope itemtype="http://schema.org/Offer">
                <div class="product-price">
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><span class="compare-at-price nowrap"><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->currency()=='RUB'){?><?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['compare_price'],null,null,false);?>
<?php }else{ ?><?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
<?php }?><?php }else{ ?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
<?php }?></span><?php }?>
                    <span class="price nowrap<?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?> red<?php }?>" itemprop="price"><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price']);?>
<?php }else{ ?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
<?php }?></span>
                </div> 
                <?php if (1||!isset($_smarty_tpl->tpl_vars['no_submit']->value)){?>
                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0){?>
                     
                        <link itemprop="availability" href="http://schema.org/OutOfStock" />
                    <?php }?>
                <?php }else{ ?>
                    <a class="button" href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
">Подробнее</a>
                <?php }?>
                
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['soaringItem'])&&$_smarty_tpl->tpl_vars['p']->value['sku_count']<2){?>
            <input type="hidden" class="soaring-cart-data"
                data-url = "<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"
                data-img_url = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['p']->value,'96x96');?>
"
                data-name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                data-price = "<?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price'],null,null,false);?>
"
            >
            <?php }?>
        </div>
    </li>
<?php } ?>
</ul><?php }} ?>