<?php /* Smarty version Smarty-3.0.7, created on 2012-01-12 18:50:20
         compiled from "./App/Tpl/jiuqu/Home/header.html" */ ?>
<?php /*%%SmartyHeaderCode:67924f0ebaec0a2954-67533500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04adc4f1b4ec6db8c8a0b634e78a689eb0b67ac7' => 
    array (
      0 => './App/Tpl/jiuqu/Home/header.html',
      1 => 1326365081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67924f0ebaec0a2954-67533500',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="j_head">
<script type="text/javascript">
$(function(){
	/*
	$(".j_nav li a ").mousemove(function(event)
	{   
		event.stopPropagation();
	    var num=$(this).parent().prevAll().length+1;
		$(".xiala li").hide();
		$(".xiala .xiala"+num).show();	
	});
	$(".j_nav li a").mousemove(function(event)
	{
		event.stopPropagation();
		$(this).show();
	});
	$(document).mousemove(function()
	{
		$(".xiala li").hide();
	});
	*/
	var inflag = false;
		
	$('.xiala li').hide();
	$('.j_nav li a').mouseover(function(){
	    var num=$(this).parent().prevAll().length+1;
		$(".xiala li").hide();
		$(".xiala .xiala"+num).show();	
		inflag = true;
	}).mouseout(function(){
		//$(".xiala li").hide();
		inflag = false;
	});	
	
	$('.xiala li').hover(function(){
		inflag = true;
	},function(){
		inflag = false;
	});
	setInterval(function(){
		if(!inflag){
			//$('.menu_ar li').removeClass('current1');
			$('.xiala li').hide();
		}
	},500);
})	

</script>
	<div class="head_all">
		<div class="logo">
			<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/logo.gif" /></a>
		</div>
		<span class="call">全 国 服 务 热 线 : 4 0 0 6 - 9 9 9 - 6 2 3</span>
		<div class="clear"></div>
	</div>
</div>
	<div class="j_nav">
		<ul>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
">首页</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_1/">公司概况</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_2/">新闻中心</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_3/">业务内容</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_4/">服务领域</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_5/">成功案例</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_6/">加入我们</a></li>
        </ul>
		<div class="search">
		<form action="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_ss/">
                <input name="keywords" type="text" value="<?php echo $_GET['keywords'];?>
" class="text" />
                <input type="submit" value="搜索" class="button" />
			</form> 
        </div>
        <div class="clear"></div>
    </div>
	<ul class="xiala">
		<li class="xiala1"></li>
		
		<li class="xiala2" ><div class="xiala_wrapper"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_7"> 关于九趣 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_8"> 企业文化 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_9"> 企业荣誉 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_10"> 办公环境 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_11"> 联系我们 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_12"> 网站地图 </a></div>		
		<span class="li_right"></span>
		</li>
		
		<li class="xiala3"><div class="xiala_wrapper"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_13"> 公司资讯 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_14"> 行业动态 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_15"> 电子内刊 </a></div>		
		<span class="li_right"></span></li>
		
		<li class="xiala4"><div class="xiala_wrapper"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_16"> 多媒体展示 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_17"> 影视特效三维动画 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_18"> 虚拟现实 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_19"> 建筑数字图像 </a></div>		
		<span class="li_right"></span></li>
		<li class="xiala5"><div class="xiala_wrapper"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_20"> 展览展示 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_21"> 地产应用 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_22"> 建筑展示 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_23"> 数字城市 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_24"> 数字展馆 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_25"> 文物古迹 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_26"> 卡通动漫 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_27"> 工业应用 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_28"> 市政园林 </a></div>		
		<span class="li_right"></span></li>
		<li class="xiala6"><div class="xiala_wrapper"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_29"> 行政事业单位 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_34"> 房地产客户 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_39"> 企业类客户 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_42"> 建筑设计院 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_43"> 其他 </a></div>		
		<span class="li_right"></span></li>
		<li class="xiala7"><div class="xiala_wrapper"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_44"> 人才机制 </a>|<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_45"> 人才招聘 </a></div>		
		<span class="li_right"></span></li>
	</ul>