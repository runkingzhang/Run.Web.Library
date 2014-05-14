<?php /* Smarty version Smarty-3.0.7, created on 2012-02-27 22:10:30
         compiled from "./App/Tpl/hkxq/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:268054f4b8ed6a54417-60762727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02077968e3f2e9dad6b7c6d76785fbe2588b34e9' => 
    array (
      0 => './App/Tpl/hkxq/Home/Index_index.html',
      1 => 1330351823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268054f4b8ed6a54417-60762727',
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
App/Tpl/hkxq/Home/css/index.css" />
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/js/jquery.js"></script>
<script type=text/javascript src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/js/jquery.min.js"></script>
<script type=text/javascript src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/js/jquery.colorbox-min.js"></script>
<script type=text/javascript src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Homejs/lrtk.js"></script></head>





<body id="index">
<!--wrapper-->
<div id="wrapper">
	<!--Header--> 
	<?php $_template = new Smarty_Internal_Template('./App/Tpl/hkxq/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
	
	<!--Header End--> 
	
	<!--container-->
	<div id="container">
		<div class="c_top  clearfix">
			<div class="c_top_left">
				<div>
					<h2> <a href="">通知公告</a></h2>
				</div>
				<ul>
					<?php echo smarty_function_myselect(array('w'=>'article.aid in(21)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,pubdate','limit'=>10),$_smarty_tpl);?>

						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['name'] = 'aid21';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid21']['total']);
?>
						<li>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid21']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid21']['index']]['color']){?>  
				<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid20']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid21']['index']]['title'];?>

				
				</font>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid21']['index']]['title'];?>

				<?php }?>
				</a>
				
				<span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid21']['index']]['pubdate'],"%Y-%m-%d");?>
</span>
				</li>

			<?php endfor; endif; ?> 
				
				</ul>
			</div>
			<div class="c_top_right">
					<div id="banner">
        <div id="glume">
        <ul class="Limg">
		 <?php echo smarty_function_myselect(array('w'=>'article.img_url!=""    and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,img_url','limit'=>4),$_smarty_tpl);?>

					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['name'] = 'xqtp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['xqtp']['total']);
?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['xqtp']['index']]['id'];?>
/"> <img src="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['xqtp']['index']]['img_url'];?>
" width="450" height="305"  />
						</a> 
						<!--<div><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['xqtp']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['xqtp']['index']]['title'];?>
</a></div>  -->
						</li>
						<?php endfor; endif; ?>
        <!--<li ><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/banner1.jpg" />
		<
		</a>
		
		</li>
         <li ><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/banner2.jpg" />
		<div>sdk境内非考虑到</div>
		 </a>
		 </li>
		
         <li ><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/banner1.jpg" /></a></li>
		 
          <li ><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/banner1.jpg" /></a></li>
       -->
        
        
        </ul>
        
        <p class="Nubbt">
        <span class="on">1</span>
        <span class="">2</span>
        <span class="">3</span>
        <span class="">4</span>
        
        </p>
        <p></p>
      </div>
  <div class="clear"></div>
  </div>
				
			</div>
		</div>
		
		<!--content-->
		<div id="content" class="clearfix">
			<!--<div class="contentBanner">
				<img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/contentBanner.jpg" width="700" height="80" alt="诚邀校友荣归母校" />
			</div>
-->			<div class="contentLeft">
				<div class="listBox">
					<div>
						<h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_20/">院庆新闻</a></h2>
						<span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_20/">&gt; 更多</a></span>
					</div>
					<ul class="list">
					
					<?php echo smarty_function_myselect(array('w'=>'article.aid in(20)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>10),$_smarty_tpl);?>

						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['name'] = 'aid20';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid20']['total']);
?>
						<li>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid20']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid20']['index']]['color']){?>  
				<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid20']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid20']['index']]['title'];?>
</font>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid20']['index']]['title'];?>
 
				<?php }?>
				</a>
				</li>

			<?php endfor; endif; ?>
			</ul>
				</div>
				  
				<div class="listBox">
					<div id="listBox_div2">
						<h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_28/">活动指南</a></h2>
						<span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_28/">&gt; 更多</a></span>
					</div>
					<ul  class="list">
						<?php echo smarty_function_myselect(array('w'=>'article.aid in(31,30)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>5),$_smarty_tpl);?>

						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['name'] = 'aid28';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid28']['total']);
?>
						<li>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid28']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid28']['index']]['color']){?>  
				<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid28']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid28']['index']]['title'];?>
</font>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid28']['index']]['title'];?>
 
				<?php }?>
				</a>
				</li>

			<?php endfor; endif; ?>
					</ul>
				</div>
				  
			</div>
			<div class="contentRight">
			<div class="listBox">
					<div>
						<h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_43/">成果展示</a></h2>
						<span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_43/">&gt; 更多</a></span>
					</div>
					<ul  class="list">
							<?php echo smarty_function_myselect(array('w'=>'article.aid in(34,35)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>10),$_smarty_tpl);?>

						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['name'] = 'aid43';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid43']['total']);
?>
						<li>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid43']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid43']['index']]['color']){?>  
				<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid43']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid43']['index']]['title'];?>
</font>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid43']['index']]['title'];?>
 
				<?php }?>
				</a>
				</li>

			<?php endfor; endif; ?>
					</ul>
				</div>
				
				  
				<div class="listBox">
					<div id="listBox_div2" >
						<h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_44/">媒体视角</a></h2>
						<span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_44/">&gt; 更多</a></span>
					</div>
					<ul  class="list">
						<?php echo smarty_function_myselect(array('w'=>'article.aid in(40)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>10),$_smarty_tpl);?>

						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['name'] = 'aid40';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid40']['total']);
?>
						<li>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid40']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid40']['index']]['color']){?>  
				<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid40']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid40']['index']]['title'];?>
</font>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid40']['index']]['title'];?>
 
				<?php }?>
				</a>
				</li>

			<?php endfor; endif; ?>
					</ul>
				</div>
				  
			</div>
		</div>
		<!--content End--> 
		<!--sidebar-->
		<div id="sidebar">
			<div class="listBox  s_l_1" id="guanghui">
								<ul  class="list">
				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_24/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/gh1.jpg"   /></a>
				</li>
				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
Page_i_id_26/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/gh2.jpg"   /></a>
				</li>
				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_23/"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/gh3.jpg"   /></a>
				</li>
				</ul>
			</div>
			
			<div class="listBox s_l_2">
				<div>
					<h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_36/">下载专区</a></h2>
					<span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_36/">&gt; 更多</a></span>
				</div>
				<ul  class="list">
					<?php echo smarty_function_myselect(array('w'=>'article.aid in(36)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>10),$_smarty_tpl);?>

						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['name'] = 'aid36';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid36']['total']);
?>
						<li>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid43']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid36']['index']]['color']){?>  
				<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid36']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid36']['index']]['title'];?>
</font>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid36']['index']]['title'];?>
 
				<?php }?>
				</a>
				</li>

			<?php endfor; endif; ?>
				</ul>
			</div>
			
		</div>
		
		<!--sidebar End-->
		<div class="clear">
		</div>
		
		<!--下面是向左滚动代码-->
		<div class="tupianzhanshi "  ><h2><a href="#">图片展示</a></h2></div>
		<div class="colee_left" style="overflow:hidden;width:938px; padding:20px 10px; border:1px solid #BB0000;position:relative">
<!--
<table cellpadding="0" cellspacing="0" border="0">
<tr><td id="colee_left1" valign="top" align="center">
<table cellpadding="2" cellspacing="0" border="0">
<tr align="center">
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/001.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/002.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/003.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/004.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/005.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/006.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/007.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/008.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/009.jpg" height="200" width="400" /></a></p></td>
<td><p><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/0010.jpg" height="200" width="400" /></a></p></td>

</tr>
</table>

</td>
<td id="colee_left2" valign="top"></td>
</tr>
</table>
-->
	<ul style="float:left;position:relative;width:100000px">
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/01.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/001.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/02.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/002.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/03.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/003.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/04.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/004.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/05.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/005.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/06.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/006.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/07.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/007.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/08.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/008.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/09.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/09.jpg" height="200" width="400" /></a></li>
		<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/010.jpg" target=_blank><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/hkxq/Home/images/0010.jpg" height="200" width="400" /></a></li>
	</ul>
</div>
<script>
/*
//使用div时，请保证colee_left2与colee_left1是在同一行上.
var speed=30//速度数值越大速度越慢
var colee_left2=document.getElementById("colee_left2");
var colee_left1=document.getElementById("colee_left1");
var colee_left=document.getElementById("colee_left");
colee_left2.innerHTML=colee_left1.innerHTML
function Marquee3(){
if(colee_left2.offsetWidth-colee_left.scrollLeft<=0)//offsetWidth 是对象的可见宽度
colee_left.scrollLeft-=colee_left1.offsetWidth//scrollWidth 是对象的实际内容的宽，不包边线宽度
else{
colee_left.scrollLeft++
}
}
var MyMar3=setInterval(Marquee3,speed)
colee_left.onmouseover=function() {clearInterval(MyMar3)}
colee_left.onmouseout=function() {MyMar3=setInterval(Marquee3,speed)}
*/
</script>
	
	
	<!--container End--> 
	
	<!--footer --> 
	<?php $_template = new Smarty_Internal_Template('./App/Tpl/hkxq/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
	<!--footer End-->
	<!--banner js-->
<script language="javascript" type="text/javascript">

(function(){
    if(!Function.prototype.bind){
        Function.prototype.bind = function(obj){
            var owner = this,args = Array.prototype.slice.call(arguments),callobj = Array.prototype.shift.call(args);
            return function(e){e=e||top.window.event||window.event;owner.apply(callobj,args.concat([e]));};
        };
    }
})();

var glume = function(id){
    this.ctn = document.getElementById(id);
    this.adLis = null;
    this.btns = null;
	this.smdivs = null;
    this.animStep = 0.1;//动画速度0.1～0.9
    this.switchSpeed = 5;//自动播放间隔(s)
    this.defOpacity = 1;
    this.tmpOpacity = 1;
    this.crtIndex = 0;
    this.crtLi = null;
    this.adLength = 0;
    this.timerAnim = null;
    this.timerSwitch = null;
    this.init();
	
};// 给原型 赋予一些自己要用的数据

//给glume加原型数据  给原型绑定内容
glume.prototype = {
	
    fnAnim:function(toIndex){
        if(this.timerAnim){window.clearTimeout(this.timerAnim);}
        if(this.tmpOpacity <= 0){
            this.crtLi.style.opacity = this.tmpOpacity = this.defOpacity;
			
            this.crtLi.style.filter = 'Alpha(Opacity=' + this.defOpacity*100 + ')';
            this.crtLi.style.zIndex = 0;
            this.crtIndex = toIndex;
            return;
        }//给原型加上一些默认的数据
		
        this.crtLi.style.opacity = this.tmpOpacity = this.tmpOpacity - this.animStep;
        this.crtLi.style.filter = 'Alpha(Opacity=' + this.tmpOpacity*100 + ')';
        this.timerAnim = window.setTimeout(this.fnAnim.bind(this,toIndex),50);
    },
    fnNextIndex:function(){
        return (this.crtIndex >= this.adLength-1)?0:this.crtIndex+1;
    },
    fnSwitch:function(toIndex){
        if(this.crtIndex==toIndex){return;}
		
        this.crtLi = this.adLis[this.crtIndex];
        for(var i=0;i<this.adLength;i++){
            this.adLis[i].style.zIndex = 0;
        }
        this.crtLi.style.zIndex = 2;
        this.adLis[toIndex].style.zIndex = 1;
        for(var i=0;i<this.adLength;i++){
            this.btns[i].className = '';
        }
        this.btns[toIndex].className = 'on'
        this.fnAnim(toIndex);
    },
    fnAutoPlay:function(){
        this.fnSwitch(this.fnNextIndex());
    },
    fnPlay:function(){
        this.timerSwitch = window.setInterval(this.fnAutoPlay.bind(this),this.switchSpeed*1000);//zhebian *1000将相应的毫秒转化为秒了
    },
    fnStopPlay:function(){
        window.clearTimeout(this.timerSwitch);
    },
    init:function(){
        this.adLis = this.ctn.getElementsByTagName('li');
		this.smdivs = this.ctn.getElementsByTagName('div');
		
		
        this.btns = this.ctn.getElementsByTagName('p')[0].getElementsByTagName('span');
        this.adLength = this.adLis.length;
        for(var i=0,l=this.btns.length;i<l;i++){
            with({i:i}){
                this.btns[i].index = i;
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
            }
        }
        this.adLis[this.crtIndex].style.zIndex = 2;
        this.fnPlay();
        this.ctn.onmouseover = this.fnStopPlay.bind(this);
        this.ctn.onmouseout = this.fnPlay.bind(this);
    }
 	
		
};
var player1 = new glume('glume');


jQuery(function(){
		mouseOver=false;
		delta = 1;
		var ul = jQuery('.colee_left ul');
		var lis = jQuery('.colee_left ul li');
		vartime = 5000;
		ul.css({left:0});
		count = 0;
		intervalFunction = function(){
			finish = false;
			ul.animate({left:'-400px'},5000,'linear',function(){
				jQuery('.colee_left ul li').first().insertAfter(jQuery('.colee_left ul li').last());
				ul.css({left:0});
				finish = true;
			});
		};
		setInterval(function(){
			if(!mouseOver&&finish){
				intervalFunction();
			}
		},50);
		intervalFunction();
		jQuery('.colee_left ul').mouseover(function(){
			mouseOver = true;
			ul.stop(true);
			
		});
		jQuery('.colee_left ul').mouseout(function(){
			
			left = parseInt(ul.css('left').slice(0,-2));
			//alert(left);
			//alert(5000*(190+left)/190);
			ul.animate({left:'-400px'},5000*(400+left)/400,'linear',function(){
				finish = false;
				jQuery('.colee_left ul li').first().insertAfter(jQuery('.colee_left ul li').last());
				ul.css({left:0});
				mouseOver = false;
				finish = true;
			});
		}); 
	});
</script>


</body>
</html>
