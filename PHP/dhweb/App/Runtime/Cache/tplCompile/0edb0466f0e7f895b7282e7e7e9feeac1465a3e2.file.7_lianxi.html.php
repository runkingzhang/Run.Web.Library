<?php /* Smarty version Smarty-3.0.7, created on 2011-12-31 14:51:37
         compiled from "./App/Tpl/sizhitang/Home/7_lianxi.html" */ ?>
<?php /*%%SmartyHeaderCode:155974efeb0f9578121-51515867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0edb0466f0e7f895b7282e7e7e9feeac1465a3e2' => 
    array (
      0 => './App/Tpl/sizhitang/Home/7_lianxi.html',
      1 => 1325314275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155974efeb0f9578121-51515867',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="四知堂广告公司,VI,设计" />
<title><?php echo $_smarty_tpl->getVariable('thisapp')->value['name'];?>
 - <?php echo $_smarty_tpl->getVariable('syscfg')->value['sitename'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('thisapp')->value['des'];?>
" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->getVariable('thisapp')->value['keywords'];?>
" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/css/index.css" />
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/js/jquery-1.4.4.min.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/js/jquery.validate.js"  charset="UTF-8" ></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/js/jquery.form.js"  charset="UTF-8" ></script>
</head>
<body>
<script language="javascript"  src="">
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
</script>
<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>    
<div id="container">
<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div id="content">
    <div class="c_title">
    <embed src=" <?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
App/Tpl/sizhitang/Home/images/szt.swf" quality="high" width="270" height="88" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>
    <h2>
    提供国际&nbsp;&nbsp;高品质形象品牌设计策略服务
    </h2>
    </div>
    <div class="c_main" id="lianxi" >
    <div class="address">
    	 
		 <div class="address_info">
		<span>+&nbsp; 请联系四知堂设计</span>
        	<p><strong>四知堂--南京		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4ZT    NANJING</strong><br />
               地址：中国. 南京. 奥体. 东渡国际 .十五层<br />
               电话：025-87771339&nbsp;66925990<br />
               传真：025-87771339<br />
               邮箱：shizhi.tang@163.com<br />
               在线QQ：20982185/511823773
            </p>
			<br />
<br />

           	   <p><strong>四知堂--常州  &nbsp;&nbsp;&nbsp;&nbsp;4ZT    CHANGZHOU</strong><br />
               地址：中国. 常州. 冬青新街26号<br />
               电话：0519-88966773&nbsp;13912346770
			     <br />
               传真：0519-88966773<br />
               邮箱：tangyujie911@sin.com<br />
               在线QQ：649190120
            </p>
			
			</div>
        <div class="google_map">
		<iframe src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
baidu.html" frameborder="0" scrolling="no" width="460" height="434" ></iframe>
        	  </div>
    	<div class="clear"></div>
    </div>
	
    <div class="liuyan">
    	<div class="form_container">
              <form id="gbook_form">
              <label for="company">公司名称:</label>
              <input name="gongsi" type="text" />
              
              
              <label for="company">联系电话:</label>
              <input name="c_phone" type="text" />
              
              
              <label for="person">所属行业:</label>
              <input name="title" type="text" />
              
              <label for="e-mail">邮箱或网址:</label>
              <input name="email" type="text" />
              <br/>
              <br/>
              <label for="advice" class="label_for_advice"> 留言：</label><br/>
			  <textarea name="content" id="gbcontent" style="width:612px; height:165px; font-size:14px" ></textarea>
              <br/>
              <div class="yanzheng">
              <label for="e-mail">验证:</label><input name="gbook_verify"  size="4" maxlength="4" />
              <span class="yanzheng_img_wrapper"><a href="javascript:" onclick="$('#imgyzm').click()" style="text-decoration:none; font-size:12px;" >点击刷新</a><img style="cursor:pointer; display:inline" id="imgyzm" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
appgbook_verify/"  onclick="this.src=this.src+'?&_='+Math.random()" /></span>
              <input type="button" onclick="checkform()" value="发往四知堂"  class="button" />
              </div>
              </form>
              <div class="clear"></div>
        </div>
    </div>
    		 
    <p class="dingwei">--视觉策略伙伴--品牌设计管家--</p>
    
    <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
</div>

<?php $_template = new Smarty_Internal_Template('./App/Tpl/sizhitang/Home/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

</body>
</html>
