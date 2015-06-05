<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:36
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\photos\themes\comfortbuy\view-plain.html" */ ?>
<?php /*%%SmartyHeaderCode:8727557067d829d8a1-44913002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221f1d78eaadcded46261ef8e0beb1d697aef452' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\photos\\themes\\comfortbuy\\view-plain.html',
      1 => 1432643586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8727557067d829d8a1-44913002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_collection' => 0,
    'item' => 0,
    'photos' => 0,
    'photo' => 0,
    'output' => 0,
    'wa' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067d838fc02_50270640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067d838fc02_50270640')) {function content_557067d838fc02_50270640($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_pagination')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_pagination.php';
?><div class="view-plain" id="photo-list">
    
    <?php if (!empty($_smarty_tpl->tpl_vars['frontend_collection']->value)){?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_collection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['plain_list'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['plain_list'];?>
<?php }?><?php } ?><?php }?>
    <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
        <div itemscope itemtype ="http://schema.org/Photograph">
            <div class="view-plain-photo-header">
                <?php if (!empty($_smarty_tpl->tpl_vars['photo']->value['stack_nav'])){?>
                    <?php echo $_smarty_tpl->tpl_vars['photo']->value['stack_nav'];?>

                <?php }?>
                
            </div>
            <div class="image">
                <div class="corner top left">
                    
                    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photo']->value['hooks']['top_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
                </div>
                <div class="corner top right">
                    
                    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photo']->value['hooks']['top_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['photo']->value['frontend_link'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->photos->getImgHtml($_smarty_tpl->tpl_vars['photo']->value,'970',array('itemprop'=>'image'));?>

                </a>
                
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photo']->value['hooks']['plain']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['photo']->value['description']){?>
                <p itemprop="description"><?php echo $_smarty_tpl->tpl_vars['photo']->value['description'];?>
</p>
            <?php }?>
        </div>
    <?php } ?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div class="block lazyloading-paging">
    <?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"prd-list-pagination"),'nb'=>"5",'prev'=>"<i class='icon-caret-left'></i>",'next'=>"<i class='icon-caret-right'></i>"),$_smarty_tpl);?>

</div>
<?php }?><?php }} ?>