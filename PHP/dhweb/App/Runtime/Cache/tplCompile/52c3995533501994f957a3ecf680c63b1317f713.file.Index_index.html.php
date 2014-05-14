<?php /* Smarty version Smarty-3.0.7, created on 2013-06-14 22:16:09
         compiled from "./App/Tpl/runkeji/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:1183651bb25a9672b86-13103698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52c3995533501994f957a3ecf680c63b1317f713' => 
    array (
      0 => './App/Tpl/runkeji/Home/Index_index.html',
      1 => 1371219350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1183651bb25a9672b86-13103698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_myselect')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\function.myselect.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" />
<meta name="author" content="4D,战国斯迪，润科">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/img/favicon.ico" media="screen" />

<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/prettify.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/css/index.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/runkeji/Home/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3"> <?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> </div>
    <div class="span9">
      <div id="content">
        <ul class="main">
          <?php echo smarty_function_myselect(array('w'=>'Article.aid in(10,11,12,13)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,pubdate,des,click','limit'=>10),$_smarty_tpl);?>

          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['name'] = 'aid10';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid10']['total']);
?>
          <li>
            <h3 > <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['id'];?>
/" ><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['color']){?> <font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['title'];?>
 </font> <?php }else{ ?>
              <?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['title'];?>

              <?php }?> </a> <span style="color: grey;" class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['pubdate'],"%Y-%m-%d");?>
</span> </h3>
            <p><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['des'];?>
</p>
            <p><a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid10']['index']]['id'];?>
/" target="_blank" style="color:#0066CC">查看全文</a></p>
          </li>
          <?php endfor; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/runkeji/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
<script src="js/bootstrap-affix.js">
</html>
