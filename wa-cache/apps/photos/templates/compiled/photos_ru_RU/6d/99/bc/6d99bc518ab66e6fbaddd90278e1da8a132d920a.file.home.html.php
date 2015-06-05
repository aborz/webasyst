<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:19
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\photos\themes\comfortbuy\home.html" */ ?>
<?php /*%%SmartyHeaderCode:2260557067c73c0689-43288252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d99bc518ab66e6fbaddd90278e1da8a132d920a' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\photos\\themes\\comfortbuy\\home.html',
      1 => 1406264684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2260557067c73c0689-43288252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photos' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067c7811fc2_38554142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067c7811fc2_38554142')) {function content_557067c7811fc2_38554142($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['photos']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ('view-masonry.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <div class="welcome">
        <h1>Добро пожаловать в вашу новую фотогалерею!</h1>
        <p><?php echo sprintf('Начните с загрузки фотографий в <a href="%s">бекенде фотогалереи</a>.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('photos/'));?>
</p>
    </div>            
<?php }?><?php }} ?>