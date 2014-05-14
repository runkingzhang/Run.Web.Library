<?php /* Smarty version Smarty-3.0.7, created on 2013-01-24 14:59:39
         compiled from "./App/Tpl/runkeji/Dhadmin/Index_appMapMain.html" */ ?>
<?php /*%%SmartyHeaderCode:136895100dbdb499ee9-67750192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4cdd1682d1abab2c7824a2780873a5ed60e37fa' => 
    array (
      0 => './App/Tpl/runkeji/Dhadmin/Index_appMapMain.html',
      1 => 1325221477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136895100dbdb499ee9-67750192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--栏目管理 -->
<script>
Ext.onReady(function() {
	var comboOptions =  new Ext.data.JsonStore({url:'../dhadmin_app_jsonOption/',fields: ['id','name']}); 
	comboOptions.load();
	var pidOptions = new Ext.data.JsonStore({url:'../dhadmin_appmap_jsonOption/',fields: ['id','pid','name']}); 
	pidOptions.load();
	//表格树
	var treegrid = new Ext.ux.tree.TreeGrid({
		split:true,
		//sm:sm,
		region:"center",
		viewConfig:{forceFit:true},
        enableDD: true,
		autoScroll:false,
		enableSort: false,
		listeners:{
				click:function(n){
					treegrid._sid = n.id;
			},
			contextmenu:function(node,event){
				event.preventDefault();
				treegrid._sid = node.id;
				node.select();
				youjian.showAt(event.getXY());
			}
		},
		 tbar : [{
                    text : '新增',
                    iconCls : 'silk-add',
					handler : function() {
						addform();
					}
                 },'-',{
                                 text : '删除所选',
                                 iconCls : 'silk-delete',
								  handler:function(){ 
									if(!treegrid._sid ) {
										Ext.Msg.alert('提示','请先选择一项数据');
										return false;
									}
									Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
										if(btn=='yes'){
											//alert('删除id：'+treegrid._sid);
											Ext.Ajax.request({
												method:'POST',
												url:'../dhadmin_appmap_del/',
												success:function(response){
													rs = Ext.decode(response.responseText);
													if(rs.success){
														Ext.Msg.alert('提示','删除成功！',function(){ treegrid._sid='';treegrid.root.reload();comboOptions.reload();pidOptions.reload();treegrid.expandAll();})
													}else{
														Ext.Msg.alert('删除失败',rs.msg);
													}
												},
												failure:function(response){
													Ext.Msg.alert('删除失败','网络错误！');
												},
												params:{id:treegrid._sid}
											});
										}
									});
								  }
                             },'-', {
                                 text : '刷新',                                 
								 iconCls : 'silk-refresh',
								 handler:function(){
									treegrid.root.reload();comboOptions.reload();pidOptions.reload();treegrid.expandAll();
								 }
                             }
                             ],

        columns:[{
            header: '名称',
            dataIndex: 'name',
            width: 250
        },{
            header: 'id',
            width: 100,
            dataIndex: 'id',
            align: 'center'
        },{
            header: '类型',
            width: 100,
            dataIndex: 'action',
            align: 'center'
        },{
            header: '排序',
            width: 100,
            dataIndex: 'rank'
        },{
            header: '描述',
            width: 300,
            dataIndex: 'des',
            align: 'center'
        }],
		dataUrl:'../dhadmin_appmap_appList/'
    });
	treegrid.expandAll();

	
	//右键菜单
	var youjian = new Ext.menu.Menu({
		items:[{
			text:'编辑',
			handler:function(node){
				editform(treegrid._sid);
			}
		},{
			text:'移动',
			handler:function(node){
				moveform(treegrid._sid)
			}
		},{
			text:'删除',
			iconCls : 'silk-delete',
			handler:function(node){
				Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
					if(btn=='yes'){
						Ext.Ajax.request({
							method:'POST',
							url:'../dhadmin_appmap_del/',
							success:function(response){
								rs = Ext.decode(response.responseText);
								if(rs.success){
									Ext.Msg.alert('提示','删除成功！',function(){ treegrid._sid='';treegrid.root.reload();comboOptions.reload();pidOptions.reload();treegrid.expandAll();})
								}else{
									Ext.Msg.alert('删除失败',rs.msg);
								}
							},
							failure:function(response){
								Ext.Msg.alert('删除失败','网络错误！');
							},
							params:{id:treegrid._sid}
						});
					}
				});
			}
		}]
	})
	
	//主面板
	new Ext.Panel({
		layout : 'border',
		bodyBorder: false,
		renderTo: 'clf_com_main_20110225',
		autoScroll:false,
		height: Ext.get("i3_center").getHeight()-30,
		items : [treegrid]
	});

	function addform(){
			var add_tab  = new Ext.FormPanel({
			url:"../dhadmin_appmap_insert/",
			method:"post",
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:100, bodyStyle:'padding:10px'}, 
				items:[{
					title:'基本信息',
					layout:'form',
					defaults: {width: 230},
					defaultType: 'textfield',
					items:[{
						name:"name",
						fieldLabel:"名称",
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						xtype:'combo',
						hiddenName:"aid",
						fieldLabel:"内容模型",
						forceSelection: true,
						store: comboOptions,
						valueField:'id',
						displayField:'name',
						typeAhead: true,
						mode: 'local',
						triggerAction: 'all',
						selectOnFocus:true,
						allowBlank:false,
						editable :false,
						blankText : '最选择内容模型', 
						emptyText: '最选择内容模型'
					},{
						xtype:'combo',
						hiddenName:"pid",
						fieldLabel:"上级栏目",
						forceSelection: true,
						store: pidOptions,
						valueField:'id',
						displayField:'name',
						typeAhead: true,
						mode: 'local',
						triggerAction: 'all',
						selectOnFocus:true,
						allowBlank:false,
						editable :false,
						blankText : '最选择上级栏目', 
						emptyText: '最选择上级栏目'
					},{
						name:"rank",
						xtype:'numberfield',
						fieldLabel:"排序",
						value:50
					}]
				},{
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
				}]
			},
			buttons: [{
				text:"提交",
				width:100,
				handler:function(){
					if(add_tab.form.isValid()){
						add_tab.getForm().submit({
							clientValidation:true,//进行客户端验证   
							waitMsg : '数据提交中',//提示信息   
							waitTitle : '提示',//标题   
							progress : true, 
							success:function(form,action){
								if(action.result.success){
									Ext.Msg.alert("成功","保存成功",function(){add_window.close();treegrid.root.reload();pidOptions.reload();comboOptions.reload();treegrid.expandAll();});
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
				text:"重置",
				width:100,
				handler:function(){
					add_tab.getForm().reset();
				}
			}]
		});	

		var add_window = new Ext.Window({
			title:"增加网站应用",
			width:423,
			autoHeight:true,
			modal:true,
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[add_tab]
		}).show(Ext.get("clf_com_main_20110225"));						
	}

	function editform(app_edit_id){
			var edit_tab  = new Ext.FormPanel({
			url:"../dhadmin_appmap_edit/",
			method:"post",
			reader: new Ext.data.JsonReader({successProperty: 'success',root: 'info'},['id','name','rank','cname','des','tmp','rtpl','url','keywords','content']), 
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:100, bodyStyle:'padding:10px'}, 
				items:[{
					title:'栏目信息',
					layout:'form',
					defaults: {width: 230},
					defaultType: 'textfield',
					items:[{
						xtype:"hidden",
						name:"id",
						hidden:true,
						hiddenLabel:true,
						allowBlank:false
					},{
						name:"name",
						fieldLabel:"名称",
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						name:"rank",
						xtype:'numberfield',
						fieldLabel:"排序",
						value:50
					},{
						fieldLabel: '自定义模版',
						name: 'tmp'
					},{
						fieldLabel: '内容模版',
						name: 'rtpl'
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
			buttons: [{
				text:"提交",
				width:100,
				handler:function(){
					if(edit_tab.form.isValid()){
						edit_tab.getForm().submit({
							clientValidation:true,//进行客户端验证   
							waitMsg : '数据提交中',//提示信息   
							waitTitle : '提示',//标题   
							progress : true, 
							success:function(form,action){
								if(action.result.success){
									Ext.Msg.alert("成功","保存成功",function(){edit_window.close();treegrid.root.reload();pidOptions.reload();treegrid.expandAll();});
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
				text:"重置",
				width:100,
				handler:function(){
					edit_tab.getForm().load({
						url:'../dhadmin_appmap_findJson/?id='+app_edit_id,
						nocache: true,
						success : function(form, action){  
							//form.findField('pid').setValue(action.result.data.pid);  
						}
					}); 
				}
			}]
		});	
		
		edit_tab.getForm().load({
			url:'../dhadmin_appmap_findJson/?id='+app_edit_id,
			nocache: true,
			success : function(form, action){  
			}
		}); 
			
		var edit_window = new Ext.Window({
			title:"栏目属性编辑",
			width:450,
			autoHeight:true,
			modal:true,
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[edit_tab]
		}).show(Ext.get("clf_com_main_20110225"));						
	}

	function moveform(app_move_id){
			var move_tab  = new Ext.FormPanel({
			url:"../dhadmin_appmap_move/",
			method:"post",
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:100, bodyStyle:'padding:10px'}, 
				items:[{
					title:'栏目信息',
					layout:'form',
					defaults: {width: 230},
					defaultType: 'textfield',
					items:[{
						xtype:"hidden",
						name:"id",
						value:app_move_id,
						hidden:true,
						hiddenLabel:true,
						allowBlank:false
					},{
						hiddenName:"toid",
						xtype:'combo',
						fieldLabel:"移动到",
						forceSelection: true,
						store: pidOptions,
						valueField:'id',
						displayField:'name',
						typeAhead: true,
						mode: 'local',
						triggerAction: 'all',
						selectOnFocus:true,
						allowBlank:false,
						editable :false,
						blankText : '请选择目标栏目', 
						emptyText: '请选择目标栏目'
					}]
				}]
			},
			buttons: [{
				text:"提交",
				width:100,
				handler:function(){
					if(move_tab.form.isValid()){
						move_tab.getForm().submit({
							clientValidation:true,//进行客户端验证   
							waitMsg : '数据提交中',//提示信息   
							waitTitle : '提示',//标题   
							progress : true, 
							success:function(form,action){
								if(action.result.success){
									Ext.Msg.alert("成功","保存成功",function(){move_window.close();treegrid.root.reload();pidOptions.reload();treegrid.expandAll();});
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
				text:"返回",
				width:100,
				handler:function(){
					move_window.close();
				}
			}]
		});	

		var move_window = new Ext.Window({
			title:"栏目属性编辑",
			width:450,
			autoHeight:true,
			modal:true,
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[move_tab]
		}).show(Ext.get("clf_com_main_20110225"));						
	}
	
	
});

</script>

<div id="clf_com_main_20110225"></div>