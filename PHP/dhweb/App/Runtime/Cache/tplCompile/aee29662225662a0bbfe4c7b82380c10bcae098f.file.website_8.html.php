<?php /* Smarty version Smarty-3.0.7, created on 2012-03-16 10:42:23
         compiled from "./App/Tpl/duohuo/Home/website_8.html" */ ?>
<?php /*%%SmartyHeaderCode:240104f62a88f293b54-89143963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aee29662225662a0bbfe4c7b82380c10bcae098f' => 
    array (
      0 => './App/Tpl/duohuo/Home/website_8.html',
      1 => 1331865619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240104f62a88f293b54-89143963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            <?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>

        </title>
        <meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('thisapp')->value['keywords'];?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->getVariable('thisapp')->value['des'];?>
" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/css/index.css"
        />
        <script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/jquery.js">
        </script>
        <script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/jquery.tools.min.js">
        </script>
        <script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/mobilyslider.js">
        </script>
        <script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/js/index_slider.js">
        </script>
        <script type="text/javascript">
            $(function() {
                $(".tabs").tabs(".panes > div");
            });
        </script>
        <script type="text/javascript">
            $(function() {
                $('.question_top ul li').mouseover(function() {
                    $(this).siblings().removeClass();
                    $(this).addClass('question_top_on');
                    var index = $(this).index('.question_top ul li');
                    $('.question_midlle').hide().eq(index).show();
                });
            });
        </script>
        <!--[if IE 6]>
            <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/css/ie6.css"
            />
        <![endif]-->
    </head>
    
    <body>
        <!--header-->
        <?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuo/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <!--header end-->
        <div id="container" class="list_page">
            <!--Content-->
            <div class="list_content_container">
                <!--面包屑导航 （无） -->
                <div class="site_map">
                    <p>
                        <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
">
                            首页
                        </a>
                        &gt;&gt; <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mbx']);
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
/">
                            <?php echo $_smarty_tpl->getVariable('thisapp_mbx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mbx']['index']]['name'];?>

                        </a>
                        &gt;&gt; <?php endfor; endif; ?>
                        <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('thisapp')->value['action'];?>
_i_id_<?php echo $_smarty_tpl->getVariable('thisapp')->value['id'];?>
/">
                            <?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>

                        </a>
                    </p>
                </div>
                <div class="siderbar">
                    <div class="siderbar_nav">
                        <h2>
                            <?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>

                        </h2>
                        <ul>
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['name'] = 'lmdh';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('catbro')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lmdh']['total']);
?>
                            <li <?php if ($_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['lmdh']['index']]['id']==$_smarty_tpl->getVariable('thisapp')->value['id']){?>class="on" <?php }?>>
                                <span>
                                    <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['lmdh']['index']]['action'];?>
_i_id_<?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['lmdh']['index']]['id'];?>
/">
                                        <?php echo $_smarty_tpl->getVariable('catbro')->value[$_smarty_tpl->getVariable('smarty')->value['section']['lmdh']['index']]['name'];?>

                                    </a>
                                </span>
                            </li>
                            <?php endfor; endif; ?>
                        </ul>
                        <div class="bottom">
                        </div>
                    </div>
                    <div class="contart_us">
                        <div class="title">
                            联系我们
                        </div>
                        <div class="contart_us_container">
                            <p>
                                地址：
                                <br>
                                南京建宁路65号江苏省创业园
                                <br/>
                                QQ:
                                <br>
                                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=385819220&amp;site=qq&amp;menu=yes">
                                    <img border="0" src="http://wpa.qq.com/pa?p=2:385819220:41" alt="点击这里给我发消息"
                                    title="点击这里给我发消息" />
                                </a>
                                385819220
                                <br/>
                                电话:
                                <br>
                                025-58053100 / 15195819107
                            </p>
                        </div>
                    </div>
                    <div class="anli">
                        <div class="anli_top">
                            精品案例展示
                        </div>
                        <div class="anli_content">
                            <a href="##">
                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/up.jpg">
                            </a>
                            <ul>
                                <li>
                                    <a href="##">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px"
                                        height="120px">
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px"
                                        height="120px">
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px"
                                        height="120px">
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px"
                                        height="120px">
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20010528_7.jpg" width="160px"
                                        height="120px">
                                    </a>
                                </li>
                            </ul>
                            <a href="##">
                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/down.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list_content">
                    <div class="img_wrapper">
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/banner1.jpg" width="722"
                        height="238" alt="banner" />
                    </div>
                    <div class="fangan_content">
                        <!-- <div class="fangan_content_top">
                        方案内容
                        </div>-->
                        <!--<div class="fangan_content_middle">
                        <ul>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content1.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">风格定制</p>
                        <p class="fangan_content_middle_content">专业设计师为企业量身设计，提供一对一的贴心服务，设计精美，功能强大，让您的网站脱颖而出！</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content2.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">量身需求方案</p>
                        <p class="fangan_content_middle_content">根据所在的行业，公司特色，发展规模，我们为您量身打造最适合的互联网需求方案。</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content3.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">国际域名</p>
                        <p class="fangan_content_middle_content">com/.net/.org/国际顶级域名，任意选择一个。</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content4.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">超大空间赠送</p>
                        <p class="fangan_content_middle_content">标配1G 海量主机，赠送数据库，享受云计算带来的安全、稳定、高速的服务。</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content5.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">主要模块管理</p>
                        <p class="fangan_content_middle_content">网站栏目应用功能便捷扩展，只需简易操作，即可在后台可自由增添管理</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content6.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">管理权限</p>
                        <p class="fangan_content_middle_content">拥有网站后台管理权，可以自助管理网站全部的内容数据，后期内容新增维护便捷高效。
                        </p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content7.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">丰富插件应用</p>
                        <p class="fangan_content_middle_content">流量统计，在线客服等海量实用插件免费提供。</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content8.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">营销推广</p>
                        <p class="fangan_content_middle_content">免费提供网络营销推广方案，SEO方案咨询服务，快速被百度收录，实现网站的营销价值。</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content9.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">网站免费代备案</p>
                        <p class="fangan_content_middle_content">为您省下时间和精力，把一切繁琐流程交给我们。</p>
                        </div>
                        </li>
                        <li>
                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content10.png">
                        <div class="fangan_content_middle_right">
                        <p class="fangan_content_middle_title">售后服务</p>
                        <p class="fangan_content_middle_content">终身技术支持，故障解决，错误修改，技术支持咨询，让您永无后顾之忧</p>
                        </div>
                        </li>
                        <div class="clear"></div>
                        </ul>
                        <div class="dinggou">
                        <a href="http://sighttp.qq.com/msgrd?v=1&uin=385819220&site=多火网络&menu=yes"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/dinggou.jpg" border="0"></a><span>购买前有疑问？ <a href="http://sighttp.qq.com/msgrd?v=1&uin=385819220&site=多火网络&menu=yes">在线咨询</a> 或致电 025-58053100 / 15195819107</span>
                        <div class="clear"></div>
                        </div>
                        </div>-->
                        <!-- 后来的业务流程-->
                        <div class="fang_an">
                            <div class="co_100">
                                <a href="#">
                                    方案内容
                                </a>
                            </div>
                            <ul class="co_099">
                                <div class="co_101">
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content1.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                风格制定
                                            </a>
                                            <p>
                                                专业设计师为企业量身设计，提供一对一的贴心服务，设计精美，功能强大，让您的网站脱颖而出！
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content3.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                国际域名
                                            </a>
                                            <p>
                                                com/.net/.org/国际顶级域名，任意选一个。
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content5.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                主要模块管理
                                            </a>
                                            <p>
                                                网站栏目应用功能便捷扩展，只需简易操作，即可在后台可自由增添管理。
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content7.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                丰富插件应用
                                            </a>
                                            <p>
                                                流量统计，在线客服等海量实用插件免费提供。
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content9.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                网站免费代备案
                                            </a>
                                            <p>
                                                为您省下时间和精力，把一切繁琐流程交给我们。
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="co_104">
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content2.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                量身需求方案
                                            </a>
                                            <p>
                                                根据所在的行业，公司特色，发展规模，我们为您量身打造最适合的互联网需求方案。
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content4.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                超大空间赠送
                                            </a>
                                            <p>
                                                标配1G海量主机，赠送数据库，享受云计算机带来的安全、稳定、高速的服务。
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content6.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                管理权限
                                            </a>
                                            <p>
                                                拥有网站后台管理权，可以自助管理网站全部的内容数据，后期内容新增维护边界高效。
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content8.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                营销推广
                                            </a>
                                            <p>
                                                免费提供网络营销推广方案，SEO方案咨询服务，快速被百度收录，实现网站的营销价值。
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="co_102">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content10.png"
                                                />
                                            </a>
                                        </div>
                                        <div class="co_103">
                                            <a href="#">
                                                售后服务
                                            </a>
                                            <p>
                                                终身技术支持，故障解决，错误修改，技术支持咨询，让您永无后顾之忧。
                                            </p>
                                        </div>
                                    </li>
                                </div>
                                <div class="clear">
                                </div>
                                <div class="co_105">
                                    <a href="#">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/fangan_content11.png"
                                        />
                                    </a>
                                </div>
                                <div class="co_106">
                                    购买前有疑问？
                                    <a href="#">
                                        在线咨询
                                    </a>
                                    或致电025-58053100/15195819107
                                </div>
                                <div class="clear">
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="co_300">
                        <p class="co_301">
                            标准网站建设服务流程
                            <span>
                                20天基本完成网站
                            </span>
                        </p>
                        <p class="co_302">
                            <span class="co_302_1">
                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20120228094906795_easyicon_cn_72.png"
                                />
                                根据需求签约
                            </span>
                            <span class="co_302_2">
                            </span>
                            <span class="co_302_1">
                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20120228095002749_easyicon_cn_72.png"
                                />
                                设计稿创作
                            </span>
                            <span class="co_302_2">
                            </span>
                            <span class="co_302_1">
                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20120228100118432_easyicon_cn_256.png"
                                />
                                网站框架搭建
                            </span>
                            <span class="co_302_2">
                            </span>
                            <span class="co_302_1">
                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20120228095637652_easyicon_cn_72.png"
                                />
                                网站内容添加
                            </span>
                            <span class="co_302_2">
                            </span>
                            <span class="co_302_1">
                                <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/20120228095824177_easyicon_cn_72.png"
                                />
                                网站交付
                            </span>
                        </p>
                        <div>
                        </div>
                    </div>
                    <div class="question">
                        <div class="question_top">
                            <ul>
                                <li class="question_top_on">
                                    <a href="##">
                                        行业需求
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        设计案例
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        为什么选择
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        常见问题
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="question_midlle question_midlle1" style="display:none;">
                            <dl>
                                <dd>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/try.jpg" width="170px"
                                    height="120px">
                                    <div class="question_midlle_right">
                                        <p class="question_midlle_title">
                                            企业门户展示网站
                                        </p>
                                        <p>
                                            文章（新闻）发布系统，公司行业资讯发布
                                        </p>
                                        <p>
                                            简易产品管理发布系统，产品分类，产品详情。
                                        </p>
                                        <p>
                                            客户留言反馈系统
                                        </p>
                                        <p>
                                            网站流量统计
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </dd>
                                <dd>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/try.jpg" width="170px"
                                    height="120px">
                                    <div class="question_midlle_right">
                                        <p class="question_midlle_title">
                                            教育院校门户网站
                                        </p>
                                        <p>
                                            文章（新闻）发布系统，公告资讯发布
                                        </p>
                                        <p>
                                            图片，媒体发布宣传，院校风采展示
                                        </p>
                                        <p>
                                            用户留言反馈系统
                                        </p>
                                        <p>
                                            信息智能搜索系统
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </dd>
                                <dd>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/try.jpg" width="170px"
                                    height="120px">
                                    <div class="question_midlle_right">
                                        <p class="question_midlle_title">
                                            政府事业单位门户网站
                                        </p>
                                        <p>
                                            文章（新闻）发布系统，公告资讯发布
                                        </p>
                                        <p>
                                            电子政务公开，网上通报系统
                                        </p>
                                        <p>
                                            用户留言反馈系统
                                        </p>
                                        <p>
                                            信息智能搜索系统
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="question_midlle question_midlle2" style="display:none;">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case_img.png" width="155"
                                        height="200">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case_img.png" width="155"
                                        height="200">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case_img.png" width="155"
                                        height="200">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/case_img.png" width="155"
                                        height="200">
                                    </a>
                                </li>
                                <div class="clear">
                                </div>
                            </ul>
                        </div>
                        <div class="question_midlle question_midlle3">
                            <ul>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/answer_span.jpg">
                                    <div class="question_question_right">
                                        <p class="question_title">
                                            多火拥有三大资源
                                        </p>
                                        <p class="question_answer">
                                            •高校资源：首批入驻江苏省创业园精品企业 / 国家重点院校合作单位 / 权威教授导师技术支持顾问/本科生研究生实训基地
                                            <br>
                                            •市场资源：多年IT互联网行业经验 / B2B SNS主流电子商务模式研究 / 精准的市场定位和发展趋势判断 / 多家大型IT公司密切合作
                                            <br>
                                            •网络资源：立足互联网发展前沿 / 最大程度地利用网络的价值 / 多平台多应用多行业的一站式网络综合解决方案
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/answer_span.jpg">
                                    <div class="question_question_right">
                                        <p class="question_title">
                                            多火具备五大优势
                                        </p>
                                        <p class="question_answer">
                                            •技术优势：多火最核心的是一支雄厚的技术团队力量。
                                            <br>
                                            •品牌优势：作为最具创造力的IT企业，多火已经成为越来越多企业的首选！
                                            <br>
                                            •稳定优势：服务器硬件+软件程序+完善后期服务 = 全方位的稳定保障！
                                            <br>
                                            •服务优势：7x24小时的客户服务，第一时间响应受理，做最可靠的网络管家！
                                            <br>
                                            •效率优势：时间是我们最大的成本！多火的快速项目管理和服务响应机制，能以最快的速度为用户解决最实际的问题！
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/answer_span.jpg">
                                    <div class="question_question_right">
                                        <p class="question_title">
                                            首家CESV立体式互联网服务商
                                        </p>
                                        <p class="question_answer">
                                            Customization ：深度行业发掘，虚拟网络+现实市场 综合方案需求；
                                            <br>
                                            Expansibility：产品可升级扩展，一站式专业技术支持，为后期发展节约时间和成本；
                                            <br>
                                            Service：终身管家服务，不再重销售，轻售后；
                                            <br>
                                            Value：更关心为客户创造市场价值，而不仅仅是产品本身。
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="question_midlle question_midlle4">
                            <ul>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/answer_span.jpg">
                                    <div class="question_question_right">
                                        <p class="question_title">
                                            网站做好之后你们负责网站后期维护吗？
                                        </p>
                                        <p class="question_answer">
                                            多火不仅重视产品，更注重后期的服务。我们为每个客户都提供完善的后期技术支持和系统维护，让您没有后顾之忧！
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/answer_span.jpg">
                                    <div class="question_question_right">
                                        <p class="question_title">
                                            网站后期维护包含哪些？需不需要另外支付费用？
                                        </p>
                                        <p class="question_answer">
                                            我们后期维护包括基础服务和增值服务。基础服务第一年是免费赠送的，包括域名注册，主机空间和数据库，还有基本的技术支持，细节调整修改服务。增值服务包括第三方空间代购，网站内容发布管理，网站推广SEO等，费用我们会根据具体成本进行计价。
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/answer_span.jpg">
                                    <div class="question_question_right">
                                        <p class="question_title">
                                            做一个网站大概需要多长时间？
                                        </p>
                                        <p class="question_answer">
                                            多火采用高效的项目管理流程，一般企业网站从设计到定稿到上线一般在20个工作日以内。
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </li>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuo/Home/images/answer_span.jpg">
                                    <div class="question_question_right">
                                        <p class="question_title">
                                            项目费用支付方式是什么，需要先支付吗？
                                        </p>
                                        <p class="question_answer">
                                            在我们没有确定方案和签署合同之前，您不需要支付任何费用。在项目开始之后，为了保证您的权利，我们坚持采用阶段性付款的形式。只有当项目完成之后您才支付我们最后的尾款。
                                        </p>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="clear">
            </div>
            <!--footer -->
            <?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuo/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <!--footer End-->
        </div>
    </body>

</html>