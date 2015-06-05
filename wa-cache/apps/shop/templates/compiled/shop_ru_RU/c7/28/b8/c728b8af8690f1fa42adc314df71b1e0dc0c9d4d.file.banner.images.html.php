<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:19
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\banner.images.html" */ ?>
<?php /*%%SmartyHeaderCode:187745570674fa8f594-30047835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c728b8af8690f1fa42adc314df71b1e0dc0c9d4d' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\banner.images.html',
      1 => 1403271146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187745570674fa8f594-30047835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bannerId' => 0,
    'b_photos' => 0,
    'photo' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5570674fb1fe53_64470549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570674fb1fe53_64470549')) {function content_5570674fb1fe53_64470549($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['bannerId']->value&&$_smarty_tpl->tpl_vars['b_photos']->value&&count($_smarty_tpl->tpl_vars['b_photos']->value)){?>
<div class="nivoSlider-wrapper">
    <div id="nivoSlider-<?php echo $_smarty_tpl->tpl_vars['bannerId']->value;?>
" class="nivoSlider">
        <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['b_photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
        <a href="<?php if ($_smarty_tpl->tpl_vars['photo']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['photo']->value['description'];?>
<?php }else{ ?>javascript:void(0);<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->photos->getImgHtml($_smarty_tpl->tpl_vars['photo']->value,"970x0");?>

            
        </a>
        <?php } ?>
    </div>
    
    
    <script type="text/javascript">
    $(window).load(function(){
        $('#nivoSlider-<?php echo $_smarty_tpl->tpl_vars['bannerId']->value;?>
').nivoSlider({
            effect: 'slideInRight,slideInLeft',
            randomStart: false,
            pauseTime: 4000,
            prevText: '<i class="icon-caret-left"></i>',
            nextText: '<i class="icon-caret-right"></i>'
        });
    });
    </script>
</div>
<?php }?><?php }} ?>