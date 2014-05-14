<?php /* Smarty version Smarty-3.0.7, created on 2012-02-17 16:54:47
         compiled from "./App/Tpl/huanke/Home/articleList_view.html" */ ?>
<?php /*%%SmartyHeaderCode:137964f3e15d794b942-43701234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '673b72f2450dc46dd6069192809bc62ee2162944' => 
    array (
      0 => './App/Tpl/huanke/Home/articleList_view.html',
      1 => 1329468885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137964f3e15d794b942-43701234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description"  content="" />
<title><?php echo $_smarty_tpl->getVariable('arow')->value['title'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('arow')->value['des'];?>
" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/huanke/Home/css/index.css" />
</head>



<body>
<div id="wrapper">
	<!--header-->
	 <?php $_template = new Smarty_Internal_Template('./App/Tpl/huanke/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--header  end-->
	<div id="container" class="clearfix">
		<div class="main">
			<!--左侧导航-->
			<div class="list_right">
				<div class="list_r_top">
					<span>学院概况</span>
				</div>
				<div class="list_r_middle">
					<ul><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['name'] = 'catbro';
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('catbro')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']['total']);
?>
							<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['catbro']['index']]['action'];?>
_i_id_<?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['catbro']['index']]['id'];?>
/"><?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['catbro']['index']]['name'];?>
</a></li><?php endfor; endif; ?>
					</ul>
				</div>
				<div class="list_r_bottom">
				</div>
			</div>
			<div class="list_left list_left2">
				<div class="list_l_top">
					当前位置： <span><a href="/">首页</a>&nbsp;&nbsp;&gt;&nbsp;<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']);
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
</a></span>
				</div>
				<div class="article_content">
					<div class="content_title">
						<h2><?php echo $_smarty_tpl->getVariable('arow')->value['title'];?>
</h2>
						<span>日期：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('arow')->value['pubdate'],"%Y-%m-%d");?>
          </span>
						<span>  来源：<?php echo $_smarty_tpl->getVariable('arow')->value['user_name'];?>
</span>
						<span>浏览：<?php echo $_smarty_tpl->getVariable('arow')->value['click']+1;?>
</span>
						
					
						
					</div><div class="content_article"><?php echo $_smarty_tpl->getVariable('arow')->value['body'];?>
</div>
					
				</div>
			</div>
			<div class="clear">
			</div>
		</div>	</div>
	<!--footer -->
<?php $_template = new Smarty_Internal_Template('./App/Tpl/huanke/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--footer End-->
</div>

</body>
</html>