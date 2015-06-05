<?php /* Smarty version Smarty-3.1.14, created on 2015-06-04 17:59:19
         compiled from "C:\msktestw2008\trunk\webasyst\wa-data\public\photos\themes\comfortbuy\view-masonry.html" */ ?>
<?php /*%%SmartyHeaderCode:18309557067c786fbf0-50214942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2673fc6716c5d1b90f0c34ec48aed419e26e4a81' => 
    array (
      0 => 'C:\\msktestw2008\\trunk\\webasyst\\wa-data\\public\\photos\\themes\\comfortbuy\\view-masonry.html',
      1 => 1406264684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18309557067c786fbf0-50214942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'frontend_collection' => 0,
    'item' => 0,
    'photos' => 0,
    'photo' => 0,
    'output' => 0,
    'wa' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_557067c7998a62_24383244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557067c7998a62_24383244')) {function content_557067c7998a62_24383244($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_pagination')) include 'C:\\msktestw2008\\trunk\\webasyst\\wa-system/vendors/smarty-plugins\\function.wa_pagination.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['frontend_collection']->value)){?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_collection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['thumbs_list'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['thumbs_list'];?>
<?php }?><?php } ?><?php }?>

<div class="view-masonry"><div id="columnI" class="column"></div><div id="columnII" class="column"></div><div id="columnIII" class="column"></div></div>
<div id="photo-list" class="view-masonry">
<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
    <div<?php if ($_smarty_tpl->tpl_vars['photo']->value['stack_count']>0){?> class="stacked"<?php }?> itemscope itemtype ="http://schema.org/Photograph" data-height="<?php echo round(250*$_smarty_tpl->tpl_vars['photo']->value['height']/$_smarty_tpl->tpl_vars['photo']->value['width']);?>
">
        <div class="image">
            <a href="<?php echo $_smarty_tpl->tpl_vars['photo']->value['frontend_link'];?>
">
                <div class="corner top left">
                    
                    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photo']->value['hooks']['top_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
                </div>
                <div class="corner top right">
                    
                    <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photo']->value['hooks']['top_right']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?><?php echo $_smarty_tpl->tpl_vars['output']->value;?>
<?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['photo']->value['stack_count']>0){?><span class="indicator"><?php echo $_smarty_tpl->tpl_vars['photo']->value['stack_count'];?>
</span><?php }?>
                </div>
                
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->photos->getImgHtml($_smarty_tpl->tpl_vars['photo']->value,'250x0',array('itemprop'=>'image'));?>

            </a>
        </div>
    </div>
<?php } ?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div class="block lazyloading-paging">    
	<?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"prd-list-pagination"),'nb'=>"5",'prev'=>"<i class='icon-caret-left'></i>",'next'=>"<i class='icon-caret-right'></i>"),$_smarty_tpl);?>

</div>
<?php }?>

<script type="text/javascript">
    $('#photo-list').imagesLoaded(function() {		
        var cI=$('#columnI'),cII=$('#columnII'),cIII=$('#columnIII'),
            a=cI.height(),b=cII.height(),c=cIII.height();
        $('#photo-list>div').each(function(){
            var img = $(this).find('img');
            img.css('visibility', 'hidden').parent().append('<div class="lazyloading-progress"><i class="icon16 loading"></i></div>');
            img.load(function () {
                $(this).css('visibility', 'visible').parent().find("div.lazyloading-progress").remove();
            }).each(function() {
                /*ensure image load is fired. Fixes opera loading bug*/
                if (this.complete) { $(this).trigger("load"); }
            });
            
            if(a>b){ 
                if(a>c){
                    if(b==c){
                        b += $(this).data('height');
                        cII.append($(this));
                    }else{
                        c += $(this).data('height');
                        cIII.append($(this));
                    }
                }else{
                    b += $(this).data('height');
                    cII.append($(this));
                }
            }else{
                if(a>c){
                    c += $(this).data('height');
                    cIII.append($(this));
                }else{
                    a += $(this).data('height');
                    cI.append($(this));
                }
            }
        });
    });
</script><?php }} ?>