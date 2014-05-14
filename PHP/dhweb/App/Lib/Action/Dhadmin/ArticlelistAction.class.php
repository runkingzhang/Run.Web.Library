<?php


class ArticlelistAction extends DhadminAction {

	//后台管理列表
	public function mana(){
//		print_r(D('AppMap')->selectChildrenId(1));die;
    	$aid = (int)$_POST['aid'];
    	$wmap['Article.status'] = $_POST['status'] ?   $_POST['status'] : array('gt',0);
    	$_POST['title'] ? $wmap['Article.title'] = array('like','%'.$_POST['title'].'%') : null ;    	//文章标题
    	if($aid){
    		$child_id = implode(',',D('AppMap')->selectChildrenId($aid));//所属栏目
    		if(!$child_id){
    			$wmap['Article.aid'] = $aid;
    		}else{
    			$wmap['Article.aid'] = array('in',$child_id.','.$aid);
    		}
    	}
    	if($this->_pspt['m_id']>2){
    		$wmap['uid'] =$this->_pspt['id'];
    	}
    	$a = D('ArticleView');
    	$list = $a->field('id,title,pname,flag,user_name,pubdate,status,rank')->where($wmap)->order($_POST['sort'].' '.$_POST['dir'])->limit((int)$_POST['start'].",".(int)$_POST['limit'])->select();//话题列表数据
//		print_r($c);
//		die();
		$mapcount   = $a->where($wmap)->count(); // 查询满足要求的总记录数
		if($mapcount){
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":'.json_encode($list).'})';
		}else{
			echo $_GET['callback'].'({"total":"'.$mapcount.'","results":{}})';
		}
	}

	public function jsonOption(){
		$rs = D('AppMap')->getArticeOption();
		if(!$_GET['isadd']){
			array_unshift($rs ,array('id' => 0,'name' => '────所有栏目────'));
		}
		echo json_encode($rs);
	}

	public function insert(){
		Load('extend');
		$amodel = D('Article');
		$amodel->startTrans();
		$_POST['flag'] = implode(',',$_POST['flag']);
		$_POST['uid'] = $this->_pspt['id'];
		$_POST['status'] = $this->_pspt['m_id']>2 ? 2 : 1;

		//发布时间
		$_POST['pubdate'] = ($_POST['pubdate'])?strtotime($_POST['pubdate']): time();

		//seo描述
		if(!$_POST['des']){
			$_POST['des'] = msubstr(strip_tags($_POST['body']), $start=0,$length =200,$charset='utf-8', $suffix=true);
		}
		//缩略图
		if(!$_POST['img_url']){
			preg_match_all("/<img.+src=(('|\")(.+)('|\"))/Uis",$_POST['body'],$preg_img);
//			print_r($preg_img);die;
			$_POST['img_url'] = $preg_img[3][0];
		}
		$amodel->create();
//		print_r($_POST);
//		die;
		$r = $amodel->add();
		$rank = (stristr($_POST['flag'],'t')===false)? $r :$r+1000000;
		$r = $amodel->where('id='.$r) ->save(array('rank'=>$rank));
		if($r){
			$amodel->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$amodel->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

	public function findJson(){
		$rs =  D('Article')->find((int)$_GET['id']);
		$rs['pubdate'] = date('Y-m-d',$rs['pubdate']);
		if($rs){
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = false;
			echo json_encode($r);
		}
	}

	public function edit(){
		Load('extend');
		$amodel = D('Article');
		$_POST['flag'] = implode(',',$_POST['flag']);
		$this->_pspt['m_id']>2 ? $_POST['status'] =2 : null ;
		//发布时间
		($_POST['pubdate'])?$_POST['pubdate'] = strtotime($_POST['pubdate']): null;

		//seo描述
		if(!$_POST['des']){
			$_POST['des'] = msubstr(strip_tags($_POST['body']),$start=0,$length =200,$charset='utf-8', $suffix=true);
		}
		//缩略图
		if(!$_POST['img_url']){
//			preg_match_all("/<img.+src=(('|\")(.+)('|\"))/Uis",$_POST['body'],$preg_img);
//			$_POST['img_url'] = $preg_img[3][0];
		}
		if($_POST['rank']){
			if($_POST['rank']>1000000){
				//原来置顶
				$_POST['rank'] = (stristr($_POST['flag'],'t')===false)? $_POST['rank']-1000000 :  $_POST['rank'];
			}else{
				//原来不置顶
				$_POST['rank'] = (stristr($_POST['flag'],'t')===false)? $_POST['rank'] :  $_POST['rank'] +1000000;
			}
		}
//		print_r($_POST);
		$amodel->create();
		$r = $amodel->save();
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"您没有修改任何数据！"}';
		}
	}

	//审核文章
	public function shenhe(){
		$amodel = D('Article');
		$data['status'] = 1;
		$r = $amodel->where('id='.(int)$_POST['id'])->save($data);
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public function del(){
		$amodel = D('Article');
		$data['status'] = -1;
		$r = $amodel->where('id='.(int)$_POST['id'])->save($data);
		if($r){
			echo '{success:true,msg:"成功"}';
		}else{
			echo '{success:false,msg:"失败"}';
		}
	}

	public function imgUpload(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile(); // 实例化上传类
		$upload->maxSize  = 3145728 ; // 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
		$upload->savePath =  'upload/images/editor/'; // 设置附件上传目录
		$upload->thumb = false;
		$upload->thumbSuffix = 'tb';
		$upload->thumbPrefix = '';
		$upload->thumbRemoveOrigin = false;
		$upload->autoSub = true;
		$upload->subType = date;
		$upload->saveRule = time;
		$upload->thumbPath = $upload->savePath.date('Ymd').'/';
		$upload->thumbMaxWidth = "160";
		$upload->thumbMaxHeight = "160";
		if(!$upload->upload()) { // 上传错误提示错误信息
			//alert("上传文件失败。");
			$error = $upload->getErrorMsg();
			$st = json_encode($error);
			header('Content-type: text/html; charset=UTF-8');
			echo json_encode(array('error' => 1, 'message' => $st));
			exit;
		}
		$img = $upload->getUploadFileInfo();
		$sys = D('Syscfg')->find(10);
		$file_url = $sys['value'].$img['0']['savepath'].$img['0']['savename'];
		header('Content-type: text/html; charset=UTF-8');
		echo json_encode(array('error' => 0, 'url' => $file_url));
		exit;
	}

}
?>