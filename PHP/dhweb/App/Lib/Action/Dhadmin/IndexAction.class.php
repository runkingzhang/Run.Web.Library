<?php
/*********  后台页面  **********/
class IndexAction extends DhadminAction
{

	public function jump($j){
		$this->assign('j',$j);
		$this->display('index_jump');
		exit;
	}

	//后台主面板
    public function index()
    {
    	if($this->_pspt['m_id'] <=2){
    		$this->display('index_index_1');
    	}else{
    		$this->display('index_index_2');
    	}
    }


	//栏目管理
	public function appMapMain(){
		if($_GET['cid']){
			$cidstr = 'cid:'.(int)$_GET['cid'].',';
			$this->assign('cidstr',$cidstr);
		}
		$this->display();
	}

	//文章列表
	public function articleMain(){
		$this->display();
	}

	//单页管理
	public function pageMain(){
		$this->display();
	}

	//菜式分类管理
	public function foodCatMain(){
		$this->display();
	}

	//菜式管理
	public function foodMain(){
		$this->display();
	}

	public function foodHsz(){
		$this->display();
	}

	//订餐订单管理
	public function foodOrderMain(){
		$this->display();
	}


	//房型管理
	public function roomMain(){
		$this->display();
	}

	//订餐订单管理
	public function roomOrderMain(){
		$this->display();
	}


	//房型管理
	public function gbookMain(){
		$this->display();
	}


	//用户管理
	public function userMain(){
		$this->display();
	}

	//系统管理
	public function sysMain(){
		$this->display();
	}

	//广告管理
	public function plusadMain(){
		$this->display();
	}

	//友情链接管理
	public function plusFlinkMain(){
		$this->display();
	}

}
?>