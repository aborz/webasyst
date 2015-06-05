<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:46:51
         compiled from "C:\msktestw2008\trunk\webasyst\wa-apps\contacts\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:23590557064db08d1b6-23207697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87f4be70566b4df497d32533ad4d706efb58121' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-apps\\contacts\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1409656720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23590557064db08d1b6-23207697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557064db154582_54445354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557064db154582_54445354')) {function content_557064db154582_54445354($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>