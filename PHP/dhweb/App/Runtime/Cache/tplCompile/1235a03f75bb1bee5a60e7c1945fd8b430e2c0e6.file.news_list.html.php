<?php /* Smarty version Smarty-3.0.7, created on 2011-12-26 15:15:33
         compiled from "./App/Tpl/sizhitang/Home/news_list.html" */ ?>
<?php /*%%SmartyHeaderCode:37354ef81f1517c0f5-77691572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1235a03f75bb1bee5a60e7c1945fd8b430e2c0e6' => 
    array (
      0 => './App/Tpl/sizhitang/Home/news_list.html',
      1 => 1324883728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37354ef81f1517c0f5-77691572',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="四知堂广告公司,VI,设计" />
<title><?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="">
<meta name="description" content="顶尖的四知堂广告公司，四知堂设计公司，专业四知堂广告设计，标志设计，VI设计，CI设计，四知堂画册设计，网站设计，广告策划与平面设计，为南京企业提供一流品牌形象设计服务。ADC艺术指导会员;《包装与设计》推介公司">
<meta name="Keywords" content="四知堂广告公司 四知堂设计 四知堂设计公司 四知堂广告策划 四知堂企业形象设计 四知堂广告设计 四知堂标志设计 四知堂画册设计 四知堂VI设计 "> 
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
    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/c_title_img1.jpg" width="90" height="88" alt="tupian ">
    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/c_title_img2.jpg" width="90" height="88" alt="tupian ">
    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/c_title_img3.jpg" width="90" height="88" alt="tupian ">
    <h2>
    提供国际高品质形象品牌设计策略服务
    </h2>
    </div>
    <div class="c_main" id="news_list" >
		<div class="news_list_title">
			新闻动态.
		</div>
		<ul><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('articlelist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?> 
			<li><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['pubdate'],"%Y-%m-%d");?>
 </span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
</font> 
<?php }else{ ?>.  <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 
<?php }?></a>				</li>
			<?php endfor; endif; ?>
			<div class="clear"></div>
		</ul>
		<ul><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('articlelist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?> 
			<li><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['pubdate'],"%Y-%m-%d");?>
 </span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
</font> 
<?php }else{ ?>.  <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 
<?php }?></a>	</li>
			<?php endfor; endif; ?>
			<div class="clear"></div>
		</ul>
		<ul><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('articlelist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = (int)5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?> 
			<li><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['pubdate'],"%Y-%m-%d");?>
 </span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
</font> 
<?php }else{ ?>.  <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 
<?php }?></a>	</li>
			<?php endfor; endif; ?>
			<div class="clear"></div>
		</ul>
		<div class="fenye">
		<?php echo $_smarty_tpl->getVariable('pagenav')->value;?>

		</div>
		<div class="clear"></div>
		<div class="news_list_bottom">
			<span>四知堂设计在品牌设计的多个领域拥有强大的实力，卓越成就屡获行业认同，几年来与众多领先品牌建立合作，始终如一坚持高品质服务，业务涵盖企业形象设计，VI设计，标志设计及广告设计服务。四知堂不断整合品牌策略与创意设计，开创广告公司设计潮流。</span>
			<p>——视觉设计伙伴——品牌设计管家——</p>
		</div>
    </div>
</div>
<div class="clear"></div>

</div>
    
<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>
