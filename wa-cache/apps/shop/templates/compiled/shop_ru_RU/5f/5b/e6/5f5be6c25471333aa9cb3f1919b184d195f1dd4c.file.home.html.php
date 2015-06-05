<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:18
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\home.html" */ ?>
<?php /*%%SmartyHeaderCode:175415570674e654d21-98535725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5be6c25471333aa9cb3f1919b184d195f1dd4c' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\home.html',
      1 => 1429775804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175415570674e654d21-98535725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'wa_active_theme_path' => 0,
    'b_products' => 0,
    'b_photos' => 0,
    'frontend_homepage' => 0,
    '_' => 0,
    'wa_theme_url' => 0,
    'them' => 0,
    'homeBlock' => 0,
    's_products' => 0,
    'wa_parent_theme_path' => 0,
    'count_photos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5570674e94ab52_44415634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570674e94ab52_44415634')) {function content_5570674e94ab52_44415634($_smarty_tpl) {?><div class="sidebar left230px hide-for-desktop">
    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerPrd'])&&empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerImg'])){?>
    <?php $_smarty_tpl->tpl_vars['b_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerPrd'],10), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/banner.products.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bannerId'=>1,'b_products'=>$_smarty_tpl->tpl_vars['b_products']->value), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerImg'])){?>
    <?php $_smarty_tpl->tpl_vars['b_photos'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->photos($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerImg']), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/banner.images.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bannerId'=>1,'b_photos'=>$_smarty_tpl->tpl_vars['b_photos']->value), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['b_products']->value)||!empty($_smarty_tpl->tpl_vars['b_photos']->value)){?><style type="text/css"> #main { padding: 0; } </style><?php }?>

<!-- plugin hook: 'frontend_homepage' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<div>
<table style=" width: 100%; border: 0;">
    <td>
        
    </td>
</table>
</div>
<?php if (!preg_match('/\/(\w+)\/$/',$_smarty_tpl->tpl_vars['wa_theme_url']->value,$_smarty_tpl->tpl_vars['them']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('them', null, 0);
$_smarty_tpl->tpl_vars['them']->value[1] = 'comfortbuy';?><?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['homeBlock'])) $_smarty_tpl->tpl_vars['homeBlock'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['homeBlock']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['them']->value[1]).".home.block")){?>
    <?php echo $_smarty_tpl->tpl_vars['homeBlock']->value;?>

<?php }else{ ?>
<div class="home-block">
    <div>
        <a href="/index.php/dostavka/" title="доставка товаров из интернет-магазина SELA"><i class="icon-truck"></i><span>Доставка по всей России</span></a>
        <p class="padding-right" align=justify><font face="sans-serif" >Мы осуществляем доставку во все регионы России. Удобные пункты самовывоза и постаматы с широкой географией.</font></p>
    </div>
    <div>
        <a href="/index.php/vozvrat/" title="примерка товаров перед покупкой в интернет-магазине SELA"><i class="icon-gift"></i><span>Примерка перед покупкой</span></a>
        <p class="padding-right" align=justify><font face="sans-serif" >Если вам не подошел размер или товар не удовлетворил Ваши ожидания, вы можете отказаться от покупки.</font></p>
    </div>
    <div>
        <a href="/index.php/oplata/" title="способы оплаты заказов в интернет-магазине SELA"><i class="icon-money"></i><span>Удобные способы оплаты</span></a>
        <p align=justify><font face="sans-serif" >Вы можете оплатить покупки одним из преждложенных способов - мы принимаем наличные и банковские карты.</font></p>
    </div>
</div>

<?php $_smarty_tpl->tpl_vars['s_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products('set/bestsellers',15), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['s_products']->value&&count($_smarty_tpl->tpl_vars['s_products']->value)){?>
<div class="products-slider">
<hr>
<div>
<h2><p align="center" style="font-size: larger;">- ЛИДЕРЫ ПРОДАЖ -</p></h2>
</div>
<hr>
 
  <?php echo $_smarty_tpl->getSubTemplate ("products.slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sliderId'=>1,'s_products'=>$_smarty_tpl->tpl_vars['s_products']->value), 0);?>

</div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['s_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products('set/promo',15), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['s_products']->value&&count($_smarty_tpl->tpl_vars['s_products']->value)){?>
<div class="products-slider">

 <hr>
<div>
<h2><p align="center" style="font-size: larger;">- РЕКОМЕНДУЕМ -</p></h2>
</div>
<hr>
  
  <?php echo $_smarty_tpl->getSubTemplate ("products.slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sliderId'=>2,'s_products'=>$_smarty_tpl->tpl_vars['s_products']->value), 0);?>

</div>
<?php }?>

<!-- GENERAL WELCOME TEXT -->
<div itemscope itemtype="http://schema.org/Store" style="margin-bottom: 30px;">
  <div class="products-slider">  <hr><h2><p align="center" style="font-size: larger;">ИНТЕРНЕТ-МАГАЗИН SELA.RU</p></h2> <hr></div></br></br></br>
    <div class="articlo"><font face="sans-serif" >SELA – это известный бренд модной и стильной одежды, который уже более 20 лет радует своих покупателей яркими коллекциями, оригинальным дизайном и неизменно высоким качеством. Крупнейшая сеть SELA насчитывает более 400 магазинов в 200 городах России, Казахстана, Украины и Белоруссии. Fashion стиль бренда SELA близок тем, кто следит за модными тенденциями, стремится выглядеть современно и эффектно. Модная одежда SELA любима не одним поколением покупателей за идеальное соотношения качества и цены, широкий ассортимент - от разнообразных моделей базового гардероба до притягательных вечерних нарядов и стильной верхней одежды, а также за коллекции, которые подходят для всей семьи: в магазинах SELA представлена женская одежда, мужская одежда и детская одежда.</font></div>
    <meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
">

    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <meta itemprop="streetAddress" content="">
        <meta itemprop="addressLocality" content="">
        <meta itemprop="addressRegion" content="">
        <meta itemprop="postalCode" content="">
        <meta itemprop="addressCountry" content="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['wa']->value->shop->settings('country'), 'UTF-8');?>
">
    </div>

 
</div>
<?php }?>


<div class="home-last">
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shopLastPhotos'])){?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.photos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shopLastPosts'])){?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->photos&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shopLastPhotos'])){?><?php $_smarty_tpl->tpl_vars['count_photos'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['wa']->value->photos->photos()), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['count_photos'] = new Smarty_variable(0, null, 0);?><?php }?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('home'=>$_smarty_tpl->tpl_vars['count_photos']->value), 0);?>

    <?php }?>
    <div class="clear-both"></div>
</div>

<?php }} ?>