<?php /* Smarty version Smarty-3.0.7, created on 2012-02-12 18:51:29
         compiled from "./App/Tpl/hkxq/Dhadmin/Index_userMain.html" */ ?>
<?php /*%%SmartyHeaderCode:11054f3799b1910760-36648458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c50b3498ac67de5e10ce94cfc3582f3e8dba33dd' => 
    array (
      0 => './App/Tpl/hkxq/Dhadmin/Index_userMain.html',
      1 => 1325221518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11054f3799b1910760-36648458',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--后台用户管理列表-->
<script>
Ext.onReady(function(){
	var sm = new Ext.grid.CheckboxSelectionModel({singleSelect:true});
    // create the Data Store
    var ds = new Ext.data.Store({
    proxy: new Ext.data.HttpProxy({
            url: '../dhadmin_dhuser_mana/',
			failure : function(response,options){ 
			alert(json2str(response));
				Ext.Msg.alert('提示','获取内容失败！'+response.status); 
			} 
        }),
        // create reader that reads the Topic records
        reader: new Ext.data.JsonReader({
            root: 'results',
            totalProperty: 'total',
            id: 'id'
        }, [
            {name: 'id', mapping: 'id'},
            {name: 'm_id', mapping: 'm_id'},
            {name: 'name', mapping: 'name'},
            {name: 'lasttime', mapping: 'lasttime'},
            {name: 'mail', mapping: 'mail'},
            {name: 'rname', mapping: 'rname'},
            {name: 'qq', mapping: 'qq'}
        ]),

        // turn on remote sorting
        remoteSort: true
    });
    ds.setDefaultSort('id', 'desc');

    var cm = new Ext.grid.ColumnModel([
		sm,
		{
           header: "ID",
           dataIndex: 'id',
           width: 50,
		   sortable:true
        },{
           header: "用户名",
           dataIndex: 'name',
           width: 150
           //renderer: function (value, p, record) {
			//	return String.format('{0}', value);
    		//}    
        },{
           header: "用户类型",
           dataIndex: 'm_id',
           width: 100 ,
           renderer: function (value, p, record) {
				if(value==1){
					return '创始管理员';
				}
				if(value==2){
					return '管理员';
				}
				if(value==3){
					return '一般用户';
				}
    		} 
        },{
           header: "最后登录",
           dataIndex: 'lasttime',
           width: 100,
		   renderer : function(value) {
				if (value == null || value == 0) {
				return 'null'
				} else {
				return Ext.util.Format.date(new Date(parseInt(value)*1000),'Y-m-d H:i:s')
				}
			}
        },{
           header: "邮箱",
           dataIndex: 'mail',
           width: 100
        },{
           header: "真实姓名",
           dataIndex: 'rname',
           width: 100
        }
        ]);

    // by default columns are sortable
    cm.defaultSortable = true;
    var grid = new Ext.grid.GridPanel({
        el:'index_userMain_20110321',
      	width: Ext.get("i3_center").getWidth(), 
		height: Ext.get("i3_center").getHeight()-30,
		autoScroll:true,
        store: ds,
        cm: cm,
		frame:true,
        trackMouseOver:false,
        sm:sm,
        loadMask: true,
		tbar:[],
		listeners : {
			'render' : function() {
         	var tbar = new Ext.Toolbar({
                     items : [{
                                 text : '修改密码',                                 
								 iconCls : 'silk-edit',
								 handler : function() {
									pswform();
								}
                             } <?php if ($_smarty_tpl->getVariable('_user')->value['m_id']<=2){?> ,{
                                 text : '新增用户',
                                 iconCls : 'silk-add',
								 handler : function() {
									addform();
								}
                             }, {
                                 text : '删除所选',
                                 iconCls : 'silk-delete',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要删除的用户！');
									}else{
										Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
											if(btn=='yes'){
												//alert('删除id：'+treegrid._sid);
												Ext.Ajax.request({
													method:'POST',
													url:'../dhadmin_dhuser_del/',
													success:function(response){
														rs = Ext.decode(response.responseText);
														if(rs.success){
															Ext.Msg.alert('提示','删除成功！',function(){ds.reload();grid.getView().refresh();})
														}else{
															Ext.Msg.alert('删除失败',rs.msg);
														}
													},
													failure:function(response){
														Ext.Msg.alert('删除失败','网络错误！');
													},
													params:{id:grid.getSelectionModel().getSelected().id}
												});
											}
										});
									}
								}
                             } <?php }?>/*, '-', {
                                 text : '全选',
                                 iconCls : 'pdf'
                             }, {
                                 text : '反选',
                                 iconCls : 'excel'
                             }*/]
                 });
         tbar.render(grid.tbar);
			}
		},

        viewConfig: {
            forceFit:true,
            enableRowBody:true,
            showPreview:false,
            getRowClass : function(record, rowIndex, p, ds){
                if(this.showPreview){
                    p.body = '<p>id is '+record.id+'</p>';
                    return 'x-grid3-row-expanded';
                }
                return 'x-grid3-row-collapsed';
            }
        },
        bbar: new Ext.PagingToolbar({
            pageSize: 20,
            store: ds,
            displayInfo: true,
            displayMsg: '当前显示 结果{0} - {1} ，共有{2}个结果',
            emptyMsg: "该列表没有内容可以显示"/*,
            items:[
                '-',{
                pressed: true,
                enableToggle:true,
                text: 'Show Preview',
                cls: 'x-btn-text-icon details',
                toggleHandler: toggleDetails
            }]*/
        })
    });

    // render it
    grid.render();
    // trigger the data store load
    ds.load({params:{start:0, limit:20}});
	
	//右键菜单
	var youjian = new Ext.menu.Menu({
		items:[{
			text:'编辑',
			handler:function(){
				//Ext.Msg.alert(grid.getSelectionModel().getSelected().id); 
				editform(grid.getSelectionModel().getSelected().id);
				//alert(treegrid._sid );
			}
		} <?php if ($_smarty_tpl->getVariable('_user')->value['m_id']<=2){?> ,{
			text:'删除',
			iconCls : 'silk-delete',
			handler:function(){
				Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
					if(btn=='yes'){
						//alert('删除id：'+treegrid._sid);
						Ext.Ajax.request({
							method:'POST',
							url:'../dhadmin_dhuser_del/',
							success:function(response){
								rs = Ext.decode(response.responseText);
								if(rs.success){
									Ext.Msg.alert('提示','删除成功！',function(){ds.reload();grid.getView().refresh();})
								}else{
									Ext.Msg.alert('删除失败',rs.msg);
								}
							},
							failure:function(response){
								Ext.Msg.alert('删除失败','网络错误！');
							},
							params:{id:grid.getSelectionModel().getSelected().id}
						});
					}
				});
			}
		} <?php }?>]
	})

	grid.on('rowcontextmenu',function(grid,rowIndex,e){
		e.preventDefault();
		grid.getSelectionModel().selectRow(rowIndex);
		youjian.showAt(e.getXY());	
	});
	
    function toggleDetails(btn, pressed){
        var view = grid.getView();
        //view.showPreview = pressed;
        view.refresh();
    }

	//修改密码
	function pswform(){
			var psw_tab  = new Ext.FormPanel({
			url:"../dhadmin_dhuser_updatepsw/",
			method:"post",
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:100, bodyStyle:'padding:10px'}, 
				items:[{
					title:'修改密码',
					layout:'form',
					defaults: {width: 230},
					defaultType: 'textfield',
					items:[{
						fieldLabel:"用户名",
						value:'<?php echo $_smarty_tpl->getVariable('_user')->value['name'];?>
',
						disabled :true
					},{
						name:"psw0",
						fieldLabel:"原密码",
						inputType : 'password',
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						name:"psw1",
						fieldLabel:"新密码",
						inputType : 'password',
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						name:"psw2",
						fieldLabel:"重复密码",
						inputType : 'password',
						allowBlank : false, 
						blankText : '该字段不允许为空'
					}]
				}]
			},
			buttons: [{
				text:"提交",
				width:100,
				handler:function(){
					if(psw_tab.form.isValid()){
						psw_tab.getForm().submit({
							clientValidation:true,//进行客户端验证   
							waitMsg : '数据提交中',//提示信息   
							waitTitle : '提示',//标题   
							progress : true, 
							success:function(form,action){
								if(action.result.success){
									Ext.Msg.alert("成功","保存成功",function(){psw_window.close();ds.reload();grid.getView().refresh()});
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
					psw_tab.getForm().reset();
				}
			}]
		});	
			
		var psw_window = new Ext.Window({
			title:"增加用户",
			//renderTo:Ext.get("clf_com_main_20110225"),
			width:423,
			autoHeight:true,
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[psw_tab]
		}).show(Ext.get("clf_com_main_20110225"));						
	}
	
	
	//新增用户
	function addform(){
			var add_tab  = new Ext.FormPanel({
			url:"../dhadmin_dhuser_insert/",
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
						fieldLabel:"用户名",
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						xtype:'combo',
						hiddenName:"m_id",
						fieldLabel:"用户类型",
						forceSelection: true,
						store: new Ext.data.SimpleStore({
									fields: ['text', 'value'],
									data : [<?php if ($_smarty_tpl->getVariable('_user')->value['m_id']==1){?>['管理员','2'],<?php }?>['一般用户','3']]
								}),
						valueField:'value',
						displayField:'text',
						typeAhead: true,
						mode: 'local',
						triggerAction: 'all',
						selectOnFocus:true,
						allowBlank : false, 
						editable :false,
						emptyText:"请选择用户类型"
					},{
						name:"psw",
						fieldLabel:"密码",
						inputType : 'password',
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						name:"psw2",
						fieldLabel:"重复密码",
						inputType : 'password',
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						name:"mail",
						fieldLabel:"邮箱"
					},{
						name:"rname",
						fieldLabel:"真实姓名"
					},{
						name:"qq",
						fieldLabel:"QQ"
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
					if(add_tab.form.isValid()){
						add_tab.getForm().submit({
							clientValidation:true,//进行客户端验证   
							waitMsg : '数据提交中',//提示信息   
							waitTitle : '提示',//标题   
							progress : true, 
							success:function(form,action){
								if(action.result.success){
									Ext.Msg.alert("成功","保存成功",function(){add_window.close();ds.reload();grid.getView().refresh()});
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
			title:"增加用户",
			//renderTo:Ext.get("clf_com_main_20110225"),
			width:423,
			autoHeight:true,
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[add_tab]
		}).show(Ext.get("clf_com_main_20110225"));						
	}
	
	//编辑用户
	function editform(edit_id){
		var edit_tab  = new Ext.FormPanel({
			url:"../dhadmin_dhuser_edit/",
			method:"post",
			reader: new Ext.data.JsonReader({successProperty: 'success',root: 'info'},['id','name','m_id','mail','rname','qq']), 
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:80, bodyStyle:'padding:10px'}, 
				items:[{
					title:'基本信息',
					layout:'form',
					//defaults: {width: 200},
					defaultType: 'textfield',		
					items:[{
						xtype:"hidden",
						name:"id",
						hidden:true,
						hiddenLabel:true,
						allowBlank:false
					},{
						name:"name",
						disabled :true,
						fieldLabel:"用户名"
					},{
						name:"mail",
						fieldLabel:"邮箱"
					},{
						name:"rname",
						fieldLabel:"真实姓名"
					},{
						name:"qq",
						fieldLabel:"QQ"
					}]
				}/*,{
					title:'用户内容',
					layout:'form',
					items: []
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
									Ext.Msg.alert("成功","保存成功",function(){edit_window.close();ds.reload();grid.getView().refresh()});
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
					edit_window.close();
				}
			}]
		});	
		edit_tab_load();
		function edit_tab_load(){
			edit_tab.getForm().load({
				url:'../dhadmin_dhuser_findJson/?id='+edit_id,
				nocache: true,
				success : function(form, action){
				}
			}); 
		}
		var edit_window = new Ext.Window({
			title:"编辑用户",
			width:423,
			autoHeight:true,
			modal:true,
			listeners:{
				close : function (){
					if(KE.g['dhuser_edit_content']!=undefined){
						KE.remove('dhuser_edit_content');
					}
				}
			},
			bodyStyle:"padding:5px" ,
			items:[edit_tab]
		}).show(Ext.get("index_userMain_20110321"));						
	}

	
	
});
</script>
<div id="index_userMain_20110321"></div>