<?php /* Smarty version Smarty-3.0.7, created on 2012-02-12 18:50:27
         compiled from "./App/Tpl/hkxq/Dhadmin/Index_pageMain.html" */ ?>
<?php /*%%SmartyHeaderCode:151594f379973c87ce2-71603266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa14e65af30d705cac772f25040045c2b49f432e' => 
    array (
      0 => './App/Tpl/hkxq/Dhadmin/Index_pageMain.html',
      1 => 1325221518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151594f379973c87ce2-71603266',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--后台单页管理列表-->
<script>
Ext.onReady(function(){
	var pidOptions = new Ext.data.JsonStore({url:'../dhadmin_page_jsonOption/?isadd=1',fields: ['id','pid','name']}); 
	pidOptions.load();
	var pidSelectOptions =  new Ext.data.JsonStore({url:'../dhadmin_page_jsonOption/',fields: ['id','pid','name']}); 
	pidSelectOptions.load();
	var sm = new Ext.grid.CheckboxSelectionModel({singleSelect:true});

    // create the Data Store
    var ds = new Ext.data.Store({
    proxy: new Ext.data.HttpProxy({
            url: '../dhadmin_page_mana/',
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
            {name: 'name', mapping: 'name'},
            {name: 'keywords', mapping: 'keywords'},
            {name: 'des', mapping: 'des'}
        ]),

        // turn on remote sorting
        remoteSort: true
    });
	ds.on("beforeload", function(){
		this.baseParams = {
			 name : Ext.get('Index_pagemain_20110316<?php echo $_GET['aid'];?>
_grid_sj_name').dom.value,
			 aid : Ext.query("*[name=Index_pagemain_20110316<?php echo $_GET['aid'];?>
_grid_sj_pid]")[0].value,
			 limit:20
		}
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
           header: "栏目名称",
           dataIndex: 'name',
           width: 200
        },{
           header: "SEO关键词",
           dataIndex: 'keywords',
           width: 100 //,
           //hidden: true
        },{
           header: "SEO描述",
           dataIndex: 'des',
           width: 400
        }
        ]);

    // by default columns are sortable
    cm.defaultSortable = true;
    var grid = new Ext.grid.GridPanel({
        el:'Index_pagemain_20110316<?php echo $_GET['aid'];?>
',
      	width: Ext.get("i3_center").getWidth(), 
		height: Ext.get("i3_center").getHeight()-30,
		//width:800,
		//height:400,
		autoScroll:true,
        store: ds,
        cm: cm,
		frame:true,
        trackMouseOver:false,
        sm:sm,
        loadMask: true,
		// inline toolbars,
		 tbar : ['单页标题',
		 {
			xtype　:　'textfield',
			id:　'Index_pagemain_20110316<?php echo $_GET['aid'];?>
_grid_sj_name',
			width　:　120
		},'-',
		'所属栏目',{
		xtype:'combo',
		id:"Index_pagemain_20111106<?php echo $_GET['aid'];?>
_grid_sj_pid_id",
		hiddenName:"Index_pagemain_20110316<?php echo $_GET['aid'];?>
_grid_sj_pid",
		fieldLabel:"所属栏目",
		forceSelection: true,
		width:200,
		store: pidSelectOptions,
		valueField:'id',
		displayField:'name',
		typeAhead: true,
		mode: 'local',
		triggerAction: 'all',
		selectOnFocus:true,
		editable :false,
		emptyText:"请选择所属栏目"
	},new　Ext.Toolbar.TextItem("&nbsp;&nbsp;&nbsp;&nbsp;"),
			{
             text : '查询',
             iconCls : 'silk-query',
             handler : function() {
                ds.reload({params:{start:0}});
				grid.getView().refresh();
             }
         }],
		listeners : {
			'render' : function() {
         	var tbar = new Ext.Toolbar({
                     items : [{
                                 text : '新增单页',
                                 iconCls : 'silk-add',
								 handler : function() {
									addform();
								}
                             }, {
                                 text : '编辑所选',                                 
								 iconCls : 'silk-edit',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要编辑的单页！');
									}else{
										editform(grid.getSelectionModel().getSelected().id);
									}
								}
                             }, {
                                 text : '删除所选',
                                 iconCls : 'silk-delete',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要删除的单页！');
									}else{
										Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
											if(btn=='yes'){
												//alert('删除id：'+treegrid._sid);
												Ext.Ajax.request({
													method:'POST',
													url:'../dhadmin_page_del/',
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
                             }/*, '-', {
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
            emptyMsg: "该列表没有内容可以显示"
        })
    });

    // render it
    grid.render();

	<?php if ($_GET['aid']){?>Ext.getCmp('Index_pagemain_20111106<?php echo $_GET['aid'];?>
_grid_sj_pid_id').setValue(<?php echo $_GET['aid'];?>
);<?php }?>
    // trigger the data store load
    ds.load({params:{start:0, limit:20}});
	Ext.getCmp('Index_pagemain_20111106<?php echo $_GET['aid'];?>
_grid_sj_pid_id').setValue('');
	
	//右键菜单
	var youjian = new Ext.menu.Menu({
		items:[{
			text:'编辑',
			handler:function(){
				//Ext.Msg.alert(grid.getSelectionModel().getSelected().id); 
				editform(grid.getSelectionModel().getSelected().id);
				//alert(treegrid._sid );
			}
		},{
			text:'前台预览',
			handler:function(){
				window.open(_SYSCFG_I+'page_i_id_'+grid.getSelectionModel().getSelected().id);
			}
		},{
			text:'删除',
			iconCls : 'silk-delete',
			handler:function(){
				alert('请到应用管理面板中删除单页！');
			}
		}]
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

	//新增单页
	function addform(){
			var add_tab  = new Ext.FormPanel({
			url:"../dhadmin_page_insert/",
			method:"post",
			height:500,
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:80, bodyStyle:'padding:10px'}, 
				items:[{
					title:'栏目信息',
					layout:'form',
					//defaults: {width: 200},
					//defaultType: 'textfield',		
					items:[{
						layout:'column',
						border:false,
						items:[{
							width:310,
							colunmWidth:.5,
							layout:'form',
							//defaultType: 'textfield',		
							border:false,
							defaults:{width:200,xtype:'textfield'}, 
							items:[{
								name:"name",
								fieldLabel:"名称",
								allowBlank : false, 
								blankText : '该字段不允许为空'
							},{
								name:"rank",
								xtype:'numberfield',
								fieldLabel:"排序",
								value:50
							}]
						},{
							width:310,
							colunmWidth:.5,
							layout:'form',
							defaults:{width:200,xtype:'textfield'}, 
							border:false,
							items:[
							{
								xtype:'combo',
								hiddenName:"pid",
								fieldLabel:"父级栏目",
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
								blankText : '最选择父级栏目', 
								emptyText: '最选择父级栏目'
							},{
								fieldLabel: '自定义模版',
								name: 'tmp'
							}]
						}]
					},{
						fieldLabel: 'SEO关键词',
						xtype:'textfield',
						width:500,
						name: 'keywords'
					},{
						fieldLabel: 'SEO描述',
						name: 'des',
						width:500,
						height:50,
						xtype:'textarea'
					},{
                        xtype : "textarea",                    
                        name : "content",
                        id : "page_add_content",
						width:650,
						height:270,
						hideLabel:true,
						//labelStyle :" width:10px;",
                        listeners : {
                            "render" : function(f) {
								KE.init({
								id : 'page_add_content',
								width:650,
								height:270,
								imageUploadJson: _SYSCFG_I+'dhadmin_articlelist_imgupload/',
								afterCreate : function(id) {KE.util.focus(id);}
								});
								KE.create('page_add_content');
                            }
                        }
                    }]
				}/*,{
					title:'单页内容',
					layout:'form',
					items: []
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
		add_window =new Ext.Window({
			title:"新增单页",
			//renderTo:Ext.get("Index_pagemain_20110316<?php echo $_GET['aid'];?>
"),
			width:700,
			//height:450,
			autoHeight:true,
			modal:true,
			listeners:{
				close : function (){
					if(KE.g['page_add_content']!=undefined){
						KE.remove('page_add_content');
					}
				}
			},
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[add_tab]
		}).show(Ext.get("Index_pagemain_20110316<?php echo $_GET['aid'];?>
"));						
	}
	
	//编辑单页
	function editform(edit_id){			
		var edit_tab  = new Ext.FormPanel({
			url:"../dhadmin_page_edit/",
			method:"post",
			height:500,
			reader: new Ext.data.JsonReader({successProperty: 'success',root: 'info'},['id','pid','aid','name','des','keywords','rank','content','tmp','url']), 
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:80, bodyStyle:'padding:10px'}, 
				items:[{
					title:'栏目信息',
					layout:'form',
					//defaults: {width: 200},
					//defaultType: 'textfield',		
					items:[{
						layout:'column',
						border:false,
						items:[{
							width:310,
							colunmWidth:.5,
							layout:'form',
							//defaultType: 'textfield',		
							border:false,
							defaults:{width:200,xtype:'textfield'}, 
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
								fieldLabel:"排序"
							}]
						},{
							width:310,
							colunmWidth:.5,
							layout:'form',
							defaults:{width:200,xtype:'textfield'}, 
							border:false,
							items:[{
								fieldLabel: '自定义模版',
								name: 'tmp'
							}]
						}]
					},{
						fieldLabel: 'SEO关键词',
						xtype:'textfield',
						width:500,
						name: 'keywords'
					},{
						fieldLabel: 'SEO描述',
						name: 'des',
						width:500,
						height:50,
						xtype:'textarea'
					},{
                        xtype : "textarea",                    
                        name : "content",
                        id : "page_edit_content",
						width:650,
						height:270,
						hideLabel:true,
						//labelStyle :" width:10px;",
                        listeners : {
                            "render" : function(f) {
								KE.init({
								id : 'page_edit_content',
								width:650,
								height:270,
								imageUploadJson: _SYSCFG_I+'dhadmin_articlelist_imgupload/',
								afterCreate : function(id) {KE.util.focus(id);}
								});
								KE.create('page_edit_content');
                            }
                        }
                    }]
				}/*,{
					title:'单页内容',
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
				url:'../dhadmin_page_findJson/?id='+edit_id,
				nocache: true,
				//waitTitle:'加载数据',
				//waitMsg:'Loading',
				success : function(form, action){
				KE.html('page_edit_content',edit_tab.getForm().findField('content').value);
				}
			}); 
		}
		var edit_window = new Ext.Window({
			title:"编辑单页",
			width:700,
			//height:450,
			autoHeight:true,
			modal:true,
			listeners:{
				close : function (){
					if(KE.g['page_edit_content']!=undefined){
						KE.remove('page_edit_content');
					}
				}
			},
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[edit_tab]
		}).show(Ext.get("Index_pagemain_20110316<?php echo $_GET['aid'];?>
"));						
	}

});
</script>
<div id="Index_pagemain_20110316<?php echo $_GET['aid'];?>
"></div>