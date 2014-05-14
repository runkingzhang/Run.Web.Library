<?php

class ApproomAction extends DhadminAction {

	//增加房型
	public function roomInsert(){
		$rm = D('Room');
		$rm->startTrans();
		$_POST['flag'] = implode(',',$_POST['flag']);
		//缩略图
		if(!$_POST['imgtb']){
			preg_match_all("/<img.+src=(('|\")(.+)('|\"))/Uis",$_POST['content'],$preg_img);
			$_POST['imgtb'] = $preg_img[3][0];
		}
		$_POST['updatetime'] = time();
		$rm->create();
		$r = $rm->add();
		$rank = (stristr($_POST['flag'],'t')===false)? $r :$r+1000000;
		$r = $rm->where('id='.$r) ->save(array('rank'=>$rank));
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
    	$a = D('Room');
    	$list = $a->field('id,title,flag,price,click,order_times,rank')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

    public function roomFindJson(){
		$rs =  D('Room')->find((int)$_GET['id']);
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
		$rm = D('Room');
		$_POST['flag'] = implode(',',$_POST['flag']);
		//缩略图
		if(!$_POST['imgtb']){
			preg_match_all("/<img.+src=(('|\")(.+)('|\"))/Uis",$_POST['content'],$preg_img);
			$_POST['imgtb'] = $preg_img[3][0];
		}
		$_POST['updatetime'] = time();
		if($_POST['rank']){
			if($_POST['rank']>1000000){
				//原来置顶
				$_POST['rank'] = (stristr($_POST['flag'],'t')===false)? $_POST['rank']-1000000 :  $_POST['rank'];
			}else{
				//原来不置顶
				$_POST['rank'] = (stristr($_POST['flag'],'t')===false)? $_POST['rank'] :  $_POST['rank'] +1000000;
			}
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
		$rm = D('Room');
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
    	$_POST['status'] ? $wmap['status'] = $_POST['status'] : null ;
//    	$_POST['id'] ? $wmap['FoodOrder.id'] = array('like','%'.$_POST['title'].'%') : null ;
    	$a = D('RoomOrder');
    	$list = $a->field('id,c_name,status,pubdate,c_phone,isread,r_name')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//话题列表数据
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
		$r = D('RoomOrder')->find((int)$_GET['oid']);
		if($r){
			echo '['.json_encode($r).']';
		}
	}

	//订单主体信息
	public function findOrderJson(){
		$rs = D('RoomOrder')->find((int)$_GET['id']);
		if($rs){
			if($rs['isread']== -1){
				D('RoomOrder')->where('id='.$_GET['id'])->setField('isread',1);
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
		$fo = D('RoomOrder');
		$fo->create();
		$r = $fo->save();
		if($r){
			echo '{success:true,msg:"修改成功！"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

}
?>