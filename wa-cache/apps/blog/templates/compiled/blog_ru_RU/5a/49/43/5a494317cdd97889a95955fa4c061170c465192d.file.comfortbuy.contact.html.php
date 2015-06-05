<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:10
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\site\themes\comfortbuy\comfortbuy.contact.html" */ ?>
<?php /*%%SmartyHeaderCode:24018557067be6f94e0-27480790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a494317cdd97889a95955fa4c061170c465192d' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\site\\themes\\comfortbuy\\comfortbuy.contact.html',
      1 => 1427293334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24018557067be6f94e0-27480790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'phone' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067be7282f3_72505129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067be7282f3_72505129')) {function content_557067be7282f3_72505129($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop){?><?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('phone'), null, 0);?><?php $_smarty_tpl->tpl_vars['email'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('email'), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_variable('', null, 0);?><?php $_smarty_tpl->tpl_vars['email'] = new Smarty_variable('', null, 0);?><?php }?>
<ul>
    <!--contact in header-->
    <?php if ($_smarty_tpl->tpl_vars['phone']->value){?><li class="top-contact phone"><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</li><?php }else{ ?>
        <li class="top-contact phone">+7 (917) 57-07-507</li>
    <?php }?>
    
    <li class="top-contact hint">Ежедневно с 10:00 до 20:00</li>
    
    <!--contact in footer-->
    <li class="bottom-contact adress"><i class="icon-map-marker"></i>115088, Москва, ул. Новоостаповская, д.5, стр.1.</li>
    <?php if ($_smarty_tpl->tpl_vars['phone']->value){?><li class="bottom-contact phone"><i class="icon-phone"></i><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</li><?php }else{ ?>
        <li class="bottom-contact phone"><i class="icon-phone"></i>+7 (917) 57-07-507</li>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['email']->value){?><li class="bottom-contact email"><i class="icon-envelope"></i><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></li><?php }else{ ?>
        <li class="bottom-contact email"><i class="icon-envelope"></i><a href="mailto:eshop@sela.ru">eshop@sela.ru</a></li>
    <?php }?>
    
</ul><?php }} ?>