<?php
/********* 应用管理  **********/
class AppAction extends DhadminAction {

	//返回json数据 下拉菜单
	public function jsonOption(){
		$r=D('App')->field('id,name')->where('status>0')->select();
//		array_unshift($r,array('id'=>0,'name'=>'请选择应用类型'));
		echo json_encode($r);
//		print_r($r);
	}


}
?>