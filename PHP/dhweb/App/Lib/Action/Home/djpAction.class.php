<?php

class djpAction extends HomeAction{

	function index(){
		echo index;
	}
	//libiao
	public function i(){
		 $from = 'from:'.$_GET['from'];
		 $to = 'to:'.$_GET['to'];

//		echo '列表';
		$this->assign('from',$from);
		$this->assign('to',$to);
		$this->display('xxx');
	}

	//view
	public function view(){
		echo $_GET['id'];
		echo ' plane';
	}

	//提交
	public function submit(){


	}
}
?>