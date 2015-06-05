<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:22
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\lt-ie8.html" */ ?>
<?php /*%%SmartyHeaderCode:24985557067ca1640d6-94422229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ac29aa6be1a445891527187a5aa2ac07cc798ab' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\lt-ie8.html',
      1 => 1403268718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24985557067ca1640d6-94422229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'themeId' => 0,
    'wa' => 0,
    'logo' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067ca21f916_63933965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067ca21f916_63933965')) {function content_557067ca21f916_63933965($_smarty_tpl) {?><div class="container">
<table>
  <tr class="head-lt-ie8">
    <td colspan="3" class="align-left align-middle">
      	<!-- website logo/title -->
    	<div class="logo align-left">
    	    <?php if (!isset($_smarty_tpl->tpl_vars['logo'])) $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['logo']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['themeId']->value).".logo")){?>
                <?php echo $_smarty_tpl->tpl_vars['logo']->value;?>

            <?php }else{ ?>
                <?php echo $_smarty_tpl->getSubTemplate ("comfortbuy.logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }?>
    	</div> 
    </td>
    <td colspan="2" class="align-right align-middle">
      	<!-- block contact -->
      	<div class="contact align-right">
      	    <?php if (!isset($_smarty_tpl->tpl_vars['contact'])) $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['contact']->value = $_smarty_tpl->tpl_vars['wa']->value->block(((string)$_smarty_tpl->tpl_vars['themeId']->value).".contact")){?>
                <?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

            <?php }else{ ?>
                <?php echo $_smarty_tpl->getSubTemplate ("comfortbuy.contact.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }?>
      	</div>
    </td>
  </tr>
  <tr><td colspan="5">
    <h1>Дорогие друзья!</h1>
    <p class="hello">    
	К сожалению, Ваш браузер не поддерживает современные технологии используемые на нашем сайте.
  	</p>
  </td></tr>
  <tr><td colspan="5">
    <p class="help-text">Пожалуйста, обновите браузер, скачав его по ссылкам ниже, или обратитесь к системному администратору, обслуживающему Ваш компьютер.</p>
  </td></tr>
  <tr class="browser-icon">
    <td class="align-center"><a href="http://www.microsoft.com/rus/windows/internet-explorer/worldwide-sites.aspx" title="Internet Explorer"><span class="explorer"></span>Internet Explorer</a><p>от Microsoft</p></td>
    <td class="align-center"><a href="http://www.google.com/chrome/" title="Chrome"><span class="chrome"></span>Chrome</a><p>от Google</p></td>
    <td class="align-center"><a href="http://www.apple.com/ru/safari/" title="Safari"><span class="safari"></span>Safari</a><p>от Apple</p></td>
    <td class="align-center"><a href="http://www.opera.com/" title="Opera"><span class="opera"></span>Opera</a><p>от Opera Software</p></td>
    <td class="align-center"><a href="http://www.mozilla-europe.org/ru/firefox/" title="Firefox"><span class="firefox"></span>Firefox</a><p>от Mozilla</p></td>
  </tr>
</table>
</div><?php }} ?>