<?php /* Smarty version Smarty-3.0.7, created on 2014-04-15 21:12:02
         compiled from "./App/Tpl/studio/Home/articlelist_i.html" */ ?>
<?php /*%%SmartyHeaderCode:14120534d30225720b3-63671009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e78ca376bf903235bf514528a299d734f8a5d2' => 
    array (
      0 => './App/Tpl/studio/Home/articlelist_i.html',
      1 => 1394976621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14120534d30225720b3-63671009',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\modifier.date_format.php';
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
		<div class="current-page"><h2>资讯 / News</h2><p>关注互联网最新技术</p></div>
        
		<div class="current-position"><a href="/">首页</a> &nbsp&gt;<a href="index.htm" tppabs="http://www.moretouch.com.cn/news/">资讯</a> &nbsp&gt;<?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
</div>
           
	</div>
</div>

 
<div class="main">
	
	<div class="article-list">
		<div class="news-list">
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
         
         <div class="article-info">
                        <h3><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/"><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['title'];?>
 </a>
                        <span class="views"><?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['click'];?>
</span></h3>
                        <p class="article-dateye">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['pubdate'],"%Y-%m-%d");?>
 &nbsp;&nbsp;分类：</p>
                        <div class="article-description">
                        	<?php if ($_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['img_url']){?>
                           <div class="thumb"><img src="<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['img_url'];?>
"  style="width:100%;"></div>
                           <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['des'];?>
 
                           <?php }else{ ?>.  
                                                     <?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['des'];?>
 
                            <?php }?>
                           ...                        </div>
                        <div class="more-info"><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('articlelist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'];?>
/">&rarr; 阅读全文</a></div>
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
	<div class="sider-right">
		<div class="news-cate">
			<h3>资讯分类</h3>
			<ul>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
/index.php/articlelist_i_id_10" >公司资讯</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
/index.php/articlelist_i_id_11"   >技术分享</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
/index.php/articlelist_i_id_12">行业动态</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
/index.php/articlelist_i_id_13" >常见问题</a></li>
            </ul>
		</div>
		
	</div>
	<div class="clear"></div>
</div>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/studio/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>