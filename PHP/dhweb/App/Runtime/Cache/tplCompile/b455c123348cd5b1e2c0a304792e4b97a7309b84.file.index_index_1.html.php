<?php /* Smarty version Smarty-3.0.7, created on 2012-02-16 19:01:47
         compiled from "./App/Tpl/huanke/Dhadmin/index_index_1.html" */ ?>
<?php /*%%SmartyHeaderCode:39784f3ce21be25b40-64185008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b455c123348cd5b1e2c0a304792e4b97a7309b84' => 
    array (
      0 => './App/Tpl/huanke/Dhadmin/index_index_1.html',
      1 => 1329137094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39784f3ce21be25b40-64185008',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台程序</title>
<script>
 var _SYSCFG_ROOT = '<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
';
 var _SYSCFG_I = '<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/resources/css/ext-all.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/resources/css/ext-patch.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/icons/silk.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/ext-all.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/ext-lang-zh_CN.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/editor/kindeditor.js"></script>
<!-- ext 列表树 相关文件 开始 --> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/treegrid/treegrid.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/treegrid/TreeGridSorter.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/treegrid/TreeGridColumnResizer.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/treegrid/TreeGridNodeUI.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/treegrid/TreeGridLoader.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/treegrid/TreeGridColumns.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/mtr/treegrid/TreeGrid.js"></script>
<!-- ext 列表树 相关文件 结束 -->

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/Ext.ux.ColorField.js"></script>

</head>
<body>
<script type="text/javascript">
function json2str(o) {
	var arr = [];
    var fmt = function(s) {
		if (typeof s == 'object' && s != null) return json2str(s);
			return /^(string|number)$/.test(typeof s) ? "'" + s + "'" : s;
    }
    for (var i in o) arr.push("'" + i + "':" + fmt(o[i]));
		return '{' + arr.join(',') + '}';
}
Ext.override(Ext.form.RadioGroup, {
    getValue: function(){   
        var v;   
        if (this.rendered) {   
            this.items.each(function(item){   
                if (!item.getValue())    
                    return true;   
                v = item.getRawValue();   
                return false;   
            });   
        }   
        else {   
            for (var k in this.items) {   
                if (this.items[k].checked) {   
                    v = this.items[k].inputValue;   
                    break;   
                }   
            }   
        }   
        return v;   
    },   
    setValue: function(v){   
        if (this.rendered)
            this.items.each(function(item){   
                item.setValue(item.getRawValue() == v);   
            });
        else {
            for (var k in this.items) {   
                this.items[k].checked = this.items[k].inputValue == v;   
            }   
        }   
    }
});
var center = {};
Ext.BLANK_IMAGE_URL="<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/ext-3.3.1/resources/images/default/s.gif";
Ext.onReady(function(){
    Ext.QuickTips.init();
    Ext.form.Field.prototype.msgTarget = 'side';
		var north=new Ext.Toolbar({
			height:40,
			split:true,
			layoutConfig: { padding:'10',align:'stretch'},
			baseCls:'x-plain',
			region:"north"
		});
		north.addText("<!--<img src='<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
mtr/theme/system/images/admin_logo.gif2' style='border:none;margin:0;position:relative;top:-5px;'>-->");
		north.addFill();
		north.addText("欢迎您！网站管理员");
		north.addSeparator();
		north.addButton(new Ext.Toolbar.Button({text:"前台首页",iconCls :'silk-house',handler:function(item){window.open ('<?php echo $_smarty_tpl->getVariable('syscfg')->value['root'];?>
')}}));
		north.addButton(
			new Ext.Toolbar.Button(
				{
					text:"退出登录",
					iconCls :'silk-cancel',
					handler:function(item){
						Ext.Msg.confirm('确认','您确认要退出后台吗？',
							function(btn){
								if(btn=='yes')
									{location.href='<?php echo $_smarty_tpl->getVariable('syscfg')->value['i'];?>
dhadmin_login_Logout/';}
							}
						)
					}
				}
			)
		);
		
		var south = new Ext.Panel({
			region:"south",
			layout:'hbox',
			height:30,
			html:"网站管理系统 &copy;2009-2011 ",
			bodyStyle:" font-size:12px ; text-align:center ; padding-top:4px; color:#666666"
		});
		
		center = new Ext.TabPanel({
			id:"i3_center",
			region:"center",
			items:[
			{
				id:"op1",
				title:"系统首页",
				html:"欢迎登录网站管理系统后台<div id='fb-example'></div>"	
			}
			],
			enableTabScroll:true
		});
		
		center.setActiveTab("op1");
		
		var west = new Ext.tree.TreePanel({
			title:"管理导航",
			region:"west",
			width:200,
			autoScroll:true,
			collapsible:true,
			rootVisible : false,
			split:true,
			listeners:{
				click:function(n){
					var url = n.attributes.url;
					var id = n.attributes.id;
					var p = center.getItem(url);
					if(url){
						if(p){
							center.setActiveTab(p);
						}else{
							p =  new Ext.Panel({
								title: n.attributes.text,
								autoLoad:{url:url,scripts:true,nocache: true},
								closable:true,
								id:url,
                                destroy:function (){//销毁tabpanel
									//alert(212112);
                                    if(this.fireEvent("destroy",this)!=false){
                                        this.el.remove();
                                        p = null;
                                        //tabPage = null;
                                        if(Ext.isIE){
                                            CollectGarbage();
                                        }
                                    }
                                }
							});
							center.add(p);
							center.setActiveTab(p);
						}

					}
				}
			}
		});
		
		root = new Ext.tree.AsyncTreeNode({
			text:'根节点',
			children:[
			/*{
					text:"网站内容管理",
					expanded:true,
					children:[
						{
							text:"公司概况",
							children:[
								{text:"关于九趣",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=7",leaf:1},
								{text:"企业文化",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=8",leaf:1},
								{text:"企业荣誉",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=9",leaf:1},
								{text:"办公环境",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=10",leaf:1},
								{text:"联系我们",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=11",leaf:1},
								{text:"网站地图",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=12",leaf:1}
							]
						},
						{
							text:"新闻中心",
							children:[
								{text:"公司咨询",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=13",leaf:1},
								{text:"行业动态",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=14",leaf:1},
								{text:"电子内刊",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=15",leaf:1}
							]
						},
						{
							text:"业务内容",
							children:[
								{text:"多媒体展示",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=16",leaf:1},
								{text:"影视特效三维动画",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=17",leaf:1},
								{text:"虚拟现实",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=18",leaf:1},
								{text:"建筑数字图像",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=19",leaf:1}
							]
						},{
							text:"服务领域",
							children:[
								{text:"展览展示",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=20",leaf:1},
								{text:"地产应用",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=21/",leaf:1},
								{text:"建筑展示",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=22",leaf:1},
								{text:"数字城市",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=23/",leaf:1},
								{text:"数字展馆",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=24",leaf:1},
								{text:"文物古迹",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=25/",leaf:1},
								{text:"卡通动漫",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=26",leaf:1},
								{text:"工业应用",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=27/",leaf:1},
								{text:"市政园林",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=28",leaf:1}
							]
						},{
							text:"成功案例",
							children:[
								{text:"行政事业单位",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=29",
								children:[
								{text:"城市宣传片",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=30",leaf:1},
								{text:"网上展览馆",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=31",leaf:1},
								{text:"规划方案演示汇报",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=32",leaf:1},
								{text:"虚拟漫游",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=33",leaf:1}
								]
								},{
									text:"房地产客户",
									url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=34",
									children:[
										{text:"地产三维互动展示",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=35",leaf:1},
										{text:"数字沙盘",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=36",leaf:1},
										{text:"地产宣传片",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=37",leaf:1},
										{text:"地产效果图",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=38",leaf:1}
										]
									},{
									text:"企业类客户",
									url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=39",
									children:[
										{text:"企业形象宣传片",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=40",leaf:1},
										{text:"工程原理演示动画",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=41",leaf:1},
										]
									},
									{text:"建筑设计院",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=42",leaf:1},
									{text:"其他",url:_SYSCFG_I+"dhadmin_Index_articlemain/?aid=43",leaf:1}
								]
						},{
							text:"加入我们",
							children:[
								{text:"人才机制",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=44",leaf:1},
								{text:"人才招聘",url:_SYSCFG_I+"dhadmin_Index_pageMain/?aid=45",leaf:1}
							]
						}
					]
				},*/
				{
					text:"网站系统管理",
					expanded:true,
					children:[
						{text:"全站栏目管理",url:_SYSCFG_I+"dhadmin_Index_appMapMain/",leaf:1},
						{
							text:"文章栏目管理",
							children:[
								{text:"普通文章管理",url:_SYSCFG_I+"dhadmin_Index_articlemain/",leaf:1},
								{text:"栏目单页管理",url:_SYSCFG_I+"dhadmin_Index_pageMain/",leaf:1}
							]
						},
						{text:"友情链接",url:_SYSCFG_I+"dhadmin_Index_plusflinkmain/",leaf:1},
						{text:"用户列表",url:_SYSCFG_I+"dhadmin_Index_userMain/",leaf:1},
						{text:"系统参数",url:_SYSCFG_I+"dhadmin_Index_sysmain/",leaf:1}
					]
				}
			]
		
		})

		
		west.setRootNode(root);
		
		var vp = new Ext.Viewport({
			layout:"border",
			items:[north,west,south,center]
		});
		//west.expandAll();

		
　　});


</script>
</body>
</html>
