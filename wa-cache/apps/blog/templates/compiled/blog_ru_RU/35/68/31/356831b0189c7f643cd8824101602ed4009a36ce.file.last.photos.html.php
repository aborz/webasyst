<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:11
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\last.photos.html" */ ?>
<?php /*%%SmartyHeaderCode:15672557067bf22f024-75615477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356831b0189c7f643cd8824101602ed4009a36ce' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\last.photos.html',
      1 => 1403268718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15672557067bf22f024-75615477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'lphotos' => 0,
    'sidebar' => 0,
    'photo' => 0,
    '_wh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067bf2d6ff9_63472505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067bf2d6ff9_63472505')) {function content_557067bf2d6ff9_63472505($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->photos){?>
    <?php $_smarty_tpl->tpl_vars['lphotos'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->photos('',null,8), null, 0);?>
    <?php if (count($_smarty_tpl->tpl_vars['lphotos']->value)>0){?>
    <!--last photos-->
    <div class="last-photos">
        <div class="caption home"><span>Последние</span>фотографии</div>
        <ul class="<?php if (isset($_smarty_tpl->tpl_vars['sidebar']->value)&&$_smarty_tpl->tpl_vars['sidebar']->value){?>s<?php }?>lphotos">
        <?php if (isset($_smarty_tpl->tpl_vars['sidebar']->value)&&$_smarty_tpl->tpl_vars['sidebar']->value){?><?php $_smarty_tpl->tpl_vars['_wh'] = new Smarty_variable('230x170', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_wh'] = new Smarty_variable('320x170', null, 0);?><?php }?>
        <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lphotos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
          <li<?php if ($_smarty_tpl->tpl_vars['photo']->value['stack_count']>0){?> class="stacked"<?php }?>>
            <div class="image">
            <?php if (empty($_smarty_tpl->tpl_vars['photo']->value['frontend_link'])){?>
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->photos->getImgHtml($_smarty_tpl->tpl_vars['photo']->value,$_smarty_tpl->tpl_vars['_wh']->value);?>

            <?php }else{ ?>
                <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['photo']->value['frontend_link'])===null||$tmp==='' ? '#' : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->photos->getImgHtml($_smarty_tpl->tpl_vars['photo']->value,$_smarty_tpl->tpl_vars['_wh']->value);?>
</a>
            <?php }?>
            </div>
            
          </li>
        <?php } ?>
        </ul>
    </div>
    <?php }?>
<?php }?><?php }} ?>