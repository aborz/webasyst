<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:10
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\vertical.tree.html" */ ?>
<?php /*%%SmartyHeaderCode:21772557067bef2f147-68853516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0efa4de3ab8b136636c6a650b0e565e20487064c' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\vertical.tree.html',
      1 => 1432130054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21772557067bef2f147-68853516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'show_this_app' => 0,
    'show_this_app_mobile' => 0,
    'wa_app' => 0,
    'wa' => 0,
    'category' => 0,
    'product' => 0,
    'selected_category' => 0,
    'page' => 0,
    'tree' => 0,
    'class_tree' => 0,
    'root_page_id' => 0,
    'apps_pages' => 0,
    'wa_url' => 0,
    'pageMT' => 0,
    'active_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067bf131147_83423369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067bf131147_83423369')) {function content_557067bf131147_83423369($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_print_tree.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['verticalTree'])){?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['verticalTree'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('m0', null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable('', null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['verticalTreeSite'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_site'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['verticalTreeShop'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_shop'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['verticalTreeBlog'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_blog'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['verticalTreePhotos'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_photos'), null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['show_this_app_mobile'] = new Smarty_variable('', null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreeSite'])){?><?php $_smarty_tpl->tpl_vars['show_this_app_mobile'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app_mobile']->value).('_site'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreeShop'])){?><?php $_smarty_tpl->tpl_vars['show_this_app_mobile'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app_mobile']->value).('_shop'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreeBlog'])){?><?php $_smarty_tpl->tpl_vars['show_this_app_mobile'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app_mobile']->value).('_blog'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreePhotos'])){?><?php $_smarty_tpl->tpl_vars['show_this_app_mobile'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app_mobile']->value).('_photos'), null, 0);?><?php }?>

<?php if (strpos($_smarty_tpl->tpl_vars['show_this_app']->value,$_smarty_tpl->tpl_vars['wa_app']->value)!==false||strpos($_smarty_tpl->tpl_vars['show_this_app_mobile']->value,$_smarty_tpl->tpl_vars['wa_app']->value)!==false){?>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
        <?php $_smarty_tpl->tpl_vars['tree'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,null,true), null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['category']->value)){?><?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['id'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable(null, null, 0);?><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value['categories']){?>
            <?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['categories'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable(current($_smarty_tpl->tpl_vars['selected_category']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable($_smarty_tpl->tpl_vars['selected_category']->value['id'], null, 0);?>
        <?php }?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['tree'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='site'&&isset($_smarty_tpl->tpl_vars['page']->value['id'])){?><?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value['id'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['selected_category'] = new Smarty_variable(null, null, 0);?><?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['tree']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['class_tree']->value=='m0'||$_smarty_tpl->tpl_vars['wa']->value->isMobile()){?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('vertical-tree-zero dhtml', null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['class_tree']->value=='m1'){?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('hide-for-mobile vertical-tree-one', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('hide-for-mobile vertical-tree-two', null, 0);?><?php }?>
    <div class="shop-category<?php if (strpos($_smarty_tpl->tpl_vars['show_this_app']->value,$_smarty_tpl->tpl_vars['wa_app']->value)===false&&strpos($_smarty_tpl->tpl_vars['show_this_app_mobile']->value,$_smarty_tpl->tpl_vars['wa_app']->value)!==false){?> hide-for-desktop<?php }?>">
        <div class="caption acapitalize"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>Каталог<?php }else{ ?>Страницы сайта<?php }?></div>
        <?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['tree']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_category']->value,'unfolded'=>true,'class'=>"comfortbuy-vertical-tree ".((string)$_smarty_tpl->tpl_vars['class_tree']->value),'elem'=>'<a href=":url"><i class="icon-circle"></i><i class="cb-minus">&#8211;</i>:name</a>'),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['class_tree']->value!='vertical-tree-zero dhtml'){?><?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['tree']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_category']->value,'unfolded'=>true,'class'=>"comfortbuy-vertical-tree hide-for-desktop vertical-tree-zero dhtml",'elem'=>'<a href=":url"><i class="icon-circle"></i><i class="cb-minus">&#8211;</i>:name</a>'),$_smarty_tpl);?>
<?php }?>
        <script type="text/javascript"> $('ul.vertical-tree-zero.dhtml').hide(); </script>
    </div>
    <?php }?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['theme_settings']->value['appsPages']=='shop'){?>
    <?php $_smarty_tpl->tpl_vars['apps_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='shop'&&isset($_smarty_tpl->tpl_vars['root_page_id']->value)){?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['root_page_id']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?><?php }?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['apps_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='site'&&isset($_smarty_tpl->tpl_vars['root_page_id']->value)){?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['root_page_id']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?><?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['apps_pages']->value){?>
    <div class="information block hide-for-desktop">
        <span class="caption acapitalize">Разделы сайта</span>
        <ul>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeLink'])){?>
            <li<?php if ($_smarty_tpl->tpl_vars['wa_url']->value==$_smarty_tpl->tpl_vars['wa']->value->currentUrl()){?> class="selected"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
" title="Главная"><i class="icon-circle"></i>Главная</a>
            </li>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['pageMT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageMT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageMT']->key => $_smarty_tpl->tpl_vars['pageMT']->value){
$_smarty_tpl->tpl_vars['pageMT']->_loop = true;
?>
            <?php if (!isset($_smarty_tpl->tpl_vars['pageMT']->value['menu_top'])){?>
            <li<?php if ($_smarty_tpl->tpl_vars['pageMT']->value['id']==$_smarty_tpl->tpl_vars['active_page']->value){?> class="selected"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['pageMT']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pageMT']->value['title'];?>
"><i class="icon-circle"></i><?php echo $_smarty_tpl->tpl_vars['pageMT']->value['name'];?>
</a>
            </li>
            <?php }?>
        <?php } ?>
        </ul>
    </div>
<?php }?><?php }} ?>