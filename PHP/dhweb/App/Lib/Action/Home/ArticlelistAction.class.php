<?php

class ArticlelistAction extends HomeAction{

	//前台列表
	public function i(){
//		print_r($_GET);
		$aid = (int)$_GET['id'];	//分类id
		$page = (int)$_GET['p'];	//所在页
		$step = 10;	//每页显示条数

		$AppMap_model = D('AppMap');
		$thisapp = $AppMap_model->find($aid);
		if(!$thisapp){
			die('不存在这个栏目');
		}
		$this->assign('thisapp',$thisapp);
		//where
    	if($aid){
    		$child_id = implode(',',$AppMap_model->selectChildrenId($aid));//所属栏目
    		if(!$child_id){
    			$wmap['Article.aid'] = $aid;
    		}else{
    			$wmap['Article.aid'] = array('in',$child_id.','.$aid);
    		}
    	}

    	$thisapp_f = $AppMap_model->getTopFather($aid);//顶级父类
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
    	$a = D('ArticleView');
    	$wmap['Article.status'] = 1 ;
    	$list = $a->field('id,title,color,des,pubdate,pname,aid,body,click,img_url')->where($wmap)->order('rank desc')->page($page.','.$step)->select();
		//echo $a->getLastSql();die;
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

	public function view(){
		$a = D('ArticleView');
		$arow =  $a->where('Article.id='.(int)$_GET['id'])->find();
//		echo $a->getLastSql();die;
		if($arow){
			$a->setInc('click','id='.(int)$_GET['id'],1);
			$AppMap_model = D('AppMap');
			$thisapp = $AppMap_model->find($arow['aid']);
			$this->assign('thisapp',$thisapp);
			$this->assign('arow',$arow);

	    	$thisapp_f = $AppMap_model->getTopFather($thisapp['id']);//顶级父类
	    	$thisapp_mbx = $AppMap_model->mianbaoxie($thisapp['pid']);//面包屑
    		$this->assign('thisapp_mbx',$thisapp_mbx);
	    	if($thisapp['leaf']){
	    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['pid'])->select();//栏目导航
	    	}else{
	    		$catbro = $AppMap_model->field('id,name,action')->where('pid='.$thisapp['id'])->select();//栏目导航
	    	}
	    	$this->assign('thisapp_f',$thisapp_f);
	    	$this->assign('catbro',$catbro);
//print_r($thisapp);
			if($arow['tmp']){
				$this->display($arow['tmp']);
			}elseif($thisapp['rtpl']){
				$this->display($thisapp['rtpl']);
			}else{
				$this->display();
			}
		}else{
			die('不存在这个文章');
		}
	}

	//文章搜索
	public function ss(){
//		print_r($_GET);
		$aid = (int)$_GET['id'];	//分类id
		$page = (int)$_GET['p'];	//所在页
		$step = 15;	//每页显示条数

		$AppMap_model = D('AppMap');

		//where
    	if($aid){
    		$child_id = implode(',',$AppMap_model->selectChildrenId($aid));//所属栏目
    		if(!$child_id){
    			$wmap['Article.aid'] = $aid;
    		}else{
    			$wmap['Article.aid'] = array('in',$child_id.','.$aid);
    		}
    	}

		$wmap['Article.aid'] = array('in','2,13,14,15');

    	$thisapp_f = $AppMap_model->getTopFather($aid);//顶级父类
		$catbro = $AppMap_model->field('id,name,action')->where('pid=0')->select();
    	$this->assign('thisapp_f',$thisapp_f);
    	$this->assign('catbro',$catbro);

		if(!$_GET['keywords']){
			$this->assign('mapcount',0);
			$this->display();
		 return null;
		}

		//获取列表主体信息
    	$a = D('ArticleView');
    	$wmap['Article.status'] = 1 ;
    	$_GET['_type'] ? $wmap['Article.title']= array('like','%'.$_GET['keywords'].'%') :$wmap['Article.body']=array('like','%'.$_GET['keywords'].'%') ;
    	$list = $a->field('id,title,color,des,pubdate,click,img_url')->where($wmap)->order('rank desc')->page($page.','.$step)->select();
//		echo $a->getLastSql();die;
		import('ORG.Util.Page'); // 导入分页类
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		$Page       = new Page($mapcount,$step); // 实例化分页类传入总记录数和每页显示的记录数
		$Page->setConfig('theme', ' %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		$pagenav    = $Page->show(); // 分页显示输出
		$this->assign('mapcount',$mapcount);
		$this->assign('articlelist',$list);
		$this->assign('pagenav',$pagenav);
//		echo $a->getLastSql();
//		print_r($list);

		$this->display();
	}

	public function anlizhanshi(){
//		print_r($_GET);
		$aid = (int)$_GET['id'];	//分类id

		$AppMap_model = D('AppMap');
		$thisapp = $AppMap_model->find($aid);
		if(!$thisapp){
			die('不存在这个栏目');
		}
		$this->assign('thisapp',$thisapp);
		//where
    	if($aid){
    		$child_id = implode(',',$AppMap_model->selectChildrenId($aid));//所属栏目
    		if(!$child_id){
    			$wmap['Article.aid'] = $aid;
    		}else{
    			$wmap['Article.aid'] = array('in',$child_id.','.$aid);
    		}
    	}

    	$thisapp_f = $AppMap_model->getTopFather($aid);//顶级父类
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
    	$a = D('ArticleView');
    	$wmap['Article.status'] = 1 ;
    	$list = $a->field('id,title,body,img_url,img2')->where($wmap)->order('rank desc')->select();

		$picid = 100000;
//		echo $a->getLastSql();die;
		foreach($list as $k=>$v){
			$arr[$k]['id'] = $v['id'];
			$arr[$k]['title'] = $v['title'];
			$arr[$k]['imgtb'] = $v['img_url'];
			$arr[$k]['img'] = $v['img2'];
			preg_match_all('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/isU',$v['body'],$matches);
//			print_r($matches[1]); die;
			$matches = $matches[1];
			$n = count($matches);
			if($n){
				for($i=0;$i<$n ;$i++){
					$r['id'] = $picid++;
					$r['img'] = substr($matches[$i],1);
					$arr[$k]['items'][] = $r;
				}
			}else{
				$arr[$k]['items']=null;
			}
//			die;
		}
//		print_r($arr);die;
//		echo json_encode($arr);die;
		$this->assign('ds',json_encode($arr));
		if($thisapp['tmp']){
			$this->display($thisapp['tmp']);
		}else{
			$this->display();
		}
	}
}
?>