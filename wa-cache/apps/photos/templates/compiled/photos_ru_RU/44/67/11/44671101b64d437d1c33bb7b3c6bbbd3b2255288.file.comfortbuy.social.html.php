<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:22
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\comfortbuy.social.html" */ ?>
<?php /*%%SmartyHeaderCode:26749557067ca0a8884-70128407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44671101b64d437d1c33bb7b3c6bbbd3b2255288' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\comfortbuy.social.html',
      1 => 1432910921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26749557067ca0a8884-70128407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067ca11dbb3_79201612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067ca11dbb3_79201612')) {function content_557067ca11dbb3_79201612($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->blog){?><?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable('', null, 0);?><?php }?>
<ul class="social"><li><a href="http://vkontakte.ru/sela_ru" title=""><i class="soc-vk"></i></a></li><!-- vkontakte --><li><a href="https://plus.google.com/+SelaRu_fashion" title=""><i class="soc-go"></i></a></li><!-- google+ --><li><a href="http://vkontakte.ru/sela_ru" title="Facebook"><i class="soc-fb"></i></a></li><!-- facebook --><li><a href="http://twitter.com/Sela_Fashion" title="Twitter"><i class="soc-tw"></i></a></li><!-- twitter --><li><a href="http://www.youtube.com/user/SelaOfficial" title=""><i class="soc-yt"></i></a></li><!-- you tube --></ul><?php }} ?>