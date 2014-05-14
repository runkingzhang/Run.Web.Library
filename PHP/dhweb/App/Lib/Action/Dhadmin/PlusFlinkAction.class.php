<?php
class PlusFlinkAction extends DhadminAction{

	public function mana(){
    	$a = D('PlusFlink');
    	if($this->_pspt['m_id']>2){
    		$wmap['id'] =$this->_pspt['id'];
    	}
    	$list = $a->field('*')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//列表数据
//		print_r($c);
//		die();
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	public function insert(){
    	$a = D('PlusFlink');
    	$a->create();
//    	print_r($_POST);
//    	print_r($a);
		$r = $a->add();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public function findJson(){
		$rs =  D('PlusFlink')->find((int)$_GET['id']);
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
		$page = D('PlusFlink');
		$page->create();
		$r = $page->save();
		if($r){
			echo '{success:true,msg:"编辑成功！"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

	public function del(){
		$r = D('PlusFlink')->where('id='.(int)$_POST['id'])->delete();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}


}

?>
