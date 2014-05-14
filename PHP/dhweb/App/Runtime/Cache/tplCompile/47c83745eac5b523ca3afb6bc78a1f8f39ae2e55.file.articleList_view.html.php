<?php /* Smarty version Smarty-3.0.7, created on 2013-01-25 14:30:46
         compiled from "./App/Tpl/runkeji/Home/articleList_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1452351022696d37987-06524113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47c83745eac5b523ca3afb6bc78a1f8f39ae2e55' => 
    array (
      0 => './App/Tpl/runkeji/Home/articleList_view.html',
      1 => 1359095442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1452351022696d37987-06524113',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('arow')->value['title'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/index.css" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
 <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/index.css" />


</head>

<body>

	<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
    
<div id="container">
<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="content">
    
    <div class="c_main" id="news_content" >
		<div class="news_content_title">
			<h2><?php echo $_smarty_tpl->getVariable('arow')->value['title'];?>
</h2>
            			<p>
						<span>日期：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('arow')->value['pubdate'],"%Y-%m-%d");?>
          </span>
						<span> 来源：<?php echo $_smarty_tpl->getVariable('arow')->value['user_name'];?>
</span>
						<span>浏览：<?php echo $_smarty_tpl->getVariable('arow')->value['click']+1;?>
</span>
						</p>
		</div>
        
		<div class="news_content_middle">
        
			<?php echo $_smarty_tpl->getVariable('arow')->value['body'];?>

		</div>
    </div>
</div>
<div class="clear"></div>

</div>
    

<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>
