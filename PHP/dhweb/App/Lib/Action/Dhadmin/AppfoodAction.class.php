<?php


class AppfoodAction extends DhadminAction {


	//菜式分类管理
	public function foodCatMain(){
		$list = D('FoodCat')->order('rank asc')->select();
		Load('extend');
		$tree=list_to_tree($list,'id','pid','children',0);
		echo json_encode($tree);

	}

	public function pidJsonOption(){
		$rs = D('FoodCat')->OptionJson();
		if($_GET['type']=='addcat'){
			array_unshift($rs ,array('id' => 0,'name' => '────顶级分类────'));
		}
		if($_GET['type']=='select'){
			array_unshift($rs ,array('id' => 0,'name' => '────所有分类────'));
		}
		echo json_encode($rs);
	}

	//增加菜式分类
	public function foodCatAdd(){
		$pid = (int)$_POST['pid'];
		$fc = D('FoodCat');
		$fc->startTrans();
		if($pid){
			$data1['leaf'] = '';
			$fc->where('id='.$pid)->save($data1);
		}
		$fc->create();
		$r  = $fc->add();
		if($r){
			$fc->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$fc->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

	public function foodCatFindJson(){
		$rs =  D('FoodCat')->find((int)$_GET['id']);
		if($rs){
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = false;
			echo json_encode($r);
		}
	}

	//菜式分类编辑
	public function foodCatEdit(){
		$fc = D('FoodCat');
		$fc->create();
		$r = $fc->save();
		if($r){
			echo '{success:true,msg:"修改成功"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}


	//移动分类
	public function catMove($id,$toid){
		$id = (int)$_POST['id'];
		$toid = (int)$_POST['toid'];
		$c = D('FoodCat');
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

	//菜式分类删除
	public function foodCatDel(){
		if(!$_POST['id']){
			die('{success:false,msg:"请先指定分类id！"}');
		}
		$fc = D('FoodCat');
		$fc->startTrans();
		//默认分类
		$default_id = $fc->where('isdft=1')->getField('id');
		if($default_id == $_POST['id']){
			$fc->rollback();
			die( '{success:false,msg:"默认分类不得删除"}');
		}
		if($fc->where('pid='.(int)$_POST['id'])->count()){
			$fc->rollback();
			echo '{success:false,msg:"请先删除子分类"}'; die;
		}
		//所属菜式移动到默认分类
		$data['pid'] = $default_id;
		$n = $f = D('Food')->where('pid='.(int)$_POST['id'])->save($data);
		$r = $fc->where('id='.(int)$_POST['id'])->delete();
		if($r){
			$fc->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$fc->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

	//增加菜式
	public function foodInsert(){
		$fd = D('Food');
		$fd->startTrans();
		$_POST['flag'] = implode(',',$_POST['flag']);
		$_POST['updatetime'] = time();
		$_POST['img'] = 'upload/images/food/null.jpg';
		$_POST['imgtb'] = 'upload/images/food/nulltb.jpg';
		$fd->create();
		$r = $fd->add();
		$rank = (stristr($_POST['flag'],'t')===false)? $r :$r+1000000;
		$r = $fd->where('id='.$r) ->save(array('rank'=>$rank));
		if($r){
			$fd->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$fd->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

	//菜式管理
	public function mana(){
    	$pid = (int)$_POST['pid'];
    	$wmap['status'] = array('gt',0);
    	$_POST['title'] ? $wmap['Food.title'] = array('like','%'.$_POST['title'].'%') : null ;
    	$_POST['ns'] ? $wmap['Food.ns'] = $_POST['ns'] : null ;
    	if($pid){
    		$child_id = implode(',',D('FoodCat')->selectChildrenId($pid));
    		if(!$child_id){
    			$wmap['Food.pid'] = $pid;
    		}else{
    			$wmap['Food.pid'] = array('in',$child_id.','.$pid);
    		}
    	}
    	$a = D('FoodView');
    	$list = $a->field('id,pid,title,pname,flag,order_times,order_times_r,click,price,rank')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();
//		print_r($list);
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}


    public function foodFindJson(){
		$rs =  D('Food')->find((int)$_GET['id']);
		if($rs){
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = false;
			echo json_encode($r);
		}
    }

	public function foodEdit(){
		$fd = D('Food');
		$_POST['flag'] = implode(',',$_POST['flag']);
		$_POST['updatetime'] = time();
		$_POST['ns'] = $_POST['ns'] ? 1: -1 ; //单点复选框 取消不了bug
		unset($_POST['imgtb']);
		$img = $fd->uploadImg();
		if($img){
			$_POST['img'] =$img['0']['savepath'].$img['0']['savename'];
			$_POST['imgtb'] =preg_replace( '/(.'.$img['0']['extension'].')$/','tb.'.$img['0']['extension'].'',$_POST['img']);
		}
		if($_POST['rank']){
			if($_POST['rank']>1000000){
				//原来置顶
				$_POST['rank'] = (stristr($_POST['flag'],'t')===false)? $_POST['rank']-1000000 :  $_POST['rank'];
			}else{
				//原来不置顶
				$_POST['rank'] = (stristr($_POST['flag'],'t')===false)? $_POST['rank'] :  $_POST['rank'] +1000000;
			}
		}
		$fd->create();
		$r = $fd->save();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据"}';
		}
	}

	public function foodDel(){
		$id_arr = json_decode($_POST['ids']);
		if(!$id_arr[0]){
			die('{success:false,msg:"请先选择！"}');
		}
		$data['status'] = -1;
		$r = D('Food')->where('id in('. implode(',',$id_arr)  .')' )->save($data);
		if($r){
			echo '{success:true,msg:"删除成功！"}';
		}else{
			echo '{success:false,msg:"删除失败！"}';
		}
	}

	//菜式回收站
	public function foodHsz(){
    	$wmap['status'] = array('lt',0);
    	$a = D('FoodView');
    	$list = $a->field('id,pid,title,pname,flag,order_times,order_times_r,click,price,rank')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}


	public function foodReDel(){
		$id_arr = json_decode($_POST['ids']);
		if(!$id_arr[0]){
			die('{success:false,msg:"请先选择！"}');
		}
		$data['status'] = 1;
		$r = D('Food')->where('id in('. implode(',',$id_arr)  .')' )->save($data);
		if($r){
			echo '{success:true,msg:"还原成功！"}';
		}else{
			echo '{success:false,msg:"还原失败！"}';
		}
	}

	public function foodIsDel(){
		$data['status'] = 0;
		$r = D('Food')->where('id='.(int)$_POST['id'])->save($data);
		if($r){
			echo '{success:true,msg:"彻底删除成功！"}';
		}else{
			echo '{success:false,msg:"彻底删除失败！"}';
		}
	}

	public function orderSelect(){
    	$wmap['status'] = array('gt',0);
    	$_POST['id'] ? $wmap['FoodOrder.id'] = $_POST['id'] : null ;
    	$_POST['status'] ? $wmap['FoodOrder.status'] = $_POST['status'] : null ;
//    	$_POST['id'] ? $wmap['FoodOrder.id'] = array('like','%'.$_POST['title'].'%') : null ;
    	$a = D('FoodOrderView');
    	$list = $a->field('id,address,status,pubdate,gettime,isread,totalprices')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//话题列表数据
//		print_r($c);
//		die();
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	//配送信息
	public function findOfferJson(){
		$wangbaip = array(
			'127.0.0.1'=>'异想世界网吧',
			'218.2.114.134'=>'太阁网吧',
			'180.111.75.110'=>'太阁网吧',
			'221.226.69.186'=>'同友网吧',
			'222.190.120.67'=>'176网吧',
			'222.190.108.36'=>'艺海珠尘网吧',
			'58.213.157.234'=>'海阔天空网吧',
			'58.213.135.82'=>'盘锦网吧',
			'58.213.135.83'=>'异想世界网吧',
			'222.190.105.187'=>'海之蓝网吧',
			'222.190.105.186'=>'晴雨网吧'
		);
		$r = D('FoodOffer')->where('orderid='.(int)$_GET['oid'])->find();
		if($r){
			$adrs = $wangbaip[$r['cip']];
			$r['cip'] = $adrs ? $r['cip'].'：'.$adrs : $r['cip'].'：未知';
			echo '['.json_encode($r).']';
		}
	}

	//订单菜式列表
	public function orderItemsSelect(){
    	$oid = (int)$_POST['oid'];
    	$a = D('FoodOrderitems');
    	$list = $a->where('orderid='.$oid)->select();//
//		print_r($c);
//		die();
		$mapcount   = $a->where('orderid='.$oid)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	//订单主体信息
	public function findOrderJson(){
		$rs = D('FoodOrder')->find((int)$_GET['id']);
		if($rs){
			if($rs['isread']== -1){
				D('FoodOrder')->where('id='.$_GET['id'])->setField('isread',1);
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
		$fo = D('FoodOrder');
//		die;
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