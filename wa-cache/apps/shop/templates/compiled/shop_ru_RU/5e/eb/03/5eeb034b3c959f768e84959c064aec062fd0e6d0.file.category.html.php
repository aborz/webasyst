<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:58:41
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\category.html" */ ?>
<?php /*%%SmartyHeaderCode:14617557067a18909a6-32559516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eeb034b3c959f768e84959c064aec062fd0e6d0' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\category.html',
      1 => 1432911159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14617557067a18909a6-32559516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'category' => 0,
    'frontend_category' => 0,
    '_' => 0,
    'products' => 0,
    'filters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067a1a46263_77602263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067a1a46263_77602263')) {function content_557067a1a46263_77602263($_smarty_tpl) {?><div class="sidebar left230px">
    <?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="content left230px">

    <!-- navigation breadcrumbs -->
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
         » <span class="gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
    </div>

    <h1 class="category-name">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

    </h1>
    
    <!-- plugin hook: 'frontend_category' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

   
    
    <div id="product-list">
        <?php if (!$_smarty_tpl->tpl_vars['products']->value){?>
            <?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
                Не найдено ни одного товара.
            <?php }else{ ?>
                В этой категории нет ни одного товара.
            <?php }?>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->getSubTemplate ('products.list.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sorting'=>!empty($_smarty_tpl->tpl_vars['category']->value['params']['enable_sorting'])), 0);?>

        <?php }?>
    </div>

 <!-- description -->
    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']){?>
        <div class="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
    <?php }?>
    
</div><?php }} ?>