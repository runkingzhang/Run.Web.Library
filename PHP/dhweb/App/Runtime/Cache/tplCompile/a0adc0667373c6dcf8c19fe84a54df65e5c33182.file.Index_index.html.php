<?php /* Smarty version Smarty-3.0.7, created on 2013-01-09 16:06:30
         compiled from "./App/Tpl/sizhitang/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:3248350ed2506f2f168-64229131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0adc0667373c6dcf8c19fe84a54df65e5c33182' => 
    array (
      0 => './App/Tpl/sizhitang/Home/Index_index.html',
      1 => 1326969073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3248350ed2506f2f168-64229131',
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
App/Tpl/sizhitang/Home/css/index.css" />


</head>

<body>

	
<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
    
<div id="container">
<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="content">
    <div class="c_title">
    <embed src=" <?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/szt.swf" quality="high" width="270" height="88" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>
    <h2>
    提供国际&nbsp;&nbsp;高品质形象品牌设计策略服务
    </h2>
    </div>
    <div class="c_main">
    <div class="main_left">
    <div class="what_is">
    <h2><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/what_is.jpg" width="355" height="82" alt="什么是VI" /></h2>
    <div class="article">
    <p>VI全称Visual Identity，企业VI视觉设计，是企业VI形象设计的重要组成部分。随着社会的现代化、工业化、自动化的发展，加速了优化组合的进程，其规模不断扩大，组织机构日趋繁杂，产品快速更新，市场竞争也变得更加激烈。另外，各种媒体的急速膨胀，传播途径不一而丛，受众面对大量繁杂的信息，变的无所适从。企业比以往任何时候都需要统一的、集中的VI设计传播，个性和身份的识别因此显得尤为重要。</p>
<p>是CIS系统最具传播力和感染力的部分。是将CI的非可视内容转化为静态的视觉识别符号，以无比丰富的多样的应用形式，在最为广泛的层面上，进行最直接的传播，设计到位、实施科学的视觉识别系统，是传播企业经营理念、建立企业知名度、塑造企业形象的快速便捷之途。</p>
<p>企业可以通过VI设计实施这一目的。对内征得员工的认同感，归属感，加强企业凝聚力，对外树立企业的整体形象，资源整合，有控制的将企业的信息传达给受众，通过视觉符码，不断的强化受众的意识，从而获得认同。近20年来，国内一些企业也逐渐引进了形象识别系统，最早的太阳神、健力宝，到后来的康佳、创维、海尔，也都在实践中取得了成功。在中国新兴的市场经济体制下，企业要想长远发展，有效的形象识别系统必不可少，这也成为企业腾飞的助跑器。
</p>
    </div>
    </div>
    <div class="how_vi">
    <h2><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/how_vi.jpg" width="355" height="60" alt=" 怎么开展VI工作" /></h2>
    <div class="article">
    <p>我们根据企业不同的发展阶段的品牌要求，从战略的角度为其量身定制不同的解决方案，并对后期管理进行科学的管理，以解决在商业与形象沟通上可能存在的各种问题。</p>
<p>我们以其独到的策略见解、创作优势，成功地完成各类品牌规划设计项目，创造出具有独特价值和市场持续竞争力的品牌，并协助中国企业创建具有全球价值的国际品牌！</p>

    </div>
    </div>
    </div>
    <div class="main_right">
    <div class="m_r_title"><h2>我们为那些企业提供过VI设计服务？</h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
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
App/Tpl/sizhitang/Home/images/m_r_ul_img.jpg" width="315" height="115" /></a>
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
<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
   
</body>
</html>
