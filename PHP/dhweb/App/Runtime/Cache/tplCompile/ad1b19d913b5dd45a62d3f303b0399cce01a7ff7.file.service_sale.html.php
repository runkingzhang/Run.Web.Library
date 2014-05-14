<?php /* Smarty version Smarty-3.0.7, created on 2014-04-15 21:22:53
         compiled from "./App/Tpl/studio/Home/service_sale.html" */ ?>
<?php /*%%SmartyHeaderCode:18301534d32adbdafb4-86982128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad1b19d913b5dd45a62d3f303b0399cce01a7ff7' => 
    array (
      0 => './App/Tpl/studio/Home/service_sale.html',
      1 => 1394979107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18301534d32adbdafb4-86982128',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" />
<meta name="author" content="4D,战国斯迪，润科">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/img/favicon.ico" media="screen" />

<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/studio/Home/statics/skin/css/style.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/studio/Home/statics/skin/js/jquery-1.8.3.min.js"></script>
<!–[if IE 6]>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/studio/Home/statics/skin/js/DD_belatedPNG_0.0.8a.js"></script>
<!--这边是png的脚本-->
<script>
	DD_belatedPNG.fix('.logo,.navcurrent,.icon-title i,.all i,.footer-contact-info i,.footer-Tags i,.btn-link i,.pic-tag i,.gotop');
</script>
<![endif]–>
</head>

<body>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/studio/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="subpage-banner">
	<div class="subpage-inner">
		<div class="current-page"><h2>服务 / Service</h2><p>我们将诸多良好的应用于众多项目中，始终如一的坚持给客户最好的作品，无论是产品设计、还是用户体验</p></div>
		<div class="current-position"><a href="../index.htm" tppabs="http://www.moretouch.com.cn/">首页</a> > <a href="index.htm" tppabs="http://www.moretouch.com.cn/service/">服务</a> > </div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$(".serviceyuan").css("top", $("#service-current").position().top + $("#service-current").height() /2);	
	})
</script>
<div class="main">
	<div class="servie-content">
    <h1>电子商务营销</h1>
    </div>
	
	<?php $_template = new Smarty_Internal_Template('./App/Tpl/studio/Home/service_siderbar.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<div class="clear"></div>
</div>

<?php $_template = new Smarty_Internal_Template('./App/Tpl/studio/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>