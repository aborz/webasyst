<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:20
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\index.html" */ ?>
<?php /*%%SmartyHeaderCode:31737557067504889e1-50719032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5b84a5ab7b8fd364682db425cb2b3aafb0fbc1' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\index.html',
      1 => 1427976482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31737557067504889e1-50719032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'canonical' => 0,
    'rss' => 0,
    'wa_theme_url' => 0,
    'theme_settings' => 0,
    'wa_url' => 0,
    'wa_theme_version' => 0,
    'wa_app' => 0,
    'action' => 0,
    'wa_active_theme_path' => 0,
    'them' => 0,
    'currencies' => 0,
    'c_code' => 0,
    'currency' => 0,
    'c' => 0,
    'cart_total' => 0,
    'logo' => 0,
    'query' => 0,
    'contact' => 0,
    'social' => 0,
    'root_page_id' => 0,
    'shop_pages' => 0,
    'spt' => 0,
    'pageMB' => 0,
    'active_page' => 0,
    'footerRight' => 0,
    'a' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55706750989ff5_55590570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706750989ff5_55590570')) {function content_55706750989ff5_55590570($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 8]>	<html class="no-js lt-ie8">	<![endif]-->
<!--[if IE 8]>		<html class="no-js ie8">	<![endif]-->
<!--[if gt IE 8]>	<html class="no-js gt-ie8">	<![endif]-->
<!--[if !IE]><!-->	<html class="no-js">	<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title>
	<meta name="Keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" />
	<meta name="Description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" />
	
	<?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>
	<link rel="shortcut icon" href="/favicon.ico"/>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><!-- rss --><?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['rss']->value){?><link rel="alternate" type="application/rss+xml" title="RSS &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['rss']->value;?>
"><?php }?>
    <?php }?>
    
	<!-- css -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
wm-site/font-awesome/css/font-awesome.min.css?v3.2.1" rel="stylesheet" type="text/css" />
	<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['wa']->value->shop->currency()=='RUB'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/font/ruble/arial/fontface.css" rel="stylesheet" type="text/css"><?php }?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
comfortbuy.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css" />
	<?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
 
	
	<!-- js -->
	<script type="text/javascript">
        WebFontConfig = { google: { families: [ 'PT+Serif:400,700:latin' ] } };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
wm-site/modernizr.min.js?v2.8.2.27052014"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.cookie.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
jquery.jcarousel.min.js?v2.9.0"></script>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['wa_app']->value=='shop'&&$_smarty_tpl->tpl_vars['action']->value=='default'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeBannerImg'])){?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
jquery.nivo.slider.pack.js?v3.2"></script><?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['tagsCloud'])){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
jquery.tagcanvas.min.js?v2.2" type="text/javascript"></script><?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityVKid'])||($_smarty_tpl->tpl_vars['wa_app']->value=='shop'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviewsVKapiId'])&&$_smarty_tpl->tpl_vars['action']->value=='product')){?><script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script><?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("head.all.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
comfortbuy.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
 
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->headJs();?>
 
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if (!preg_match('/\/(\w+)\/$/',$_smarty_tpl->tpl_vars['wa_theme_url']->value,$_smarty_tpl->tpl_vars['them']->value)){?><?php $_smarty_tpl->createLocalArrayVariable('them', null, 0);
$_smarty_tpl->tpl_vars['them']->value[1] = 'comfortbuy';?><?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("scheme.settings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('themeId'=>$_smarty_tpl->tpl_vars['them']->value[1]), 0);?>

</head>
<body id="<?php echo $_smarty_tpl->tpl_vars['wa_app']->value;?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['communityFBhref'])||($_smarty_tpl->tpl_vars['wa_app']->value=='shop'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviewsFBappId'])&&$_smarty_tpl->tpl_vars['action']->value=='product')){?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1<?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='shop'&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['reviewsFBappId'])&&$_smarty_tpl->tpl_vars['action']->value=='product'){?>&appId=<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['reviewsFBappId'];?>
<?php }?>";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <?php }?>
	<div class="wrapper-top">
	    <!-- HEADER -->
	    <div role="navigation">
	        <div class="bg-top-line">
	            <div class="container align-right">
    	            <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>
        			<!-- auth links -->
       		     		<?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
       	    	 			<div class="auth">
       	    	 			    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/my');?>
">Кабинет</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->user('firstname');?>
<?php }?> | <a href="?logout">Выйти</a>
       	    	 			</div>
            			<?php }else{ ?>
    	        			<div class="auth">
    	        				<a<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['authDialog'])){?> class="auth-popup"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вход</a> | <a<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['authDialog'])){?> class="auth-popup"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Регистрация</a>
        	    			</div>
            			<?php }?>
            		<?php }?>
            		
            		<?php if (isset($_smarty_tpl->tpl_vars['currencies']->value)&&count($_smarty_tpl->tpl_vars['currencies']->value)>1){?><!--currency--><div class="currency-toggle">Валюта:&nbsp;<select id="currency"><?php $_smarty_tpl->tpl_vars['currency'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(), null, 0);?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['c_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c_code']->value = $_smarty_tpl->tpl_vars['c']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['c_code']->value==$_smarty_tpl->tpl_vars['currency']->value){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</option><?php } ?></select><script>$("#currency").change(function () {var url = location.href;if (url.indexOf('?') == -1) {url += '?';} else {url += '&';}location.href = url + 'currency=' + $(this).val();});</script></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['topAppsMenu'])){?><?php echo $_smarty_tpl->getSubTemplate ("top.apps.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><!-- shopping cart info --><?php $_smarty_tpl->tpl_vars['cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?><div id="cart" class="<?php if (!$_smarty_tpl->tpl_vars['cart_total']->value){?>empty<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
"><i class="icon-shopping-cart cart<?php if (!$_smarty_tpl->tpl_vars['cart_total']->value){?> empty<?php }?>"></i><span>Корзина: <span class="cart-total"><?php if (!$_smarty_tpl->tpl_vars['cart_total']->value){?>(пусто)<?php }else{ ?><?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?><?php echo wa_currency($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
<?php }else{ ?><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
<?php }?><?php }?></span></span></a><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['soaringItem'])&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'cart')===false&&strpos($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),'checkout')===false){?><?php echo $_smarty_tpl->getSubTemplate ("soaring.cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div><?php }?>
            		<div class="clear-both"></div>
    	        </div>
	        </div>
    	    <div class="container">
    	        <div class="header-info">
        	        <!-- website logo/title -->
    	            <div class="logo align-left<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['search'])){?> insearch<?php }?>">
    	                <?php if (!isset($_smarty_tpl->tpl_vars['logo'])) $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['logo']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['them']->value[1]).".logo")){?>
    	                    <?php echo $_smarty_tpl->tpl_vars['logo']->value;?>

    	                <?php }else{ ?>
    	                    <?php echo $_smarty_tpl->getSubTemplate ("comfortbuy.logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	                <?php }?>
    	            </div>
    	            <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['search'])){?>
    	            <!-- shop search -->
                    <div class="search hide-for-mobile">
                        <!-- product search -->
                        <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend');?>
search/">
                        <div class="search-input"><input id="search" type="search" name="query" value="<?php if (!empty($_smarty_tpl->tpl_vars['query']->value)){?><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
<?php }?>" placeholder="Найти продукты"<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofitItem'])){?> class="autofit"<?php }?>><button type="submit" class="search-button icon-search"></button></div>
                        </form>
                    </div>
                    <?php }?>
    	            <!-- website phone/email -->
    	            <div class="contact align-right<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['search'])){?> insearch<?php }?>">
    	                <?php if (!isset($_smarty_tpl->tpl_vars['contact'])) $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['contact']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['them']->value[1]).".contact")){?>
    	                    <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

    	                <?php }else{ ?>
    	                    <?php echo $_smarty_tpl->getSubTemplate ("comfortbuy.contact.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	                <?php }?>
    	            </div>
    	        </div>
    	        <div class="top-menu">
    	            <!-- website menu/catalog -->
    	            <?php echo $_smarty_tpl->getSubTemplate ("horizontal.tree.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	        </div>
    	    </div>
    	    
    	    <div class="clear-both"></div>
	    </div>
	</div>
	<div class="wrapper">
	    <div class="container">
	        <!-- MAIN CONTENT -->
			<div id="main">
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<div id="dialog" class="dialog">
                    <div class="dialog-background"></div>
                    <div class="dialog-window">
                        <div class="cart"></div>
                    </div>
                </div>
			</div>  
			
			<div class="clear-both"></div>
			<div id="push-up"></div>
	    </div>
	</div>
	<div class="wrapper-bottom">
	    <div class="bg-bottom-line">
    	    <div class="container" id="footer">
    	    <!-- FOOTER -->
    	        <div class="contact">
    	            <span class="caption hide-for-desktop">Контакты</span>
    	            <?php if (!isset($_smarty_tpl->tpl_vars['social'])) $_smarty_tpl->tpl_vars['social'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['social']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['them']->value[1]).".social")){?>
	                    <?php echo $_smarty_tpl->tpl_vars['social']->value;?>

	                <?php }else{ ?>
	                    <?php echo $_smarty_tpl->getSubTemplate ("comfortbuy.social.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	                <?php }?>
    	            <?php if (!isset($_smarty_tpl->tpl_vars['contact'])) $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['contact']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['them']->value[1]).".contact")){?>
	                    <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

	                <?php }else{ ?>
	                    <?php echo $_smarty_tpl->getSubTemplate ("comfortbuy.contact.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	                <?php }?>
    	        </div>
    	        <div class="shop">
    	            <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['theme_settings']->value['appsPages']=='shop'){?>
    	                <?php $_smarty_tpl->tpl_vars['spt'] = new Smarty_variable("информация", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['shop_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages(), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='shop'&&isset($_smarty_tpl->tpl_vars['root_page_id']->value)){?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['root_page_id']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?><?php }?>
                    <?php }else{ ?>
                        <?php $_smarty_tpl->tpl_vars['spt'] = new Smarty_variable("Сайт", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['shop_pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='site'&&isset($_smarty_tpl->tpl_vars['root_page_id']->value)){?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable($_smarty_tpl->tpl_vars['root_page_id']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['active_page'] = new Smarty_variable(null, null, 0);?><?php }?>
                    <?php }?>
    	            <?php if ($_smarty_tpl->tpl_vars['shop_pages']->value){?>
        	            <span class="caption"><?php echo $_smarty_tpl->tpl_vars['spt']->value;?>
</span>
        	            <ul>
        	                <?php if (0&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homeLink'])){?>
                                <li<?php if ($_smarty_tpl->tpl_vars['wa_url']->value==$_smarty_tpl->tpl_vars['wa']->value->currentUrl()){?> class="selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
" title="Главная">Главная</a>
                                </li>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['pageMB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageMB']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageMB']->key => $_smarty_tpl->tpl_vars['pageMB']->value){
$_smarty_tpl->tpl_vars['pageMB']->_loop = true;
?>
                            <?php if (!isset($_smarty_tpl->tpl_vars['pageMB']->value['menu_bottom'])){?>
                                <li<?php if ($_smarty_tpl->tpl_vars['pageMB']->value['id']==$_smarty_tpl->tpl_vars['active_page']->value){?> class="selected"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['pageMB']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pageMB']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['pageMB']->value['name'];?>
</a>
                                </li>
                            <?php }?>
                            <?php } ?>
                        </ul>
                        <div class="clear-both"></div>
                    <?php }?>
    	        </div>
    	        <div class="apps">
    	        <?php if (!isset($_smarty_tpl->tpl_vars['footerRight'])) $_smarty_tpl->tpl_vars['footerRight'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['footerRight']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['them']->value[1]).".footer.right")){?>
                    <?php echo $_smarty_tpl->tpl_vars['footerRight']->value;?>

                <?php }else{ ?>
    	            <span class="caption">навигация</span>
    	            <ul>
            			<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->apps(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
            				<li<?php if ($_smarty_tpl->tpl_vars['a']->value['url']==$_smarty_tpl->tpl_vars['wa_app_url']->value){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</a></li>
            			<?php } ?>
          			</ul>
          		<?php }?>
    	        </div>
    	    </div>
    	    <div class="hide-for-desktop align-center">
        	    <?php if (!isset($_smarty_tpl->tpl_vars['social'])) $_smarty_tpl->tpl_vars['social'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['social']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['them']->value[1]).".social")){?>
                    <?php echo $_smarty_tpl->tpl_vars['social']->value;?>

                <?php }else{ ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("comfortbuy.social.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php }?>
    	    </div>
    	    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['copyright'])){?><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['copyright'];?>
<?php }?>
    	</div>
    	<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['pageScrollUp'])){?><a id="scrollUp" href="#" title="Прокрутить вверх"><i class="<?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['pageScrollUp'];?>
"></i><span class="gray">Вверх</span></a><?php }?>
    
	</div>
	<!--noindex--><div class="wrapper-lt-ie8"><?php echo $_smarty_tpl->getSubTemplate ("lt-ie8.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('themeId'=>$_smarty_tpl->tpl_vars['them']->value[1]), 0);?>
</div><!--/noindex-->
</body>
</html><?php }} ?>