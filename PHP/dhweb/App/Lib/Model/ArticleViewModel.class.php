<?php

class ArticleViewModel extends ViewModel {
	public $viewFields = array(
 	'Article'=>array('id','uid','aid','title','color','des','keywords','flag','img_url','img2','img3','rank','body','writer','source','click','pubdate','editdate','tmp_url','status','_type'=>'LEFT'),
 	'Appmap'=>array('name'=>'pname','des'=>'pdes','keywords'=>'pkeywords','rank'=>'prank','action'=>'paction','content'=>'pcontent','tmp'=>'ptmp','url'=>'purl','leaf'=>'pleaf', '_on'=>'Appmap.id=Article.aid','_type'=>'LEFT'),
 	'Dher'=>array('m_id'=>'user_m_id','name'=>'user_name','lasttime'=>'user_lasttime','mail'=>'user_mail','rname'=>'user_ranme','qq'=>'user_qq', '_on'=>'Dher.id=Article.uid')
  	);

	//获取文章小列表 返回二维数组
	public function selectArticle($w,$row){
		$page = 1;
		$step = $row;
    	if($w['aid']){
    		$child_id = implode(',',D('Appmap')->selectChildrenId($w['aid']));//所属栏目
    		if(!$child_id){
    			$wmap['Article.aid'] = $w['aid'];
    		}else{
    			$wmap['Article.aid'] = array('in',$child_id.','.$w['aid']);
    		}
    	}
//    	unset( $w['aid']);
//    	$wmap =  $w;
    	$wmap['status'] = array('gt',0);
    	return $this->field('id,title,color,des,pubdate,click,img_url')->where($wmap)->order('id desc')->page($page.','.$step=$row)->select();
	}

}
?>