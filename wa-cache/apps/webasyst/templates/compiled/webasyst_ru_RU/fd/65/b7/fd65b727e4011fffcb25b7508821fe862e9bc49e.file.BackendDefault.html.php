<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 16:32:48
         compiled from "C:\msktestw2008\trunk\webasyst\wa-system\webasyst\templates\actions\backend\BackendDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:1246655705380a2b288-92398802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd65b727e4011fffcb25b7508821fe862e9bc49e' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-system\\webasyst\\templates\\actions\\backend\\BackendDefault.html',
      1 => 1418307880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1246655705380a2b288-92398802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55705380aa4435_82387239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55705380aa4435_82387239')) {function content_55705380aa4435_82387239($_smarty_tpl) {?><h1><?php echo sprintf("Привет, %s!",htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8', true));?>
</h1>
<div style="border:1px dashed #EAEAEA;padding:10px; margin:10px 0">
	<p>Это ваша Панель управления.</p>

	<p>Сейчас она пустая, но скоро на ней появится полезный контент.<br>
	А пока используйте значки наверху этой страницы для работы с доступными приложениями.</p>

	<p>Спасибо за использование Вебасист!</p>
</div>
<?php }} ?>