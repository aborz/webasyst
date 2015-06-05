<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:57:20
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\head.all.html" */ ?>
<?php /*%%SmartyHeaderCode:2792755706750a55244-71795512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a0381eb05f90636f19826f5178b58de8d938db3' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\head.all.html',
      1 => 1403268718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2792755706750a55244-71795512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'theme_settings' => 0,
    'wa_url' => 0,
    'wa_theme_url' => 0,
    'currency_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55706750b5ae32_89867354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55706750b5ae32_89867354')) {function content_55706750b5ae32_89867354($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofitItem'])){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.position.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.autocomplete.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<?php }?>
<script type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>var sumbolrub = <?php if (empty($_smarty_tpl->tpl_vars['theme_settings']->value['sumbolRUB'])){?>0<?php }else{ ?>1<?php }?>;<?php }?>
$.comfortbuy = {
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['authDialog'])){?>auth_base_url: "<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
",
    auth_home_link: "<a class=\"auth-home-link\" href=\"<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
\">Вернуться на главную страницу</a>",
    auth_my_link: "<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><a href=\"<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/my');?>
\">Перейти в личный кабинет</a> или <?php }?>",<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?>
        shop_url: "<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend');?>
",
        default_img_url: { dummy96: "<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
img/dummy96.png" },
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['soaringItem'])){?>soaring_visible_item: <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['soaringItem'];?>
,
        <?php $_smarty_tpl->tpl_vars['currency_info'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(true), null, 0);?>
        <?php if (!isset($_smarty_tpl->tpl_vars['currency_info']->value['sign_delim'])){?><?php $_smarty_tpl->createLocalArrayVariable('currency_info', null, 0);
$_smarty_tpl->tpl_vars['currency_info']->value['sign_delim'] = " ";?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['currency_info']->value['sign_position'])){?><?php $_smarty_tpl->createLocalArrayVariable('currency_info', null, 0);
$_smarty_tpl->tpl_vars['currency_info']->value['sign_position'] = 1;?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['currency_info']->value['sign_html'])){?><?php $_smarty_tpl->createLocalArrayVariable('currency_info', null, 0);
$_smarty_tpl->tpl_vars['currency_info']->value['sign_html'] = $_smarty_tpl->tpl_vars['currency_info']->value['sign'];?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['currency_info']->value['decimal_point'])){?><?php $_smarty_tpl->createLocalArrayVariable('currency_info', null, 0);
$_smarty_tpl->tpl_vars['currency_info']->value['decimal_point'] = ',';?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['currency_info']->value['frac_digits'])){?><?php $_smarty_tpl->createLocalArrayVariable('currency_info', null, 0);
$_smarty_tpl->tpl_vars['currency_info']->value['frac_digits'] = 2;?><?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['currency_info']->value['thousands_sep'])){?><?php $_smarty_tpl->createLocalArrayVariable('currency_info', null, 0);
$_smarty_tpl->tpl_vars['currency_info']->value['thousands_sep'] = ' ';?><?php }?>
        currency: <?php echo json_encode($_smarty_tpl->tpl_vars['currency_info']->value);?>
,<?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['autofitItem'])){?>autofit_visible_item: <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['autofitItem'];?>
,<?php }?>
    <?php }?>
    locale: {
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['authDialog'])){?>cong: "Поздравляем!", isauth: "Авторизация прошла успешно!",<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['soaringItem'])){?>remove: "Удалить", pcs: "шт.",<?php }?>
        err_cnt_prd: "Столько товара нет в наличии!",
        showall: "Показать все"
    }
};
</script><?php }} ?>