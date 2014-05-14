<?php /* Smarty version Smarty-3.0.7, created on 2013-01-14 11:28:15
         compiled from "./App/Tpl/duohuostudio/Home/left.html" */ ?>
<?php /*%%SmartyHeaderCode:2941650f37b4f9e3241-57682705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8d0e804cd149d05c30306b6c239cef0b720bac5' => 
    array (
      0 => './App/Tpl/duohuostudio/Home/left.html',
      1 => 1358134092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2941650f37b4f9e3241-57682705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_myselect')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\function.myselect.php';
?><div id="sidebar">
      <div id="menu">
          <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/sidebar_nav_title.jpg" width="190" height="125" />
          <ul>
                  <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==0){?> class="on"<?php }?>>--<a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
">首页</a>--</li>
                  <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==1){?> class="on"<?php }?>>--<a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_1">作品展示</a>--</li>
                  <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==2){?> class="on"<?php }?>>--<a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_2">团队成员</a>--</li>
                  <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==2){?> class="on"<?php }?>>--<a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_2">团队文化</a>--</li>
                  <li <?php if ($_smarty_tpl->getVariable('thisapp_f')->value['id']==3){?> class="on"<?php }?>>--<a  href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_3">联系我们</a>--</li>
                 
               
                  <li >--<a  href="http://weibo.com/u/3221722503">新浪微博</a>--</li>
        </ul>   
      </div>
      <div class="news">
      	<h3>新闻动态<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_6">more</a></h3>
        <ul>
		<?php echo smarty_function_myselect(array('w'=>'article.aid in(6) and Article.status=1 ','sort'=>'pubdate desc','field'=>'title,id,color','limit'=>10),$_smarty_tpl);?>

		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['name'] = 'aid6';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid6']['total']);
?>
        <li><span <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['aid6']['index']+1<4){?>class="qiansan"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['aid6']['index']+1;?>
</span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid6']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid6']['index']]['color']){?>  <font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid6']['index']]['color'];?>
" >{$row[aid6].title}}</font> 
<?php }else{ ?>   <?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid6']['index']]['title'];?>
 
<?php }?></a></li>
		<?php endfor; endif; ?>
		
        </ul>
      </div>
      <a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_7"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/duohuostudio/Home/images/sidebar_bottom_img.jpg" width="200" height="350" border="0" /></a>

</div>
