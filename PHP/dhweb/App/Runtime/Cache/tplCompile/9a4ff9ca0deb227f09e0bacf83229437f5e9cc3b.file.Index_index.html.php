<?php /* Smarty version Smarty-3.0.7, created on 2012-03-16 19:20:50
         compiled from "./App/Tpl/duohuo/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:235864f632212e0dc56-29102367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4ff9ca0deb227f09e0bacf83229437f5e9cc3b' => 
    array (
      0 => './App/Tpl/duohuo/Home/Index_index.html',
      1 => 1331896844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235864f632212e0dc56-29102367',
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
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/css/index.css" />
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/jquery.tools.min.js"></script>

<!--<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/mobilyslider.js"></script>

<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/index_slider.js"></script>-->

</head>

<body>

<!--联系框开始-->
<!--<div id="contart_us_box">

	<div class="a_wrapper">

		<a href="http://sighttp.qq.com/msgrd?v=1&uin=385819220&site=多火网络&menu=yes">网站建设</a><br/>

		<a href="http://sighttp.qq.com/msgrd?v=1&uin=385819220&site=多火网络&menu=yes">软件系统</a><br/>

		<a href="http://sighttp.qq.com/msgrd?v=1&uin=385819220&site=多火网络&menu=yes">视觉设计</a><br/>

	</div>
<!--联系框结束-->


<?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuo/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="container">

	<div class="index_flash"> 
		
		<!-- BEGIN SLIDER -->
		
		<div class="slider" style="text-align:center ; margin-bottom:10px">
			<embed width="942" height="300" src="/upload/flash/banner.swf" type="application/x-shockwave-flash" wmode="transparent"></embed>
</div>
		
		<!-- END SLIDER --> 
		
</div>
	
	<!--Content-->
	
	<div id="content">
		<div class="c_siderbar">
			<h2><span class="c_title">多火动态</span>&nbsp;&nbsp;<span>offical news</span><a href="/articlelist_i_id_23/" class="more" target="_blank">更多</a></h2>
			<div >
				<ul>
					<?php echo smarty_function_myselect(array('w'=>'1 and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,pubdate','limit'=>8),$_smarty_tpl);?>

					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['name'] = 'dhdt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dhdt']['total']);
?> <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['dhdt']['index']]['id'];?>
/" target="_blank"> <?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['dhdt']['index']]['color']){?> <font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['dhdt']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['dhdt']['index']]['title'];?>
</font> <?php }else{ ?>
						<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['dhdt']['index']]['title'];?>
 		
						<?php }?> </a> 
						
						<!--<span>[<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['dhdt']['index']]['pubdate'],"%m-%d");?>
]</span>--></li> <?php endfor; endif; ?>
				</ul>
	</div>
</div>
		<div class="content_r"> 
				<img  src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner/banner_index1.png">
		</div>
		<div class="clear"> </div>
		
		<!--中间部分条框开始-->
		<div class="about_duohuo">
				<ul>
						<li>
								<div>
								<img  src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/aboutduohuo_li1.gif">
								<h4>高校资源</h4>
						</div>
								<p>首批入驻江苏省创业园精品企业 <br/>
								国家重点院校合作单位 <br/>
								权威教授导师技术支持顾问<br/>
								本科生研究生实训基地</p>
					</li>
						<li>
								<div>
								<img  src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/aboutduohuo_li2.gif">
								<h4>市场资源</h4>
						</div>
								<p>多年IT互联网行业经验 <br/>
								B2B SNS主流电子商务模式研究 <br/>
								精准的市场定位和发展趋势判断 <br/>
								多家大型IT公司密切合作</p>
					</li>
						<li class="last">
								<div>
								<img  src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/aboutduohuo_li3.gif">
								<h4>网络资源</h4>
						</div>
								<p>立足互联网发展前沿 <br/>
								最大程度地利用网络的价值 <br/>
								多平台多应用多行业的<br/>
								一站式网络综合解决方案</p>
					</li>
				
			</ul>
		
	</div>
		<!--中间部分条框结束-->
		<!--选项卡开始-->
		<div class="content_main">
			<h2><span class="c_title">多火网络服务介绍</span>&nbsp;&nbsp;&nbsp;<span>service introduction</span><a href="/articlelist_i_id_23/" class="more" target="_blank">查看综合案例</a></h2>
				<!--选项卡头部-->
			<div class="content_nav">
				<ul class="tabs">
					<li><a href="/page_i_id_1" class="on">
						<h2>网站建设推广</h2>
						</a></li>
					<li><a href="/page_i_id_2">
						<h2>管理信息系统</h2>
						</a></li>
					<li><a href="/page_i_id_3">
						<h2>移动平台开发</h2>
						</a></li>
		</ul>
				<div class="clear"> </div>
				<!--选项卡主体-->
				<div class="panes" >
					<!--第一个选项卡-->
					<div style="display: block;">
						<!--单个选项卡头部-->
						<div class="panes_head">
							<span> 服务分类</span>
							<span> 详情介绍</span>
							<span> 成功案例</span>
				</div>
					<!--单个选项卡第一部分内容 left-->
						<div class="m_s_menu">
							
							<ul>
								<li><a href="/page_i_id_8" class="on">精品企业门户</a></li>
								<li><a href="/page_i_id_9">在线网店商城</a></li>
								<li><a href="/page_i_id_10">综合论坛社区</a></li>
								<li><a href="/page_i_id_11">B2B/B2C电子商务</a></li>
								<li><a href="/page_i_id_12">网络推广SEO</a></li>
								<li><a href="/page_i_id_13">其他建站需求</a></li>
					</ul>
							<div class="co_contact_001">
								<div><h3>025-58053100</h3>
									<h3>151-9581-9107</h3></div>
								<p>
								<span>QQ:</span> 385819220 <a href="#"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/qq_online.jpg"></a>
							</p>
					</div>
							
				</div>
				<!--单个选项卡中间-->
						<div class="advantage">
							<h2>中国首家CESV全方位互联网服务商</h2>
							<ul >
								<li>
									<h3>Customization </h3>
									<p>深度行业发掘，虚拟网络+现实市场 综合方案需求 </p>
						</li>
								<li>
									<h3>Expansibility</h3>
									<p>产品可升级扩展，一站式专业技术支持，为后期发展节约时间和成本<span><a href="#">查看详情</a></span> </p>
						</li>
								<li>
									<h3>Service</h3>
									<p>终身管家服务，不再重销售，轻售后； <span><a href="#">查看详情</a></span></p>
						</li>
								<li>
									<h3>Value</h3>
									<p>更关心为客户创造市场价值，而不仅仅是产品本身;<span><a href="#">查看详情</a></span></p>
						</li>
					</ul>
				</div>

						<!--单个选项卡右边-->
						<div class="successful_case">
                	<ul>
                    	<li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                     </ul>
                     <div class="case_btn">
                     	<div class="left"></div>
                        <div class="right"></div>
                     </div>
                </div>
						<div class="clear"> </div>
			</div>
				
				<!--第二个选项卡-->
					<div style="display: none;">
					<div class="panes_head">
							<span> 服务分类</span>
							<span> 详情介绍</span>
							<span> 成功案例</span>
				</div>
						<div class="m_s_menu">
							<div class="m_s_menu_top"> </div>
							<ul>
								<li><a href="#">卓越的界面体验</a></li>
								<li><a href="#">快捷的数据交互</a></li>
								<li><a href="#">灵活的模块设计</a></li>
								<li><a href="#">优化管理流程</a></li>
								<li><a href="#">完善的信息化服务</a></li>
								<li><a href="#">周到的后期服务</a></li>
					</ul>
					<div class="co_contact_001">
								<div><h3>025-58053100</h3>
									<h3>151-9581-9107</h3></div>
								<p>
								<span>QQ:</span> 385819220 <a href="#"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/qq_online.jpg"></a>
							</p>
					</div>
							
				</div>
						<div class="advantage">
							<h2>多火MIS ：服务型软件系统之典范</h2>
							<ul>
								<li>
									<h3>我们更懂您</h3>
									<p>按照企业规模模式定制开发管理信息系统，去除无用繁复功能，保证简单和易用性 </p>
						</li>
								<li>
									<h3>我们想的更远</h3>
									<p>按照企业发展规划进行构架，保证扩展性，分期开发整合，降低成本，助企业腾飞 </p>
						</li>
								<li>
									<h3>我们坚持创新</h3>
									<p>坚持使用最新且稳定成熟的技术和业界解决方案，保证数据稳定性、安全性和运行效率</p>
						</li>
								<li>
									<h3>我们更专业</h3>
									<p>深厚的架构经验，高效的开发团队，让每个问题都迎刃而解！让您从容面对每个难题。</p>
						</li>
					</ul>
				</div>
						<div class="successful_case">
                	<ul>
                    	<li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                     </ul>
                     <div class="case_btn">
                     	<div class="left"></div>
                        <div class="right"></div>
                     </div>
                </div>
						<div class="clear"> </div>
			</div>
			<!--第三个选项卡-->
					<div style="display: none;">
					<div class="panes_head">
							<span> 服务分类</span>
							<span> 详情介绍</span>
							<span> 成功案例</span>
				</div>
						<div class="m_s_menu">
							
							<ul>
								<li><a href="#">掌上办公平台</a></li>
								<li><a href="#">一体化解决方案</a></li>
								<li><a href="#">移动电子商务</a></li>
								<li><a href="#">移动社交网络</a></li>
					</ul>
					<div class="co_contact_001">
								<div><h3>025-58053100</h3>
									<h3>151-9581-9107</h3></div>
								<p>
								<span>QQ:</span> 385819220 <a href="#"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/qq_online.jpg"></a>
							</p>
					</div>
							
				</div>
						<div class="advantage">
							<h2>多火随身行，移动办公，移动应用</h2>
							<ul>
								<li>
									<h3>产品一体化</h3>
									<p>移动应用可与网站或者系统软件无缝整合，线上精彩，移动办公及时掌控； </p>
						</li>
								<li>
									<h3>便捷移动</h3>
									<p>超越空间障碍，移动办公从多火开始。软件功能根据企业管理方式进行设计，简单易用 </p>
						</li>
								<li>
									<h3>企业需求方向</h3>
									<p>针对办公和电子商务两个方向分别定制不同的移动网络应用需求。实现最佳的体验效果 </p>
						</li>
								<li>
									<h3>海量用户分享</h3>
									<p>基于移动互联网海量用户基数，便于企业发掘潜在用户，营销目标实现质的飞跃。</p>
						</li>
					</ul>
				</div>
						<div class="successful_case">
                	<ul>
                    	<li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                        <li>
                        <a  class="case_pic" href="#"><img width="182px" height="110px;" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case1.jpg" /></a>
                        <h3><a href="#">辰龙幼儿教育</a></h3>
                        </li>
                     </ul>
                     <div class="case_btn">
                     	<div class="left"></div>
                        <div class="right"></div>
                     </div>
                </div>
						<div class="clear"> </div>
			</div>
		</div>
	</div>
			<div class="clear"> </div>
			
			<div class="content_main_bottom"> </div>
</div>


<div class="partner">
        	 <div class="pics">
             	<ul>
                	<li class="s1"></li>
                    <li class="line">&nbsp;</li>
                    <li class="s2"></li>
                    <li class="line">&nbsp;</li>
                    <li class="s3"></li>
                    <li class="line">&nbsp;</li>
                    <li class="s4"></li>
                    <li class="line">&nbsp;</li>
                    <li class="s5" style="margin-left:40px;"></li>
                </ul>
             </div>
             <div class="texts">
             
                
				<p>	<span>友情合作：</span>
       
				<?php echo smarty_function_myselect(array('model'=>'PlusFlink  ','w'=>'type=1','field'=>'text,img,url,id','limit'=>10,'lname'=>'flist','sort'=>'rank asc'),$_smarty_tpl);?>

				
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['name'] = 'fimg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('flist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fimg']['total']);
?><a href="<?php echo $_smarty_tpl->getVariable('flist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fimg']['index']]['url'];?>
" target="_blank"> <?php echo $_smarty_tpl->getVariable('flist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fimg']['index']]['text'];?>
 </a> <?php endfor; endif; ?> 
        </p>
             </div>
        </div>

		
		<!--Content End--> 
		
</div>
</div>
<div class="clear"> </div>

<!--footer --> 

<?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuo/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 

<!--footer End-->
</body>
</html>
