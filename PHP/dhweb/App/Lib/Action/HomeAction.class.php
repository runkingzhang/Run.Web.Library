<?php
class HomeAction extends Action {
	protected $_pspt;

	public function __construct(){
		Action::__construct();
		$sys = D('Syscfg')->getAll();
		$this->assign('syscfg',$sys);
		$ad = D('PlusAd')->getAll();
		$this->assign('adrow',$ad);
	}

}
?>