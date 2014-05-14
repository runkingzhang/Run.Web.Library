<?php

class DingcanAction extends HomeAction{

	public function index(){
//		print_r($_GET);
		$aid = (int)6;	//分类id
		$page = (int)$_GET['p'];	//所在页
		$step = 12;	//每页显示条数

		$appmap_model = D('Appmap');
		$thisapp = $appmap_model->find($aid);
		if(!$thisapp){
			die('不存在这个栏目');
		}
		$this->assign('thisapp',$thisapp);
		//where
    	if($aid){
    		$child_id = implode(',',$appmap_model->selectChildrenId($aid));//所属栏目
    		if(!$child_id){
    			$wmap['Article.aid'] = $aid;
    		}else{
    			$wmap['Article.aid'] = array('in',$child_id.','.$aid);
    		}
    	}

    	$thisapp_f = $appmap_model->getTopFather($aid);//顶级父类
    	$thisapp_mbx = $appmap_model->mianbaoxie($thisapp['pid']);//面包屑
		$this->assign('thisapp_mbx',$thisapp_mbx);
    	if($thisapp['leaf']){
    		$catbro = $appmap_model->field('id,name,action')->where('pid='.$thisapp['pid'])->select();//栏目导航
    	}else{
    		$catbro = $appmap_model->field('id,name,action')->where('pid='.$thisapp['id'])->select();//栏目导航
    	}
    	$this->assign('thisapp_f',$thisapp_f);
    	$this->assign('catbro',$catbro);

		//获取列表主体信息
    	$a = D('ArticleView');
    	$wmap['Article.status'] = 1 ;
    	$list = $a->field('id,title,color,des,pubdate,pname,aid,click,img_url')->where($wmap)->order('rank desc')->page($page.','.$step)->select();
//		echo $a->getLastSql();die;
		import('ORG.Util.Page'); // 导入分页类
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		$Page       = new Page($mapcount,$step); // 实例化分页类传入总记录数和每页显示的记录数
		$Page->setConfig('theme', ' %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		$pagenav    = $Page->show(); // 分页显示输出
		$this->assign('articlelist',$list);
		$this->assign('pagenav',$pagenav);
//		echo $a->getLastSql();
//		print_r($list);

		if($thisapp['tmp']){
			$this->display($thisapp['tmp']);
		}else{
			$this->display();
		}
	}
}
?>