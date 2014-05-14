<?php /* Smarty version Smarty-3.0.7, created on 2012-03-15 19:46:56
         compiled from "./App/Tpl/duohuo/Home/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:225804f61d6b0adb9a5-20106713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19bb5e21049ecacf4357de84746f5566a965c926' => 
    array (
      0 => './App/Tpl/duohuo/Home/footer.html',
      1 => 1331812014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225804f61d6b0adb9a5-20106713',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="footer">
	<div class="logo"><a href="#"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/logo.png"/></a></div>
    <div class="footer_right">
    	<ul>
        	<li><a href="#">首页</a></li>
            <li><a href="#">网站建设</a></li>
            <li><a href="#">软件系统</a></li>
            <li><a href="#">移动平台</a></li>
            <li><a href="#">综合案例</a></li>
            <li><a href="#">帮助中心</a></li>
            <li><a href="#" class="special">关于我们</a></li>
        </ul>
       
        <p class="site_info">
        多火网络科技有限公司 @2008-2011 苏ICP备10078587号 站长统计<br />
		地址：<span>江苏省南京市建宁路65号江苏省创业园304</span><br />
		邮编：<span>210015</span> 邮箱：<span>service@duohuo.net</span> 24小时咨询电话<span>15195819107</span>
        </p>
        <span class="toTop"><a href="#">TOP</a></span>
    </div>
    <p class="renzheng">
    	<img border="0" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/2.gif"/>
		<img border="0" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/1.gif"/>
		<img border="0" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/2.jpg"/>
		<img border="0" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/3.gif"/>
		<img border="0" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/7.gif"/>
    </p>
</div>
<script>
  //这边应该是滚动的js
 $(document).ready(function(){/*
	var offsetY = $(window).height() - $('#contart_us_box').height() + $(document).scrollTop();
	
	$('#contart_us_box').css({'top':offsetY}); 
	
	$(this).animate({top: offsetY,height:"200px"}, 2000);
	$(window).scroll(function(){scroll_position('go_top_bottom');});
	$(window).resize(function(){scroll_position('go_top_bottom');});
	$(window).load(function(){scroll_position('go_top_bottom');}); 
	
	if(!isScroll())
	{
		$('#go_top_bottom').hide();
	}
	else
	{
		 $('#go_top_bottom').show();
	}
	*/
	
	$('.quick_link .tabs li a').mouseover(function(){
		$(this).parent().siblings().find('a').removeClass('on');
		$(this).addClass('on');
		var index = $('.quick_link .tabs li a').index(this);
		$('.quick_link .panes div').hide().eq(index*2).show();
	});
	$('.content_nav .tabs li a').mouseover(function(){
		$(this).parent().siblings().find('a').removeClass('on');
		$(this).addClass('on');
		var index = $('.content_nav .tabs li a').index(this);
		//alert(index);
		$('.content_main .content_nav .panes>div').hide().eq(index).show();
	});
	
	var timeout         = 500;
	var flag = false;
	
	$('#sddm>li>a:gt(0)').hover(function(){
			flag = true;
			var id = $(this).index('#sddm>li>a');
			$('.menu_text').hide();
			$('.menu_text').eq(id).show();
			$('#sddm>li>a').removeClass('on');
			$(this).addClass('on');
		},function(){
			flag = false;
			var _this = this;
			setTimeout(function(){
				if(!flag){
					$('.menu_text').hide();
					$('#sddm>li>a').removeClass('on');
				}
			},timeout);
	});

	$('.menu_text').hide().hover(function(){
			flag = true;
		},function(){
			flag = false;
			$(this).hide();
			$('#sddm>li>a').removeClass('on');
	});
});

</script>
<div style="display:none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F963c4985dbecb3433ec2a453f2434467' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
