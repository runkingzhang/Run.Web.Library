<?php

class FoodViewModel extends ViewModel {
	public $viewFields = array(
 	'Food'=>array( 'id', 'img','imgtb','title','ns','color', 'price','danwei', 'pid', 'content','order_times', 'order_times_r', 'click','yuanliao', 'updatetime','flag', 'rank', 'keywords', 'des','status'),
 	'FoodCat'=>array('pid'=>'ppid','app_id'=>'papp_id', 'name'=>'pname', 'note'=>'pnote', 'rank'=>'prank', 'isdft'=>'pisdft','leaf'=>'pleaf', '_on'=>'FoodCat.id=Food.pid')
 	);

	//获取文章小列表 返回二维数组
	public function selectFood($w,$row){
		$page = 1;
		$step = $row;
    	$w['status'] = array('gt',0);
    	if($w['pid']){
    		$child_id = implode(',',D('FoodCat')->selectChildrenId($w['pid']));
    		if(!$child_id){
    			$wmap['Food.pid'] = $w['pid'];
    		}else{
    			$wmap['Food.pid'] = array('in',$child_id.','.$w['pid']);
    		}
    	}
    	return $this->field('id,title,img,ns,imgtb,color,updatetime,price,danwei')->where($w)->order('id desc')->page($page.','.$step=$row)->select();
	}

}
?>