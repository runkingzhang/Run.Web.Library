<?php /* Smarty version Smarty-3.0.7, created on 2013-01-27 22:48:50
         compiled from "./App/Tpl/runkeji/Home/news_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2327251053e52368dd7-22955072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c45c7483fbfb770bba41330881289d90b354568' => 
    array (
      0 => './App/Tpl/runkeji/Home/news_list.html',
      1 => 1359298124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327251053e52368dd7-22955072',
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
<title><?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/index.css" />

</head>

<body>

<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
    
<div id="container">
<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="content">
    
    <div class="c_main" id="news_list" >
		<div class="news_list_title">
             <!--面包屑代码Start-->
			 <span><a href="/">Home</a>&nbsp&gt;<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']);
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
            <!--面包屑代码End-->
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
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" ><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
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
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" ><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
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
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" ><?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['color'];?>
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
		
    </div>
</div>
<div class="clear"></div>

</div>
    
<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>
