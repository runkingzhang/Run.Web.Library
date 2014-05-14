<?php /* Smarty version Smarty-3.0.7, created on 2011-12-26 20:50:56
         compiled from "./App/Tpl/jiuqu/Home/ArticleList_i.html" */ ?>
<?php /*%%SmartyHeaderCode:241064ef86db0acbc09-49006642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dc12d5f2aee2f99564513ee1b20078d92870210' => 
    array (
      0 => './App/Tpl/jiuqu/Home/ArticleList_i.html',
      1 => 1324447627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241064ef86db0acbc09-49006642',
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
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/company.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/news.css">
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/js/jquery-1.7.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/js/menu.js"></script>
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
        	公司概况<span class="en eng">Company Profile</span>
            <div class="location"><a href="#">首页</a>&nbsp;&gt;&nbsp;<span>公司概况</span>&nbsp;&gt;&nbsp;<span>关于九趣</span></div>
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
        <div class="news_right">
        	<div class="r_head">
            	&gt;&nbsp;<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>

            </div>
            <ul><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('articlelist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
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
            	<li>
                	<h2><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
</font> 
<?php }else{ ?>  <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 
<?php }?></a></h2><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['pubdate'],"%Y-%m-%d");?>
</span>
                </li>
				<?php endfor; endif; ?>
            </ul>
			<?php echo $_smarty_tpl->getVariable('pagenav')->value;?>

            <div class="clear"></div>
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

