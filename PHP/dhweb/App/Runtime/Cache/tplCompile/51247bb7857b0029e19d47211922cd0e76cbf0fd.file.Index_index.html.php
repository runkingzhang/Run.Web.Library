<?php /* Smarty version Smarty-3.0.7, created on 2012-02-18 14:53:55
         compiled from "./App/Tpl/huanke/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:145654f3f4b03a77044-67207592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51247bb7857b0029e19d47211922cd0e76cbf0fd' => 
    array (
      0 => './App/Tpl/huanke/Home/Index_index.html',
      1 => 1329548033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145654f3f4b03a77044-67207592',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_myselect')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\function.myselect.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" />
<link rel="stylesheet" type="text/css" href="../Home/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/css/index.css" />
</head>
<body id="index">
<div id="wrapper">
	<div id="header">
		<div id="top">
			<div class=" topLink">
				<p>  <a href="http://www.nuist.edu.cn/newindex/">学校首页</a>&nbsp;&nbsp;<a href="http://www.nuist.edu.cn/bulletin/(S(ovhdl155liy2vn55p4q0qx55))/Default.aspx">信息公告</a> &nbsp;&nbsp;<a href="http://xcb.nuist.edu.cn/tjnews/">天际新闻</a></p>
			</div>
		</div>
		<div id="mainNav">
			<ul id="menu" >
				<li <?php if (!$_smarty_tpl->getVariable('thisapp_f')->value['id']){?>id="on"<?php }?>> <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
 ">首页</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==73){?>id="on"<?php }?>> <a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_73/ "> 学院概况</a>
				<div class="list">
		<a href="#">我的CHINAY</a><br />
        <a href="#">我的首页</a><br />
        <a href="#">我的日志</a><br />
		<a href="#">我的日志</a><br />
        <a href="#">我的相册</a><br />
        <a href="#">我的收藏</a><br />
	</div>
				
				 </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==74){?>id="on"<?php }?>> <a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_74/ "> 教学工作</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==75){?>id="on"<?php }?>> <a href="../Home1/ <?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_75"> 科学研究</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==76){?>id="on"<?php }?>> <a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_76/ ">研究生培养</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==77){?>id="on"<?php }?>> <a href="../Home1/ <?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_77">师资队伍</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==115){?>id="on"<?php }?>> <a href="../Home1/ <?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_115"> 学生工作</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==79){?>id="on"<?php }?>> <a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_79/ "> 实验中心</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==80){?>id="on"<?php }?>> <a href="../Home1/ <?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_80"> 党建工作</a> </li>
				<li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==81){?>id="on"<?php }?>> <a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_81/ ">文件下载</a> </li>
			</ul>
		</div>
	</div>
	<div id="container" class="clearfix">
		<div class="main">
			<div class="left">
				<div class="left1">
					<div class="left1_top">
						<span><img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/n_title_cion.jpg" />
						<a href="/JRY/toColumn.action?cid=10&amp;pageNum=1">学院公告</a></span> <span class="more"><a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_116">&gt;更多</a> </span>
					</div>
					<div class="left1_middle">
						<ul>
							<?php echo smarty_function_myselect(array('w'=>'article.aid in(116)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,pubdate','limit'=>9),$_smarty_tpl);?>

							<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['name'] = 'aid116';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid116']['total']);
?>
							<li> <a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid116']['index']]['id'];?>
" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid116']['index']]['color']){?> <font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid116']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid116']['index']]['title'];?>
 </font> <?php }else{ ?>
									<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid116']['index']]['title'];?>

									<?php }?> </a> </li>
							<?php endfor; endif; ?> 
							<!--
							<li> <a target="_blank" href="/JRY/toArticle.action?id=693" title="关于成立计算机与软件学院教学委员会的通知">关于成立计算机与软件学院教学委...</a> </li> -->
						</ul>
					</div>
					<div class="left1_bottom">
					</div>
				</div>
				<div class="tongdao">
					<div class="left1_top">
						<img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/jiantou.jpg" />
					</div>
					<div class="tongdao_middle">
						<ul>
							<li> <a href="mailto:sunnudt@163.com"><img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/yuanzhangxinxiang.jpg" />
								</a> </li>
							<li> <a href="mailto:zhshqin@nuist.edu.cn"><img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/shujixinxiang.jpg" />
								</a> </li>
						</ul>
					</div>
					<div class="tongdao_bottom">
					</div>
				</div>
				<div class="weather">
					<iframe width="200" scrolling="no" height="110" frameborder="0" vspace="0" hspace="0" marginheight="0" marginwidth="0" src="http://m.weather.com.cn/m/pn12/weather.htm "></iframe>
				</div>
				<div class="pic_link">
					<div class="left1_top">
					</div>
					<div class="pic_link_middle">
						<ul>
							<li> <a target="_blank" href="http://www.moe.edu.cn/"><img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/jiaoyubu.jpg" />
								</a> </li>
							<li> <a target="_blank" href="http://www.nsfc.gov.cn/"><img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/kexuejijin.jpg" />
								</a> </li>
							<li> <a target="_blank" href="http://www.cma.gov.cn/"><img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/qixiangju.jpg" />
								</a> </li>
							<li> <a target="_blank" href="http://www.nmic.gov.cn"><img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/qixiangxinxi.jpg" />
								</a> </li>
						</ul>
					</div>
					<div class="left1_bottom">
					</div>
				</div>
			</div>
			<div class="right">
				<div class="picture">
					<div class="test">
						<div class="comm_flash" style="height: 260px; width: 315px">
							<script language="javascript">
var focus_width = 315;
var focus_height = 240;
var text_height = 20;
var swf_height = focus_height + text_height;
var pics = '';
var links = '';
var texts = '';
function ati(url, img, title) {
	if (pics != '') {
		pics = "|" + pics;
		links = "|" + links;
		texts = "|" + texts;
	}
	pics = escape(img) + pics;
	links = escape(url) + links;
	texts = title + texts;
}
	ati('http://web2.nuist.edu.cn:8081/JRY/toArticle.action?id=644','/JRY/images/fiv.jpg', '学革命精神 促学院发展');

	ati('http://web2.nuist.edu.cn:8081/JRY/toArticle.action?id=300','/JRY/images/for.jpg', '2011级研究生开学典礼暨导师双选会');

	ati('http://web2.nuist.edu.cn:8081/JRY/toArticle.action?id=640','/JRY/images/thr.jpg', '科研工作总结暨产业化推进动员会');

	ati('http://web2.nuist.edu.cn:8081/JRY/toArticle.action?id=850','/JRY/images/two.jpg', '培养方案专家论证会');

	ati('http://web2.nuist.edu.cn:8081/JRY/toArticle.action?id=1148','/JRY/images/one.jpg', '学院召开教代会');

/*ati('http://www.kidsgaga.com/nova/viewthread.php?tid=190&amp;extra=page%3D1',
		'images/Communit/comm_flash1.jpg', '');
ati('http://www.kidsgaga.com/nova/viewthread.php?tid=190&amp;extra=page%3D1',
		'images/Communit/comm_flash2.jpg', '');
ati('http://www.kidsgaga.com/nova/viewthread.php?tid=171&amp;extra=page%3D1',
		'images/Communit/comm_flash3.jpg', '');
ati('http://www.kidsgaga.com/nova/viewthread.php?tid=190&amp;extra=page%3D1',
		'images/Communit/comm_flash4.jpg', '');*/
document
		.write('<embed height="'
				+ swf_height
				+ '" type="application/x-shockwave-flash" width="'
				+ focus_width
				+ '" src="images/prives.swf" wmode="opaque" flashvars="pics='
				+ pics
				+ '&amp;links='
				+ links
				+ '&amp;texts='
				+ texts
				+ '&amp;borderwidth='
				+ focus_width
				+ '&amp;borderheight='
				+ focus_height
				+ '&amp;textheight='
				+ text_height
				+ '" menu="false" bgcolor="#7A91BC" quality="high" allowscriptaccess="sameDomain" />');   
</script>
							<embed type="application/x-shockwave-flash" src="../Home1/index.action_files/prives.swf" wmode="opaque" flashvars="pics=/JRY/images/one.jpg|/JRY/images/two.jpg|/JRY/images/thr.jpg|/JRY/images/for.jpg|/JRY/images/fiv.jpg&amp;links=http%3A//web2.nuist.edu.cn%3A8081/JRY/toArticle.action%3Fid%3D1148|http%3A//web2.nuist.edu.cn%3A8081/JRY/toArticle.action%3Fid%3D850|http%3A//web2.nuist.edu.cn%3A8081/JRY/toArticle.action%3Fid%3D640|http%3A//web2.nuist.edu.cn%3A8081/JRY/toArticle.action%3Fid%3D300|http%3A//web2.nuist.edu.cn%3A8081/JRY/toArticle.action%3Fid%3D644&amp;texts=学院召开教代会|培养方案专家论证会|科研工作总结暨产业化推进动员会|2011级研究生开学典礼暨导师双选会|学革命精神 促学院发展&amp;borderwidth=315&amp;borderheight=240&amp;textheight=20" menu="false" bgcolor="#7A91BC" quality="high" allowscriptaccess="sameDomain" height="260" width="315"> </embed>
						</div>
					</div>
				</div>
				<div class="news">
					<div class="news_top">
						<img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/news.png" class="news_img" />
						<span class="top_tilte">新闻动态</span> <span class="more"><a href="/JRY/toColumn.action?cid=11&amp;pageNum=1">更多</a> </span>
					</div>
					<div class="news_content">
						<ul>
							<?php echo smarty_function_myselect(array('w'=>'article.aid in(117)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,pubdate','limit'=>9),$_smarty_tpl);?>

							<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['name'] = 'aid117';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid117']['total']);
?>
							<li> <span class="left1_middle_title"><a href="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid117']['index']]['id'];?>
" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid117']['index']]['color']){?> <font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid117']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid117']['index']]['title'];?>
 </font> <?php }else{ ?>
									<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid117']['index']]['title'];?>

									<?php }?> </a> </span>
									<span style="color: grey;" class="left1_middle_time"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid117']['index']]['pubdate'],"%Y-%m-%d");?>
</span>
									</li>
							<?php endfor; endif; ?>
							<!--<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1110" title="计软院组织新生到企业参观学习">计软院组织新生到企业参观学习</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-12</span> </li> -->
						</ul>
					</div>
				</div>
				<div class="clear">
				</div>
				<div class="right_div">
					<div class="right1">
						<div class="right1_top">
							<img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/quan.png" />
							<span class="top_tilte">科研动态</span> <span class="more"><a href="/JRY/toColumn.action?cid=12&amp;pageNum=1">更多</a> </span>
						</div>
						<div class="right1_content">
							<ul>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1082" title="我院召开2012年国家自然科学基金院内专家评审会">我院召开2012年国家自然科学基...</a></span> <span style="color: grey;" class="left1_middle_time">11-11-30</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=976" title="国家信息安全工程技术研究中心领导莅临计软院考察">国家信息安全工程技术研究中心领导...</a></span> <span style="color: grey;" class="left1_middle_time">11-11-10</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=932" title="科技处领导赴计软院调研科研工作">科技处领导赴计软院调研科研工作</a></span> <span style="color: grey;" class="left1_middle_time">11-11-02</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=63" title="计算机与软件学院举办第六届硕博论坛系列活动">计算机与软件学院举办第六届硕博论...</a></span> <span style="color: grey;" class="left1_middle_time">11-08-30</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=544" title=" 计算机与软件学院举办第六届硕博论坛系列活动"> 计算机与软件学院举办第六届硕博...</a></span> <span style="color: grey;" class="left1_middle_time">11-03-24</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=538" title=" 计软院举办第五届硕博论坛"> 计软院举办第五届硕博论坛</a></span> <span style="color: grey;" class="left1_middle_time">10-12-27</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=526" title="计软院举办研究生学术沙龙--项目经验交流会">计软院举办研究生学术沙龙--项目...</a></span> <span style="color: grey;" class="left1_middle_time">10-12-09</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=423" title="硕博论坛论学问，努力学习迎校庆&mdash;计软院第四届硕博论坛成功举行 ">硕博论坛论学问，努力学习迎校庆&mdash;...</a></span> <span style="color: grey;" class="left1_middle_time">10-05-13</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=363" title="2010年行业专项目录">2010年行业专项目录</a></span> <span style="color: grey;" class="left1_middle_time">09-12-15</span> </li>
							</ul>
						</div>
					</div>
					<div class="right1">
						<div class="right1_top">
							<img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/quan.png" />
							<span class="top_tilte">教务通知</span> <span class="more"><a href="/JRY/toColumn.action?cid=14&amp;pageNum=1">更多</a> </span>
						</div>
						<div class="right1_content">
							<ul>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1157" title="关于填报本学期实践课表和实习计划的通知">关于填报本学期实践课表和实习计划...</a> </span> <span style="color: grey;" class="left1_middle_time">12-02-13</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1156" title="2010级《电子技术基础》和《离散数学》补考安排">2010级《电子技术基础》和《离...</a> </span> <span style="color: grey;" class="left1_middle_time">12-02-11</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1155" title="2011-2012学年第二学期开学补考日程安排">2011-2012学年第二学期开...</a> </span> <span style="color: grey;" class="left1_middle_time">12-01-20</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1154" title="2011-2012学年第二学期选课工作安排">2011-2012学年第二学期选...</a> </span> <span style="color: grey;" class="left1_middle_time">12-01-12</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1129" title="2011-2012学年第1学期《大学语文》期末考试安排">2011-2012学年第1学期《...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-16</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1099" title="关于2011-2012学年第一学期期末考试的通知（TO：学生）">关于2011-2012学年第一学...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-12</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1101" title="2011级学生体育选课通知">2011级学生体育选课通知</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-07</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=975" title="2011-2012学年第一学期重修课程考试安排通知（持续更新）">2011-2012学年第一学期重...</a> </span> <span style="color: grey;" class="left1_middle_time">11-11-25</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1032" title="2011年度计算机与软件学院青年教师教学竞赛结果公示">2011年度计算机与软件学院青年...</a> </span> <span style="color: grey;" class="left1_middle_time">11-11-15</span> </li>
							</ul>
						</div>
					</div>
					<div class="right1">
						<div class="right1_top">
							<img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/quan.png" />
							<span class="top_tilte">学生工作</span> <span class="more"><a href="/JRY/toColumn.action?cid=13&amp;pageNum=1">更多</a> </span>
						</div>
						<div class="right1_content">
							<ul>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1150" title="关于转发省委组织部《关于做好2012年应届优秀大学毕业生选调工作的通知》的通知 ">关于转发省委组织部《关于做好20...</a> </span> <span style="color: grey;" class="left1_middle_time">12-01-04</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1149" title="关于2012年大学生科技创新基金项目的通知">关于2012年大学生科技创新基金...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-29</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1140" title="计软院召开教职工代表大会第一届第三次扩大会议">计软院召开教职工代表大会第一届第...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-22</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1141" title="展青春风采&#12288;扬爱国精神---记"纪念一二.九"六校联合知识竞赛">展青春风采&#12288;扬爱国精神---记"...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-22</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1142" title="我校举办第二届程序设计竞赛">我校举办第二届程序设计竞赛</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-22</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1143" title="计软院举办第六届研究生学术论坛">计软院举办第六届研究生学术论坛</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-22</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1144" title="计算机与软件学院举办宿舍文化节活动">计算机与软件学院举办宿舍文化节活...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-22</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1124" title="关于参加北京大学主办的"第三届全国软件专业人才设计与创业大赛"的通知">关于参加北京大学主办的"第三届全...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-14</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1093" title=""快乐晚自习"">"快乐晚自习"</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-06</span> </li>
							</ul>
						</div>
					</div>
					<div class="right1">
						<div class="right1_top">
							<img src="../Home1/<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/images/quan.png" />
							<span class="top_tilte">招生就业</span> <span class="more"><a href="/JRY/toColumn.action?cid=15&amp;pageNum=1">更多</a> </span>
						</div>
						<div class="right1_content">
							<ul>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1145" title="龙腾光电招聘信息">龙腾光电招聘信息</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-23</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1146" title="南京维拓科技有限公司招聘信息">南京维拓科技有限公司招聘信息</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-23</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1147" title="常州磐镭光电科技有限公司招聘信息">常州磐镭光电科技有限公司招聘信息</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-23</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1139" title="上海天哲计算机科技有限公司招聘信息">上海天哲计算机科技有限公司招聘信...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-22</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1132" title="武汉虹拓新技术有限责任公司招聘信息">武汉虹拓新技术有限责任公司招聘信...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-21</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1133" title="山东鲁能集团有限公司2012年应届毕业生招聘x信息">山东鲁能集团有限公司2012年应...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-21</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1134" title="烟台亚新利自动控制有限公司招聘信息  ">烟台亚新利自动控制有限公司招聘信...</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-21</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1135" title="辽宁省朝阳市气象局招聘需求信息">辽宁省朝阳市气象局招聘需求信息</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-21</span> </li>
								<li> <span class="left1_middle_title"><a target="_blank" href="/JRY/toArticle.action?id=1136" title="海南残友科技发展有限公司招聘信息">海南残友科技发展有限公司招聘信息</a> </span> <span style="color: grey;" class="left1_middle_time">11-12-21</span> </li>
							</ul>
						</div>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>
			<div class="clear">
			</div>
			<div class="link">
				<div class="link_top">
				</div>
				<div class="link_middle">
					<div class="link_content">
						<select onChange="javascript:window.open(this.options[this.selectedIndex].value)" name="yuannei">
							<option selected="selected"> --院内导航链接-- </option>
							<option value="http://web.nuist.edu.cn/jsj/"> 计软院旧版网站入口 </option>
						</select>
						<select onChange="javascript:window.open(this.options[this.selectedIndex].value)" name="yuanwai">
							<option selected="selected"> --院外导航链接-- </option>
							<option value="http://web2.nuist.edu.cn:8081/newYouth/index.do"> 飘扬在线 </option>
							<option value="http://web2.nuist.edu.cn:8080/dqkxxy/sy/index.html"> 大气科学学院 </option>
							<option value="http://web.nuist.edu.cn/hjkxnew/09/index.asp"> 环境科学与工程学院 </option>
							<option value="http://web2.nuist.edu.cn:8000/dqwlxy/"> 大气物理学院 </option>
							<option value="http://web.nuist.edu.cn/YYQX/"> 应用气象学院 </option>
						</select>
						<select onChange="javascript:window.open(this.options[this.selectedIndex].value)" name="xiaowai">
							<option selected="selected"> --校外导航链接-- </option>
							<option value="www.nsfc.gov.cn/Portal0/default152.htm"> 国家自然科学基金委员会 </option>
							<option value="www.miit.gov.cn/n11293472/index.html"> 工业和信息化部 </option>
							<option value="http://www.moe.edu.cn/"> 教育部 </option>
							<option value="http://www.cdgdc.edu.cn/"> 中国学位与研究生教育信息网 </option>
							<option value="http://www.ec.js.edu.cn/"> 江苏省教育厅 </option>
							<option value="http://www.jsnsf.gov.cn/index.aspx"> 江苏省自然科学基金 </option>
							<option value="http://202.119.175.199/index.php"> 江苏高校科技网 </option>
							<option value="http://www.jseic.gov.cn/"> 江苏省经济和信息化委员会 </option>
						</select>
					</div>
					<div class="clear">
					</div>
				</div>
				<div class="link_bottom">
				</div>
			</div>
		</div>
	</div>
	<!--footer --> 
	<?php $_template = new Smarty_Internal_Template('./App/Tpl/huanke/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
	<!--footer End-->
</div>
</body>
</html>
