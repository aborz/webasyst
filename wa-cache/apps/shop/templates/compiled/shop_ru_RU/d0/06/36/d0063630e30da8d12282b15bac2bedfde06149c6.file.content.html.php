<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:21
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\content.html" */ ?>
<?php /*%%SmartyHeaderCode:2138555706751d7a4c5-47866246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0063630e30da8d12282b15bac2bedfde06149c6' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\content.html',
      1 => 1432637770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138555706751d7a4c5-47866246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_header' => 0,
    '_' => 0,
    'action' => 0,
    'content' => 0,
    'frontend_footer' => 0,
    'wa_url' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55706751e783b1_44261339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706751e783b1_44261339')) {function content_55706751e783b1_44261339($_smarty_tpl) {?><!-- plugin hook: 'frontend_header' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>            

<!-- current page core content -->
<?php if ($_smarty_tpl->tpl_vars['action']->value=='cart'){?><div><?php }?><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value=='cart'){?></div><?php }?>

<div class="clear-both"></div>

<!-- plugin hook: 'frontend_footer' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['action']->value=='page'){?>
<div class="breadcrumbs" style="display: none;">
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
     » <span class="gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
</div>
<?php }?><?php }} ?>