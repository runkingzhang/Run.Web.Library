<?php
class AppgbookAction extends HomeAction{

	public function i(){
		$id = (int)$_GET['id'];	//分类id
		$page = (int)$_GET['p'];	//所在页
		$step = 10;	//每页显示条数
		$AppMap_model = D('AppMap');
		$thisapp = $AppMap_model->find($id);
		$this->assign('thisapp',$thisapp);

    	$thisapp_f = $AppMap_model->getTopFather($id);//顶级父类
    	$thisapp_mbx = $AppMap_model->mianbaoxie($thisapp['pid']);//面包屑
		$this->assign('thisapp_mbx',$thisapp_mbx);
    	if($thisapp['leaf']){
    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['pid'])->select();//栏目导航
    	}else{
    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['id'])->select();//栏目导航
    	}
    	$this->assign('thisapp_f',$thisapp_f);
    	$this->assign('catbro',$catbro);

		//获取列表主体信息
    	$a = D('Guestbook');
    	$wmap['status'] = array('gt',0);
    	$list = $a->field('*')->where($wmap)->order('id desc')->page($page.','.$step)->select();
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

	public function addForm(){
		$this->display();
	}

	public function view(){
		$rm = D('Guestbook');
		$arow =  $rm->find((int)$_GET['id']);
//		print_r($arow);
		if($arow){
			$AppMap_model = D('AppMap');
			$thisapp =$AppMap_model->where('action ="AppGbook"')->find();
			$this->assign('thisapp',$thisapp);
	    	$thisapp_f = $AppMap_model->getTopFather($thisapp['id']);//顶级父类
	    	if($thisapp['leaf']){
	    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['pid'])->select();//栏目导航
	    	}else{
	    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['id'])->select();//栏目导航
	    	}
	    	$this->assign('thisapp_f',$thisapp_f);
	    	$this->assign('catbro',$catbro);
	    	$arow['content'] = str_replace(array('<','>'),array('&lt;','&gt;'),$arow['content']);
			$this->assign('arow',$arow);
			$this->display();
		}else{
			die('不存在这个留言');
		}
	}

	public function insert(){

 		if(!$_POST)die('0');
// 		if( !$_POST['gbook_verify'] || $_SESSION['gbook_verify'] != md5($_POST['gbook_verify']) ){
// 			unset($_SESSION['gbook_verify']);
// 			die('{success:false,msg:"验证码错误！"}');
// 		}
// 		unset($_SESSION['gbook_verify']);
		$_POST['pubdate'] = time();
		Load('extend');
		$_POST['c_ip'] = get_client_ip();
		$_POST['title'] = strip_tags($_POST['title']);
		$_POST['content'] = strip_tags($_POST['content']);
//		print_r($_POST);die;
		$r = D('Guestbook')->data($_POST)->add();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public  function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify($length=4,$mode=1,$type='png',$width=48,$height=22,$verifyName='gbook_verify');
	}

}
?>