<?php /* Smarty version Smarty-3.0.7, created on 2014-04-15 21:12:47
         compiled from "./App/Tpl/studio/Home/case.html" */ ?>
<?php /*%%SmartyHeaderCode:6612534d304fa46b30-98106500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49fd2e7a0de2374693a525b64b91d83757aedab' => 
    array (
      0 => './App/Tpl/studio/Home/case.html',
      1 => 1395154517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6612534d304fa46b30-98106500',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
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
App/Tpl/studio/Home/statics/skin/css/style.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/studio/Home/statics/skin/js/jquery-1.8.3.min.js"></script>
<!–[if IE 6]>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/studio/Home/statics/skin/js/DD_belatedPNG_0.0.8a.js"></script>
<!--这边是png的脚本-->
<script>
	DD_belatedPNG.fix('.logo,.navcurrent,.icon-title i,.all i,.footer-contact-info i,.footer-Tags i,.btn-link i,.pic-tag i,.gotop');
</script>
<![endif]–>
</head>

<body>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/studio/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>


<div class="subpage-banner">
	<div class="subpage-inner">
		<div class="current-page"><h2>案例 / Case</h2><p>时代在变，但人性未变。人对用户体验的喜好标准并未变化，用户始终喜欢清晰、简单、自然、好用的设计和产品</p></div>
		<div class="current-position"><a href="../index.htm" tppabs="http://www.moretouch.com.cn/">首页</a> > <a href="index.htm" tppabs="http://www.moretouch.com.cn/case/">案例</a> > &nbsp&gt;<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 </div>
	</div>
</div>
 
<div class="main">
	<div class="categorybox">
		<ul>
            <li  <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==23){?>class="current"<?php }?> ><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_23">全部显示</a></li>
            <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==27){?>class="current"<?php }?> ><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_27" >企业网站</a></li>
            <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==28){?>class="current"<?php }?> ><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_28"  > 教育 / 政务</a></li>
            <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==29){?>class="current"<?php }?> ><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_29" >厨具网站</a></li>
            <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==30){?>class="current"<?php }?> ><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_30"  >文化艺术</a></li>
            <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==31){?>class="current"<?php }?> ><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_i_id_31"  >其他案例</a></li>
            
        </ul>
	</div>
    
	<div class="case-list">
    	<ul>
         <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
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
         <li>
                <div class="pic-box">
                    <div class="pic-opacity"></div>
                      <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/" class="btn-link" title="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 "><i></i>查看</a>
                    <?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['img_url']){?>
                           <div class="thumb">
                           <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/">
                           <img src="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['img_url'];?>
"   width="300"  height="200">
                           </a>
                           </div>
                   <?php }?>
                          
                </div>
                <div class="pic-text">
                    <h4><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/"><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 </a></h4>
                    <p>       <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['des'];?>
 ...</p>
                </div>
                <div class="pic-tag">
                                        <span>51</span><i></i>
                </div>
            </li>
           
                <?php endfor; endif; ?>
                <div class="clear"></div>
            </ul>
        
        <div id="webpage">
     <?php echo $_smarty_tpl->getVariable('pagenav')->value;?>

</div>
	</div>
</div>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/studio/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>