<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:45:04
         compiled from "C:\msktestw2008\trunk\webasyst\wa-apps\shop\templates\actions\products\Products.html" */ ?>
<?php /*%%SmartyHeaderCode:367255706470e90811-72309404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4026ca1ba9f5f28063d31d9e36477b6a586e6bb9' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-apps\\shop\\templates\\actions\\products\\Products.html',
      1 => 1417013748,
      2 => 'file',
    ),
    'a40c2b527336e95ec95db1ba6bcaf368a86c83fa' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-apps\\shop\\templates\\actions\\dialog\\DialogProductListEmbed.html',
      1 => 1387987824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367255706470e90811-72309404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'collection_hash' => 0,
    'info' => 0,
    'backend_products' => 0,
    '_' => 0,
    'title' => 0,
    'sort' => 0,
    'with_icon' => 0,
    'order' => 0,
    'manual' => 0,
    'view' => 0,
    'collection_param' => 0,
    'frontend_url' => 0,
    'id' => 0,
    'include_name' => 0,
    'count' => 0,
    'total_count' => 0,
    'del_products_text' => 0,
    'wa' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557064715a7675_30708135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557064715a7675_30708135')) {function content_557064715a7675_30708135($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['collection_hash']->value!==null){?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['collection_hash']->value[1]), null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(null, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['info']->value&&(($_smarty_tpl->tpl_vars['info']->value['hash']=='set'&&$_smarty_tpl->tpl_vars['info']->value['type']==shopSetModel::TYPE_STATIC)||($_smarty_tpl->tpl_vars['info']->value['hash']=='category'&&$_smarty_tpl->tpl_vars['info']->value['type']==shopCategoryModel::TYPE_STATIC))){?>
    <?php $_smarty_tpl->tpl_vars['manual'] = new Smarty_variable(true, null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['manual'] = new Smarty_variable(false, null, 0);?>
<?php }?>


<div class="sidebar right200px" id="s-product-list-toolbar">
    <div class="block">
        <h6 class="heading">
            <span class="count indicator" style="display:none"></span>
            Экспорт
        </h6>
        <ul class="menu-v with-icons compact p-no-photo-selected123 thumbs-view-menu">
            <li data-action="export" data-plugin="csv:product:export"><a href="#"><i class="icon16 ss excel"></i>CSV</a></li>

            <!-- plugin hook: 'backend_products.toolbar_export_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['toolbar_export_li']);?>
<?php } ?><?php }?>

        </ul>
    </div>

    <div class="block">
        <h6 class="heading">
            <span class="count indicator" style="display:none"></span>
            Организовать
        </h6>
        <ul class="menu-v with-icons compact p-no-photo-selected123 thumbs-view-menu" id="organize-menu">

            <!-- plugin hook: 'backend_products.toolbar_organize_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['toolbar_organize_li']);?>
<?php } ?><?php }?>

            
            
            <li data-action="category">
                <a href="#"><i class="icon16 folder"></i>Добавить в категорию</a>
            </li><li data-action="set">
                <a href="#"><i class="icon16 ss set"></i>Добавить в список</a>
            </li>
            <li data-action="assign-tags">
                <a href="#"><i class="icon16 tags"></i>Теги</a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['info']->value&&$_smarty_tpl->tpl_vars['info']->value['hash']=='set'&&$_smarty_tpl->tpl_vars['info']->value['type']==shopSetModel::TYPE_STATIC&&$_smarty_tpl->tpl_vars['info']->value['count']>0){?>
                <li data-action="delete-from-set"><a href="#"><i class="icon10 no-bw"></i>Исключить из списка</a></li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['info']->value&&$_smarty_tpl->tpl_vars['info']->value['hash']=='category'&&$_smarty_tpl->tpl_vars['info']->value['type']==shopCategoryModel::TYPE_STATIC&&$_smarty_tpl->tpl_vars['info']->value['count']>0){?>
                <li data-action="delete-from-category"><a href="#"><i class="icon10 no-bw"></i>Исключить из категории</a></li>
            <?php }?>

            <li data-action="type" class="top-padded">
                <a href="#"><i class="icon16 box"></i>Изменить тип товара</a>
            </li>
            <li data-action="delete"><a href="#"><i class="icon16 delete"></i>Удалить товары</a></li>

        </ul>
    </div>
            
    <div class="block" id="hint-menu-block" style="display:none;">
        <p class="p-sort-order-error-disclaimer create_datetime" style="display:none;">Товары в этом списке отсортированы <strong>по дате добавления</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
        <p class="p-sort-order-error-disclaimer name" style="display:none;">Товары в этом списке отсортированы <strong>по наименованию</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
        <p class="p-sort-order-error-disclaimer price" style="display:none;">Товары в этом списке отсортированы <strong>по цене</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
        <p class="p-sort-order-error-disclaimer count" style="display:none;">Товары в этом списке отсортированы <strong>по наличию на складе</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
        <p class="p-sort-order-error-disclaimer rating" style="display:none;">Товары в этом списке отсортированы <strong>по рейтингу</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
        <p class="p-sort-order-error-disclaimer total_sales" style="display:none;">Товары в этом списке отсортированы <strong>по общим продажам</strong>. Вручную задать порядок сортировки в этом списке нельзя.</p>
    </div>

    <!-- plugin hook: 'backend_products.toolbar_section' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['toolbar_section']);?>
<?php } ?><?php }?>

</div>
<div class="content right200px">
    <div class="block double-padded">
        <h1>
            <span <?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'||$_smarty_tpl->tpl_vars['info']->value['hash']=='set'){?>class="editable"<?php }?> id="s-product-list-title"><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Без названия<?php }?></span>

            <!-- plugin hook: 'backend_products.title_suffix' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['title_suffix']);?>
<?php } ?><?php }?>

            <?php if ($_smarty_tpl->tpl_vars['collection_hash']->value&&($_smarty_tpl->tpl_vars['info']->value['hash']=='category'||$_smarty_tpl->tpl_vars['info']->value['hash']=='set')){?>
                <span class="s-product-list-manage">
                    <a href="#" id="s-product-list-settings" class="gray s-product-list-settings">
                        <i class="icon16 settings"></i><?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'){?>Настройки категории<?php }else{ ?>Настройки списка<?php }?>
                    </a>
                    <a href="#" id="s-product-list-delete" class="gray">
                        <i class="icon16 no-bw"></i><?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'){?>Удалить категорию<?php }else{ ?>Удалить список<?php }?>
                    </a>
                </span>
            <?php }?>

        </h1>
        <ul class="menu-h small s-product-nav">
            <!-- sort order -->
            <li class="s-inline-mixed-string float-right" id="s-sort-control">
                <ul class="menu-v dropdown">
                    <li>Сортировка:
                        <?php $_smarty_tpl->tpl_vars['with_icon'] = new Smarty_variable(true, null, 0);?><a href="javascript:void(0);" class="inline-link"><b><i><?php if ($_smarty_tpl->tpl_vars['sort']->value=='name'){?>название<?php }elseif($_smarty_tpl->tpl_vars['sort']->value=='price'){?>цена<?php }elseif($_smarty_tpl->tpl_vars['sort']->value=='count'){?>на складе<?php }elseif($_smarty_tpl->tpl_vars['sort']->value=='rating'){?>рейтинг<?php }elseif($_smarty_tpl->tpl_vars['sort']->value=='create_datetime'){?>добавлен<?php }elseif($_smarty_tpl->tpl_vars['sort']->value=='total_sales'){?>продажи<?php }elseif($_smarty_tpl->tpl_vars['sort']->value=='sort'){?>вручную<?php $_smarty_tpl->tpl_vars['with_icon'] = new Smarty_variable(false, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['with_icon'] = new Smarty_variable(false, null, 0);?><?php }?></i></b></a><?php if ($_smarty_tpl->tpl_vars['with_icon']->value){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr-tiny<?php }else{ ?>darr-tiny<?php }?>"></i><?php }?>
                        <ul class="menu-v with-icon">
                            <?php if ($_smarty_tpl->tpl_vars['manual']->value){?><li class="sort"><a href="#/products/view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
&sort=sort<?php }?>" class="no-underline <?php if ($_smarty_tpl->tpl_vars['sort']->value=='sort'){?>selected<?php }?>">вручную</a></li><?php }?><li class="sort"><a href="#/products/view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=name&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'&&$_smarty_tpl->tpl_vars['sort']->value=='name'){?>desc<?php }else{ ?>asc<?php }?>" class="no-underline <?php if ($_smarty_tpl->tpl_vars['sort']->value=='name'){?>selected<?php }?>">название</a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='name'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr-tiny<?php }else{ ?>darr-tiny<?php }?>"></i><?php }?></li><li class="sort"><a href="#/products/view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=price&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'&&$_smarty_tpl->tpl_vars['sort']->value=='price'){?>desc<?php }else{ ?>asc<?php }?>" class="no-underline <?php if ($_smarty_tpl->tpl_vars['sort']->value=='price'){?>selected<?php }?>">цена</a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='price'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr-tiny<?php }else{ ?>darr-tiny<?php }?>"></i><?php }?></li><li class="sort"><a href="#/products/view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=count&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'&&$_smarty_tpl->tpl_vars['sort']->value=='count'){?>desc<?php }else{ ?>asc<?php }?>" class="no-underline <?php if ($_smarty_tpl->tpl_vars['sort']->value=='count'){?>selected<?php }?>">на складе</a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='count'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr-tiny<?php }else{ ?>darr-tiny<?php }?>"></i><?php }?></li><li class="sort"><a href="#/products/view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=rating&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='desc'&&$_smarty_tpl->tpl_vars['sort']->value=='rating'){?>asc<?php }else{ ?>desc<?php }?>" class="no-underline <?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating'){?>selected<?php }?>">рейтинг</a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr-tiny<?php }else{ ?>darr-tiny<?php }?>"></i><?php }?></li><li class="sort"><a href="#/products/view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=create_datetime&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='desc'&&$_smarty_tpl->tpl_vars['sort']->value=='create_datetime'){?>asc<?php }else{ ?>desc<?php }?>" class="no-underline <?php if ($_smarty_tpl->tpl_vars['sort']->value=='create_datetime'){?>selected<?php }?>">добавлен</a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='create_datetime'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr-tiny<?php }else{ ?>darr-tiny<?php }?>"></i><?php }?></li><li class="sort"><a href="#/products/view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=total_sales&order=<?php if ($_smarty_tpl->tpl_vars['order']->value=='desc'&&$_smarty_tpl->tpl_vars['sort']->value=='total_sales'){?>asc<?php }else{ ?>desc<?php }?>" class="no-underline <?php if ($_smarty_tpl->tpl_vars['sort']->value=='total_sales'){?>selected<?php }?>">продажи</a><?php if ($_smarty_tpl->tpl_vars['sort']->value=='total_sales'){?><i class="icon10 <?php if ($_smarty_tpl->tpl_vars['order']->value=='asc'){?>uarr-tiny<?php }else{ ?>darr-tiny<?php }?>"></i><?php }?></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- view mode -->
            <li<?php if ($_smarty_tpl->tpl_vars['view']->value!='table'){?> class="selected"<?php }?>>
                <a href="#/products/view=thumbs<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
"><i class="icon16 view-thumbs"></i></a>
            </li>
            <li<?php if ($_smarty_tpl->tpl_vars['view']->value=='table'){?> class="selected"<?php }?>>
                <a href="#/products/view=table<?php if ($_smarty_tpl->tpl_vars['collection_param']->value){?>&<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
<?php }?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
"><i class="icon16 view-table"></i></a>
            </li>

            <!-- plugin hook: 'backend_products.viewmode_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_products']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['viewmode_li']);?>
<?php } ?><?php }?>

            <!-- frontend link -->
            <li class="s-inline-mixed-string">
            <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['frontend_urls'])){?>
                Ссылка на витрину:
                <?php  $_smarty_tpl->tpl_vars['frontend_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frontend_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['frontend_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['frontend_url']->key => $_smarty_tpl->tpl_vars['frontend_url']->value){
$_smarty_tpl->tpl_vars['frontend_url']->_loop = true;
?>
                    <a id="s-category-frontend-link" href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['frontend_url']->value;?>
</a> <i class="icon10 new-window"></i>
                <?php } ?>
            <?php }elseif($_smarty_tpl->tpl_vars['info']->value['hash']=='set'){?>
                <span class="s-embed">
                    <strong class="black">&#123;$products = $wa->shop->productSet("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
")&#125;</strong>
                    <a href="#" id="s-embed-code">Код для встраивания</a>
                </span>
            <?php }?>
            </li>

        </ul>

        <?php $_smarty_tpl->tpl_vars['include_name'] = new Smarty_variable(('./product_list_').($_smarty_tpl->tpl_vars['view']->value).('.html'), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['include_name']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div class="lazyloading-wrapper">
            <div class="lazyloading-progress-string"><?php echo _w('%d product','%d products',$_smarty_tpl->tpl_vars['count']->value);?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>
</div><br>
             <a href="javascript:void(0);" class="lazyloading-link" <?php if ($_smarty_tpl->tpl_vars['count']->value>=$_smarty_tpl->tpl_vars['total_count']->value){?>style="display:none;"<?php }?>>Показать больше товаров</a>
            <span class="lazyloading-progress" style="display:none">
                <i class="icon16 loading"></i> Загрузка <span class="lazyloading-chunk"><?php echo _w('%d product','%d products',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['count']->value));?>
...</span>
            </span>
        </div>
    </div>


    
    <div class="dialog width400px height200px" id="s-product-list-delete-dialog">
        <div class="dialog-background"></div>
        <form method="post" action="">
        <div class="dialog-window">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1><?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'){?>Удалить категорию<?php }else{ ?>Удалить список<?php }?></h1>
                    <ul class="menu-v">
                        <li>
                            <label>
                            <input type="radio" name="s-delete-products" value="0" checked>
                            <strong>Не удалять товары</strong>
                            <?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'){?>
                                <span class="hint">Товары, находящиеся в этой категории, не будут удалены</span>
                            <?php }else{ ?>
                                <span class="hint">Товары, находящиеся в этом списке, не будут удалены</span>
                            <?php }?>
                            </label>
                        </li>
                        <li>
                            <label>
                            <input type="radio" name="s-delete-products" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'&&$_smarty_tpl->tpl_vars['info']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>disabled<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'){?>
                                <?php $_smarty_tpl->tpl_vars["del_products_text"] = new Smarty_variable(sprintf('Удалить все товары, находящиеся в этой категории (%d)',$_smarty_tpl->tpl_vars['total_count']->value), null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars["del_products_text"] = new Smarty_variable(sprintf('Удалить все товары, находящиеся в этом списке (%d)',$_smarty_tpl->tpl_vars['total_count']->value), null, 0);?>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['del_products_text']->value;?>
<?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='category'&&$_smarty_tpl->tpl_vars['info']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?><em class="hint"> Недоступно для динамических категорий.</em><?php }?>
                            </label>
                        </li>
                    </ul>
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='set'){?>
                        <p class="small black">
                            <br />
                            <i class="icon10 exclamation"></i> Настоятельно рекомендуется не удалять списки товаров со значениями ID <strong>promo</strong> и <strong>bestsellers</strong>, т. к. эти ID используются в большинстве тем дизайна.</p>
                    <?php }?>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                    <input class="button red" type="submit" value="Удалить">
                    <i class="icon16 loading"></i>
                    или <a class="cancel" href="javascript:void(0);">отмена</a>
                </div>
            </div>
        </div>
        </form>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['info']->value['hash']=='set'){?>
        <?php /*  Call merged included template "../dialog/DialogProductListEmbed.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('../dialog/DialogProductListEmbed.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '367255706470e90811-72309404');
content_55706471463285_25254962($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../dialog/DialogProductListEmbed.html" */?>
    <?php }?>
                    
</div>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(($_smarty_tpl->tpl_vars['title']->value).(" — ").($_tmp1), null, 0);?>
<script type="text/javascript">
    document.title = '<?php echo strtr($_smarty_tpl->tpl_vars['title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    $.product_list.init({
        view: '<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
',
        collection_hash: <?php echo json_encode($_smarty_tpl->tpl_vars['collection_hash']->value);?>
,
        collection_param: '<?php echo $_smarty_tpl->tpl_vars['collection_param']->value;?>
',
        sort:  '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
',
        order: '<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
',
        products: <?php echo json_encode($_smarty_tpl->tpl_vars['products']->value);?>
,
        total_count: <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
,
        category_count: <?php if ($_smarty_tpl->tpl_vars['info']->value&&$_smarty_tpl->tpl_vars['info']->value['hash']=='category'&&$_smarty_tpl->tpl_vars['info']->value['type']==shopCategoryModel::TYPE_STATIC&&!$_smarty_tpl->tpl_vars['info']->value['include_sub_categories']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['count'];?>
<?php }else{ ?>null<?php }?>,
        edit: '<?php echo $_smarty_tpl->tpl_vars['wa']->value->get("edit");?>
',
        sortable: <?php if ($_smarty_tpl->tpl_vars['manual']->value&&$_smarty_tpl->tpl_vars['sort']->value=='sort'){?>true<?php }else{ ?>false<?php }?>,
        lazy_loading: {
            auto: true,
            count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>

        }
    });
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:45:05
         compiled from "C:\msktestw2008\trunk\webasyst\wa-apps\shop\templates\actions\dialog\DialogProductListEmbed.html" */ ?>
<?php if ($_valid && !is_callable('content_55706471463285_25254962')) {function content_55706471463285_25254962($_smarty_tpl) {?><div  id="s-product-list-embed-dialog" class="dialog">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="block double-padded" style="padding-bottom: 0;">
                <h1><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h1>
                <br>
                <p>Полный HTML/Smarty-код для встраивания списка товаров в шаблон дизайна или на страницу любого приложения внутри вашего Webasyst.</p>
                <ul class="menu-h choose-snippet">
                    <li style="padding-left: 0;">Добавить в:</li>
                    <li class="selected tab-1">
                        <a href="#" class="inline-link"><b><i>Шаблон дизайна</i></b></a>
                    </li>
                    <li class="tab-2">
                        <a href="#" class="inline-link"><b><i>Страницу или в другое приложение Webasyst</i></b></a>
                    </li>
                </ul>                
                <p class="small">
                    Для некоторых тем дизайна может потребоваться замена в приведенном коде имени файла шаблона вывода товаров <code>list-thumbs.html</code> на другое подходящее имя файла (если приведенный ниже код для вставки списка товаров не работает, и вы не уверены какое имя файла нужно указать, свяжитесь с разработчиком темы дизайна).
                    <span style="display: none;" class="text-2">В коде для вставки списка товаров необходимо заменить <code>THEME_ID</code> на идентификатор темы дизайна, которую вы используете для вашего интернет-магазина (идентификатор можно посмотреть в настройках темы дизайна в разделе «Витрина»).</span>
                </p>
                
                <div id="s-product-list-embed-content-ace-1">{if $wa->shop}
{$products = $wa->shop->productSet("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
")}
{include file="list-thumbs.html" products=$products}
{/if}</div>
                
                <div id="s-product-list-embed-content-ace-2" style="display:none;">{if $wa->shop}
{$products = $wa->shop->productSet("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
")}
{include file="`$wa->shop->themePath('THEME_ID')`list-thumbs.html" products=$products}
{/if}</div>

            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <input class="button gray cancel" type="button" value="Закрыть">
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        var wa_url = '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
';
        
        
        ace.config.set("basePath", wa_url + 'wa-content/js/ace/');
        
        function initEditor(i) {
            var editor = ace.edit('s-product-list-embed-content-ace-' + i);
            editor.setTheme("ace/theme/eclipse");
            var session = editor.getSession();
            session.setMode("ace/mode/css");
            session.setMode("ace/mode/javascript");
            session.setMode("ace/mode/smarty");
            session.setUseWrapMode(true);
            editor.renderer.setShowGutter(false);
            editor.setShowPrintMargin(false);
            editor.setFontSize(13);
            editor.setHighlightActiveLine(false);
            editor.setReadOnly(true);
            editor.selectAll();

            setTimeout(function () {
                var newHeight = editor.getSession().getScreenLength() * editor.renderer.lineHeight + editor.renderer.scrollBar.getWidth();
                newHeight *= 1.02;
                if (newHeight < 100) {
                    newHeight = 100;
                }
                $('#s-product-list-embed-content-ace-' + i).height(newHeight.toString() + "px");
                editor.resize();
            }, 50);
        }
        
        // two tabs - two editors
        initEditor(1);
        initEditor(2);
        
        $('.choose-snippet a').click(function() {
            var li = $(this).closest('li');
            $('.choose-snippet li').removeClass('selected');
            li.addClass('selected');
            
            var index = 1;
            if (li.hasClass('tab-2')) {
                index = 2;
            }
            
            // show content related with current tab
            $('#s-product-list-embed-content-ace-' + index).show();
            $('.text-' + index).show();
            
            // hide content related with other tab
            index = index == 1 ? 2 : 1;
            $('#s-product-list-embed-content-ace-' + index).hide();
            $('.text-' + index).hide();
            
            return false;
            
        });
        
    });
</script><?php }} ?>