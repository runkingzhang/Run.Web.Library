<?php /* Smarty version Smarty-3.0.7, created on 2012-01-28 16:23:12
         compiled from "./App/Tpl/szt/Dhadmin/index_jump.html" */ ?>
<?php /*%%SmartyHeaderCode:89434f23b07051bb21-12671885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1e3828f4eb84071094cbe3ea4198e2ef2af958' => 
    array (
      0 => './App/Tpl/szt/Dhadmin/index_jump.html',
      1 => 1325221477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89434f23b07051bb21-12671885',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转页面</title>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/artDialog3.0.5/artDialog.min.js"></script>
<script>
(function($){
	// 改变默认配置
	var d = $.dialog.defaults;
	// 预缓存皮肤，数组第一个为默认皮肤
	d.skin = ['aero'/*,'facebook', 'chrome'*/];
	// 是否开启特效
	d.effect = true;
	// 指定超过此面积的对话框拖动的时候用替身
	d.showTemp = 100000;
})(art);
art.dialog({
	content: '<?php echo $_smarty_tpl->getVariable('j')->value['msg'];?>
',
	skin: 'aero',
	icon: 'alert',
	//follow: 'food_cart_ttnums',
	yesText:'<?php echo $_smarty_tpl->getVariable('j')->value['yestext'];?>
',
	noText:'关闭页面',
	yesFn: function(){
		location.href='<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
<?php echo $_smarty_tpl->getVariable('j')->value['url'];?>
';
		return false;
	},
	noFn: function(){
		window.close();
		location.href='../';
	}
});	
</script>
</head>
<body>
</body>
</html>