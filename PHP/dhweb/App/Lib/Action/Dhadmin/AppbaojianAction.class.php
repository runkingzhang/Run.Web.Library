<?php

class AppbaojianAction extends DhadminAction {

	//增加房型
	public function Insert(){
		$rm = D('Baojian');
		$rm->startTrans();
//		$_POST['flag'] = implode(',',$_POST['flag']);

		$img = $this->uploadImg();
		if($img){
			$_POST['img'] =$img['0']['savepath'].$img['0']['savename'];
			$_POST['imgtb'] =preg_replace( '/(.'.$img['0']['extension'].')$/','tb.'.$img['0']['extension'].'',$_POST['img']);
		}

		$_POST['updatetime'] = time();
		$rm->create();
		$r = $rm->add();
//		$rank = (stristr($_POST['flag'],'t')===false)? $r :$r+1000000;
//		$r = $rm->where('id='.$r) ->save(array('rank'=>$rank));
		if($r){
			$rm->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$rm->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}
	//房型管理
	public function mana(){
    	//$pid = (int)$_POST['pid'];
    	$wmap['status'] = array('gt',0);
    	$_POST['title'] ? $wmap['title'] = array('like','%'.$_POST['title'].'%') : null ;
    	$a = D('Baojian');
    	$list = $a->field('*')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();
//		echo $a->getLastSql();die;
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

    public function roomFindJson(){
		$rs =  D('Baojian')->find((int)$_GET['id']);
		if($rs){
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = false;
			echo json_encode($r);
		}
    }

	public function roomEdit(){
		$rm = D('Baojian');
//		$_POST['flag'] = implode(',',$_POST['flag']);
		$_POST['updatetime'] = time();
		$img = $this->uploadImg();
		if($img){
			$_POST['img'] =$img['0']['savepath'].$img['0']['savename'];
			$_POST['imgtb'] =preg_replace( '/(.'.$img['0']['extension'].')$/','tb.'.$img['0']['extension'].'',$_POST['img']);
		}
		$rm->create();
		$r = $rm->save();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据"}';
		}
	}

	public function roomDel(){
		$rm = D('Baojian');
		$data['status'] = -1;
		$r = $rm->where('id='.(int)$_POST['id'])->save($data);
		if($r){
			echo '{success:true,msg:"删除成功！"}';
		}else{
			echo '{success:false,msg:"删除失败！"}';
		}
	}

	public function orderSelect(){
    	$wmap['status'] = array('gt',0);
    	$_POST['id'] ? $wmap['id'] = $_POST['id'] : null ;
    	$_POST['orderdate'] ? $wmap['orderdate'] = $_POST['orderdate'] : null ;
    	$_POST['status'] ? $wmap['status'] = $_POST['status'] : null ;
    	$_POST['lunsup'] ? $wmap['lunsup'] = $_POST['lunsup'] : null ;
//    	$_POST['id'] ? $wmap['FoodOrder.id'] = array('like','%'.$_POST['title'].'%') : null ;
    	$a = D('BaojianOrder');
    	$list = $a->field('*')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//话题列表数据
//		print_r($c);
//		die();
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	public function findOrderPg(){
		$r = D('BaojianOrderView')->where('BaojianOrder.id='.(int)$_GET['oid'])->find();
//		echo D('BaojianOrderView')->getLastSql();die;
		if($r){
			echo '['.json_encode($r).']';
		}
	}

	//订单主体信息
	public function findOrderJson(){
		$rs = D('BaojianOrder')->find((int)$_GET['id']);
		if($rs){
			if($rs['isread']== -1){
				D('BaojianOrder')->where('id='.$_GET['id'])->setField('isread',1);
			}
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = false;
			echo json_encode($r);
		}
	}

	public function orderEdit(){
		$fo = D('BaojianOrder');
		if($_POST['status']==2){
			$row = $fo->find((int)$_POST['id']);
			$w['r_id'] = $row['r_id'];
			$w['orderdate'] = $row['orderdate'];
			$w['lunsup'] = $row['lunsup'];
			$w['status'] = 2 ;
			$is = $fo->where($w)->find();
			if($is){
				die( '{success:false,msg:"本包间该时段已被预定！订单号是：'.$is['id'] .'"}');
			}
		}
		$fo->create();
		$r = $fo->save();
		if($r){
			echo '{success:true,msg:"修改成功！"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

	public function orderDel(){
		$r = D('BaojianOrder')->where('id='.(int)$_POST['id'])->delete();
		if($r){
			echo '{success:true,msg:"删除成功！"}';
		}else{
			echo '{success:false,msg:"删除失败"}';
		}
	}

	//是否占用
	public function checkBaojian(){
		$w['orderdate'] = $_POST['orderdate'];
		$w['lunsup'] = $_POST['lunsup'];
		$w['r_id'] = $_POST['r_id'];
		$w['status'] =2;
		if($r = D('BaojianOrder')->where($w)->find()){
			return $r;
		}else{
			return false;
		}
	}



	private function uploadImg(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile(); // 实例化上传类
		$upload->maxSize  = 3145728 ; // 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
		$upload->savePath =  'upload/images/baojian/'; // 设置附件上传目录
		$upload->thumb = true;
		$upload->thumbSuffix = 'tb';
		$upload->thumbPrefix = '';
		$upload->thumbRemoveOrigin = false;
		$upload->autoSub = true;
		$upload->subType = date;
		$upload->saveRule = time;
		$upload->thumbPath = $upload->savePath.date('Ymd').'/';
		$upload->thumbMaxWidth = "160";
		$upload->thumbMaxHeight = "160";
		if(!$upload->upload()) { // 上传错误提示错误信息
//			return $upload->getErrorMsg();
			return false;
		}else{ // 上传成功获取上传文件信息
			return  $upload->getUploadFileInfo();
		}
	}
}
?>