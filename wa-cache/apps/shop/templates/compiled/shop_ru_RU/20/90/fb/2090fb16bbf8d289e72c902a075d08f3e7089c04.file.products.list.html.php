<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:58:42
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\products.list.html" */ ?>
<?php /*%%SmartyHeaderCode:1487557067a217c500-20759930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2090fb16bbf8d289e72c902a075d08f3e7089c04' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\products.list.html',
      1 => 1433242585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487557067a217c500-20759930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sorting' => 0,
    'active_sort' => 0,
    'wa' => 0,
    'category' => 0,
    'sort_fields' => 0,
    'sort' => 0,
    'name' => 0,
    's_u' => 0,
    'theme_settings' => 0,
    'addition' => 0,
    'pppc_url' => 0,
    'x' => 0,
    'pppc' => 0,
    'products' => 0,
    'shop_view' => 0,
    'view' => 0,
    'p' => 0,
    'badge_html' => 0,
    'wa_theme_url' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067a24f7071_17826953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067a24f7071_17826953')) {function content_557067a24f7071_17826953($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system\\vendors\\smarty3\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_function_wa_pagination')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_pagination.php';
?>    
<div class="sort-and-view">
<?php if (!empty($_smarty_tpl->tpl_vars['sorting']->value)){?>
<!-- sorting -->
<div class="sorting">
    <span>Сортировать по</span>
    <?php $_smarty_tpl->tpl_vars['sort_fields'] = new Smarty_variable(array('rating'=>'Оценка покупателей','total_sales'=>'Хиты продаж','price'=>'Цена','name'=>'Название','create_datetime'=>'Дата добавления','stock'=>'В наличии'), null, 0);?>
    <?php if (!isset($_smarty_tpl->tpl_vars['active_sort']->value)){?><?php $_smarty_tpl->tpl_vars['active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get('sort','create_datetime'), null, 0);?><?php }?>
    <select id="sorting">
        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value)&&!$_smarty_tpl->tpl_vars['category']->value['sort_products']){?><option value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
"<?php if (!$_smarty_tpl->tpl_vars['active_sort']->value){?> selected="selected"<?php }?>>Новые и популярные</option><?php }?>
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
        <?php $_smarty_tpl->tpl_vars['s_u'] = new Smarty_variable(explode('"',$_smarty_tpl->tpl_vars['wa']->value->shop->sortUrl($_smarty_tpl->tpl_vars['sort']->value,$_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['active_sort']->value)), null, 0);?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['s_u']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<?php if ($_smarty_tpl->tpl_vars['active_sort']->value==$_smarty_tpl->tpl_vars['sort']->value){?><?php if (strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'asc')!==false){?> &uarr;<?php }elseif(strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'desc')!==false){?> &darr;<?php }?><?php }?></option>
        <?php if ($_smarty_tpl->tpl_vars['active_sort']->value==$_smarty_tpl->tpl_vars['sort']->value){?>
            <?php if (strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'asc')!==false){?>
                <option value="<?php echo str_replace('asc','desc',$_smarty_tpl->tpl_vars['s_u']->value[1]);?>
" selected="selected" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 &darr;</option>
            <?php }elseif(strpos($_smarty_tpl->tpl_vars['s_u']->value[1],'desc')!==false){?>
                <option value="<?php echo str_replace('desc','asc',$_smarty_tpl->tpl_vars['s_u']->value[1]);?>
" selected="selected" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 &uarr;</option>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')==$_smarty_tpl->tpl_vars['sort']->value){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->title((($_smarty_tpl->tpl_vars['wa']->value->title()).(' — ')).($_smarty_tpl->tpl_vars['name']->value));?>
<?php }?>
        <?php } ?>
    </select>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['productsPerPage'])&&empty($_smarty_tpl->tpl_vars['addition']->value)){?>
<?php $_smarty_tpl->tpl_vars['pppc'] = new Smarty_variable(waRequest::cookie('products_per_page',0,'TYPE_INT'), null, 0);?>
<div id="products-per-page"<?php if (empty($_smarty_tpl->tpl_vars['sorting']->value)){?> class="no-margin<?php }?>">
    <span>Товары на странице</span>
<?php $_smarty_tpl->tpl_vars['pppc_url'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),"/&*page=([0-9]*)&*/i",''), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x']->_loop = false;
 $_from = explode(',',$_smarty_tpl->tpl_vars['theme_settings']->value['productsPerPage']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x']->key => $_smarty_tpl->tpl_vars['x']->value){
$_smarty_tpl->tpl_vars['x']->_loop = true;
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['pppc_url']->value;?>
" data-pppc="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['pppc']->value==$_smarty_tpl->tpl_vars['x']->value){?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a>
<?php } ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['pppc_url']->value;?>
"<?php if (!$_smarty_tpl->tpl_vars['pppc']->value){?> class="selected"<?php }?>>все</a>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
<!-- view -->
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['view'])){?><?php $_smarty_tpl->tpl_vars['view'] = new Smarty_variable($_smarty_tpl->tpl_vars['theme_settings']->value['view'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['view'] = new Smarty_variable('list', null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['shop_view'] = new Smarty_variable(waRequest::cookie('shop_view','',waRequest::TYPE_STRING), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['shop_view']->value){?><?php $_smarty_tpl->tpl_vars['view'] = new Smarty_variable($_smarty_tpl->tpl_vars['shop_view']->value, null, 0);?><?php }?>
<div class="view-select">
    <span class="thumbs<?php if ($_smarty_tpl->tpl_vars['view']->value=='thumbs'){?> selected<?php }?>" data-view="1"><i class="icon-th"></i></span>
    <span class="list<?php if ($_smarty_tpl->tpl_vars['view']->value=='list'){?> selected<?php }?>" data-view="0"><i class="icon-th-list"></i></span>
</div>
<?php }?>
</div>


 


	<div id="pipec" class="dialog">
	<?php echo $_smarty_tpl->tpl_vars['wa']->value->get('cartz');?>

<div class="cart2">     

</div>

</div>			 
<ul class="product-list <?php echo $_smarty_tpl->tpl_vars['view']->value;?>
">
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?><li itemscope itemtype ="http://schema.org/Product"><div class="product-block block"><div class="image"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?> &mdash; <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"><?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['p']->value['badge']), null, 0);?><?php if ($_smarty_tpl->tpl_vars['badge_html']->value){?><div class="corner bottom left"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div><?php }?><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'300',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy300.png"));?>
</a><div class="quick_view"><form style="visibility:hidden; position:absolute" class="addtocartz"   method="post" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?> data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=2"<?php }else{ ?> data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=3"<?php }?>><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><input id="formes_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" type="submit" value="!"></form><span><a onclick="submitform(<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
)" id="winz_<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="quick_link show_popup">быстрый просмотр</a><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" class="more_link">подробнее</a></span></div></div><div class="other"><div class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?> &mdash; <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"><h5 itemprop="name"<?php if ($_smarty_tpl->tpl_vars['p']->value['rating']<=0){?> class="no-rating"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</h5></a><?php if ($_smarty_tpl->tpl_vars['p']->value['rating']>0){?><div class="product-rating"><span class="rating nowrap"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['p']->value['rating'],12);?>
</span>&nbsp;&nbsp;(<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['frontend_url'], ENT_QUOTES, 'UTF-8', true);?>
reviews/"><?php echo $_smarty_tpl->tpl_vars['p']->value['rating_count'];?>
<?php if ($_smarty_tpl->tpl_vars['p']->value['rating_count']==1){?> отзыв<?php }elseif($_smarty_tpl->tpl_vars['p']->value['rating_count']>1&&$_smarty_tpl->tpl_vars['p']->value['rating_count']<5){?> отзыва<?php }else{ ?> отзывов<?php }?></a>)</div><?php }?></div><div itemprop="offers" class="offers" itemscope itemtype="http://schema.org/Offer"><div class="product-price"><?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><span class="compare-at-price nowrap"><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->currency()=='RUB'){?><?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['compare_price'],null,null,false);?>
<?php }else{ ?><?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
<?php }?><?php }else{ ?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
<?php }?></span><?php }?><span class="price nowrap<?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?> red<?php }?>" itemprop="price"><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price']);?>
<?php }else{ ?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
<?php }?></span></div><div class="description<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?> no-available<?php }?>"><?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?><p itemprop="description"><?php echo strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']);?>
</p><?php }?></div><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0){?><?php if (!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?><div class="available"><span class="bold">Наличие:</span><span class="instock"> на складе</span></div><?php }?><form class="addtocart" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
"<?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?> data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?>><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><input type="submit" value="В корзину"></form><link itemprop="availability" href="http://schema.org/InStock" /><?php }else{ ?><div class="available"><span class="bold">Наличие:</span><span class="outofstock"> отсутствует</span></div><form class="addtocart" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
"><input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><input type="submit" value="В корзину" disabled="disabled" title="Нет в продаже"></form><?php }?></div></div><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['soaringItem'])&&$_smarty_tpl->tpl_vars['p']->value['sku_count']<2){?><input type="hidden" class="soaring-cart-data"data-url = "<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
"data-img_url = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['p']->value,'96x96');?>
"data-name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"data-price = "<?php echo shop_currency($_smarty_tpl->tpl_vars['p']->value['price'],null,null,false);?>
"><?php }?></div></li><?php } ?>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div<?php if (!$_smarty_tpl->tpl_vars['pppc']->value||empty($_smarty_tpl->tpl_vars['theme_settings']->value['productsPerPage'])){?> class="lazyloading-paging"<?php }?>>
    <?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"prd-list-pagination"),'nb'=>"9",'prev'=>"<i class='icon-caret-left'></i>",'next'=>"<i class='icon-caret-right'></i>"),$_smarty_tpl);?>

</div>
<?php }?>

	    <script type="text/javascript">
function submitform(ids){
  $('#formes_'+ids).click();
}

</script><?php }} ?>