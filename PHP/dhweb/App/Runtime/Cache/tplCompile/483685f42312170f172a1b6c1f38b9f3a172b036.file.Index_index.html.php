<?php /* Smarty version Smarty-3.0.7, created on 2013-01-14 11:35:09
         compiled from "./App/Tpl/duohuostudio/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2654750f37ced2850b6-36759984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483685f42312170f172a1b6c1f38b9f3a172b036' => 
    array (
      0 => './App/Tpl/duohuostudio/Home/Index_index.html',
      1 => 1358134506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2654750f37ced2850b6-36759984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_myselect')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\function.myselect.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/css/index.css" />


</head>

<body>

	
<?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuostudio/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
    
<div id="container">
<?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuostudio/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="content">
    <div class="c_title">
    <embed src=" <?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/szt.swf" quality="high" width="270" height="88" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>
    <h2>
    Now or Never！The Best or Nothing！
    </h2>
    </div>
    <div class="c_main">
    <div class="main_left">
    <div class="what_is">
    <h2><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/what_duohuo.jpg" width="355" height="82" alt="多火工作室简介I" /></h2>
    <div class="article">
    <p>多火工作室(duohuo studio)成立于2009年11月16日，是目前南京信息工程大学里唯一一个面向学校以及企业提供网站建设，移动应用开发，视觉设计等服务的大学生团体工作室。</p>

	<p>工作室位于南京信息工程大学大学生活动中心201室，软硬件设施齐全。在过去的几年中已经成功为校内外数十家企业单位建设网站，为大型活动开发互动平台，为学校社团量身定做信息管理系统，取得了一定的成绩，工作室知名度与日俱增。</p>

	<p>如今多火分为视觉设计部，移动开发部，程序开发部三个核心部门，我们希望通过我们的努力让他人真正感受到科技改变生活。</p>
	
	<p>我们怀着IT人与生俱来的自信与睿智，细心地规划着我们的道路。我们无比珍惜时间，生命可以归结为一种简单的选择：要么忙于生存，要么赶着去死。我们无比珍惜身边的伙伴，因为我们不知何时就会天各一方。我们不怕背井离乡的孤独，因为我们年轻，有着闯荡世界的勇气。我们永不后悔，因为我们坚信这是我们的命运。</p>

	<p>我们一直坚信是这样一种叛逆而又坚定的信念支持着我们这群人。同时我们也坚信有千千万万个想要发光的沙砾，多火工作室希望成为喧嚣中的一片象牙之塔，永远向各位有志于中国IT产业发展的青年们敞开大门，互联网的明天属于我们！</p>
  
    </div>
    </div>
    <div class="how_vi">
    <h2><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/duohuo_jingsheng.jpg" width="355" height="60" alt="多火精神和理念" /></h2>
    <div class="article">
    <p>我们根据企业不同的发展阶段的品牌要求，从战略的角度为其量身定制不同的解决方案，并对后期管理进行科学的管理，以解决在商业与形象沟通上可能存在的各种问题。</p>
<p>我们以其独到的策略见解、创作优势，成功地完成各类品牌规划设计项目，创造出具有独特价值和市场持续竞争力的品牌，并协助中国企业创建具有全球价值的国际品牌！</p>

    </div>
    </div>
    </div>
    <div class="main_right">
    <div class="m_r_title"><h2>我们做过哪些项目？</h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_2">more</a></div>
    <ul>
	<?php echo smarty_function_myselect(array('w'=>'article.aid in(2) and Article.status=1 ','sort'=>'pubdate desc','field'=>'title,id,color','limit'=>10),$_smarty_tpl);?>

	
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['name'] = 'aid2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid2']['total']);
?>
    <li>
    <a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid2']['index']]['id'];?>
/" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/m_r_ul_img.jpg" width="315" height="115" /></a>
    <h5><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid2']['index']]['id'];?>
/" target="_blank"> <?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid6']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid2']['index']]['color'];?>
" >{$row[aid2].title}}</font> 
<?php }else{ ?>   <?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid2']['index']]['title'];?>
 
<?php }?></a></h5>
    <p><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid2']['index']]['des'];?>
 </p>
    </li>
     <?php endfor; endif; ?>
    
    </ul>
    </div>
    <div class="clear"></div>
    
    </div>
</div>
<div class="clear"></div>

</div>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuostudio/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
   
</body>
</html>
