<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:08
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\blog\themes\comfortbuy\stream.html" */ ?>
<?php /*%%SmartyHeaderCode:14352557067bc13ba00-11381199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19e1e7dd8e4bb9fde4786653946eefc469cbac0' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\blog\\themes\\comfortbuy\\stream.html',
      1 => 1406218058,
      2 => 'file',
    ),
    '1736cd8359bfd32eb7993eaf36ffc0d9e6f9c688' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\blog\\themes\\comfortbuy\\stream_search.html',
      1 => 1406218058,
      2 => 'file',
    ),
    '643767bd1252c1fbd37bb9e35083f5d68413eca7' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\blog\\themes\\comfortbuy\\stream_posts.html',
      1 => 1406218058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14352557067bc13ba00-11381199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_lazyloading' => 0,
    'wa' => 0,
    'stream_title' => 0,
    'page' => 0,
    'is_search' => 0,
    'pages' => 0,
    'posts' => 0,
    'posts_per_page' => 0,
    'loaded_post_count' => 0,
    'post_count' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067bc8a6418_73163860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067bc8a6418_73163860')) {function content_557067bc8a6418_73163860($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?>
<div id="post-stream" role="main" class="lazyloading" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemscope itemtype="http://schema.org/Blog"<?php }?>>
<?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value&&!empty($_smarty_tpl->tpl_vars['stream_title']->value)){?><h1><?php echo $_smarty_tpl->tpl_vars['stream_title']->value;?>
</h1><?php }?>
    <a name="page_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"></a>

        <?php if ($_smarty_tpl->tpl_vars['is_search']->value){?>
            <?php /*  Call merged included template "stream_search.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("stream_search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14352557067bc13ba00-11381199');
content_557067bc270403_03197797($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "stream_search.html" */?>
        <?php }else{ ?>
            <?php /*  Call merged included template "stream_posts.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("stream_posts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14352557067bc13ba00-11381199');
content_557067bc5eaf74_70107475($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "stream_posts.html" */?>
        <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_lazyloading']->value||($_smarty_tpl->tpl_vars['page']->value==1)){?>
        <div class="pageless-wrapper"<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?> style="display:none;"<?php }?>>

        <?php if ($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['pages']->value){?>
            <?php $_smarty_tpl->tpl_vars['loaded_post_count'] = new Smarty_variable((count($_smarty_tpl->tpl_vars['posts']->value)+$_smarty_tpl->tpl_vars['posts_per_page']->value*($_smarty_tpl->tpl_vars['page']->value-1)), null, 0);?>
            <?php echo _w('%d post','%d posts',$_smarty_tpl->tpl_vars['loaded_post_count']->value);?>
&nbsp;<?php echo _w('of %d post','of %d posts',$_smarty_tpl->tpl_vars['post_count']->value);?>

            <br>
            <a href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="pageless-link">Показать более ранние записи</a>
            <div class="pageless-progress" style="display:none;"><i class="icon16 loading"></i>Загрузка...</div>
        <?php }elseif(isset($_smarty_tpl->tpl_vars['page']->value)&&$_smarty_tpl->tpl_vars['pages']->value){?>
            <?php echo _w('%d post','%d posts',$_smarty_tpl->tpl_vars['post_count']->value);?>

        <?php }?>

        </div>
    <?php }?>

<?php if (!$_smarty_tpl->tpl_vars['is_lazyloading']->value){?>
</div>
<ul class="menu-h" id="stream-paging">
    <?php $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['p']->step = 1;$_smarty_tpl->tpl_vars['p']->total = (int)ceil(($_smarty_tpl->tpl_vars['p']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['p']->step));
if ($_smarty_tpl->tpl_vars['p']->total > 0){
for ($_smarty_tpl->tpl_vars['p']->value = 1, $_smarty_tpl->tpl_vars['p']->iteration = 1;$_smarty_tpl->tpl_vars['p']->iteration <= $_smarty_tpl->tpl_vars['p']->total;$_smarty_tpl->tpl_vars['p']->value += $_smarty_tpl->tpl_vars['p']->step, $_smarty_tpl->tpl_vars['p']->iteration++){
$_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->iteration == 1;$_smarty_tpl->tpl_vars['p']->last = $_smarty_tpl->tpl_vars['p']->iteration == $_smarty_tpl->tpl_vars['p']->total;?>
        <li<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page']->value){?> class="selected"<?php }?>><a href="<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page']->value){?>#page_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php }else{ ?>?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></li>
    <?php }} ?>
</ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value==1&&!$_smarty_tpl->tpl_vars['wa']->value->globals('disable_pageless')){?>
<script type="text/javascript">
$.pageless({
        auto: true, // auto load next pages
        url: '?layout=lazyloading',
        target: '.lazyloading:first',
        scroll: function(response){
            var progress = '';
            if (response) {
                progress = '<i class="icon16 loading"><'+'/i> <em>Загрузка...<'+'/em>';
            }
        },
        count: <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
,
        paging_selector:'#stream-paging'
});
</script>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:08
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\blog\themes\comfortbuy\stream_search.html" */ ?>
<?php if ($_valid && !is_callable('content_557067bc270403_03197797')) {function content_557067bc270403_03197797($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['post']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['post']->iteration++;
 $_smarty_tpl->tpl_vars['post']->last = $_smarty_tpl->tpl_vars['post']->iteration === $_smarty_tpl->tpl_vars['post']->total;
?>
<div class="post search-match<?php if ($_smarty_tpl->tpl_vars['post']->last){?> no-border<?php }?>" id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemprop="blogPosts"<?php }?> itemscope itemtype="http://schema.org/BlogPosting">
    <div class="credentials">
        <span class="gray date"><i class="icon-time"></i><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
" class="username type1" rel="author"><i class="icon-user userpic"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</a>
        <?php }else{ ?>
            <span class="username gray" rel="author"><i class="icon-user userpic"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</span>
        <?php }?>
    </div>
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" itemprop="url"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h3>
    <p>
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['post']->value['text']),400);?>

    </p>
</div>
<?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
    <?php if (!isset($_smarty_tpl->tpl_vars['page']->value)||$_smarty_tpl->tpl_vars['page']->value<2){?>
        <?php echo _w('%d post','%d posts',0);?>

    <?php }?>
<?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:08
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\blog\themes\comfortbuy\stream_posts.html" */ ?>
<?php if ($_valid && !is_callable('content_557067bc5eaf74_70107475')) {function content_557067bc5eaf74_70107475($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['post']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['post']->iteration++;
 $_smarty_tpl->tpl_vars['post']->last = $_smarty_tpl->tpl_vars['post']->iteration === $_smarty_tpl->tpl_vars['post']->total;
?>
    <div class="post<?php if ($_smarty_tpl->tpl_vars['post']->last){?> no-border<?php }?>" id="post-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('blog_url')){?>itemprop="blogPosts" <?php }?>itemscope itemtype="http://schema.org/BlogPosting">
        
        <div class="credentials">
            
            <span class="gray date"><i class="icon-time"></i><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</span>
            <?php if (isset($_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'])){?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt=""></a><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
" class="username type1" rel="author"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</a>
                <?php }else{ ?>
                    <span class="username gray" rel="author"><img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['photo_url_20'];?>
" class="userpic" alt=""><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</span>
                <?php }?>
            <?php }else{ ?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['user']['posts_link']){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
"><i class="icon-user userpic gray"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['user']['posts_link'];?>
" class="username type1" rel="author"><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</a>
                <?php }else{ ?>
                    <span class="username gray" rel="author"><i class="icon-user userpic"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['user']['name'];?>
</span>
                <?php }?>
            <?php }?>

        </div>
        
        <h3>
            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" itemprop="url"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>

            
            <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['post_title'])){?>
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['post_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
            <?php }?>

        </h3>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['before'])){?>
            <div class="text_before">
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['before']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
            </div>
        <?php }?>

        <div class="text">
            <?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>

            <?php if ($_smarty_tpl->tpl_vars['post']->value['cutted']){?>
                (<a class="type2" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['post']->value['cut_link_label'])===null||$tmp==='' ? 'Читать дальше' : $tmp);?>
</a>)
            <?php }?>
        </div>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['plugins']['after'])){?>
            <div class="text_after">
                <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['plugins']['after']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['show_comments']->value&&$_smarty_tpl->tpl_vars['post']->value['comments_allowed']){?>
        	<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['comment_count'])){?>
        	    <a class="picture-awesome" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
#comments"><i class="icon-comment"></i><?php echo _w('%d comment','%d comments',$_smarty_tpl->tpl_vars['post']->value['comment_count']);?>
</a>
            <?php }else{ ?>
            	<a class="picture-awesome" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
#comments"><i class="icon-comment"></i>нет комментариев</a>
            <?php }?>
        <?php }?>

    </div>
<?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value<2){?>
        <?php echo _w('%d post','%d posts',0);?>

    <?php }?>
<?php } ?><?php }} ?>