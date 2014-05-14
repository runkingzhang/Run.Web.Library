<?php /* Smarty version Smarty-3.0.7, created on 2012-01-04 22:51:13
         compiled from "./App/Tpl/huitong/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:123504f0467618fccd5-77446725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8de8d3ed0e1e00a190b1e7c21eb487187d3b2535' => 
    array (
      0 => './App/Tpl/huitong/Home/Index_index.html',
      1 => 1324447595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123504f0467618fccd5-77446725',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huitong/Home/js/jquery-1.6.js"></script>
<link rel="stylesheet"  type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huitong/Home/css/index.css"/>
<link rel="stylesheet"  type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huitong/Home/css/face_3.css"/>
<title>face_02</title>
<!--[if IE 6]> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huitong/Home/js/png.js"></script>
<script>
  DD_belatedPNG.fix('*');
</script>
<![endif]--> 
<script>
$(function(){
	$(".face_nav ul li").not($(".target")).hover(
		function()
	    {
			$(this).addClass("target");		
		},
		function()
		{
			$(this).removeClass("target");
		}
	);
})
</script>
</head>
<body class="index_body">
	<div class="face_all index_main">
    	
	<?php $_template = new Smarty_Internal_Template('./App/Tpl/huitong/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <div class="index_middle">
            <div class="index_middle_logo">
                <a href="/flash/designer.html" target="_blank" class="inhert"></a>
                <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_7"  target="_blank" class="apple">苹果用户进入</a>
            </div>
            <div class="index_buttons">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
     
            <div class="face_nav">
        	<ul>
            	<li class="li_1"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_18/"></a></li>
            	<li class="li_2"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_19/"></a></li>
            	<li class="li_3"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_20/"></a></li>
            	<li class="li_4"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_21/"></a></li>
            </ul>
            <div class="clear"></div>          
		</div>
        </div>    
        
    </div>
<div class="index_bottom">
	<div class="all_800">
    
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/huitong/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>   
    
</body>
</html>
