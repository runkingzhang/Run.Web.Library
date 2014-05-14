<?php /* Smarty version Smarty-3.0.7, created on 2012-02-13 13:46:25
         compiled from "./App/Tpl/jiuqu/Home/join_us.html" */ ?>
<?php /*%%SmartyHeaderCode:286544f38a3b13ebaa8-14406951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec011a6068e9e92a63f2a7b30a2310afda954221' => 
    array (
      0 => './App/Tpl/jiuqu/Home/join_us.html',
      1 => 1326365081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286544f38a3b13ebaa8-14406951',
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
App/Tpl/jiuqu/Home/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/company.css">
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
<span class="en eng">Company Profile</span>
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
        <div class="com_left">
        	<ul>
            	<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_44">人才机制</a></li>
                <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_45">人才招聘</a></li>
            </ul>
        </div>
        <div class="com_right">
        	<div class="r_head">
            	&gt;&nbsp;人才机制
            </div>
            <div class="r_con">
            	 <p>人才是创业之本、发展之源；人才是一个企业中最宝贵、最活跃的因素。而企业作为一种人的集合的文化共同体，当然要讲究求才用人之道。而这种求才用人之道，除了要有相应的制度保证外，更重要的是在企业中形成一种员工人人认同的企业经营理念和目标，并为之产生群体合力的企业文化氛围。

    有才之士寻找的是一项长期发展的事业及愉快的工作环境，而非仅仅是一份工作。而对目前正在努力工作的九趣人而言，我们相当重视如何塑造充满挑战、创新和自由的工作气氛，使九趣员工不仅拥有现在，而且也能预见未来。

    只要您有创业的激情与梦想，欢迎加入九趣，公司将为您提供良好的晋升通道和广阔的职业发展空间！</p>

        

            </div>
        </div>
        <div class="clear"></div>
    </div>
    
  
  
  <div class="clear"></div>
  <div class="foot">
  	<p>Copyright&nbsp;©&nbsp;2008&nbsp;南京九趣动画制作有限公司地址：南京市珠江路未来城849室<br>免费咨询电话：4006-999-623&nbsp;&nbsp;电话：025-86883585</p>
  </div>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
