<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:20
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\photos\themes\comfortbuy\head.html" */ ?>
<?php /*%%SmartyHeaderCode:25459557067c8386330-68902546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abec2245010dd8008516f69d0f05f7b16a61b23d' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\photos\\themes\\comfortbuy\\head.html',
      1 => 1406264684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25459557067c8386330-68902546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'nofollow' => 0,
    'frontend_assets' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067c8403360_74294276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067c8403360_74294276')) {function content_557067c8403360_74294276($_smarty_tpl) {?>    <!-- photos app css -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
comfortbuy.photos.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css">

    <!-- js -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
lazyloading.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
jquery.imagesloaded.js?v3.0.4"></script>
	<?php if ($_smarty_tpl->tpl_vars['wa']->value->photos->config('enable_2x')){?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
		<script type="text/javascript">$(window).load(function(){ $('#photo-list img,.photo img').retina()});</script>
	<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['nofollow']->value){?>
        <!-- "nofollow" for duplicate photo pages (context dependent) -->
        <meta name="robots" content="nofollow" />
    <?php }?>

    
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value)){?><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }?><?php } ?><?php }} ?>