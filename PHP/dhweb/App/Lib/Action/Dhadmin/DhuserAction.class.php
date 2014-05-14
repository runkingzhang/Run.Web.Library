<?php

class DhuserAction extends DhadminAction {

	//后台管理列表
	public function mana(){
    	$user_model = D('Dher');
    	if($this->_pspt['m_id']>2){
    		$wmap['id'] =$this->_pspt['id'];
    	}
    	$list = $user_model->field('id,m_id,name,lasttime,mail,rname,qq')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//列表数据
//		print_r($c);
//		die();
		$mapcount   = $user_model->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	public function insert(){
    	$user_model = D('Dher');
    	if($_POST['psw']!=$_POST['psw2']){
    		die('{success:false,msg:"两次密码输入不一致！"}');
    	}
    	if($user_model->where("name='$_POST[name]'")->count()){
    		die('{success:false,msg:"用户名已存在！"}');
    	}
//    	die('{success:false,msg:"haole！"}');
		$_POST['psw'] = $user_model->md250($_POST['psw']);
		$user_model->create();
		$r = $user_model->add();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public function edit(){
		$user = D('Dher');
		$user->create();
		$r = $user->save();
		if($r){
			echo '{success:true,msg:'.json_encode($_POST).'}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

	public function findJson(){
		$rs =  D('Dher')->find((int)$_GET['id']);
		if($rs){
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = false;
			echo json_encode($r);
		}
	}

	public function updatePsw(){
    	$user_model = D('Dher');
    	if($_POST['psw1']!=$_POST['psw2']){
    		die('{success:false,msg:"两次密码输入不一致！"}');
    	}
    	if($this->_pspt['psw']!= $user_model->md250($_POST['psw0'])){
    		die('{success:false,msg:"原密码错误！"}');
    	}
    	$newpsw = $user_model->md250($_POST['psw2']);
    	$this->_pspt['psw'] = $newpsw;
    	$_SESSION['pspt'] =serialize($this->_pspt);
    	$r = $user_model->where('id='.$this->_pspt['id'])->setField('psw',$newpsw);
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public function del(){
		if($_POST['id']<=1){
			die('{success:false,msg:"不能删除创始管理员"}');
		}
		if($_POST['id']==$this->_pspt['id']){
			die('{success:false,msg:"不能删除自己"}');
		}
    	$user_model = D('Dher');
    	$r = $user_model->where('id='.(int)$_POST['id'])->delete();
    	if($r){
    		echo '{success:true,msg:"成功"}';
    	}else{
    		echo '{success:false,msg:"失败"}';
    	}
	}


}
?>