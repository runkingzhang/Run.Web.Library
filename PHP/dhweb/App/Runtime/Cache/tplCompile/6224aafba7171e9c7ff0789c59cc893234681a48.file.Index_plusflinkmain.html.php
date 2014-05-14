<?php /* Smarty version Smarty-3.0.7, created on 2012-02-13 20:28:22
         compiled from "./App/Tpl/hkxq/Dhadmin/Index_plusflinkmain.html" */ ?>
<?php /*%%SmartyHeaderCode:327074f3901e634a8a9-76279185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6224aafba7171e9c7ff0789c59cc893234681a48' => 
    array (
      0 => './App/Tpl/hkxq/Dhadmin/Index_plusflinkmain.html',
      1 => 1325221518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327074f3901e634a8a9-76279185',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--后台友情链接管理列表-->
<script>
Ext.onReady(function(){
	var sm = new Ext.grid.CheckboxSelectionModel({singleSelect:true});
    // create the Data Store
    var ds = new Ext.data.Store({
    proxy: new Ext.data.HttpProxy({
            url: '../dhadmin_plusflink_mana/',
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
            {name: 'type', mapping: 'type'},
            {name: 'text', mapping: 'text'},
            {name: 'url', mapping: 'url'},
            {name: 'rank', mapping: 'rank'}
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
           header: "文字",
           dataIndex: 'text',
           width: 150
        },{
           header: "类型",
           dataIndex: 'type',
           width: 100 ,
           renderer: function (value, p, record) {
				if(value==1){
					return '文字';
				}
				if(value==2){
					return '图片';
				}
    		} 
        },{
           header: "地址",
           dataIndex: 'url',
           width: 200
        },{
           header: "排序",
           dataIndex: 'rank',
           width: 100,
		   sortable:true
        }
        ]);

    // by default columns are sortable
    cm.defaultSortable = true;
    var grid = new Ext.grid.GridPanel({
        el:'index_plusflink_20110501',
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
                                 text : '新增链接',
                                 iconCls : 'silk-add',
								 handler : function() {
									addform();
								}
                             },{
                                 text : '修改所选',                                 
								 iconCls : 'silk-edit',
								 handler : function() {
									editform(grid.getSelectionModel().getSelected().id);
								}
                             },{
                                 text : '删除所选',
                                 iconCls : 'silk-delete',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要删除的记录！');
									}else{
										Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
											if(btn=='yes'){
												//alert('删除id：'+treegrid._sid);
												Ext.Ajax.request({
													method:'POST',
													url:'../dhadmin_plusflink_del/',
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
		}  ,{
			text:'删除',
			iconCls : 'silk-delete',
			handler:function(){
				Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
					if(btn=='yes'){
						//alert('删除id：'+treegrid._sid);
						Ext.Ajax.request({
							method:'POST',
							url:'../dhadmin_plusflink_del/',
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
	
	//新增
	function addform(){
			var add_tab  = new Ext.FormPanel({
			url:"../dhadmin_plusflink_insert/",
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
						name:"text",
						fieldLabel:"文字",
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						name:"url",
						fieldLabel:"链接地址",
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						xtype:'combo',
						hiddenName:"type",
						fieldLabel:"类型",
						forceSelection: true,
						store: new Ext.data.SimpleStore({
									fields: ['text', 'value'],
									data : [['文字链接','1'],['图片链接','2']]
								}),
						valueField:'value',
						displayField:'text',
						typeAhead: true,
						mode: 'local',
						triggerAction: 'all',
						selectOnFocus:true,
						allowBlank : false, 
						editable :false,
						value:1
					},{
						name:"img",
						fieldLabel:"图片地址"
					},{
						name:"rank",
						xtype:'numberfield',
						fieldLabel:"排序"
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
			title:"增加表单",
			//renderTo:Ext.get("clf_com_main_20110225"),
			width:423,
			autoHeight:true,
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[add_tab]
		}).show(Ext.get("clf_com_main_20110225"));						
	}
	
	//编辑
	function editform(edit_id){
		var edit_tab  = new Ext.FormPanel({
			url:"../dhadmin_plusflink_edit/",
			method:"post",
			reader: new Ext.data.JsonReader({successProperty: 'success',root: 'info'},['id','type','text','img','url','rank','index']), 
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
						name:"text",
						fieldLabel:"文字",
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						name:"url",
						fieldLabel:"链接地址",
						allowBlank : false, 
						blankText : '该字段不允许为空'
					},{
						xtype:'combo',
						hiddenName:"type",
						fieldLabel:"类型",
						forceSelection: true,
						store: new Ext.data.SimpleStore({
									fields: ['text', 'value'],
									data : [['文字链接','1'],['图片链接','2']]
								}),
						valueField:'value',
						displayField:'text',
						typeAhead: true,
						mode: 'local',
						triggerAction: 'all',
						selectOnFocus:true,
						allowBlank : false, 
						editable :false,
						value:1
					},{
						name:"img",
						fieldLabel:"图片地址"
					},{
						name:"rank",
						xtype:'numberfield',
						fieldLabel:"排序"
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
				url:'../dhadmin_plusflink_findJson/?id='+edit_id,
				nocache: true,
				success : function(form, action){
				}
			}); 
		}
		var edit_window = new Ext.Window({
			title:"编辑表单",
			width:423,
			autoHeight:true,
			modal:true,
			listeners:{
				close : function (){
					if(KE.g['plusflink_edit_content']!=undefined){
						KE.remove('plusflink_edit_content');
					}
				}
			},
			bodyStyle:"padding:5px" ,
			items:[edit_tab]
		}).show(Ext.get("index_plusflink_20110501"));						
	}

	
	
});
</script>
<div id="index_plusflink_20110501"></div>