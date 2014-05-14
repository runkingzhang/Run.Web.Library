<?php

class AppmapAction extends DhadminAction {

	public function appList(){
		$list = D('AppMap')->order('rank asc')->select();
		Load('extend');
		$tree=list_to_tree($list,'id','pid','children',0);
//		print_r($tree);
		echo json_encode($tree);
	}

	public function insert(){
		$aid = (int)$_POST['aid'];
		$appmodel = D('App');
		$appmodel ->startTrans() ;
		$apprs = $appmodel->find($aid);
		if(!$apprs){
			$appmodel->rollback();
			echo '{success:false,msg:"请选择内容模型！"}';
			die;
		}
		$_POST['action'] = $apprs['action'];
		$this->init($apprs['action'],$aid);
		$map_model = D('Appmap');
		//不得在功能性栏目下面创建栏目
		$action = $map_model->where('id='.(int)$_POST['pid'])->getField('action');
		if($action &&!in_array($action,array('Page','ArticleIndex','ArticleList'))){
			$appmodel->rollback();
			die('{success:false,msg:"不得在功能性栏目下面创建栏目！"}');
		}else{
			unset($action);
		}
		$map_model->create();
		$r  = $map_model->insert();
		if($r){
			$appmodel->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$appmodel->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

	public function findJson(){
		$rs =  D('Appmap')->find((int)$_GET['id']);
		if($rs){
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = false;
			echo json_encode($r);
		}
	}

	public function edit(){
		$appmap = D('Appmap');
		$appmap->create();
		$r = $appmap->save();
		if($r){
			echo '{success:true,msg:'.json_encode($_POST).'}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

	//应用初始化
	public function init($action,$appid){
		switch($action){
			case 'AppPro':{
				$ob_pct = D('ProductCat');
				$data['app_id'] =$appid;
				$data['name'] = '默认分类';
				$data['isdft'] = 1;
				$ob_pct ->add($data);
				unset($data);
				break;
			}
			case 'AppFood':{
				$ob_pct = D('FoodCat');
				$data['app_id'] =$appid;
				$data['name'] = '默认分类';
				$data['isdft'] = 1;
				$ob_pct ->add($data);
				unset($data);
				break;
			}
			default:;
		}
	}

	public function jsonOption(){
		echo D('AppMap')->OptionJson();
	}

	//查询列表
	public function jsonSelect(){
    	$aid = (int)$_POST['name'];
    	$cid = (int)$_POST['cid'];
//    	$_POST['name'] ? $wmap['cname'] = array('like','%'.$_POST['name'].'%') : null ;    	//商家名字
//    	$_POST['pid'] ? $wmap['id']= (int)$_POST['pid'] :null;								//行业分类
    	$_POST['cid'] ? $wmap['cid']= (int)$_POST['cid'] :null;								//行业分类

//		$wmap = '';
    	$c = D('AppMap');
    	$list = $c->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//列表数据
//		print_r($c);
//		die();
		$mapcount   = $c->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	//移动栏目
	public function move($id,$toid){
		$id = (int)$_POST['id'];
		$toid = (int)$_POST['toid'];
		$c = D('appmap');
		$c->startTrans();
		//不得移动到自己
		if($id == $toid){
			die('{success:false,msg:"不得移动到自身栏目！"}');
		}
		//不做移动
		$pid = $c->where('id='.$id)->getField('pid');
		if($pid==$toid){
			die('{success:false,msg:"栏目没有移动！"}');
		}else{
			//unset($pid);
		}
		//不得移动到子类下面
		$childrenids =$c->selectChildrenId($id);
		if(in_array($toid,$childrenids)){
			die('{success:false,msg:"不得移动到子类下面！"}');
		}else{
			unset($childrenids);
		}
		//不得移动到功能性栏目下面
		$action = $c->where('id='.$toid)->getField('action');
		if(!in_array($action,array('Page','ArticleIndex','ArticleList'))){
			die('{success:false,msg:"不得移动到功能性栏目下面！"}');
		}else{
			unset($action);
		}
		//leaf字段处理
		//原来父级
		if($c->where('pid='.$pid)->count() ==1 &&$pid){
			$c->where('id='.$pid)->save(array('leaf'=>1));
		}
		//新父级
		if($c->where('pid='.$toid)->count()==0 && $toid){
			$c->where('id='.$toid)->save(array('leaf'=>''));
		}
		$r = $c->where('id='.$id)->save(array('pid'=>$toid));
		if($r){
			$c->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$c->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

	//删除
	public function del(){
		if(!$_POST['id']){
			die('{success:false,msg:"请先指定栏目id！"}');
		}
		$c = D('AppMap');
		$c->startTrans();
		if($c->where('pid='.(int)$_POST['id'])->count()){
			$c->rollback();
			echo '{success:false,msg:"请先删除子栏目！"}'; die;
		}
		$r = $c->del();
		if($r){
			$c->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$c->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

}
?>