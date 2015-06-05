<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:10
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\blog\themes\comfortbuy\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:28381557067bec8f225-62679601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd771d331fbac207ee301b5e2baab093be5592d85' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\blog\\themes\\comfortbuy\\sidebar.html',
      1 => 1406218058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28381557067bec8f225-62679601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_parent_theme_path' => 0,
    'wa' => 0,
    'settlement_one_blog' => 0,
    'blog_pages' => 0,
    'action' => 0,
    'blogs' => 0,
    'is_search' => 0,
    'blog' => 0,
    'timeline' => 0,
    'year' => 0,
    'item' => 0,
    'frontend_action' => 0,
    'plugin' => 0,
    'output' => 0,
    'pl' => 0,
    'theme_settings' => 0,
    'root_page_id' => 0,
    'pageML' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067beeecaa8_27641336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067beeecaa8_27641336')) {function content_557067beeecaa8_27641336($_smarty_tpl) {?><p class="align-right hide-for-desktop" id="mobile-close"><a class="type5" href="#">Закрыть</a></p>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/top.apps.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('mobile'=>1), 0);?>


<?php $_smarty_tpl->tpl_vars['flag_blog'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['blog_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->pages(), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['settlement_one_blog']->value||$_smarty_tpl->tpl_vars['blog_pages']->value){?><!-- navigation -->
<div id="blog-nav" class="navigation type-blog">
    <div class="caption acapitalize">Ссылки блога</div>
    <ul class="menu-h">
    <?php if (!$_smarty_tpl->tpl_vars['settlement_one_blog']->value||$_smarty_tpl->tpl_vars['action']->value=='post'){?><!-- blog list -->
        <?php $_smarty_tpl->tpl_vars['blogs'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->blogs(), null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['blogs']->value)>1){?>
            <li class="<?php if (is_array($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id'))&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
"><i class="icon-circle"></i>Все записи</a></li>
            <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id')==$_smarty_tpl->tpl_vars['blog']->value['id']&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
"><i class="icon-circle"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a></li>
            <?php } ?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['blog'] = new Smarty_variable(current($_smarty_tpl->tpl_vars['blogs']->value), null, 0);?>
            <li<?php if (empty($_smarty_tpl->tpl_vars['is_search']->value)){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
"><i class="icon-circle"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a></li>
        <?php }?>
        
        <?php $_smarty_tpl->tpl_vars['timeline'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->timeline(), null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['timeline']->value)){?>
        	<!-- timeline navigation -->
        	<li id="timeline" class="dropdown hide-for-mobile">
            	<a href="#"><i class="icon-circle"></i>Календарь<span class="grower"><i class="icon-angle-down"></i><i class="icon-angle-right"></i></span></a>
	            <div class="popup">
					<ul class="menu-v">
					<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable(null, null, 0);?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['year_month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timeline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['year_month']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
						<?php if ($_smarty_tpl->tpl_vars['year']->value!=$_smarty_tpl->tpl_vars['item']->value['year']){?>
    						<?php if (!$_smarty_tpl->tpl_vars['item']->first){?>
	    	                        </ul>
		                        </li>
		                    <?php }?>
	    	                <li <?php if ($_smarty_tpl->tpl_vars['item']->value['year_selected']){?>class="selected"<?php }?>>
	        	            <?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['year'], null, 0);?>
	            	        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['year_link'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['year'])===null||$tmp==='' ? 'NULL' : $tmp);?>
<span class="grower"><i class="icon-angle-down"></i><i class="icon-angle-right"></i></span></a>
    						<ul class="menu-v">
		                <?php }?>
		                <li <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']){?>class="selected"<?php }?>>
		                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo _w("%d post","%d posts",$_smarty_tpl->tpl_vars['item']->value['count']);?>
"><?php echo _ws(date("F",gmmktime(0,0,0,$_smarty_tpl->tpl_vars['item']->value['month'])));?>
</a>
		                </li>
					    <?php if ($_smarty_tpl->tpl_vars['item']->last){?>
					            </ul>
				    	    </li>
			            <?php }?>
		            <?php } ?>
			        </ul>
			    </div>
        	</li>
        	<li id="timeline-mobile" class="hide-for-desktop bph-mobile-tree dhtml">
            	<a href="#"><i class="icon-circle"></i>Календарь</a>
				<ul class="categories">
				<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable(null, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['year_month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timeline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['year_month']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
					<?php if ($_smarty_tpl->tpl_vars['year']->value!=$_smarty_tpl->tpl_vars['item']->value['year']){?>
						<?php if (!$_smarty_tpl->tpl_vars['item']->first){?>
    	                        </ul>
	                        </li>
	                    <?php }?>
    	                <li <?php if ($_smarty_tpl->tpl_vars['item']->value['year_selected']){?>class="selected"<?php }?>>
        	            <?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['year'], null, 0);?>
            	        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['year_link'];?>
"><i class="cb-minus">&#8211;</i><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['year'])===null||$tmp==='' ? 'NULL' : $tmp);?>
</a>
						<ul>
	                <?php }?>
	                <li <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']){?>class="selected"<?php }?>>
	                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo _w("%d post","%d posts",$_smarty_tpl->tpl_vars['item']->value['count']);?>
"><?php echo _ws(date("F",gmmktime(0,0,0,$_smarty_tpl->tpl_vars['item']->value['month'])));?>
</a>
	                </li>
				    <?php if ($_smarty_tpl->tpl_vars['item']->last){?>
				            </ul>
			    	    </li>
		            <?php }?>
	            <?php } ?>
		        </ul>
        	</li>
        	<?php $_smarty_tpl->tpl_vars['flag_blog'] = new Smarty_variable(true, null, 0);?>
    	<?php }?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['frontend_action']->value){?>
		<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['plugin']->value=='category-plugin'&&!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])){?><!-- categories -->
		<li class="hide-for-mobile dropdown">
			<a href="#"><i class="icon-circle"></i>Категории<span class="grower"><i class="icon-angle-down"></i><i class="icon-angle-right"></i></span></a>
           	<div class="popup">
		    <?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>

		    </div>
		</li>
		<li class="hide-for-desktop bph-mobile-tree dhtml">
			<a href="#"><i class="icon-circle"></i>Категории</a>
		    <?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>

		</li>
		<?php $_smarty_tpl->tpl_vars['flag_blog'] = new Smarty_variable(true, null, 0);?>
		<?php }?>
		<?php } ?>
	<?php }?>
	
	<!-- plugins -->
	
	<?php if ($_smarty_tpl->tpl_vars['frontend_action']->value){?>
		<?php $_smarty_tpl->tpl_vars['pl'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['plugin']->value=='tag-plugin'||$_smarty_tpl->tpl_vars['plugin']->value=='category-plugin'){?><?php $_smarty_tpl->tpl_vars['pl'] = new Smarty_variable($_smarty_tpl->tpl_vars['pl']->value+1, null, 0);?><?php }?>
		<?php } ?>
	    <?php if ((count($_smarty_tpl->tpl_vars['frontend_action']->value)-$_smarty_tpl->tpl_vars['pl']->value)>0){?>
		<li class="dropdown">
			<a href="#"><i class="icon-circle"></i>Еще<span class="grower"><i class="icon-angle-down"></i><i class="icon-angle-right"></i></span></a>
           	<div class="popup">
				<?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['plugin']->value!='tag-plugin'&&$_smarty_tpl->tpl_vars['plugin']->value!='category-plugin'){?>
				    <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>
<?php }?>
				<?php }?>
				<?php } ?>
			</div>
		</li>
		<?php }?>
	<?php }?>
    </ul>
</div>
	
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/vertical.tree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['blogInfo'])){?>
    <?php if ($_smarty_tpl->tpl_vars['blog_pages']->value){?><!-- info pages -->
    <div class="information block">
        <span class="caption acapitalize">Информация</span>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['pageML'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageML']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageML']->key => $_smarty_tpl->tpl_vars['pageML']->value){
$_smarty_tpl->tpl_vars['pageML']->_loop = true;
?>
        <li<?php if (isset($_smarty_tpl->tpl_vars['root_page_id']->value)&&$_smarty_tpl->tpl_vars['root_page_id']->value==$_smarty_tpl->tpl_vars['pageML']->value['id']){?> class="selected"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['pageML']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pageML']->value['title'];?>
"><i class="icon-circle"></i><?php echo $_smarty_tpl->tpl_vars['pageML']->value['name'];?>
</a>
        </li>
        <?php } ?>
        </ul>
    </div>
    <?php }?>
    
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['blogTags'])){?>
    <?php if ($_smarty_tpl->tpl_vars['frontend_action']->value){?>
        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['plugin']->value=='tag-plugin'){?><!-- tag cloud -->
            <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])){?>
            <div class="tags block<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?> hide-for-desktop<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?> id="tagsCanvasContent"<?php }?>>
                <span class="caption acapitalize">Теги</span>
                <?php echo str_replace(array('<div class="tags cloud">','</div>'),'',$_smarty_tpl->tpl_vars['output']->value['sidebar']);?>

            </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?>
                <div class="tags block hide-for-mobile">
                    <span class="caption acapitalize">Теги</span>
                    <canvas width="200" height="200" id="tagsCanvas"></canvas>
                </div>
                <?php }?>
            <?php }?>
        <?php }?>
        <?php } ?>
    <?php }?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityVKid'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/community.vk.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>"place-sidebar"), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBhref'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/community.fb.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('place'=>"place-sidebar"), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['blogLastPhotos'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.photos.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sidebar'=>1), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['blogLastPosts'])){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/last.posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sidebar'=>1), 0);?>
<?php }?><?php }} ?>