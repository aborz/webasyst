<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 16:34:33
         compiled from "C:\msktestw2008\trunk\webasyst\wa-apps\site\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:4879557053e9c600e0-93022020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94db4ec7748e39b251dc4e89f01f80227ae547d3' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-apps\\site\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1336140648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4879557053e9c600e0-93022020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557053e9d52445_56607153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557053e9d52445_56607153')) {function content_557053e9d52445_56607153($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>