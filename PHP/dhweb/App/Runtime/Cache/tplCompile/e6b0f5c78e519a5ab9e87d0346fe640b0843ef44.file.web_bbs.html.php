<?php /* Smarty version Smarty-3.0.7, created on 2012-03-16 19:11:23
         compiled from "./App/Tpl/duohuo/Home/web_bbs.html" */ ?>
<?php /*%%SmartyHeaderCode:323564f631fdb9bbdd5-36815107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b0f5c78e519a5ab9e87d0346fe640b0843ef44' => 
    array (
      0 => './App/Tpl/duohuo/Home/web_bbs.html',
      1 => 1331896199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323564f631fdb9bbdd5-36815107',
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
                                                  <?php $_template = new Smarty_Internal_Template('./App/Tpl/duohuo/Home/web_banner.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    
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