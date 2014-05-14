<?php

class ApproomAction extends HomeAction {

	public function i(){
//		$pid = (int)$_GET['pid'];	//分类id
//		$this->assign('w_pid',$pid);

		$page = (int)$_GET['p'];	//所在页
		$step = 40;	//每页显示条数
		$thisapp = D('Appmap')->find(3);
		$this->assign('thisapp',$thisapp);
		//获取列表主体信息
    	$a = D('Room');
    	$wmap['status'] = array('gt',0);
    	$list = $a->field('id,title,imgtb,color,updatetime,price')->where($wmap)->order('rank desc')->page($page.','.$step)->select();
		import('ORG.Util.Page'); // 导入分页类
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		$Page       = new Page($mapcount,$step); // 实例化分页类传入总记录数和每页显示的记录数
		$Page->setConfig('theme', ' %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		$pagenav    = $Page->show(); // 分页显示输出

		$this->assign('list',$list);
		$this->assign('pagenav',$pagenav);

		if($thisapp['tmp']){
			$this->display($thisapp['tmp']);
		}else{
			$this->display();
		}
	}

	public function view(){
		$rm = D('Room');
		$arow =  $rm->find((int)$_GET['id']);
//		print_r($arow);
		if($arow){
		$rm->setInc('click','id='.(int)$_GET['id'],1);
		$thisapp = D('Appmap')->where('action ="AppRoom"')->find();
		$this->assign('thisapp',$thisapp);
		$this->assign('arow',$arow);


		if($arow['tmp']){
			$this->display($arow['tmp']);
		}else{
			$this->display();
		}
		}else{
			die('不存在这个房型');
		}
	}

	public function viewOrder(){
		$r['title'] = $_GET['title'];
		$r['id'] = $_GET['id'];
		$this->assign('r',$r);
		$this->display();
	}

	public function sentOrder(){
 		if(!$_POST)die('0');
 		if( !$_POST['approom_verify'] || $_SESSION['approom_verify'] != md5($_POST['approom_verify']) ){
 			unset($_SESSION['approom_verify']);
 			die('{success:false,msg:"验证码错误！"}');
 		}
 		unset($_SESSION['approom_verify']);
		$_POST['pubdate'] = time();
		Load('extend');
		$_POST['c_ip'] = get_client_ip();
		$r = D('RoomOrder')->data($_POST)->add();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public  function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify($length=4,$mode=1,$type='png',$width=48,$height=22,$verifyName='approom_verify');
	}

}
?>