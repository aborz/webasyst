<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:44:48
         compiled from "C:\msktestw2008\trunk\webasyst\wa-apps\shop\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:41435570646056e7e9-89076578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8030aec6a74255a52f626d4f54bed5231c754d9f' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-apps\\shop\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1360765464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41435570646056e7e9-89076578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557064607628b2_62279890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557064607628b2_62279890')) {function content_557064607628b2_62279890($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>