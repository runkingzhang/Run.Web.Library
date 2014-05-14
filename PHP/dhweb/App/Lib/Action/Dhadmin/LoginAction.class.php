<?php

class LoginAction extends Action{

	public function __construct(){
		Action::__construct();
		$sys = D('Syscfg')->getAll();
		$this->assign('syscfg',$sys);
	}

	//登录页面
	public function Loginf(){
		$this->display();
	}

	//登录处理
	public function Login(){
 		if(!$_POST['un'])die('0');
 		if( !$_POST['yz'] || $_SESSION['adlogin_verify'] != md5($_POST['yz']) ){
 			unset($_SESSION['adlogin_verify']);
 			$j['msg'] = '验证码错误！';
 			$j['yestext'] = '重新登录！';
			$j['icon'] = 'alert';
			$j['url'] = 'dhadmin_login_loginf/';
			$this->jump($j);
 		}
 		unset($_SESSION['adlogin_verify']);
 		$user_model = D('Dher');
 		$data['name'] =$_POST['un'];
 		$data['psw'] =$_POST['up'];
 		$p = $user_model->checkLogin($data);
 		if($p){
 			$_SESSION['pspt'] =serialize($p);
 			echo "<meta http-equiv=refresh content='0; url=../dhadmin/'>";
 			die;
 		}else{
 			$j['msg'] = '用户名或密码错误！';
 			$j['yestext'] = '重新登录！';
			$j['icon'] = 'alert';
			$j['url'] = 'dhadmin_login_loginf/';
			$this->jump($j);
 		}
	}

	public function Logout(){
		unset($_SESSION['pspt']);
		$j['msg'] = '已安全退出登录！';
		$j['icon'] = 'succeed';
		$j['yestext'] = '重新登录！';
		$j['url'] = 'dhadmin_login_loginf/';
		$this->jump($j);
	}

	//验证码
	public  function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify($length=4,$mode=1,$type='png',$width=48,$height=22,$verifyName='adlogin_verify');
	}

	public function jump($j){
		$this->assign('j',$j);
		$this->display('index_jump');
		exit;
	}

}
?>