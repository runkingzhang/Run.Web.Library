<?php /* Smarty version Smarty-3.0.7, created on 2012-01-04 22:51:13
         compiled from "./App/Tpl/huitong/Home/header.html" */ ?>
<?php /*%%SmartyHeaderCode:78394f046761c42b55-45071707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7742f21ade4de8765a33f246a574ac23e91a87d6' => 
    array (
      0 => './App/Tpl/huitong/Home/header.html',
      1 => 1324447595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78394f046761c42b55-45071707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script>
$(function(){
$(".about_top ul li").not($(".current")).not($(".fir")).hover(
		function(){
			$(this).addClass("current");	
		},
		function(){
			$(this).removeClass("current");
		}
	);
	$(".about_top ul li.fir").hover(
		function()
	    {
			$(this).addClass("target");	
		},
		function(){
			$(this).removeClass("target");	
		}
	);
});
</script>
<div class="about_top">
        <div class="logo"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
"></a></div>
            <ul>
                <li class="li_1 fir"><a style="height:24px;" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
"></a></li>
                <li class="li_2<?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==1){?> current<?php }?>"><a style="height:24px;" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_8/"></a></li>
                <li class="li_3<?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==2){?> current<?php }?>"><a style="height:24px;" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_13/"></a></li>
                <li class="li_4<?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==3){?> current<?php }?>"><a style="height:24px;" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_3/"></a></li>
                <li class="li_5<?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==4){?> current<?php }?>"><a style="height:24px;" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_4/"></a></li>
                <li class="li_6<?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==5){?> current<?php }?>"><a style="height:24px;" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_5/"></a></li>
            </ul>
			<?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']!=1&&$_smarty_tpl->getVariable('thisapp_f')->value['id']!=2&&$_smarty_tpl->getVariable('thisapp_f')->value['id']!=5&&$_smarty_tpl->getVariable('thisapp_f')->value['id']!=0){?>
            <div class="search">
            <form action="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_ss/">
                <input name="keywords" type="text" value="<?php echo $_GET['keywords'];?>
" class="text" />
                <input type="submit" value="" class="button" />
			</form>
        	</div>
			<?php }?>
    	<div class="clear"></div>
</div>