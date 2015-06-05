<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:11
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\community.fb.html" */ ?>
<?php /*%%SmartyHeaderCode:29112557067bf1cd589-60706071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63144d11d854230b5cac45dc29d8b477dc765539' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\community.fb.html',
      1 => 1403268718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29112557067bf1cd589-60706071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'place' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067bf204090_47507271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067bf204090_47507271')) {function content_557067bf204090_47507271($_smarty_tpl) {?><!-- FB Widget -->
<div class="fb-like-box <?php echo $_smarty_tpl->tpl_vars['place']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBshowBorder'])){?> border<?php }?>"
    data-href="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['communityFBhref'];?>
"
    data-width="234"
    data-height="<?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBheight'])){?>400<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['communityFBheight'];?>
<?php }?>"
    data-colorscheme="<?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBcolorscheme'])){?>light<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['communityFBcolorscheme'];?>
<?php }?>"
    data-show-faces="<?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBshowFaces'])){?>false<?php }else{ ?>true<?php }?>"
    data-header="<?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBheader'])){?>false<?php }else{ ?>true<?php }?>"
    data-stream="<?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBstream'])){?>false<?php }else{ ?>true<?php }?>"
    data-show-border="<?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBshowBorder'])){?>false<?php }else{ ?>true<?php }?>"
></div><?php }} ?>