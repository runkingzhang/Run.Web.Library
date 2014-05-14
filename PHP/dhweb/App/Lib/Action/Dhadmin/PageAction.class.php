<?php

class PageAction extends DhadminAction{

	//后台管理列表
	public function mana(){
//		print_r(D('AppMap')->slectChildrenId(1));die;
    	$aid = (int)$_POST['aid'];
    	$wmap['action']='Page';
    	$_POST['name'] ? $wmap['name'] = array('like','%'.$_POST['name'].'%') : null ;  	//栏目名称
    	if($aid){
    		$child_id = implode(',',D('AppMap')->selectChildrenId($aid));//所属栏目
    		if(!$child_id){
    			$wmap['id'] = $aid;
    		}else{
    			$wmap['id'] = array('in',$child_id.','.$aid);
    		}
    	}
    	$page_model = D('AppMap');
    	$list = $page_model->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//话题列表数据
//		print_r($c);
//		die();
		$mapcount   = $page_model->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	public function jsonOption(){
		$rs = D('AppMap')->getPageOption();
		if(!$_GET['isadd']){
			array_unshift($rs ,array('id' => 0,'name' => '────所有栏目────'));
		}else{
			array_unshift($rs ,array('id' => 0,'name' => '────顶级栏目────'));
		}
		echo json_encode($rs);
	}

	public function insert(){
		$page_model = D('AppMap');
		$_POST['aid'] = 2;
		$_POST['action'] = 'Page';
		$page_model->create();
		$r = $page_model->insert();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public function findJson(){
		$rs =  D('AppMap')->find((int)$_GET['id']);
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
		$page = D('AppMap');
//		print_r($amodel);
//		die;
		$page->create();
		$r = $page->save();
		if($r){
			echo '{success:true,msg:"编辑成功！"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

}
?>