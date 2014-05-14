<?php /* Smarty version Smarty-3.0.7, created on 2012-02-13 14:18:42
         compiled from "./App/Tpl/jiuqu/Home/Index_index.html" */ ?>
<?php /*%%SmartyHeaderCode:268794f38ab4236d232-17206427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '081dc7cbbe887570596c8e9ec692bad55cc78419' => 
    array (
      0 => './App/Tpl/jiuqu/Home/Index_index.html',
      1 => 1329113920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268794f38ab4236d232-17206427',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_myselect')) include 'D:\wamp\www\dhweb\ThinkPHP\Vendor\Smarty\plugins\function.myselect.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/css/index.css" />
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/js/jquery-1.7.js"></script>

<title><?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('syscfg')->value['des'];?>
" />
</head>
<body>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/jiuqu/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="all">
  
    <div class="comm_flash" style="height:996x; width:333px">
						<script language="javascript">
							var focus_width=996;
							var focus_height=333;
							var text_height=0;
							var swf_height = focus_height+text_height;
							var pics = ''; var links = ''; 
							var texts = ''; 
							function ati(url, img, title) 
							{ 
								if(pics != '') 
								{ 
									pics = "|" + pics;
									links = "|" + links;
									texts = "|" + texts;
								}
								 pics = escape(img) + pics; 
								 links = escape(url) + links; 
								 texts = title + texts;
							} 
							ati('#', '<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/Communit/a.jpg', '');
							ati('#', '<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/Communit/b.jpg', ''); 
							ati('#', '<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/Communit/c.jpg', ''); 
							document.write('<embed height="'+ swf_height +'" type="application/x-shockwave-flash" width="'+ focus_width +'" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/Communit/prives.swf" wmode="opaque" flashvars="pics='+pics+'&amp;links='+links+'&amp;texts='+texts+'&amp;borderwidth='+focus_width+'&amp;borderheight='+focus_height+'&amp;textheight='+text_height+'" menu="false" bgcolor="#7A91BC" quality="high" allowscriptaccess="sameDomain" />'); 
						</script>
					</div>
  <div class="index_left">
  <div class="head"><!--<span class="eng"></span> --><a href="/index.php/articleList_i_id_2">更多</a></div>
  	<ul class="ul_1">
			<li >
				<div>
					
					<h1><a href="/index.php/articleList_i_id_13"><span>公司资讯</span> <span class="eng">Company News</span></a></h1>
					<div class="li_top">
						<?php echo smarty_function_myselect(array('w'=>'article.aid in(14)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>7),$_smarty_tpl);?>

						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['name'] = 'aid14';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total']);
?>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['color']){?>  
				<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid13']['index']]['title'];?>
</font>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['title'];?>
 
				<?php }?>
				</a>

			<?php endfor; endif; ?>
            
					</div>
					
				</div>
</li>
			<li class="head_ul_1_li2">
							<div>
								
								<h1><a href="/index.php/page_i_id_14"><span>行业动态</span> <span class="eng">Industry News </span></a></h1>
								<div class="li_top">
				
			<?php echo smarty_function_myselect(array('w'=>'article.aid in(14)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>7),$_smarty_tpl);?>

            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['name'] = 'aid14';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total']);
?>
				<a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['color']){?>  
<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['title'];?>
</font>
<?php }else{ ?>
<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['title'];?>
 
<?php }?>
</a>
			<?php endfor; endif; ?>
            
					</div>
								
							</div>
							</li>
    	<!--<li>
        	<div class="head"><span class="eng">Company News</span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_13">更多</a></div>
			<div class="li_content">
            <div class="li_top">
                	<?php echo smarty_function_myselect(array('w'=>'article.aid in(13) and article.flag like "%h%"  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,des,img_url','limit'=>1),$_smarty_tpl);?>

       	    	<img src="<?php echo $_smarty_tpl->getVariable('row')->value[0]['img_url'];?>
" width="98" height="73" />
            	<div class="r">
                	<?php echo smarty_function_myselect(array('w'=>'article.aid in(13) and article.flag like "%h%"  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,des,img_url','limit'=>1),$_smarty_tpl);?>

                	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[0]['id'];?>
/"><?php echo $_smarty_tpl->getVariable('row')->value[0]['title'];?>
</a></h1>
                    <p><?php echo $_smarty_tpl->getVariable('row')->value[0]['des'];?>
...
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <dl>
			<?php echo smarty_function_myselect(array('w'=>'article.aid in(13)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>4),$_smarty_tpl);?>

            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['name'] = 'aid13';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid13']['total']);
?>
				<dd><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid13']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid13']['index']]['color']){?>  
<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid13']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid13']['index']]['title'];?>
</font>
<?php }else{ ?>
<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid13']['index']]['title'];?>
 
<?php }?>
</a>
</dd>
			<?php endfor; endif; ?>
            </dl>
			</div>
        </li> -->
        <!--<li>
        	<div class="head">行业动态<span class="eng">Industry News </span><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articleList_i_id_14">更多</a></div>
            <div class="li_top">
				<?php echo smarty_function_myselect(array('w'=>'article.aid in(14) and article.flag like "%h%"  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color,des,img_url','limit'=>1),$_smarty_tpl);?>

       	    	<img src="<?php echo $_smarty_tpl->getVariable('row')->value[0]['img_url'];?>
" width="98" height="73" />
            	<div class="r">
                	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[0]['id'];?>
/"><?php echo $_smarty_tpl->getVariable('row')->value[0]['title'];?>
</a></h1>
                    <p><?php echo $_smarty_tpl->getVariable('row')->value[0]['des'];?>
...
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <dl><?php echo smarty_function_myselect(array('w'=>'article.aid in(14)  and Article.status=1 ','sort'=>'rank desc','field'=>'title,id,color','limit'=>4),$_smarty_tpl);?>

            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['name'] = 'aid14';
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('row')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['aid14']['total']);
?>
				<dd><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
articlelist_view_id_<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['id'];?>
/" target="_blank"><?php if ($_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['color']){?>  
<font color="<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['color'];?>
" ><?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['title'];?>
</font>
<?php }else{ ?>
<?php echo $_smarty_tpl->getVariable('row')->value[$_smarty_tpl->getVariable('smarty')->value['section']['aid14']['index']]['title'];?>
 
<?php }?>
</a>
</dd>
			<?php endfor; endif; ?>
            </dl>
        </li> -->
    </ul>
    <div class="business">
	
   	  <div class="head"><!--<span class="eng">Business</span> --><a href="/index.php/articleList_i_id_3/">更多</a></div>
        <ul>
		
			
							<li>
							<div>
								
								<h1><a href="/index.php/page_i_id_17"><span> 影视广告</span> <span class="eng">Television advertising </span></a></h1>
								<div class="service_list_left">
									<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相. . .<!--<?php echo $_smarty_tpl->getVariable('row')->value[1]['des'];?>
... -->  </p>
			<a href="/index.php/page_i_id_17"><img src="/App/Tpl/jiuqu/Home/images/learn_more.png" /></a>
								</div>
								<div class="service_list_right3">
								</div>
								<div class="clear"></div>
							</div>
							</li>
							<li>
							<div>
								
								<h1><a href="/index.php/page_i_id_18"><span>虚拟现实</span> <span class="eng">Virtual reality </span></a></h1>
								<div class="service_list_left">
									<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相. . .<!--<?php echo $_smarty_tpl->getVariable('row')->value[2]['des'];?>
... --></p>
			<a href="/index.php/page_i_id_18"><img src="/App/Tpl/jiuqu/Home/images/learn_more.png" /></a>
								</div>
								<div class="service_list_right4">
								</div>
								<div class="clear"></div>
							</div>
							</li>
							<li>
							<div>
								
								<h1><a href="/index.php/page_i_id_19"><span>建筑表现</span> <span class="eng">Building performance </span></a></h1>
								<div class="service_list_left">
									<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相. . .<!--<?php echo $_smarty_tpl->getVariable('row')->value[3]['des'];?>
... --></p>
			<a href="/index.php/page_i_id_19"><img src="/App/Tpl/jiuqu/Home/images/learn_more.png" /></a>
								</div>
								<div class="service_list_right5">
								</div>
								<div class="clear"></div>
							</div>
							</li>
							<li>
							<div>
								
								<h1><a href="/index.php/page_i_id_16"><span>数字展厅</span> <span class="eng">Digital exhibition hall </span></a></h1>
								<div class="service_list_left">
									<p>互动展示系统以数字图像为核方式。我们通过数字图形将语言视觉化，使信息的传递速度、效果、广度都大大提高到一个新级别。使用者通过触摸屏设备，选择读取相. . .<!-- <?php echo $_smarty_tpl->getVariable('row')->value[1]['des'];?>
.... --></p>
			<a href="/index.php/page_i_id_16"><img src="/App/Tpl/jiuqu/Home/images/learn_more.png" /></a>
								</div>
								<div class="service_list_right6">
								</div>
								<div class="clear"></div>
							</div>
							</li>
							
        	<!--<li>
				<div >
       	    	<img src="<?php echo $_smarty_tpl->getVariable('row')->value[0]['litpic'];?>
" width="270" height="120" />
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[0]['id'];?>
"><?php echo $_smarty_tpl->getVariable('row')->value[0]['name'];?>
</a></h1>
                <p><?php echo $_smarty_tpl->getVariable('row')->value[0]['des'];?>
...</p>
                <a class="more" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[0]['id'];?>
">更多...</a>
				</div>
            </li> -->
<!--<li>			<div style="border:none">
       	    	<img src="<?php echo $_smarty_tpl->getVariable('row')->value[1]['litpic'];?>
" width="270" height="120" />
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[1]['id'];?>
"><?php echo $_smarty_tpl->getVariable('row')->value[1]['name'];?>
</a></h1>
                <p><?php echo $_smarty_tpl->getVariable('row')->value[1]['des'];?>
...</p>
                <a class="more" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[1]['id'];?>
">更多...</a>
				</div>
            </li>
			
			   
			   
			
<li class="no_border">			<div >
       	    	<img src="<?php echo $_smarty_tpl->getVariable('row')->value[2]['litpic'];?>
" width="270" height="120" />
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[2]['id'];?>
"><?php echo $_smarty_tpl->getVariable('row')->value[2]['name'];?>
</a></h1>
                <p><?php echo $_smarty_tpl->getVariable('row')->value[2]['des'];?>
...</p>
                <a class="more" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[2]['id'];?>
">更多...</a>
				</div>
            </li>
<li class="no_border">			<div style="border:none">
       	    	<img src="<?php echo $_smarty_tpl->getVariable('row')->value[3]['litpic'];?>
" width="270" height="120" />
            	<h1><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[3]['id'];?>
"><?php echo $_smarty_tpl->getVariable('row')->value[3]['name'];?>
</a></h1>
                <p><?php echo $_smarty_tpl->getVariable('row')->value[3]['des'];?>
...</p>
                <a class="more" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_<?php echo $_smarty_tpl->getVariable('row')->value[3]['id'];?>
">更多...</a>
				</div>
            </li> -->
        </ul>
    </div>
  </div>
  <div class="index_right">
  	<div class="head"></div>
  	<div class="serve">
    	
        <img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/shipohui.gif" width="275" />
    </div>
<div class="service">
    	<div class="head">服务领域<span class="eng">Service</span></div>
        <ul>
			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li1.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_17">广告制作<br />
			<span class="english">
Advertising production</span></a></li>

			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li2.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_21">建筑表现<br /> 
			<span class="english">
Building performance</span></a></li>
			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li3.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_20">数字展厅<br />
			
			<span class="english"> Digital exhibition hall
</span></a></li>
			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li4.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_60">医疗教学 <br /><span class="english">Medical teaching</span></a></li>
			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li5.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_58">旅游仿真<br /><span class="english">Tourism simulation</span> </a></li>
			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li6.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_25">文物古迹<br /><span class="english">Cultural relics</span> </a></li>
			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li7.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_61"> 军事仿真 <br /><span class="english">Military simulation</span> </a></li>
			<li><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li8.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_27">工业运用<br /><span class="english"> Industrial application</span></a></li>
			<li style=" border:0"><img src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/jiuqu/Home/images/service_ul_li9.jpg" /><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_28">市政规划 <br /><span class="english">The municipal planning</span></a></li>
			
        	<!--<li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_22">建筑展示</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_21">地产应用</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_22">数字安防</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_20">展览展示</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_27">工业应用</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_25">文物古迹</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_28">市政园林</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_23">数字城市</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_61">军事仿真</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
page_i_id_60">医疗教学</a></li>-->
        </ul>
        <div class="clear"></div>
    </div>
    <!--<div class="company">
   	  <div class="head">公司概况<span class="eng">Company Profile</span></div>
	  
			<?php echo smarty_function_myselect(array('w'=>' id in(1)  ','model'=>'appmap','sort'=>'id asc','field'=>'id,name,des,litpic','limit'=>1),$_smarty_tpl);?>

			
        <img src="<?php echo $_smarty_tpl->getVariable('row')->value[0]['litpic'];?>
" width="213" height="87" />
      	<p>
        	<?php echo $_smarty_tpl->getVariable('row')->value[0]['des'];?>
...
        </p>
    </div> -->
  </div>
  <div class="clear"></div>
  
  
<?php $_template = new Smarty_Internal_Template('./App/Tpl/jiuqu/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  
  
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
