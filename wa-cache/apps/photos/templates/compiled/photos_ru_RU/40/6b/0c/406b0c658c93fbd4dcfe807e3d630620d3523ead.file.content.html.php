<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:21
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\photos\themes\comfortbuy\content.html" */ ?>
<?php /*%%SmartyHeaderCode:16666557067c964d992-12743008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406b0c658c93fbd4dcfe807e3d630620d3523ead' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\photos\\themes\\comfortbuy\\content.html',
      1 => 1406264684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16666557067c964d992-12743008',
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
    'frontend_layout' => 0,
    'item' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067c96c2cc4_18942442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067c96c2cc4_18942442')) {function content_557067c96c2cc4_18942442($_smarty_tpl) {?><div class="sidebar left230px">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="content left230px"<?php if ($_smarty_tpl->tpl_vars['action']->value=='photo'){?> itemscope itemtype="http://schema.org/Photograph"<?php }?>>
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
    
    <!-- plugin hook -->
    
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_layout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['header'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['header'];?>
<?php }?><?php } ?>
    
    <!-- photos app content -->
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    
</div><?php }} ?>