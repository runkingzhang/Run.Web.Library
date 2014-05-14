<?php /* Smarty version Smarty-3.0.7, created on 2012-01-12 18:54:14
         compiled from "./App/Tpl/jiuqu/Home/service_list.html" */ ?>
<?php /*%%SmartyHeaderCode:177084f0ebbd6b10723-22158164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aca45410fb5c272931b42a60d77da226e50b05e' => 
    array (
      0 => './App/Tpl/jiuqu/Home/service_list.html',
      1 => 1326365082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177084f0ebbd6b10723-22158164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/company.css" />
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/js/jquery-1.7.js"></script>

<title><?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
</head>

<body>

<?php $_template = new Smarty_Internal_Template('./App/Tpl/jiuqu/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="all">
  
    <div class="white_bg">
    	<div class="top_img">
    		<img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/try3.jpg" width="996" height="180" />
    	</div>
        <div class="com_head">
        	<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
<span class="en eng">Service</span>
            <div class="location"><a href="/">首页</a>&nbsp;&gt;&nbsp;<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']);
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
/"><?php echo $_smarty_tpl->getVariable('thisapp_mbx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mbx']['index']]['name'];?>
</a>
			&gt; <?php endfor; endif; ?>
			<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('thisapp')->value['action'];?>
_i_id_<?php echo $_smarty_tpl->getVariable('thisapp')->value['id'];?>
/"><?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
</a></div>
        </div>
		<div class="service_list1 service_list ">
        	<ul>
            	<li>
				<div>
					
					<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_17"><span>广告制作</span> Advertising production</a></h1>
					<div class="service_list_left">
						<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_17"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right1">
					</div>
					<div class="clear"></div>
				</div>
            	</li>
                <li>
				<div>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_21"><span>建筑表现</span> Building performance</a></h1>
					<div class="service_list_left">
						<p>建筑展示包括建筑动画和建筑效果图，九趣有多年的建筑展示设计经验。建筑动画：建筑动画通常利用计算机软件来表现设计师的意图，让观众体验建筑空间感受...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_21"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right2">
					</div>
					<div class="clear"></div>
				</div>
            	</li>
                <li>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_20"><span>数字展厅</span> Digital exhibition hall</a></h1>
					<div class="service_list_left">
						<p>利用计算机生成一个逼真的三维虚拟环境，通过自然技能使用传感设备与之相互作用的、一种由计算机生成的高技术模拟系统。作为一项尖端科技，虚拟...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_20"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right3">
					</div>
					<div class="clear"></div>
            	</li>
				
				<li>
				<div>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_60"><span>医疗教学</span> Medical teaching</a></h1>
					<div class="service_list_left">
						<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_60"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right4">
					</div>
					<div class="clear"></div>
				</div>
            	</li>
                <li>
				<div>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_58"><span>旅游仿真</span> Tourism simulation</a></h1>
					<div class="service_list_left">
						<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_58"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right5">
					</div>
					<div class="clear"></div>
				</div>
            	</li>
                <li>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_25"><span>文物古迹</span> Cultural relics</a></h1>
					<div class="service_list_left">
						<p>古建筑文化遗产不可再生，而修缮保护方法是多样的，选择最佳的古建筑修缮保护方案显得尤为重要，通过虚拟仿真的办法对古建筑修缮保护，是对修缮保护历史...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_25"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right6">
					</div>
					<div class="clear"></div>
            	</li>
				
                <li>
				<div>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_61"><span>军事仿真</span> Military simulation</a></h1>
					<div class="service_list_left">
						<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_61"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right7">
					</div>
					<div class="clear"></div>
				</div>
            	</li>
                <li>
				<div>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_27"><span>工业应用</span> Industrial application</a></h1>
					<div class="service_list_left">
						<p>九趣运用成熟专业的三维成像及虚拟技术应用在工业仿真和演示中。1 、工业产品的外观设计及物理仿真测试。2 、生产线流程仿真，用于技能培训和生产模拟。</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_20"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right8">
					</div>
					<div class="clear"></div>
				</div>
            	</li>
                <li>
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_28"><span>市政规划</span> The municipal planning</a></h1>
					<div class="service_list_left">
						<p>主要应用在市政园林设计上，也被称之为市政园林造景。它通过虚拟漫游、三维效果图、漫游动画等方式来展示设计效果，供决策者、设计者、工程人员以及...</p>
						<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_28"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/learn_more.png"  /></a>
					</div>
					<div class="service_list_right9">
					</div>
					<div class="clear"></div>
            	</li>
            </ul>
            <div class="clear"></div>
          
<?php $_template = new Smarty_Internal_Template('./App/Tpl/jiuqu/Home/gbook.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </div>
    </div>
    
  
  
  <div class="clear"></div>
  
  <?php $_template = new Smarty_Internal_Template('./App/Tpl/jiuqu/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
