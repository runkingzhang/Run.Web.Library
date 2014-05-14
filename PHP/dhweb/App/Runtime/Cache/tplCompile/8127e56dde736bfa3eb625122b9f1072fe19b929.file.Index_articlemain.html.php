<?php /* Smarty version Smarty-3.0.7, created on 2014-04-15 21:39:26
         compiled from "./App/Tpl/studio/Dhadmin/Index_articlemain.html" */ ?>
<?php /*%%SmartyHeaderCode:2153534d368e2674f4-98485501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8127e56dde736bfa3eb625122b9f1072fe19b929' => 
    array (
      0 => './App/Tpl/studio/Dhadmin/Index_articlemain.html',
      1 => 1325221477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2153534d368e2674f4-98485501',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--后台文章管理列表-->
<script>
Ext.onReady(function(){
	var pidOptions = new Ext.data.JsonStore({url:'../dhadmin_articlelist_jsonOption/?isadd=1',fields: ['id','pid','name']}); 
	pidOptions.load();
	var pidSelectOptions =  new Ext.data.JsonStore({url:'../dhadmin_articlelist_jsonOption/',fields: ['id','pid','name']}); 
	pidSelectOptions.load();
	var sm = new Ext.grid.CheckboxSelectionModel({singleSelect:true});

    // create the Data Store
    var ds = new Ext.data.Store({
    proxy: new Ext.data.HttpProxy({
            url: '../dhadmin_articlelist_mana/',
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
            {name: 'title', mapping: 'title'},
            {name: 'pname', mapping: 'pname'},
            {name: 'flag', mapping: 'flag'},
            {name: 'user_name', mapping: 'user_name'},
            {name: 'pubdate', mapping: 'pubdate'},
            {name: 'rank', mapping: 'rank'},
            {name: 'status', mapping: 'status'}
        ]),

        // turn on remote sorting
        remoteSort: true
    });
	ds.on("beforeload", function(){
		this.baseParams = {
			 title : Ext.get('Index_articlemain_20110315<?php echo $_GET['aid'];?>
_grid_sj_name').dom.value,
			 aid : Ext.query("*[name=Index_articlemain_20110315<?php echo $_GET['aid'];?>
_grid_sj_pid]")[0].value,
			 status : Ext.query("*[name=Index_articlemain_20110315<?php echo $_GET['aid'];?>
_grid_shenhe]")[0].value,
			 limit:20
		}
	});
    ds.setDefaultSort('rank', 'desc');
    var cm = new Ext.grid.ColumnModel([
		sm,
		{
           header: "ID",
           dataIndex: 'id',
           width: 50,
		   sortable:true
        },{
           header: "标题",
           dataIndex: 'title',
           width: 250
        },{
           header: "所属栏目",
           dataIndex: 'pname',
           width: 100 
        },{
           header: "属性",
           dataIndex: 'flag',
           width: 70,
		   renderer: function (value, p, record) {
		   	if( value =='' ||value ==1 ) return '无';
		   		value =  value.replace('p','[图片]');
				value =  value.replace('c','[推荐]');
				value =  value.replace('t','[置顶]');
				value =  value.replace('f','[幻灯]');
				value =  value.replace('a','[特荐]');
				value =  value.replace('h','[头条]');
				value =  value.replace('b','[加粗]');
				value =  value.replace(',','');
				value =  value.replace('1','');
				return value;
    		}    
        },{
           header: "发布人",
           dataIndex: 'user_name',
           width: 70
        },{
           header: "状态",
           dataIndex: 'status',
           width: 70,   
		   renderer: function (value, p, record) {
				if( value == 2) return '<font color=#C13900 >未审核</font>';
				if( value == 1) return '<font color=#00AD00 >已审核</font>';
    		}  
        },{
           header: "排序",
           dataIndex: 'rank',
           width: 70,
		   sortable:true
        },{
           header: "发布时间",
           dataIndex: 'pubdate',
           width: 100,
		   sortable:true,
		   renderer : function(value) {
				if (value == null || value == 0) {
				return 'null'
				} else {
				return Ext.util.Format.date(new Date(parseInt(value)*1000),'Y-m-d')
				}
			}
        }
        ]);

    // by default columns are sortable
    cm.defaultSortable = true;

    var grid = new Ext.grid.GridPanel({
        el:'Index_articlemain_20110315<?php echo $_GET['aid'];?>
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
		 tbar : ['文章标题',
		 {
			xtype　:　'textfield',
			id:　'Index_articlemain_20110315<?php echo $_GET['aid'];?>
_grid_sj_name',
			width　:　120
		},'-',
		'所属栏目',{
			xtype:'combo',
			id:"Index_articlemain_20111106<?php echo $_GET['aid'];?>
_grid_sj_pid_id",
			hiddenName:"Index_articlemain_20110315<?php echo $_GET['aid'];?>
_grid_sj_pid",
			fieldLabel:"所属栏目",
			//forceSelection: true,
			width:200,
			store: pidSelectOptions,
			valueField:'id',
			displayField:'name',
			typeAhead: true,
			mode: 'local',
			triggerAction: 'all',
			selectOnFocus:true,
			editable :false,
			emptyText:"所有栏目"
		},'-',
		'审核情况',{
			xtype:'combo',
			hiddenName:"Index_articlemain_20110315<?php echo $_GET['aid'];?>
_grid_shenhe",
			forceSelection: true,
			width:100,
			store: new Ext.data.SimpleStore({
				fields: ['text', 'value'],
				data : [['不限',''],['已审核','1'],['未审核','2']]
			}),
			valueField:'value',
			displayField:'text',
			typeAhead: true,
			mode: 'local',
			triggerAction: 'all',
			selectOnFocus:true,
			editable :false,
			emptyText:"审核情况"
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
                                 text : '新增文章',
                                 iconCls : 'silk-add',
								 handler : function() {
									addform();
								}
                             }, {
                                 text : '编辑所选',                                 
								 iconCls : 'silk-edit',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要编辑的文章！');
									}else{
										editform(grid.getSelectionModel().getSelected().id);
									}
								}
                             } <?php if ($_smarty_tpl->getVariable('_user')->value['m_id']<=2){?> ,{
                                 text : '审核所选',                             
								 iconCls : 'silk-accept',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要审核的文章！');
									}else{
										Ext.Msg.confirm('确认','您确认要审核该项吗？',function(btn){
											if(btn=='yes'){
												Ext.Ajax.request({
													method:'POST',
													url:'../dhadmin_articlelist_shenhe/',
													success:function(response){
														rs = Ext.decode(response.responseText);
														if(rs.success){
															Ext.Msg.alert('提示','审核成功！',function(){ds.reload();grid.getView().refresh();})
														}else{
															Ext.Msg.alert('审核失败',rs.msg);
														}
													},
													failure:function(response){
														Ext.Msg.alert('审核失败','网络错误！');
													},
													params:{id:grid.getSelectionModel().getSelected().id}
												});
											}
										});
									}
								}
                             },{
                                 text : '删除所选',
                                 iconCls : 'silk-delete',
								 handler : function() {
									if(grid.getSelectionModel().getSelected() == undefined){
										alert('请先点击选择要删除的文章！');
									}else{
										Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
											if(btn=='yes'){
												//alert('删除id：'+treegrid._sid);
												Ext.Ajax.request({
													method:'POST',
													url:'../dhadmin_articlelist_del/',
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
            emptyMsg: "该列表没有内容可以显示"
        })
    });

    // render it
    grid.render();
	
	<?php if ($_GET['aid']){?>Ext.getCmp('Index_articlemain_20111106<?php echo $_GET['aid'];?>
_grid_sj_pid_id').setValue(<?php echo $_GET['aid'];?>
);<?php }?>
    // trigger the data store load
    ds.load({params:{start:0, limit:20}});
	Ext.getCmp('Index_articlemain_20111106<?php echo $_GET['aid'];?>
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
				//alert('前台预览'+grid.getSelectionModel().getSelected().id);
				window.open(_SYSCFG_I+'articlelist_view_id_'+grid.getSelectionModel().getSelected().id);
			}
		} <?php if ($_smarty_tpl->getVariable('_user')->value['m_id']<=2){?> ,{
			text:'审核',                      
			iconCls : 'silk-accept',
			handler:function(){
				Ext.Msg.confirm('确认','您确认要审核该项吗？',function(btn){
					if(btn=='yes'){
						Ext.Ajax.request({
							method:'POST',
							url:'../dhadmin_articlelist_shenhe/',
							success:function(response){
								rs = Ext.decode(response.responseText);
								if(rs.success){
									Ext.Msg.alert('提示','审核成功！',function(){ds.reload();grid.getView().refresh();})
								}else{
									Ext.Msg.alert('审核失败',rs.msg);
								}
							},
							failure:function(response){
								Ext.Msg.alert('审核失败','网络错误！');
							},
							params:{id:grid.getSelectionModel().getSelected().id}
						});
					}
				});
			}
		},{
			text:'删除',
			iconCls : 'silk-delete',
			handler:function(){
				Ext.Msg.confirm('确认','您确认要删除该项吗？',function(btn){
					if(btn=='yes'){
						//alert('删除id：'+treegrid._sid);
						Ext.Ajax.request({
							method:'POST',
							url:'../dhadmin_articlelist_del/',
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

	//新增文章
	function addform(){
			var add_tab  = new Ext.FormPanel({
			url:"../dhadmin_articlelist_insert/",
			method:"post",
			height:500,
			//width:650,
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:80, bodyStyle:'padding:10px'}, 
				items:[{
					title:'基本信息',
					layout:'form',
					defaults: {width: 230},
					defaultType: 'textfield',
					items:[{
						name:"title",
						fieldLabel:"文章标题",
						allowBlank : false, 
						width:350,
						blankText : '该字段不允许为空'
					},{
						xtype:'combo',
						hiddenName:"aid",
						fieldLabel:"所属栏目",
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
						blankText : '最选择所属栏目', 
						emptyText: '最选择所属栏目'
					},{
                        xtype : "textarea",                    
                        name : "body",
                        id : "article_add_body",
						width:650,
						height:350,
						hideLabel:true,
                        listeners : {
                            "render" : function(f) {
								KE.init({
								id : 'article_add_body',
								width:650,
								imageUploadJson: _SYSCFG_I+'dhadmin_articlelist_imgupload/',
								height:350,
								afterCreate : function(id) {KE.util.focus(id);}
								});
								KE.create('article_add_body');
                            }
                        }
                    }]
				},{
					title:'高级信息',
					layout:'form',
					items: [{
						xtype:'checkboxgroup',
						name:'ckflag',
						width:400,
						fieldLabel:'属性',
						items:[{
							name:'flag[]',
							inputValue:'h',
							boxLabel:'头条'
						},{
							name:'flag[]',
							inputValue:'c',
							boxLabel:'推荐'
						},{
							name:'flag[]',
							inputValue:'t',
							boxLabel:'置顶'
						},{
							name:'flag[]',
							inputValue:'f',
							boxLabel:'幻灯'
						},{
							name:'flag[]',
							inputValue:'a',
							boxLabel:'特荐'
						},{
							name:'flag[]',
							inputValue:'b',
							boxLabel:'加粗'
						}]
					},{
						layout:'column',
						border:false,
						items:[{
							width:280,
							colunmWidth:.5,
							layout:'form',
							defaultType: 'textfield',
							border:false,
							defaults:{width:160,xtype:'textfield'}, 
							items:[{
								name:"rank",
								xtype:'numberfield',
								fieldLabel:"排序"
							},new Ext.ux.ColorField({
								fieldLabel: '标题颜色',
								name:'color',
								value:'',
								fallback: true,
								allowBlank:true,
								msgTarget: 'qtip'
							}),{
								name:"pubdate",
								fieldLabel:"发布日期",
								xtype:'datefield',
								format:"Y-m-d"
							}]
						},{
							width:280,
							colunmWidth:.5,
							layout:'form',
							defaults:{width:160,xtype:'textfield'}, 
							border:false,
							items:[{
								name:"source",
								fieldLabel:"来源"
							},{
								name:"click",
								fieldLabel:"浏览量"
							}]
						}]
					},{
						name:"img_url",
						xtype:'textfield',
						width:350,
						fieldLabel:"缩略图"
					},{
						name:"img2",
						xtype:'textfield',
						width:350,
						fieldLabel:"缩略图2"
					},{
						name:"img3",
						xtype:'textfield',
						width:350,
						fieldLabel:"缩略图3"
					},{
						name:"keywords",
						width:350,
						xtype:'textfield',
						fieldLabel:"Keywords"
					},{
						name:"des",
						xtype : "textarea",
						width:350,
						height:62,
						fieldLabel:"description"
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
			title:"新增文章",
			width:700,
			//height:450,
			autoHeight:true,
			modal:true,
			maximizable :true,
			listeners:{
				close : function (){
					if(KE.g['article_add_body']!=undefined){
						KE.remove('article_add_body');
					}
				}
			},
			//height:auto,
			//autoScroll:true,
			bodyStyle:"padding:5px" ,
			items:[add_tab]
		}).show(Ext.get("Index_articlemain_20110315<?php echo $_GET['aid'];?>
"));
	}
	
	//编辑文章
	function editform(edit_id){
		var edit_tab  = new Ext.FormPanel({
			url:"../dhadmin_articlelist_edit/",
			method:"post",
			height:500,
			reader: new Ext.data.JsonReader({successProperty: 'success',root: 'info'},['id', 'aid','title','color','des','keywords','flag','pubdate','img_url','img2','img3','rank','body','writer','source','click','editdate','tmp_url']), 
			border:false,
			items: {
				xtype:'tabpanel',
				activeTab: 0,
				defaults:{autoHeight:true,labelWidth:80, bodyStyle:'padding:10px'}, 
				items:[{
					title:'基本信息',
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
						xtype:"hidden",
						name:"_flag",
						hidden:true,
						hiddenLabel:true
					},{
						name:"title",
						fieldLabel:"文章标题",
						allowBlank : false, 
						width:350,
						blankText : '该字段不允许为空'
					},{
						xtype:'combo',
						hiddenName:"aid",
						fieldLabel:"所属栏目",
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
						blankText : '最选择所属栏目', 
						emptyText: '最选择所属栏目'
					},{
                        xtype : "textarea",                    
                        name : "body",
                        id : "article_edit_body",
						width:650,
						height:360,
						hideLabel:true,
                        listeners : {
                            "render" : function(f) {
								KE.init({
									id : 'article_edit_body',
									width:650,
									imageUploadJson: _SYSCFG_I+'dhadmin_articlelist_imgupload/',
									height:320,
									afterCreate : function(id) {KE.util.focus(id);}
								});
                            }
                        }
                    }]
				},{
					title:'高级信息',
					layout:'form',
					items:[{
						xtype:"hidden",
						name:'flag[-1]',
						value:'1',
						hidden:true,
						hiddenLabel:true,
						allowBlank:false
					},{
						xtype:'checkboxgroup',
						name:'ckflag',
						width:400,
						fieldLabel:'属性',
						listeners : {
                            "render" : function(f) {
								//alert(edit_tab.getForm().findField('_flag').value);
								var   fxvalue = edit_tab.getForm().findField('_flag').value;
								(fxvalue.indexOf('h') != -1) ? this.setValue('flag[0]', true):'';
								(fxvalue.indexOf('c') != -1) ? this.setValue('flag[1]', true):'';
								(fxvalue.indexOf('t') != -1) ? this.setValue('flag[2]', true):'';
								(fxvalue.indexOf('f') != -1) ? this.setValue('flag[3]', true):'';
								(fxvalue.indexOf('a') != -1) ? this.setValue('flag[4]', true):'';
								(fxvalue.indexOf('b') != -1) ? this.setValue('flag[5]', true):'';
                            }
                        },
						items:[{
							name:'flag[0]',
							inputValue:'h',
							boxLabel:'头条'
						},{
							name:'flag[1]',
							inputValue:'c',
							boxLabel:'推荐'
						},{
							name:'flag[2]',
							inputValue:'t',
							boxLabel:'置顶'
						},{
							name:'flag[3]',
							inputValue:'f',
							boxLabel:'幻灯'
						},{
							name:'flag[4]',
							inputValue:'a',
							boxLabel:'特荐'
						},{
							name:'flag[5]',
							inputValue:'b',
							boxLabel:'加粗'
						}]
					},{
						layout:'column',
						border:false,
						items:[{
							width:280,
							colunmWidth:.5,
							layout:'form',
							defaultType: 'textfield',
							border:false,
							defaults:{width:160,xtype:'textfield'}, 
							items:[{
								name:"rank",
								xtype:'numberfield',
								fieldLabel:"排序",
								value:50
							},new Ext.ux.ColorField({
								fieldLabel: '标题颜色',
								id : "article_edit_color",
								name:'color',
								value:'',
								fallback: true,
								allowBlank:true,
								msgTarget: 'qtip',
								renderer:function(){
								 this.afterRender()
								}
							}),{
								name:"pubdate",
								fieldLabel:"发布日期",
								xtype:'datefield',
								format:"Y-m-d"
							}]
						},{
							width:280,
							colunmWidth:.5,
							layout:'form',
							defaults:{width:160,xtype:'textfield'}, 
							border:false,
							items:[{
								name:"source",
								fieldLabel:"来源"
							},{
								name:"click",
								fieldLabel:"浏览量"
							}]
						}]
					},{
						name:"img_url",
						xtype:'textfield',
						width:350,
						fieldLabel:"缩略图"
					},{
						name:"img2",
						xtype:'textfield',
						width:350,
						fieldLabel:"缩略图2"
					},{
						name:"img3",
						xtype:'textfield',
						width:350,
						fieldLabel:"缩略图3"
					},{
						name:"keywords",
						width:350,
						xtype:'textfield',
						fieldLabel:"Keywords"
					},{
						name:"des",
						xtype : "textarea",
						width:350,
						height:62,
						fieldLabel:"description"
					}]
				}]
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
				url:'../dhadmin_articlelist_findJson/?id='+edit_id,
				nocache: true,
				//waitTitle:'加载数据',
				//waitMsg:'Loading',
				success : function(form, action){
					KE.create('article_edit_body');
					 edit_tab.getForm().findField('_flag').setValue(action.result.data.flag);
					
				}
			}); 
		}
		var edit_window = new Ext.Window({
			title:"编辑文章",
			width:700,
			maximizable :true,
			autoHeight:true,
			modal:true,
			listeners:{
				close : function (){
					if(KE.g['article_edit_body']!=undefined){
						KE.remove('article_edit_body');
					}
				}
			},
			bodyStyle:"padding:5px" ,
			items:[edit_tab]
		}).show(Ext.get("Index_articlemain_20110315<?php echo $_GET['aid'];?>
"));						
	}

});
</script>
<div id="Index_articlemain_20110315<?php echo $_GET['aid'];?>
"></div>