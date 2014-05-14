<?php /* Smarty version Smarty-3.0.7, created on 2014-04-15 21:29:45
         compiled from "./App/Tpl/studio/Home/articlelist_view.html" */ ?>
<?php /*%%SmartyHeaderCode:24530534d34497f0917-60361770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12350fa487886612e5e31ea36c97733b0be9448c' => 
    array (
      0 => './App/Tpl/studio/Home/articlelist_view.html',
      1 => 1394971261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24530534d34497f0917-60361770',
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
		<div class="current-page"><h2>资讯 / News</h2><p>关注互联网最新技术</p></div>
        
		<div class="current-position"><a href="/">首页</a> &nbsp&gt;<a href="index.htm" tppabs="http://www.moretouch.com.cn/news/">资讯</a> &nbsp&gt;<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
</div>
           
	</div>
</div>

<div class="main">
	<div class="forcategory">
		<div class="current-article">
			<h1><?php echo $_smarty_tpl->getVariable('arow')->value['title'];?>
</h1>
			<p>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('arow')->value['pubdate'],"%Y-%m-%d");?>
   </p>
			<span class="views" style="top:10px;" id="hits"></span>
		</div>
	</div>
    
    <div class="article-content">
    	 <?php echo $_smarty_tpl->getVariable('arow')->value['body'];?>

    </div>
	
	<div class="clear"></div>
    
    <div style="height:80px; position:relative;border-top:1px dotted #e5e5e5;">
		<div class="article-action" style=" width:200px; left:0px;">
			<a href="" class="btn-prev" title="上一条：">&lt;</a>
			<a href="../index.htm" tppabs="http://www.moretouch.com.cn/news" class="all"><i></i>阅读更多资讯</a>
			<a href="" class="btn-next" title="下一条：">&gt;</a>
		</div>
		<!-- JiaThis Button BEGIN -->
		<div class="jiathis_style" style="position:absolute; right:10px; top:20px;">
			<a class="jiathis_button_qzone"></a>
			<a class="jiathis_button_tsina"></a>
			<a class="jiathis_button_tqq"></a>
			<a class="jiathis_button_weixin"></a>
			<a class="jiathis_button_renren"></a>
			<a href="javascript:if(confirm('http://www.jiathis.com/share  \n\n���ļ��޷��� Teleport Ultra ����, ��Ϊ ����һ�����·���ⲿ������Ϊ������ʼ��ַ�ĵ�ַ��  \n\n�����ڷ������ϴ���?'))window.location='http://www.jiathis.com/share'" tppabs="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
			<a class="jiathis_counter_style"></a>
		</div>
		<script type="text/javascript" src="../../../v3.jiathis.com/code/jia.js-uid=1370395952140579" tppabs="http://v3.jiathis.com/code/jia.js?uid=1370395952140579" charset="utf-8"></script>
		<!-- JiaThis Button END -->
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/studio/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
<script src="js/bootstrap-affix.js">
</html>
