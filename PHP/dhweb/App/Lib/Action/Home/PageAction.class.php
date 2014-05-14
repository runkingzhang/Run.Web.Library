<?php

class PageAction extends HomeAction{


	public function i(){
		$id = (int)$_GET['id'];	//分类id
		$AppMap_model = D('AppMap');
		$thisapp = $AppMap_model->find($id);
		if(!$thisapp){
			die('不存在这个栏目');
		}

    	$thisapp_f = $AppMap_model->getTopFather($id);//顶级父类
    	$thisapp_mbx = $AppMap_model->mianbaoxie($thisapp['pid']);//面包屑
//    	print_r($thisapp_mbx);die;
    	$this->assign('thisapp_mbx',$thisapp_mbx);
//    	print_r($thisapp_mbx);die;
    	if($thisapp['leaf']){
    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['pid'])->select();//栏目导航
    	}else{
    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['id'])->select();//栏目导航
    	}
		//print_r($thisapp_f);die;
    	$this->assign('thisapp_f',$thisapp_f);
    	$this->assign('catbro',$catbro);

		$this->assign('thisapp',$thisapp);
		if($thisapp['tmp']){
			$this->display($thisapp['tmp']);
		}else{
			$this->display();
		}
	}


}
?>