<?php /* Smarty version Smarty-3.0.7, created on 2012-01-13 17:56:30
         compiled from "./App/Tpl/jiuqu/Dhadmin/login_loginf.html" */ ?>
<?php /*%%SmartyHeaderCode:23764f0fffce59efe6-37070155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05842bd9acc0c0690517f7b9ec57816b4d25d47e' => 
    array (
      0 => './App/Tpl/jiuqu/Dhadmin/login_loginf.html',
      1 => 1326364896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23764f0fffce59efe6-37070155',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录页面</title>
</head> 
<style>
/* CSS Document */
body{ margin:0px; padding:0px; font-size:14px; cursor:default; font-family:"微软雅黑","宋体";}
.all{ width:900px; margin:0 auto;}
ul,li,p,h2,h3,h4,h5,h6,textarea,input{ margin:0px; padding:0px; list-style:none;}
a{ text-decoration:none;color:#006699;}
a:hover{ text-decoration:underline;}
.clear{ clear:both;}
img{ display:block; border:none; padding:0px;}

body{ background:url(<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/theme/system/images/body_bg.gif);}
.login_top_pic{ width:900px; height:160px; background:url(<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/theme/system/images/login_top_pic.gif) no-repeat; margin:80px 0 0 0;}
.login_block{ width:300px; margin:10px auto;}
.login_block .name input{ height:22px; line-height:22px; padding:0 5px;border:#7ba6e5 1px solid; background:#f5f9fd;}
.login_block .password{ margin:8px 0 0 0;}
.login_block .password input{ height:22px; line-height:22px;padding:0 5px; border:#7ba6e5 1px solid;background:#f5f9fd;}
.login_block .status{ margin:10px 0 0 40px;}
.login_block .login_button{ width:300px; height:26px; margin:20px 0 0 24px;}
.login_block .login_button input{ width:80px; height:26px; margin-left:20px;   line-height:26px;background:url(<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/theme/system/images/login_button.gif) no-repeat; border:0px;color:#FFFFFF;}
</style>
<body>
<div class="all">
<div class="login_top_pic"></div> 
<form action="../dhadmin_login_Login/" method="post" >
<div class="login_block">
<div class="name">帐号：<input type="text"  name="un" maxlength="16"   style=" width:200px"/>
</div>
<div class="password">密码：<input type="password" size="20" name="up"  style=" width:200px" maxlength="16" />
</div>
<div class="password">验证：点图刷新<img class="yzm" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
dhadmin_login_verify/" style="display:inline; cursor:pointer;"  onclick="this.src=this.src+'?&_='+Math.random()"  /><input type="text" size="4" name="yz" maxlength="4" />
</div>
<div class="login_button"><input type="submit" value="登 录"/><input type="reset" value="重 置"/></div>
</div>
</form>
</div>
</body>
</html>
