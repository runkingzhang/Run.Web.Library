<?php /* Smarty version Smarty-3.0.7, created on 2012-01-12 18:54:15
         compiled from "./App/Tpl/jiuqu/Home/gbook.html" */ ?>
<?php /*%%SmartyHeaderCode:30614f0ebbd72aa816-96024660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3e1486b8054321ccec2342f3cb633ed9fbb536' => 
    array (
      0 => './App/Tpl/jiuqu/Home/gbook.html',
      1 => 1326365081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30614f0ebbd72aa816-96024660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="post_massage">
           	<div class="note">如果您需要这方面的业务，请拨打<strong>全国客服热线：4006—999—623</strong> 进行咨询！<br>
    或者在下面留言版中留下您的联系方式，让我们的工作人员联系您！</div>
	<script src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/artDialog3.0.5/artDialog.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/js/jquery.validate.js"   ></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/js/jquery.form.js"   ></script>
</head>
<body><script>
 function json2str(o) {
              var arr = [];
              var fmt = function(s) {
                  if (typeof s == 'object' && s != null) return json2str(s);
                 return /^(string|number)$/.test(typeof s) ? '"' + s + '"' : s;
             }
            for (var i in o) arr.push('"' + i + '":' + fmt(o[i]));
             return "{" + arr.join(",") + "}";
         }
 function str2json(str){
	   return eval('('+str+')');
	 }	

	function checkform(){
		if(!$('input[name=c_phone]').val()){
			alert("请输入联系电话！");
			return false;
		}
		/*if(!$('input[name=c_name]').val()){
			alert("请输入您的称呼！");
			return false;
		}*/
		if(!$('*[name=content]').val()){
			alert("请输入反馈内容！");
			return false;
		}
		postform();
	}
	
 	postform =  function (){
		var options = {
			target : '#output1',
			beforeSubmit : showRequest,
			success : showResponse,
			cache:false,
			dataType: 'html',
			url : '<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
appgbook_insert/',
			type : 'POST'
		};
		$('#gbook_form').ajaxSubmit(options);
		function showRequest( formData , jqForm , options ) {
			var queryString = $.param( formData );
			return true;
		};
		function showResponse ( responseText , statusText ) {
			rs = str2json(responseText);
				//alert( '状态' + statusText + '\n 返回的内容是：\n ' + responseText ) ;
			if(rs.success ==true){
				alert('提交成功！我们会尽快联系您！');
				location.href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
";
			}else{
				alert(rs.msg);
				$('#imgyzm').click();
			}
		};
	}
</script> <form id="gbook_form">
   			  <table width="0" border="0">
                <tr>
                  <td>您的姓名：</td>
                  <td>您的邮箱：</td>
                </tr>
                <tr>
                  <td><input name="c_name" type="text" class="text"/></td>
                  <td><input name="email" type="text" class="text"/></td>
                </tr>
                <tr>
                  <td>您的地址：</td>
                  <td>您的电话：</td>
                </tr>
                <tr>
                  <td><input name="title" type="text" class="text"/></td>
                  <td><input name="c_phone" type="text" class="text"/></td>
                </tr>
                <tr>
                  <td colspan="2">您的咨询内容：</td>
                </tr>
                <tr>
                  <td colspan="2"><textarea name="content" cols="" rows=""></textarea></td>
                </tr>
                <tr>
                  <td>验证:<input name="gbook_verify"  size="4" maxlength="4"  >
              <span class="yanzheng_img_wrapper"><a href="javascript:" onclick="$('#imgyzm').click()" style="text-decoration:none; font-size:12px;" >点击刷新</a><img style="cursor:pointer; display:inline" id="imgyzm" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
appgbook_verify/"  onclick="this.src=this.src+'?&_='+Math.random()" /></span><input  type="button"  onclick="checkform()" value="提交咨询" class="button" /></td>
                  <td></td>
                </tr>
              </table>
			  </form>

            </div>