<?php

class AppGbookAction extends DhadminAction {


	public function mana(){
    	$wmap['status'] = array('gt',0);
    	if($_POST['status'] == 1){
    		$wmap['resb'] = array('eq','');
    	}elseif($_POST['status'] == 2){
    		$wmap['resb'] = array('neq','');
    	}
    	$_POST['id'] ? $wmap['title'] = array('like','%'.$_POST['id'].'%') : null ;
    	$a = D('Guestbook');
    	$list = $a->field('id,title,c_name,c_phone,pubdate,resb')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//话题列表数据
//		echo $a->getLastSql();die;
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	public function findJson(){
		$rs = D('Guestbook')->find((int)$_GET['id']);
//		echo  D('Guestbook')->getLastSql();die;
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
		$fo = D('Guestbook');
		$_POST['resb_time'] = time();
		$fo->create();
		$r = $fo->save();
		if($r){
			echo '{success:true,msg:"修改成功！"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

	public function del(){
		$amodel = D('Guestbook');
		$data['status'] = -1;
		$r = $amodel->where('id='.(int)$_POST['id'])->save($data);
		if($r){
			echo '{success:true,msg:"ok"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}
}
?>