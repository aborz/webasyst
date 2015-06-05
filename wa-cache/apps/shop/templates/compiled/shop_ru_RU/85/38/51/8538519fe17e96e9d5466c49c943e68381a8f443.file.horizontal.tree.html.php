<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:21
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\horizontal.tree.html" */ ?>
<?php /*%%SmartyHeaderCode:622655706751b95e06-29785940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8538519fe17e96e9d5466c49c943e68381a8f443' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\horizontal.tree.html',
      1 => 1403268718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622655706751b95e06-29785940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'show_this_app' => 0,
    'wa' => 0,
    'wa_app' => 0,
    'root_page_id' => 0,
    'apps_pages' => 0,
    'wa_url' => 0,
    'pageMT' => 0,
    'active_page' => 0,
    'query' => 0,
    'action' => 0,
    'category' => 0,
    'product' => 0,
    'selected_category' => 0,
    'page' => 0,
    'tree' => 0,
    'class_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55706751cde084_56612559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706751cde084_56612559')) {function content_55706751cde084_56612559($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_print_tree.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTree'])){?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTree'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('m1', null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable('', null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreeSite'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_site'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreeShop'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_shop'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreeBlog'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_blog'), null, 0);?><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['horizontalTreePhotos'])){?><?php $_smarty_tpl->tpl_vars['show_this_app'] = new Smarty_variable(($_smarty_tpl->tpl_vars['show_this_app']->value).('_photos'), null, 0);?><?php }?>

<div class="infopages-search<?php if (!$_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['theme_settings']->value['appsPages']=='shop'){?> hide-for-desktop<?php }?>">
    <!-- info pages -->
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['theme_settings']->value['appsPages']=='shop'){?>
        <?php $_smarty_tpl->tpl_vars['apps_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages(), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='shop'&&isset($_smarty_tpl->tpl_vars['root_page_id']->value)){?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['root_page_id']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?><?php }?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['apps_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='site'&&isset($_smarty_tpl->tpl_vars['root_page_id']->value)){?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['root_page_id']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?><?php }?>
    <?php }?>
    
    <div class="infopages">
        <ul id="page-list">
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeLink'])&&$_smarty_tpl->tpl_vars['apps_pages']->value){?>
            <li class="hide-for-mobile menu<?php if ($_smarty_tpl->tpl_vars['wa_url']->value==$_smarty_tpl->tpl_vars['wa']->value->currentUrl()){?> selected<?php }?>">
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
" title="Главная">Главная</a></div>
            </li>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['pageMT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageMT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageMT']->key => $_smarty_tpl->tpl_vars['pageMT']->value){
$_smarty_tpl->tpl_vars['pageMT']->_loop = true;
?>
        <?php if (!isset($_smarty_tpl->tpl_vars['pageMT']->value['menu_top'])){?>
            <li class="hide-for-mobile menu<?php if ($_smarty_tpl->tpl_vars['pageMT']->value['id']==$_smarty_tpl->tpl_vars['active_page']->value){?> selected<?php }?>">
                <div><a href="<?php echo $_smarty_tpl->tpl_vars['pageMT']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pageMT']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['pageMT']->value['name'];?>
</a></div>
            </li>
        <?php }?>
        <?php } ?>
        <li id="mobile-open"><a class="type5" href="#"><i class="icon-reorder"></i>Открыть меню</a></li>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
        <li class="search<?php if (!$_smarty_tpl->tpl_vars['apps_pages']->value){?> no-apps-pages<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['search'])){?> search-mobile<?php }?>">
            <!-- product search -->
            <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend');?>
search/" class="align-right">
            <div class="search-input"><input id="search<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['search'])){?>-m<?php }?>" type="search" name="query" value="<?php if (!empty($_smarty_tpl->tpl_vars['query']->value)){?><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
<?php }?>" placeholder="Найти продукты"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofitItem'])){?> class="autofit"<?php }?>><button type="submit" class="search-button icon-search"></button></div>
            </form>
        </li>
        <?php }?>
        </ul>
        <script type="text/javascript">$("#page-list li").not('.search, .catalog').click(function(){ window.location.assign($(this).find('a').attr('href')); });</script>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value=='default'&&$_smarty_tpl->tpl_vars['wa_app']->value=='shop')||strpos($_smarty_tpl->tpl_vars['show_this_app']->value,$_smarty_tpl->tpl_vars['wa_app']->value)!==false){?>
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
        <?php if ($_smarty_tpl->tpl_vars['class_tree']->value=='m0'){?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('horizontal-tree-zero', null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['class_tree']->value=='m1'){?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('horizontal-tree-one', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['class_tree'] = new Smarty_variable('horizontal-tree-two', null, 0);?><?php }?>
    <div id="horizontal-category-wrap">
        <?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['tree']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_category']->value,'unfolded'=>true,'class'=>"comfortbuy-horizontal-tree ".((string)$_smarty_tpl->tpl_vars['class_tree']->value),'elem'=>'<a href=":url"><i class="icon-circle"></i><i class="cb-minus">&#8211;</i>:name</a>'),$_smarty_tpl);?>

        <script type="text/javascript">$('.comfortbuy-horizontal-tree').css('visibility', 'hidden');</script>
    </div>
    <?php }?>
<?php }?><?php }} ?>