<?php /* Smarty version Smarty-3.0.7, created on 2012-02-13 19:54:03
         compiled from "./App/Tpl/hkxq/Home/Page_i.html" */ ?>
<?php /*%%SmartyHeaderCode:83684f38f9db701f50-39679661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0611789339ec2dafba7782af1285208f9fc95945' => 
    array (
      0 => './App/Tpl/hkxq/Home/Page_i.html',
      1 => 1329132277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83684f38f9db701f50-39679661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_myselect')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\function.myselect.php';
?><!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description"  content="" />
<title><?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('arow')->value['des'];?>
" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/css/index.css" />
</head>

<body id="articlelist_i">
<!--wrapper-->
<div id="wrapper">
<!--header-->

<?php $_template = new Smarty_Internal_Template('./App/Tpl/hkxq/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--header  end-->
	
	<!--container-->
	<div id="container">
	
	<div  id="breadcrumb" ><a href="/">首页</a>&nbsp;&nbsp;&gt;&nbsp;<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']);
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
	 
		
		
		<!--content-->
		<div id="content" class="clearfix">
			
				<div class="articlelist_top"></div>
				<div class="articlelist_text">
					
					<?php echo $_smarty_tpl->getVariable('thisapp')->value['content'];?>

				</div>
				
				<div class="articlelist_bottom">
				</div>
			
		</div>
		<!--content End--> 
		<!--sidebar-->
		<div id="sidebar">
			<div class="sidebarNav">
				<div>
					<h2>网站导航</h2>
					
				</div>
				<ul  class="list ">
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['catbro']);
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
</a></li>
				<?php endfor; endif; ?>
				<!--<li><a href="#"> <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/cBottom_li_img.jpg" width="150" height="100" /></a>
							<a href="#"> <p>万事达集团企业设计</p>
						</a> </li>
					<li><a href="#"> <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/cBottom_li_img.jpg" width="150" height="100" />
							<p>万事达集团企业设计</p>
						</a> </li>
					<li><a href="#"> <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/cBottom_li_img.jpg" width="150" height="100" />
							<p>万事达集团企业设计</p>
						</a> </li> -->
				</ul>
			</div>
			<div class="listBoxBottom">
			</div>
			
			
			<div class="sidebarNav two">
				<div>
					<h2>浏览排行</h2>
					
				</div>
				<ul  class="list">
				
					<?php echo smarty_function_myselect(array('w'=>'  Article.status=1 ','sort'=>'click desc','field'=>'title,id,color','limit'=>10),$_smarty_tpl);?>

					
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['name'] = 'hot';
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['hot']['total']);
?>
				<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['id'];?>
/"><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['hot']['index']]['title'];?>
</a> </li>
				<?php endfor; endif; ?>
				</ul>
			</div>
			<div class="listBoxBottom">
			</div>
		</div>
		
		<!--sidebar End-->
		<div class="clear">
		</div>
		
		
	</div>
	
	<!--container End--> 
	<!--footer -->
<?php $_template = new Smarty_Internal_Template('./App/Tpl/hkxq/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--footer End-->
	<!--footer-->
	
</div>
</body>
</html>
