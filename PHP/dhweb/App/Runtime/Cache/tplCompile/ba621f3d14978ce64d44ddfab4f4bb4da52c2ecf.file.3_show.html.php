<?php /* Smarty version Smarty-3.0.7, created on 2013-01-09 16:06:38
         compiled from "./App/Tpl/sizhitang/Home/3_show.html" */ ?>
<?php /*%%SmartyHeaderCode:2239250ed250e1fd647-26524607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba621f3d14978ce64d44ddfab4f4bb4da52c2ecf' => 
    array (
      0 => './App/Tpl/sizhitang/Home/3_show.html',
      1 => 1325300596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2239250ed250e1fd647-26524607',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="四知堂广告公司,VI,设计" />
<title><?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
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
   
	 BRAND<span style="color:#059EE7; font-weight:bold">OBSERVE</span> 
    </h2>
    </div>
    <div class="c_main" id="show" >
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
    <a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['img_url'];?>
" width="220" height="75" border="0" /></a>
    <h5><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
</font> 
<?php }else{ ?>  <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 
<?php }?></a>	</h5>
    <p><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['des'];?>
 </p>
    </li>
   <?php endfor; endif; ?>
    
    </ul>
    <div class="clear"></div>
	<div class="fenye">
<?php echo $_smarty_tpl->getVariable('pagenav')->value;?>

</div>
    <p class="dingwei">--视觉策略伙伴--品牌设计管家--</p>
    
    <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

</div>
    

<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

</body>
</html>
