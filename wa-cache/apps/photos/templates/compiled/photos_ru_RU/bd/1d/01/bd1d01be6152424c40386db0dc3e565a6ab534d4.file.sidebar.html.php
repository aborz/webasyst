<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:21
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\photos\themes\comfortbuy\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:22418557067c96e9dd8-45665639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd1d01be6152424c40386db0dc3e565a6ab534d4' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\photos\\themes\\comfortbuy\\sidebar.html',
      1 => 1432642830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22418557067c96e9dd8-45665639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_parent_theme_path' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'frontend_sidebar' => 0,
    'item' => 0,
    'albums' => 0,
    'theme_settings' => 0,
    'photos_pages' => 0,
    'root_page_id' => 0,
    'pageML' => 0,
    'cloud' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067c988fc87_69849566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067c988fc87_69849566')) {function content_557067c988fc87_69849566($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_print_tree.php';
?><p class="align-right hide-for-desktop" id="mobile-close"><a class="type5" href="#">Закрыть</a></p>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/top.apps.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('mobile'=>1), 0);?>


<!-- navigation menu -->
<div id="gallery-nav" class="navigation type-photo">
    <div class="caption acapitalize">Look book</div>
    <ul class="menu-h">
        <!-- core filters -->
        <li <?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
"><i class="icon-circle"></i>Look book</a></li>
        

        <!-- plugins -->
        
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['menu'])){?>
            <li><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</li>
            
        <?php }?><?php } ?>
        
        <?php if (!isset($_smarty_tpl->tpl_vars['albums'])) $_smarty_tpl->tpl_vars['albums'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['albums']->value = $_smarty_tpl->tpl_vars['wa']->value->photos->albums(0)){?><!-- albums -->
        <li><?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['albums']->value,'class'=>"album-tree",'elem'=>'<a href=":url">:name</a>'),$_smarty_tpl);?>
</li>
            
        <?php }?>

        <!-- more plugins -->
        
        <?php $_smarty_tpl->_capture_stack[0][] = array("more", null, null); ob_start(); ?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['section'])){?><div class="block"><?php echo $_smarty_tpl->tpl_vars['item']->value['section'];?>
</div><?php }?><?php } ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (Smarty::$_smarty_vars['capture']['more']!=''){?><li class="dropdown"><a href="#"><i class="icon-circle"></i>Еще<span class="grower"><i class="icon-angle-down"></i><i class="icon-angle-right"></i></span></a><div class="popup"></div></li><?php }?></ul><script type="text/javascript">$(function(){ $('#photos-my-photos').prepend('<i class="icon-circle"></i>'); });</script></div><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/vertical.tree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['photosInfo'])){?><?php if (!isset($_smarty_tpl->tpl_vars['photos_pages'])) $_smarty_tpl->tpl_vars['photos_pages'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['photos_pages']->value = $_smarty_tpl->tpl_vars['wa']->value->photos->pages()){?><!-- info pages --><div class="information block"><span class="caption acapitalize">Информация</span><ul><?php  $_smarty_tpl->tpl_vars['pageML'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageML']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageML']->key => $_smarty_tpl->tpl_vars['pageML']->value){
$_smarty_tpl->tpl_vars['pageML']->_loop = true;
?><li<?php if (isset($_smarty_tpl->tpl_vars['root_page_id']->value)&&$_smarty_tpl->tpl_vars['root_page_id']->value==$_smarty_tpl->tpl_vars['pageML']->value['id']){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['pageML']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pageML']->value['title'];?>
"><i class="icon-circle"></i><?php echo $_smarty_tpl->tpl_vars['pageML']->value['name'];?>
</a></li><?php } ?></ul></div><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['photosTags'])){?><?php if (!isset($_smarty_tpl->tpl_vars['cloud'])) $_smarty_tpl->tpl_vars['cloud'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['cloud']->value = $_smarty_tpl->tpl_vars['wa']->value->photos->tags()){?><!-- tags --><div class="tags block<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?> hide-for-desktop<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?> id="tagsCanvasContent"<?php }?>><span class="caption acapitalize">Теги</span><?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
?><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
tag/<?php echo $_smarty_tpl->tpl_vars['tag']->value['uri_name'];?>
/" style="font-size: <?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
%;"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['tag']->last){?>, <?php }?><?php } ?></div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?><div class="tags block hide-for-mobile"><span class="caption acapitalize">Теги</span><canvas width="200" height="200" id="tagsCanvas"></canvas></div><?php }?><?php }?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityVKid'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/community.vk.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>"place-sidebar"), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBhref'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/community.fb.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>"place-sidebar"), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['photosLastPhotos'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.photos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sidebar'=>1), 0);?>
<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['photosLastPosts'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sidebar'=>1), 0);?>
<?php }?><?php }} ?>