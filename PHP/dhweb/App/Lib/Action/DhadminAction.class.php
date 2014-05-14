<?php
class DhadminAction extends Action {
	protected $_pspt;

	public function __construct(){
		Action::__construct();
		$sys = D('Syscfg')->getAll();
		$this->assign('syscfg',$sys);
		$this->_pspt =  D('Passport')->getPassport();
//		die;
		if(!$this->_pspt ){
			$j['msg'] = '请先登录！';
 			$j['yestext'] = '现在登录';
			$j['icon'] = 'alert';
			$j['url'] = 'dhadmin_login_loginf/';
			$this->jump($j);
		}
		$this->assign('_user',$this->_pspt );
	}

}
?>