<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:10
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\blog\themes\comfortbuy\content.html" */ ?>
<?php /*%%SmartyHeaderCode:8551557067bebcbcd0-86768037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b247b911bc2e5fa1a20cbe36c5dadaf8a099bb74' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\blog\\themes\\comfortbuy\\content.html',
      1 => 1406218058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8551557067bebcbcd0-86768037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_path' => 0,
    'action' => 0,
    'wa_url' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'frontend_action' => 0,
    'output' => 0,
    'posts' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'wa_backend_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067bec5c593_08311056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067bec5c593_08311056')) {function content_557067bec5c593_08311056($_smarty_tpl) {?><div class="sidebar left230px">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="content left230px">
    <?php if ($_smarty_tpl->tpl_vars['action']->value=='page'){?>
    <div class="breadcrumbs">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
">Главная</a>
        <?php if (isset($_smarty_tpl->tpl_vars['breadcrumbs']->value)&&$_smarty_tpl->tpl_vars['breadcrumbs']->value){?>
            <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
                » <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            <?php } ?>
        <?php }?>
         » 
    </div>
    <?php }?>
    
    <!-- blog content -->
    
    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
    	<?php if (!empty($_smarty_tpl->tpl_vars['output']->value['nav_before'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['nav_before'];?>
<?php }?>
    <?php } ?>
	
	<?php if (empty($_smarty_tpl->tpl_vars['posts']->value)&&$_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value){?>
		<div class="welcome">
			<h1>Добро пожаловать в ваш новый блог!</h1>
			<p><?php echo sprintf('Начните с создания записи в <a href="%s">бекенде блога</a>.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('blog/'));?>
</p>
		</div>        
    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php }?>
</div><?php }} ?>