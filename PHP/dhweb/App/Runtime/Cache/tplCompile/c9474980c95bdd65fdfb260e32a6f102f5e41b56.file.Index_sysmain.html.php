<?php /* Smarty version Smarty-3.0.7, created on 2012-01-05 12:57:21
         compiled from "./App/Tpl/duohuo/Dhadmin/Index_sysmain.html" */ ?>
<?php /*%%SmartyHeaderCode:155794f052db17d1207-58641666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9474980c95bdd65fdfb260e32a6f102f5e41b56' => 
    array (
      0 => './App/Tpl/duohuo/Dhadmin/Index_sysmain.html',
      1 => 1325221518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155794f052db17d1207-58641666',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--后台系统参数-->
<script>
Ext.onReady(function(){
	
	var sys_tab  = new Ext.FormPanel({
		url:"../dhadmin_sys_edit/",
		method:"post",
		renderTo:'Index_sysmain_20110321',
      	width: Ext.get("i3_center").getWidth(), 
		height: Ext.get("i3_center").getHeight()-30,
		reader: new Ext.data.JsonReader({successProperty:'success',root: 'info'},['sitename','siteurl','keywords','copyright','icp','des','admin_email','admin_phone','admin_qq']), 
		border:false,
		buttonAlign : 'center',
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{labelWidth:150, bodyStyle:'padding:10px'}, 
				items:[{
					title:'基本信息',
					layout:'form',
					forcefit:true,
					defaults: {width: 400},
					defaultType: 'textfield',
					//autoHeight:true,
					height:Ext.get("i3_center").getHeight()-100,
					autoScroll:true,
					items:[{
						name:"sitename",
						fieldLabel:"网站名称",
						allowBlank : false, 
						blankText : '网站名称不允许为空'
					},{
						name:"siteurl",
						fieldLabel:"站点网址",
						allowBlank : false, 
						blankText : '站点网址不允许为空'
					},{
						name:"keywords",
						fieldLabel:"SEO关键词"
					},{
						name:"des",
						xtype:'textarea',
						fieldLabel:"SEO描述"
					},{
						name:"copyright",
						xtype:'textarea',
						fieldLabel:"底部版权信息"
					},{
						name:"icp",
						fieldLabel:"网站备案号"
					},{
						name:"admin_email",
						fieldLabel:"管理员邮箱"
					},{
						name:"admin_phone",
						fieldLabel:"管理员手机"
					},{
						name:"admin_qq",
						fieldLabel:"管理员QQ"
					}]
				}/*,{
					title:'高级参数',
					layout:'form',
					defaultType: 'textfield',
					defaults: {width: 230},
					items: [{
						fieldLabel: '自定义模版',
						name: 'tmp'
					},{
						fieldLabel: '自定义链接',
						name: 'url'
					},{
						fieldLabel: 'SEO关键词',
						name: 'keywords'
					},{
						fieldLabel: 'SEO描述',
						name: 'des'
					}]
				}*/]
			},
		buttons: [
		{
			text:"保  存",
			width:100,
			handler:function(){
				if(sys_tab.form.isValid()){
					sys_tab.getForm().submit({
						clientValidation:true,//进行客户端验证   
						waitMsg : '数据提交中',//提示信息   
						waitTitle : '提示',//标题   
						progress : true, 
						success:function(form,action){
							if(action.result.success){
								Ext.Msg.alert("成功","保存成功",function(){ });
							}else{
								Ext.Msg.alert('数据保存失败',action.result.msg);
							}
						},
						failure:function(form,action){
							Ext.Msg.alert("失败","对不起，数据保存失败！提示："+action.result.msg);
						}					
					});
				}else{
					//Ext.MessageBox.alert("","验证失败");
				}
			}
		},{
			text:"重  置",
			width:100,
			handler:function(){
				sys_tab_load();
			}
		}]
	});
	sys_tab_load();
	function sys_tab_load(){
		sys_tab.getForm().load({
			url:'../dhadmin_sys_selectJson/',
			nocache: true,
			success : function(form, action){
				//alert('成功');
				//alert(Ext.encode(action.data.admin_email));
			},
			failure:function(form,action){
				//alert('失败');
				//alert(Ext.encode(action.data.admin_email));
			}
		}); 
	}

});
</script>
<div id="Index_sysmain_20110321"></div>