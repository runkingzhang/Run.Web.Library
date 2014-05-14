<?php
class AppfoodAction extends HomeAction {

	public function i(){
		$pid = (int)$_GET['pid'];	//分类id
		$this->assign('w_pid',$pid);

		$page = (int)$_GET['p'];	//所在页
		$step = 40;	//每页显示条数

		$thisapp = D('Appmap')->find(1);
		$this->assign('thisapp',$thisapp);
		//where
    	if($pid){
    		$child_id = implode(',',D('FoodCat')->selectChildrenId($pid));
    		if(!$child_id){
    			$wmap['Food.pid'] = $pid;
    		}else{
    			$wmap['Food.pid'] = array('in',$child_id.','.$pid);
    		}
    	}
		//获取列表主体信息
    	$a = D('FoodView');
    	$wmap['status'] = array('gt',0);
    	$wmap['ns'] = -1 ;
    	$list = $a->field('id,title,ns,img,imgtb,color,updatetime,price,danwei')->where($wmap)->order('rank desc')->page($page.','.$step)->select();
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
			$this->display('index_index');
		}
	}

	public function ajaxSelect(){
		$pid = (int)$_POST['pid'];	//分类id
		$this->assign('w_pid',$pid);

		$page = (int)$_POST['p'];	//所在页
		$step = 40;	//每页显示条数

		$thisapp = D('Appmap')->find(1);
		$this->assign('thisapp',$thisapp);
		//where
    	if($pid){
    		$child_id = implode(',',D('FoodCat')->selectChildrenId($pid));
    		if(!$child_id){
    			$wmap['Food.pid'] = $pid;
    		}else{
    			$wmap['Food.pid'] = array('in',$child_id.','.$pid);
    		}
    	}
		//获取列表主体信息
    	$a = D('FoodView');
    	$wmap['status'] = array('gt',0);
    	$wmap['ns'] = -1 ;
    	$list = $a->field('id,title,img,ns,imgtb,color,updatetime,price,danwei')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->page($page.','.$step)->select();
		import('ORG.Util.Page'); // 导入分页类
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		$Page       = new Page($mapcount,$step); // 实例化分页类传入总记录数和每页显示的记录数
		$Page->setConfig('theme', ' %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		$pagenav    = $Page->show(); // 分页显示输出
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).',"nav":"'.$pagenav.'"})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	public function view(){
		$fv = D('FoodView');
		$arow =  $fv->where('Food.id='.(int)$_GET['id'])->find();
//		print_r($arow);
		if($arow){
		D('Food')->setInc('click','id='.(int)$_GET['id'],1);
		$thisapp = D('Appmap')->where('action ="AppFood"')->find();
		$this->assign('thisapp',$thisapp);

		$this->assign('arow',$arow);
		if($arow['tmp']){
			$this->display($arow['tmp']);
		}else{
			$this->display();
		}
		}else{
			die('不存在这个菜式');
		}
	}


	//结算页面
	public function viewOrder(){
		Load('extend');
		$wangbaip = array(
//			'218.94.124.62'=>'晴雨网吧',
			'218.2.114.134'=>'太阁网吧',
			'180.111.75.110'=>'太阁网吧',
			'221.226.69.186'=>'同友网吧',
			'222.190.120.67'=>'176网吧',
			'222.190.108.36'=>'艺海珠尘网吧',
			'58.213.157.234'=>'海阔天空网吧',
			'58.213.135.82'=>'盘锦网吧',
			'58.213.135.83'=>'异想世界网吧',
			'222.190.105.187'=>'海之蓝网吧',
			'222.190.105.186'=>'晴雨网吧'
		);
		SetCookie('address',$wangbaip[get_client_ip()],time()+24*3600,'/','.nuister.com',0);
		$this->display();
	}

	//提交订单
	public function sentOrder(){
 		if(!$_POST)die('0');
 		if( !$_POST['appfood_verify'] || $_SESSION['appfood_verify'] != md5($_POST['appfood_verify']) ){
 			unset($_SESSION['appfood_verify']);
 			die('{success:false,msg:"验证码错误！"}');
 		}
 		unset($_SESSION['appfood_verify']);
		Load('extend');
		$fooditems = json_decode($_COOKIE['cart_item'],true);
 		$order_data['order_time'] = time();
//		print_r($fooditems);
		$order_data['totalprices']=0;
		foreach($fooditems as $k=>$v){
			$ns += $fooditems[$v['id']]['_ns'];
			$xj = $fooditems[$v['id']]['xiaojie'] = $v['price']*$v['num'];
			$order_data['totalprices'] += $xj;
		}
		if($ns == count($fooditems)){
			die('{success:false,msg:"另加类不得单点！"}');
		}
//		print_r($fooditems);
		$order_model	= D('FoodOrder');
		$off_model		= D('FoodOffer');
		$item_model		= D('FoodOrderitems');
		$order_model->startTrans();
		$orderid = $order_model->insert($order_data);
		$off_model->insert($orderid,$_POST['peisong']);
		$r = $item_model->insert($orderid,$fooditems);
		if($r){
			$order_model->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$order_model->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

	public  function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify($length=4,$mode=1,$type='png',$width=48,$height=22,$verifyName='appfood_verify');
	}



}
?>