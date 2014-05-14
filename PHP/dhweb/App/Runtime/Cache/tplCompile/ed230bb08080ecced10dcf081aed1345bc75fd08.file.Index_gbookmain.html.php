<?php /* Smarty version Smarty-3.0.7, created on 2012-02-12 18:51:28
         compiled from "./App/Tpl/hkxq/Dhadmin/Index_gbookmain.html" */ ?>
<?php /*%%SmartyHeaderCode:136884f3799b06c8690-38497766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed230bb08080ecced10dcf081aed1345bc75fd08' => 
    array (
      0 => './App/Tpl/hkxq/Dhadmin/Index_gbookmain.html',
      1 => 1325221518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136884f3799b06c8690-38497766',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--后台留言板管理列表-->
<script>
Ext.onReady(function(){
	
	var sm = new Ext.grid.CheckboxSelectionModel({singleSelect:true});
    // create the Data Store
    var ds = new Ext.data.Store({
    proxy: new Ext.data.HttpProxy({
            url: '../dhadmin_appgbook_mana/',
			failure : function(response,options){
			//alert(json2str(response));
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
            {name: 'c_name', mapping: 'c_name'},
            {name: 'resb', mapping: 'resb'},
            {name: 'pubdate', mapping: 'pubdate'},
            {name: 'c_phone', mapping: 'c_phone'},
            {name: 'r_name', mapping: 'r_name'}
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
           width: 30,
		   sortable:true
        },{
           header: "标题",
           dataIndex: 'c_name',
           width: 100,
		   renderer: function (value, p, record) {
				value = value+'给您反馈了信息';
		   	if( record.data["isread"] ==-1) {
				value =  '<font color=red >[新]</font>'+value;
			}
			return value;
    		}
        },{
           header: "电话",
           dataIndex: 'c_phone',
           width: 50,
           align: 'center'
        },{
           header: "发布时间",
           dataIndex: 'pubdate',
           width: 70,
           align: 'center',
			renderer : function(value) {
		   //alert(value);
				if (value == null || value == 0) {
				return 'null'
				} else {
				return Ext.util.Format.date(new Date(parseInt(value)*1000),'Y-m-d H:i:s')
				}
			}
        },{
           header: "称呼",
           dataIndex: 'c_name',
           width: 50,
           align: 'right'
        }
        ]);

    // by default columns are sortable
    cm.defaultSortable = true;

    var grid = new Ext.grid.GridPanel({
        //el:'index_gbookmain_20110406',
      	width: Ext.get("i3_center").getWidth()-400,
		height: Ext.get("i3_center").getHeight()-30,
		//width:800,
		autoScroll:true,
		region:"center",
		//border:false,
        //title:'留言管理',
        store: ds,
        cm: cm,
		frame:true,
        trackMouseOver:false,
        sm:sm,
        loadMask: true,
		// inline toolbars,
		 tbar : [ ],
		listeners : {
			click:function(){
				//alert(grid.getSelectionModel().getSelected().id);
				//view_order(grid.getSelectionModel().getSelected().id);
			},
			dblclick:function(){
				//alert(grid.getSelectionModel().getSelected().id);
				view_order(grid.getSelectionModel().getSelected().id);
			},
			contextmenu:function(node,event){
			
			},
			'render' : function() {
         	var tbar = new Ext.Toolbar({
                     items : [ {
                                 text : '查看所选',                                 
								 iconCls : 'silk-edit',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要查看的留言！');
									}else{
										view_order(grid.getSelectionModel().getSelected().id);
									}
								}
                             }, {
                                 text : '删除所选',
                                 iconCls : 'silk-delete',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要删除的留言！');
									}else{
										Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
											if(btn=='yes'){
												Ext.Ajax.request({
													method:'POST',
													url:'../dhadmin_appgbook_del/',
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

    ds.load({params:{start:0, limit:20}});


	var right_panel = new Ext.form.FormPanel({
		url:"../dhadmin_appgbook_edit/",
		method:"post",
		reader: new Ext.data.JsonReader({successProperty: 'success',root: 'info'},['id','status','title','email','c_name','c_phone','c_qq','c_ip','content','resb']),
		region:"east",
		buttonAlign:'center' , 
		title:"留言详情",
		labelAlign:"right",
		width:400,
		//frame :false,
		//border:false,
		split:true,
		defaults:{labelWidth:70}, 
		autoScroll:true,
		collapsible:true,
		height: Ext.get("i3_center").getHeight()-30,
		items:[{
			layout:'form',
			bodyStyle:'padding:5px',			
			//autoWidth: true,
			//defaultType: 'textfield',
			items:[{
				xtype:"hidden",
				name:"id",
				hidden:true,
				hiddenLabel:true,
				allowBlank:false
			},{
				fieldLabel: '姓名',
				xtype:'textfield',
				name: 'c_name'
			},{
				fieldLabel: '邮箱',
				xtype:'textfield',
				name: 'email'
			},{
				fieldLabel: '地址',
				xtype:'textfield',
				name: 'title'
			},{
				fieldLabel: '电话',
				xtype:'textfield',
				name: 'c_phone'
			},{
				fieldLabel: 'ip',
				xtype:'textfield',
				name: 'c_ip'
			},{
				fieldLabel: '内容',
				name: 'content',
				width:290,
				height:130,
				xtype:'textarea'
			}]
		}],
		//footer ：true,

	});
	
	
	//主面板
	var main_panel = new Ext.Panel({
		layout : 'border',
		bodyBorder: false,
		renderTo: 'index_gbookmain_20110406',
		frame :false,
		border:false,
		autoScroll:false,
		height: Ext.get("i3_center").getHeight()-30,
		items : [grid,right_panel]
	});	
	
	ds.on("beforeload", function(){
		this.baseParams = {
			 //id : Ext.get('index_gbook_id_20110406').dom.value,
			 limit:20
		}
	});
	//点击查看留言
	var view_order = function(o_id){
		right_panel.getForm().load({
			url:'../dhadmin_appgbook_findjson/?id='+o_id,
			nocache: true,
			//waitTitle:'加载数据',
			waitMsg:'Loading',
			success : function(form, action){
				//right_panel.findByType("radiogroup")[0].setValue(action.result.data.status);//把是选
			}
		}); 
		
	}

});
</script>
<div id="index_gbookmain_20110406"></div>