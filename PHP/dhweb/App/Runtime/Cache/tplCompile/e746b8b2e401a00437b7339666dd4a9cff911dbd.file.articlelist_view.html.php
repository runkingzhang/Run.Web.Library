<?php /* Smarty version Smarty-3.0.7, created on 2013-06-14 22:25:54
         compiled from "./App/Tpl/runkeji/Home/articlelist_view.html" */ ?>
<?php /*%%SmartyHeaderCode:2313951bb27f2c486b5-71531891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e746b8b2e401a00437b7339666dd4a9cff911dbd' => 
    array (
      0 => './App/Tpl/runkeji/Home/articlelist_view.html',
      1 => 1371219938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2313951bb27f2c486b5-71531891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
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
<!-- Le styles -->
<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/prettify.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/index.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/js/prettify.js"></script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body onLoad="prettyPrint( )">

	<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
    
<div id="container">
<div class="row-fluid">
    <div class="span3"> <?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> </div>
    <div class="span9">
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
                                
                                </p>
                </div>
                
                <div class="news_content_middle">
                    <?php echo $_smarty_tpl->getVariable('arow')->value['body'];?>

                </div>
            </div>
        </div>
	</div>
    </div>

</div>
    

<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>
