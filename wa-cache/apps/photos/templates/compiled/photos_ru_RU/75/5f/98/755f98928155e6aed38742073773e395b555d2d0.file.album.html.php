<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:36
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\photos\themes\comfortbuy\album.html" */ ?>
<?php /*%%SmartyHeaderCode:28784557067d8193e30-58149298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '755f98928155e6aed38742073773e395b555d2d0' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\photos\\themes\\comfortbuy\\album.html',
      1 => 1406264684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28784557067d8193e30-58149298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
    'frontend_collection' => 0,
    'item' => 0,
    'childcrumbs' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067d8276793_69817902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067d8276793_69817902')) {function content_557067d8276793_69817902($_smarty_tpl) {?><h1 class="album-name">
    <?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['album']->value['note']){?> <em class="album-note"><?php echo $_smarty_tpl->tpl_vars['album']->value['note'];?>
</em><?php }?>
    
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_collection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?><?php } ?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['childcrumbs']->value){?>
    <div class="sub-albums">
        <table>
            <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['childcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['child']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->index++;
 $_smarty_tpl->tpl_vars['child']->first = $_smarty_tpl->tpl_vars['child']->index === 0;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
?>
            <?php if ($_smarty_tpl->tpl_vars['child']->first||($_smarty_tpl->tpl_vars['child']->index==4)){?><tr><?php }?>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['full_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a></td>
            <?php if ($_smarty_tpl->tpl_vars['child']->last||(($_smarty_tpl->tpl_vars['child']->index+1)==4)){?></tr><?php }?>
            <?php } ?>
        </table>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['album']->value['description']){?>
    <p class="album-description"><?php echo $_smarty_tpl->tpl_vars['album']->value['description'];?>
</p>
<?php }?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_collection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['content'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
<?php }?><?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ('view-plain.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>