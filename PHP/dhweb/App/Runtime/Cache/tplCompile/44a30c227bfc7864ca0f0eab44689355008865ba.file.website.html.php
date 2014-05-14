<?php /* Smarty version Smarty-3.0.7, created on 2012-03-15 20:50:38
         compiled from "./App/Tpl/duohuo/Home/website.html" */ ?>
<?php /*%%SmartyHeaderCode:57254f61e59eb0be65-03207621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a30c227bfc7864ca0f0eab44689355008865ba' => 
    array (
      0 => './App/Tpl/duohuo/Home/website.html',
      1 => 1331815835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57254f61e59eb0be65-03207621',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE>
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
              <p>地址：<br>南京建宁路65号江苏省创业园<br/>
              QQ: <br><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=385819220&amp;site=qq&amp;menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:385819220:41" alt="点击这里给我发消息" title="点击这里给我发消息" /></a>385819220<br/>
              电话: <br>025-58053100 / 15195819107  </p>
        </div>
    </div>
	<div class="anli">
		<div class="anli_top">
			精品案例展示
		</div>
		<div class="anli_content">
			<a href="##"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/up.jpg"></a>
			<ul>
				<li>
					<a href="##"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px" height="120px"></a>
				</li>
				<li>
					<a href="##"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px" height="120px"></a>
				</li>
				<li>
					<a href="##"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px" height="120px"></a>
				</li>
				<li>
					<a href="##"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px" height="120px"></a>
				</li>
				<li>
					<a href="##"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px" height="120px"></a>
				</li>
			</ul>
			<a href="##"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/down.jpg"></a>
		</div>
	</div>
</div>
    <div class="list_content">
    <div class="img_wrapper"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/list_banner1.jpg" width="722" height="157" alt="banner" /></div>
    <div class="pk">
		<table  align="center" cellpadding="0" cellspacing="0">
			<tr class="pk1">
				<td width="722" colspan="2" class="pk11"></td>
			</tr>
			<tr>
				<td width="360" class="pk_left">滥产化，模版化</td>
				<td width="360" class="pk_right">好产品，仅为您创造！</td>
			</tr>
			<tr>
				<td class="pk_left">无后期优化管理，则无任何效益产出</td>
				<td class="pk_right">后期网络营销策划，推广方案，优化管理，我们能为您做的更多！</td>
			</tr>
			<tr>
				<td class="pk_left">安全性，所有权？</td>
				<td class="pk_right">真正从硬件到软件，全程保障您的权益！</td>
			</tr>
			<tr>
				<td class="pk_left">看的是销售，听到的是忽悠！真正的技术在哪里？</td>
				<td class="pk_right">一个开发人员占到90%的团队，我们用技术说话！</td>
			</tr>
			<tr>
				<td class="pk_left">价格，贵有贵的宰法，便宜有便宜的做法！</td>
				<td class="pk_right">根据需求标准计价清单，我们做到公正透明。</td>
			</tr>
		</table>
	</div>
	<div class="chanpin">
	<img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/forduohuo.jpg" >
			<ul>
				<li>
					<div class="chanpin_top chanpin_top1">
						<h2>精品企业门户</h2>
					</div>
					<div class="chanpin_shihe">
						基本信息展示，企业单位宣传，基本用户互动功能，灵活功能配置
					</div>
					<div class="chanpin_xiangqing">
						<p class="chanpin_li">企业门户网站</p>
						<p class="chanpin_li">教育院校网站</p>
						<p class="chanpin_li">电子政务网站</p>
						<p>适合成长型企业，事业单位，网站以展示信息发布为主</p>
					</div>
					<a href="/page_i_id_8/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/button_buy.gif"></a>
				</li>
				<li>
					<div class="chanpin_top chanpin_top1">
						<h2>在线网店商城</h2>
					</div>
					<div class="chanpin_shihe">
						行业资讯，产品在线销售，B2C电子商务
					</div>
					<div class="chanpin_xiangqing">
						<p class="chanpin_li">企业销售门户</p>
						<p class="chanpin_li">B2C电子商务平台</p>
						<p class="chanpin_li">在线网店商城</p>
						<p>适合各行业企业，拥有自己的电子商务销售平台</p>
					</div>
					<a href="/page_i_id_9/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/button_buy.gif"></a>
				</li>
				<li>
					<div class="chanpin_top chanpin_top1">
						<h2>综合论坛社区</h2>
					</div>
					<div class="chanpin_shihe">
						综合门户+BBS论坛，SNS在线社交系统
					</div>
					<div class="chanpin_xiangqing">
						<p class="chanpin_li">精品企业门户+BBS论坛</p>
						<p class="chanpin_li">在线SNS社交系统</p>
						<p class="chanpin_li">SNS+C2C整合应用</p>
						<p>适合多元化，互动性高的客户。基于社交系统的多应用网络平台。</p>
					</div>
					<a href="/page_i_id_10/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/button_buy.gif"></a>
				</li>
				<li>
					<div class="chanpin_top chanpin_top1">
						<h2>B2B/C2C电子商务</h2>
					</div>
					<div class="chanpin_shihe">
						大型综合商城，阿里巴巴/淘宝型互联网平台
					</div>
					<div class="chanpin_xiangqing">
						<p class="chanpin_li">C2C多客户电商平台</p>
						<p class="chanpin_li">B2B企业对企业电商平台</p>
						<p class="chanpin_li">综合电子商务解决方案</p>
						<p>适合多用户综合电子商务建站需求。打造属于自己的商业联盟</p>
					</div>
					<a href="/page_i_id_11/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/button_buy.gif"></a>
				</li>
				<li>
					<div class="chanpin_top chanpin_top1">
						<h2>网络推广SEO</h2>
					</div>
					<div class="chanpin_shihe">
						在网站运营中提供可靠的营销推广策划方案。
					</div>
					<div class="chanpin_xiangqing">
						<p class="chanpin_li">搜索引擎优化SEO</p>
						<p class="chanpin_li">软文推广</p>
						<p class="chanpin_li">付费搜索引擎竞价</p>
						<p>提高站点流量、用户、搜索引擎排名。真正实现网站的价值。</p>
					</div>
					<a href="/page_i_id_12/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/button_buy.gif"></a>
				</li>
				<li>
					<div class="chanpin_top chanpin_top1">
						<h2>其他建设要求</h2>
					</div>
					<div class="chanpin_shihe">
						提供个性化的界面设计，定制化的功能需求。
					</div>
					<div class="chanpin_xiangqing">
						<p class="chanpin_li">团购网站建设</p>
						<p class="chanpin_li">威客任务型网站</p>
						<p class="chanpin_li">多种流行网站需求方案</p>
						<p>适合特定行业，特需求的客户建设属于自己的创新型互联网平台。</p>
					</div>
					<a href="/page_i_id_13/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/button_buy.gif"></a>
				</li>
			</ul>
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
