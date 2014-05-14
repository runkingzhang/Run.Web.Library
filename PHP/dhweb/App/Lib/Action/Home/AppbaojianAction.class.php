<?php
//预定酒店 包间系统
class AppbaojianAction extends HomeAction {

	public function index(){
//		print_r($_GET);
//		$aid = (int)6;	//分类id

		$_GET['orderdate']  = $_GET['orderdate'] ? $_GET['orderdate']: date('Y-m-d',time());
		$_GET['lunsup'] = $_GET['lunsup'] ? $_GET['lunsup']:(date('H',time())>12? 2:1 );

//die;
    	$wo['orderdate'] = $_GET['orderdate'];
    	$wo['lunsup'] = $_GET['lunsup'] ;
    	$wmap['status'] = array('gt',0);
    	$a = D('Baojian');

		//空闲
    	if($_GET['status'] ==1){
    		$wo['status'] = 2;
			$order_row = D('BaojianOrder')->field('id,r_id,status')->where($wo)->select();
			if(is_array($order_row)){
				foreach($order_row as $k=>$v){
					$id_arr[] =$v['r_id'];
				}
				$wmap['id'] = array('not in',implode(',',$id_arr));
			}
    		$list = $a->field('*')->where($wmap)->order('rank desc')->select();
		//占用
    	}elseif($_GET['status'] ==2){
    		$wo['status'] = 2 ;
			$order_row = D('BaojianOrder')->field('id,r_id,status')->where($wo)->select();
			if(is_array($order_row)){
				foreach($order_row as $k=>$v){
					$id_arr[] =$v['r_id'];
				}
				$wmap['id'] = array('in',implode(',',$id_arr));
	    		$list = $a->field('*')->where($wmap)->order('rank desc')->select();
				foreach($list as $k=>$v){
					$list[$k]['o_status'] = 1;
				}
			}
		//不限
    	}else{
			$order_row = D('BaojianOrder')->field('id,r_id,status')->where($wo)->select();
			if(is_array($order_row))
			foreach($order_row as $k=>$v){
				$order_info[$v['r_id']] = $v['status'];
			}
	    	$list = $a->field('*')->where($wmap)->order('rank desc')->select();
			foreach($list as $k=>$v){
				if($order_info[$v['id']]==2){
					$list[$k]['o_status'] = 1;
				}
			}
    	}
//		echo $a->getLastSql();die;
		$this->assign('articlelist',$list);
		$this->display();
	}


	public function viewOrder(){
		$r['title'] = iconv('GB2312', 'UTF-8',$_GET['title']);
		$r['id'] = $_GET['id'];
		$this->assign('r',$r);
		$this->display();
	}

	public function sentOrder(){
 		if(!$_POST)die('0');
 		if( !$_POST['appbaojian_verify'] || $_SESSION['appbaojian_verify'] != md5($_POST['appbaojian_verify']) ){
 			unset($_SESSION['appbaojian_verify']);
 			die('{success:false,msg:"验证码错误！"}');
 		}
 		unset($_SESSION['appbaojian_verify']);
 		if($this->checkBaojian()){
 			die( '{success:false,msg:"本包间该时段已被预定！"}');
 		}
		$_POST['pubdate'] = time();
		Load('extend');
		$_POST['ip'] = get_client_ip();
		$r = D('BaojianOrder')->data($_POST)->add();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	//是否占用
	public function checkBaojian(){
		$w['orderdate'] = $_POST['orderdate'];
		$w['lunsup'] = $_POST['lunsup'];
		$w['r_id'] = $_POST['r_id'];
		$w['status'] =2;
		if(D('BaojianOrder')->where($w)->count()){
			return true;
		}else{
			return false;
		}
	}

	public  function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify($length=4,$mode=1,$type='png',$width=48,$height=22,$verifyName='appbaojian_verify');
	}
}
?>