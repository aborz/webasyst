<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:18
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\shop\themes\comfortbuy\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:156855570674e979961-05602466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f74bed276fc5a1179b0fe335ca7d068726c80cf0' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\shop\\themes\\comfortbuy\\sidebar.html',
      1 => 1404222706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156855570674e979961-05602466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_parent_theme_path' => 0,
    'filters' => 0,
    'theme_settings' => 0,
    'wa' => 0,
    'fid' => 0,
    'filter' => 0,
    'c' => 0,
    'shop_filters' => 0,
    '_v' => 0,
    'v_id' => 0,
    'v' => 0,
    'frontend_nav' => 0,
    'plugin' => 0,
    '_' => 0,
    'root_page_id' => 0,
    'site_pages' => 0,
    'pageML' => 0,
    'active_page' => 0,
    'cloud' => 0,
    'tag' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5570674eba4543_51973944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570674eba4543_51973944')) {function content_5570674eba4543_51973944($_smarty_tpl) {?><p class="align-right hide-for-desktop" id="mobile-close"><a class="type5" href="#">Закрыть</a></p>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/top.apps.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('mobile'=>1), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/vertical.tree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?><!-- filtering by product features -->
<?php $_smarty_tpl->tpl_vars['shop_filters'] = new Smarty_variable(waRequest::cookie('shop_filters','',waRequest::TYPE_STRING), null, 0);?>

<div class="filters<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['filterAjax'])){?> ajax<?php }?>">
    <div class="caption acapitalize"></div>

    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
">
    <?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['filter']->key;
?>
        <div>
        <?php if ($_smarty_tpl->tpl_vars['fid']->value=='price'){?>
            <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(true), null, 0);?>
            <b data-feature="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" style="cursor: default;">Цена</b>
            <p class="fslider">
            от <input type="text" class="min" name="price_min" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_min')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_min');?>
"<?php }?> placeholder="<?php echo floor($_smarty_tpl->tpl_vars['filter']->value['min']);?>
">
            до <input type="text" class="max" name="price_max" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_max')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_max');?>
"<?php }?> placeholder="<?php echo ceil($_smarty_tpl->tpl_vars['filter']->value['max']);?>
"> <span class="filter-price"><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->currency()=='RUB'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><span class="ruble">Р</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['c']->value['sign'];?>
<?php }?></span>
            </p>
        <?php }else{ ?>
            <b data-feature="<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<i class="<?php if (in_array($_smarty_tpl->tpl_vars['fid']->value,explode(',',$_smarty_tpl->tpl_vars['shop_filters']->value))){?>icon-angle-up<?php }else{ ?>icon-angle-down<?php }?>"></i></b>
            <p class="<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['min'])){?>fslider<?php }?><?php if (in_array($_smarty_tpl->tpl_vars['fid']->value,explode(',',$_smarty_tpl->tpl_vars['shop_filters']->value))){?> active"<?php }else{ ?>" style="display: none;"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value['type']=='boolean'){?>
                <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])){?> checked<?php }?> value="1"> Да</label><br>
                <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])==='0'){?> checked<?php }?> value="0"> Нет</label><br>
                <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],'')===''){?> checked<?php }?> value=""> Неважно</label><br>
            <?php }elseif(isset($_smarty_tpl->tpl_vars['filter']->value['min'])){?>
                <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code']), null, 0);?>
                от <input type="text" class="min" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[min]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['min'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['min'];?>
"<?php }?>>
                до <input type="text" class="max" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[max]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['max'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['max'];?>
"<?php }?>>
                <?php if (!empty($_smarty_tpl->tpl_vars['filter']->value['unit'])){?>
                    <?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['title'];?>

                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['unit']['value']!=$_smarty_tpl->tpl_vars['filter']->value['base_unit']['value']){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[unit]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['value'];?>
"><?php }?>
                <?php }?>
            <?php }else{ ?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <label><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[]" <?php if (in_array($_smarty_tpl->tpl_vars['v_id']->value,(array)$_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],array()))){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label><br>
            <?php } ?>
            <?php }?>
            </p>
        <?php }?>
        </div>
    <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')){?><input type="hidden" name="sort" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('sort'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('order')){?><input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('order'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
        <?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['filterAjax'])){?><input type="submit" value="&raquo;  Применить фильтр"><?php }?>
    </form>
    <script type="text/javascript">
    $('.filters b').unbind('click');
    $('.filters b').not('[data-feature="price"]').click(function(){
        var p = $(this).next('p');
        if(p.hasClass('active')){
            p.removeClass('active').slideUp('slow');
            $(this).find('i').removeClass('icon-angle-up').addClass('icon-angle-down');
        }else{
            p.addClass('active').slideDown('slow');
            $(this).find('i').removeClass('icon-angle-down').addClass('icon-angle-up');
        }
        
        var filters = $.cookie('shop_filters');
        if (filters) { filters = filters.split(','); } else { filters = []; }
        
        var i = $.inArray($(this).data('feature') + '', filters);
        if (i != -1) { filters.splice(i, 1) } else { filters[filters.length] = $(this).data('feature'); }
        
        if(filters.length){ $.cookie('shop_filters', filters.join(','), { expires: 30, path: '/'}); } else { $.cookie('shop_filters', null, { expires: 0, path: '/'}); }
    });
    
    $(function(){
        $('.filters .fslider').each(function () {
            if (!$(this).find('.filter-slider').length) {
                $(this).append('<span class="filter-slider"></span>');
            } else {
                return;
            }
            var min = $(this).find('.min');
            var max = $(this).find('.max');
            var slider = $(this).find('.filter-slider');
            slider.slider({
                range: true,
                min: parseFloat(min.attr('placeholder')),
                max: parseFloat(max.attr('placeholder')),
                step: (parseFloat(max.attr('placeholder')) - parseFloat(min.attr('placeholder'))) <= 5 ? 0.1 : 1,
                values: [parseFloat(min.val().length ? min.val() : min.attr('placeholder')),
                    parseFloat(max.val().length ? max.val() : max.attr('placeholder'))],
                slide: function( event, ui ) {
                    var v = ui.values[0] == $(this).slider('option', 'min') ? '' : ui.values[0];
                    min.val(v ? v : '');
                    v = ui.values[1] == $(this).slider('option', 'max') ? '' : ui.values[1];
                    max.val(v ? v : '');
                },
                stop: function (event, ui) {
                    min.change();
                }
            });
            min.add(max).change(function () {
                var v_min = parseFloat(min.val()) || slider.slider('option', 'min');
                var v_max = parseFloat(max.val()) || slider.slider('option', 'max');
                if (v_max >= v_min) {
                    slider.slider('option', 'values', [v_min, v_max]);
                }
            });
        });
    });
    
    </script>
</div>
<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['frontend_nav']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['_']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['plugin']->value=='brands-plugin'&&!empty($_smarty_tpl->tpl_vars['_']->value)){?>
        <div class="information block">
            <span class="caption acapitalize">Бренды</span>
            <?php echo $_smarty_tpl->tpl_vars['_']->value;?>

        </div>
        <?php }?>
    <?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['frontend_nav']->value)){?>
    <!-- plugin hook: 'frontend_nav' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['_']->key;
?><?php if ($_smarty_tpl->tpl_vars['plugin']->value!='brands-plugin'){?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php }?><?php } ?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shopInfo'])){?>
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['appsPages']=='shop'){?>
        <?php $_smarty_tpl->tpl_vars['site_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['site_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages(), null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['root_page_id']->value)){?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['root_page_id']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?><?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['site_pages']->value){?>
        <div class="information block">
            <span class="caption acapitalize">Информация</span>
            <ul>
            <?php  $_smarty_tpl->tpl_vars['pageML'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageML']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['site_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageML']->key => $_smarty_tpl->tpl_vars['pageML']->value){
$_smarty_tpl->tpl_vars['pageML']->_loop = true;
?>
                <?php if (!isset($_smarty_tpl->tpl_vars['pageML']->value['menu_left'])){?>
                <li<?php if ($_smarty_tpl->tpl_vars['pageML']->value['id']==$_smarty_tpl->tpl_vars['active_page']->value){?> class="selected"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['pageML']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pageML']->value['title'];?>
"><i class="icon-circle"></i><?php echo $_smarty_tpl->tpl_vars['pageML']->value['name'];?>
</a>
                </li>
                <?php }?>
            <?php } ?>
            </ul>
        </div>
    <?php }?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shopTags'])){?>
    <?php if (!isset($_smarty_tpl->tpl_vars['cloud'])) $_smarty_tpl->tpl_vars['cloud'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['cloud']->value = $_smarty_tpl->tpl_vars['wa']->value->shop->tags()){?>
        <div class="tags block<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?> hide-for-desktop<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?> id="tagsCanvasContent"<?php }?>>
            <span class="caption acapitalize">Теги</span>
            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cloud']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
?>
            <?php if (htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true)!=''){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
tag/<?php echo $_smarty_tpl->tpl_vars['tag']->value['uri_name'];?>
/" style="font-size: <?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
%;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->tpl_vars['tag']->last){?>, <?php }?>
            <?php }?>    
            <?php } ?>
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?>
        <div class="tags block hide-for-mobile">
            <span class="caption acapitalize">Теги</span>
            <canvas width="200" height="200" id="tagsCanvas"></canvas>
        </div>
        <?php }?>
    <?php }?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityVKid'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/community.vk.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>"place-sidebar"), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBhref'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/community.fb.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>"place-sidebar"), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shopLastPhotos'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.photos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sidebar'=>1), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['shopLastPosts'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sidebar'=>1), 0);?>
<?php }?><?php }} ?>