<?php /* Smarty version Smarty-3.0.7, created on 2012-02-01 19:14:50
         compiled from "./App/Tpl/duohuorun/Home/page_i.html" */ ?>
<?php /*%%SmartyHeaderCode:105994f291eaa23c452-05375003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42fab1efd0fb3afc19814df6651ca0a1bd55e34f' => 
    array (
      0 => './App/Tpl/duohuorun/Home/page_i.html',
      1 => 1327155143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105994f291eaa23c452-05375003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description"  content="" />
<title><?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/css/index.css" />
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/jquery.tools.min.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/mobilyslider.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/index_slider.js"></script>
<script type="text/javascript">
$(function() {
	$(".tabs").tabs(".panes > div");
});
</script>
<!--[if IE 6]> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/css/ie6.css" />
<![endif]-->  
</head>

<body>
	<div id="contart_us_box">
    	<div class="a_wrapper">
    	<a href="#">网站建设</a><br/>
        <a href="#">软件系统</a><br/>
        <a href="#">视觉设计</a><br/>
        </div>
    </div>

	<!--header-->
	 <?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuo/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--header  end-->
    
    
<div id="container" class="list_page">
<!--Content-->
<div class="list_content_container">

<!--面包屑导航	（无）	 -->
<div class="site_map">
<p>
<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
">首页</a> &gt;&gt;
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['name'] = 'mbx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('thisapp_mbx')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']['total']);
?>
<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('thisapp_mbx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mbx']['index']]['action'];?>
_i_id_<?php echo $_smarty_tpl->getVariable('thisapp_mbx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mbx']['index']]['id'];?>
/">
<?php echo $_smarty_tpl->getVariable('thisapp_mbx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mbx']['index']]['name'];?>
</a>&gt;&gt;
<?php endfor; endif; ?>
<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('thisapp')->value['action'];?>
_i_id_<?php echo $_smarty_tpl->getVariable('thisapp')->value['id'];?>
/">
<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
</a>
</p>

</div>

<div class="siderbar">
    <div class="siderbar_nav">
        <h2>网站建设</h2>
        <ul>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['name'] = 'lmdh';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('catbro')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total']);
?>
				<li><span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['lmdh']['index']]['action'];?>
_i_id_<?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['lmdh']['index']]['id'];?>
/">
				<?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['lmdh']['index']]['name'];?>

				</a></span></li>
				<?php endfor; endif; ?>	

            <!--<li class="on"><a href="#" >网站建设首页</a></li>
            <li><a href="#">精品企业门户</a></li>
            <li><a href="#">企事业单位网站</a></li>
            <li><a href="#">论坛社区SNS</a></li>
            <li><a href="#">手机移动客户端</a></li>
            <li><a href="#">在线网店商城</a></li>
            <li><a href="#">搜索引擎优化</a></li>
            <li><a href="#">网络营销推广</a></li> -->
        </ul>
        <div class="bottom"></div>
    </div>

    <div class="contart_us">
        <div class="title">联系我们</div>
        <div class="contart_us_container">
              <p>地址：南通市工农路557号<br/>
              传真：0513-85292123<br/>
              服务热线：0513-85110088  </p>
        </div>
    </div>
</div>
    <div class="list_content">
    <div class="img_wrapper"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/list_banner.jpg" width="722" height="238" alt="banner" /></div>
    <div class="article">
    <div class="article_title">
    <h1><?php echo $_smarty_tpl->getVariable('arow')->value['title'];?>
</h1>
    <p>发布：<span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('arow')->value['pubdate'],"%Y-%m-%d");?>
</span>&nbsp;&nbsp;&nbsp;浏览：<span><?php echo $_smarty_tpl->getVariable('arow')->value['click']+1;?>
</span></p>
    </div>


    <div class="article_content">
   
    <?php echo $_smarty_tpl->getVariable('thisapp')->value['content'];?>

    </div>
    
    </div>
    
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>

    <!--footer -->
<?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuo/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--footer End-->

</div></body>
</html>
