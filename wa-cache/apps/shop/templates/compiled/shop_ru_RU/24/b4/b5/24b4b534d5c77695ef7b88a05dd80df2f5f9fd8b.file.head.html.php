<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:20
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\head.html" */ ?>
<?php /*%%SmartyHeaderCode:2349855706750bef562-21345455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24b4b534d5c77695ef7b88a05dd80df2f5f9fd8b' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\head.html',
      1 => 1403271146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2349855706750bef562-21345455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'action' => 0,
    'theme_settings' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'filters' => 0,
    'nofollow' => 0,
    'frontend_head' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55706750cd5d43_81572610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706750cd5d43_81572610')) {function content_55706750cd5d43_81572610($_smarty_tpl) {?><!-- shop app css -->
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
comfortbuy.shop.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css">

<?php if ($_smarty_tpl->tpl_vars['action']->value=='default'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerPrd'])&&empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerImg'])){?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.cslider.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css" /><?php }?>

<!-- js -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
lazyloading.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>

<?php if ($_smarty_tpl->tpl_vars['action']->value=='default'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerPrd'])&&empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerImg'])){?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.cslider.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script><?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
comfortbuy.shop.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script type="text/javascript">$(window).load(function(){ $('.da-slider img, .product-list img, ul[class^="products-slider-"] img, .product-image img, .product-info img, .cart img').retina()});</script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['action']->value=='category'&&!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
    <?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofitItem'])){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <?php }?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['action']->value=='product'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviewsFBappId'])){?>
    <meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['reviewsFBappId'];?>
"/>
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviewsFBadmins'])){?><meta property="fb:admins" content="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['reviewsFBadmins'];?>
"/><?php }?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['nofollow']->value)){?>
    <!-- "nofollow" for pages not to be indexed, e.g. customer account -->
    <meta name="robots" content="noindex,nofollow" />
<?php }?>

<!-- plugin hook: 'frontend_head' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }} ?>