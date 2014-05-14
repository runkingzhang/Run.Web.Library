<?php /* Smarty version Smarty-3.0.7, created on 2013-01-11 19:50:58
         compiled from "./App/Tpl/duohuostudio/Home/articleList_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1756250effca2c2c320-18054846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d5e7cdc26e53c9dc8bd0e588ab0a9df85cc1dd1' => 
    array (
      0 => './App/Tpl/duohuostudio/Home/articleList_view.html',
      1 => 1325253030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1756250effca2c2c320-18054846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="四知堂广告公司,VI,设计" />
<title><?php echo $_smarty_tpl->getVariable('arow')->value['title'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="" />
<meta name="description" content="顶尖的四知堂广告公司，四知堂设计公司，专业四知堂广告设计，标志设计，VI设计，CI设计，四知堂画册设计，网站设计，广告策划与平面设计，为南京企业提供一流品牌形象设计服务。ADC艺术指导会员;《包装与设计》推介公司" />
<meta name="Keywords" content="四知堂广告公司 四知堂设计 四知堂设计公司 四知堂广告策划 四知堂企业形象设计 四知堂广告设计 四知堂标志设计 四知堂画册设计 四知堂VI设计 " /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/css/index.css" />



</head>

<body>

	<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
    
<div id="container">
<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="content">
    <div class="c_title">
    <embed src=" <?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/szt.swf" quality="high" width="270" height="88" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>
    <h2>
    提供国际高品质形象品牌设计策略服务
    </h2>
    </div>
    <div class="c_main" id="news_content" >
		<div class="news_content_title">
			<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>

		</div>
		<div class="news_content_middle">
			<?php echo $_smarty_tpl->getVariable('arow')->value['body'];?>

		</div>
    </div>
</div>
<div class="clear"></div>

</div>
    

<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>
