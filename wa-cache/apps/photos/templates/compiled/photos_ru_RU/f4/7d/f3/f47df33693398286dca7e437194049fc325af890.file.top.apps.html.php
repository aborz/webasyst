<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:21
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\top.apps.html" */ ?>
<?php /*%%SmartyHeaderCode:13322557067c9098834-22293250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f47df33693398286dca7e437194049fc325af890' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\top.apps.html',
      1 => 1403268718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13322557067c9098834-22293250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'mobile' => 0,
    'a' => 0,
    'user_app_url' => 0,
    'wa_app_url' => 0,
    'user_app_url_icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067c92175d2_83510874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067c92175d2_83510874')) {function content_557067c92175d2_83510874($_smarty_tpl) {?><?php $_smarty_tpl->createLocalArrayVariable('user_app_url', null, 0);
$_smarty_tpl->tpl_vars['user_app_url']->value['site'] = $_smarty_tpl->tpl_vars['wa']->value->getUrl('site/frontend');?>
<?php $_smarty_tpl->createLocalArrayVariable('user_app_url', null, 0);
$_smarty_tpl->tpl_vars['user_app_url']->value['shop'] = $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend');?>
<?php $_smarty_tpl->createLocalArrayVariable('user_app_url', null, 0);
$_smarty_tpl->tpl_vars['user_app_url']->value['blog'] = $_smarty_tpl->tpl_vars['wa']->value->getUrl('blog/frontend');?>
<?php $_smarty_tpl->createLocalArrayVariable('user_app_url', null, 0);
$_smarty_tpl->tpl_vars['user_app_url']->value['photos'] = $_smarty_tpl->tpl_vars['wa']->value->getUrl('photos/frontend');?>
<ul class="wa-apps<?php if (isset($_smarty_tpl->tpl_vars['mobile']->value)&&$_smarty_tpl->tpl_vars['mobile']->value){?> hide-for-desktop<?php }else{ ?> hide-for-mobile<?php }?>">
<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->apps(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['user_app_url']->value['shop']){?><?php $_smarty_tpl->tpl_vars['user_app_url_icon'] = new Smarty_variable('icon-tag', null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['user_app_url']->value['blog']){?><?php $_smarty_tpl->tpl_vars['user_app_url_icon'] = new Smarty_variable('icon-edit', null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['user_app_url']->value['photos']){?><?php $_smarty_tpl->tpl_vars['user_app_url_icon'] = new Smarty_variable('icon-camera', null, 0);?>
    <?php }elseif(strpos($_smarty_tpl->tpl_vars['user_app_url']->value['site'],$_smarty_tpl->tpl_vars['a']->value['url'])!==false){?><?php $_smarty_tpl->tpl_vars['user_app_url_icon'] = new Smarty_variable('icon-home', null, 0);?>
    <?php }else{ ?><?php $_smarty_tpl->tpl_vars['user_app_url_icon'] = new Smarty_variable('icon-globe', null, 0);?><?php }?>
	<li<?php if ($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_app_url']->value){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['url'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['mobile']->value)&&$_smarty_tpl->tpl_vars['mobile']->value){?> class="type5"<?php }?>><i class="<?php echo $_smarty_tpl->tpl_vars['user_app_url_icon']->value;?>
"></i><span><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</span></a></li>
<?php } ?>
</ul><?php }} ?>