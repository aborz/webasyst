<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 16:32:48
         compiled from "C:\msktestw2008\trunk\webasyst\wa-system\webasyst\templates\layouts\Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:1796455705380b05ed6-65736208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d150f4dcfb211269871132ef65d0df8b5e6e051' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-system\\webasyst\\templates\\layouts\\Backend.html',
      1 => 1418307880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796455705380b05ed6-65736208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55705380b21469_12314612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55705380b21469_12314612')) {function content_55705380b21469_12314612($_smarty_tpl) {?><!DOCTYPE html><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Добро пожаловать &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

<div id="wa-app" class="block double-padded">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
</body>
</html><?php }} ?>