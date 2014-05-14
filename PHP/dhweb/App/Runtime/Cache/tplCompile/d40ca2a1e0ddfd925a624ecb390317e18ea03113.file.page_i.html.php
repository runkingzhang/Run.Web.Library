<?php /* Smarty version Smarty-3.0.7, created on 2012-02-13 13:45:51
         compiled from "./App/Tpl/jiuqu/Home/page_i.html" */ ?>
<?php /*%%SmartyHeaderCode:327524f38a38feb6569-87557112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40ca2a1e0ddfd925a624ecb390317e18ea03113' => 
    array (
      0 => './App/Tpl/jiuqu/Home/page_i.html',
      1 => 1329099299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327524f38a38feb6569-87557112',
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
            </ul>
        </div>
        <div class="com_right">
        	<div class="r_head">
            	&gt;&nbsp;<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>

            </div>
            <div class="r_con">
			<?php echo $_smarty_tpl->getVariable('thisapp')->value['content'];?>

			
            	<!--<ul>
					<li>
						<img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/try3.jpg" width="200px" height="200px" /></li>
						<p>昆山城市宣传片</p>
					</li>
				</ul>-->

            </div>
        </div>
        <div class="clear"></div>
    </div>
    
  
  
  <div class="clear"></div>
  <div class="foot">
  	<p>Copyright&nbsp;©&nbsp;2008&nbsp;南京九趣动画制作有限公司地址：南京市珠江路未来城849室<br />免费咨询电话：4006-999-623&nbsp;&nbsp;电话：025-86883585</p>
  </div>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
