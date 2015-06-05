<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:58:28
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\error.html" */ ?>
<?php /*%%SmartyHeaderCode:496557067945a2276-05239196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3fe3cac0de3fe3d6329c11a18c0a90a1106a506' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\error.html',
      1 => 1403271146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '496557067945a2276-05239196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55706794715498_90392096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706794715498_90392096')) {function content_55706794715498_90392096($_smarty_tpl) {?><h1>Запрошенный ресурс недоступен.</h1>
<div class="error404 red"><?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_message']->value)===null||$tmp==='' ? "Ошибка" : $tmp);?>
</div>
<p class="gray">К сожалению, запрашиваемая Вами страница не найдена.<br>Вы сможете найти интересующую Вас страницу, пройдя по ссылкам слева или перейдя на главную страницу.</p>
<a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
" class="button">Перейти на главную</a>
<?php }} ?>