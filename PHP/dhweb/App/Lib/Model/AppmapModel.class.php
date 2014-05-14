<?php

class AppmapModel extends Model {
	public $copt;
	public $children;
	public $mbx;

 	//通用下拉菜单
 	protected function CatOption($pid=0,$pn=1){
		for($i=1;$i<$pn;$i++){
			 $tab.="───";
		}
		if($pn==1){ $this->copt[] = array('id' => 0,'name' => '──────顶级分类──────');}
 		$row = $this->field('id,pid,name')->where('pid='.$pid)->order('rank asc')->select();
 		$rown = count($row);
 		for($n=0 ; $n< $rown ;$n++){
			$row[$n]['name'] = '├─'.$tab.' '.$row[$n]['name'];
			$this->copt[] = $row[$n];
            if($this->field('id')->where('pid='.$row[$n]['id'])->find())
            $this->CatOption($row[$n]['id'],$pn+1);
 		}
 	}


	public function OptionJson(){
		$this->CatOption();
//		print_r($this->copt);die;
		$rs =  json_encode($this->copt);
		unset($this->copt);
		return $rs;
	}

	//文章栏目下来菜单
 	protected function articleOption($pid=0,$pn=1){
		for($i=1;$i<$pn;$i++){
			 $tab.="───";
		}
		//if($pn==1){ $this->copt[] = array('id' => 0,'name' => '──────顶级分类──────');}
 		$row = $this->field('id,pid,name')->where('pid='.$pid.' AND action in("ArticleList","ArticleIndex","Page")')->order('rank asc')->select();
 		$rown = count($row);
 		for($n=0 ; $n< $rown ;$n++){
			$row[$n]['name'] = '├─'.$tab.' '.$row[$n]['name'];
			$this->copt[] = $row[$n];
            if($this->field('id')->where('pid='.$row[$n]['id'])->find())
            $this->CatOption($row[$n]['id'],$pn+1);
 		}
 	}

	//单页栏目下来菜单
 	protected function pageOption($pid=0,$pn=1){
		for($i=1;$i<$pn;$i++){
			 $tab.="───";
		}
		//if($pn==1){ $this->copt[] = array('id' => 0,'name' => '──────单页分类──────');}
 		$row = $this->field('id,pid,name')->where('pid='.$pid.' AND action in("ArticleList","ArticleIndex","Page")')->order('rank asc')->select();
 		$rown = count($row);
 		for($n=0 ; $n< $rown ;$n++){
			$row[$n]['name'] = '├─'.$tab.' '.$row[$n]['name'];
			$this->copt[] = $row[$n];
            if($this->field('id')->where('pid='.$row[$n]['id'])->find())
            $this->CatOption($row[$n]['id'],$pn+1);
 		}
 	}

 	public function getPageOption(){
		$this->pageOption();
//		print_r($this->copt);die;
		$rs =  $this->copt;
		unset($this->copt);
		return $rs;
 	}


 	public function getArticeOption(){
		$this->articleOption();
//		print_r($this->copt);die;
		$rs =  $this->copt;
		unset($this->copt);
		return $rs;
 	}

 	//查找所有子类，返回数组
 	protected function selectChildren($id=0){
	$where['action'] = array('in','ArticleList,ArticleIndex,Page');
 	$where['pid']= (int)$id;
	$this->children []= $row= $this->field('id,pid')->where($where)->select();
	if(!$this->children[0]){
		unset($this->children);
		return null ;
	}
	foreach($row as $k=>$v){
		$where['action'] = array('in','ArticleList,ArticleIndex,Page');
 		$where['pid']= $v['id'];
		if($this->field('id,pid')->where($where)->count()){
			$this->selectChildren($v['id']);
		}
	}
	foreach($this->children  as $k=>$v){
	 	foreach ($v as $k2=>$v2){
	 		$sonrow[] = $v2;
	 	}
	}
//	unset($this->children);
	return $sonrow;
 	}


	public function getTopFather($id,$field='id,pid,action,name'){
		$thisapp = $this->field($field)->find($id);
		if($thisapp['pid']==0){
			return $thisapp;
		}
		return $this->getTopFather($thisapp['pid'],$field);
	}

	//面包屑 返回 array
	public function mianbaoxie($pid){
		$field='id,pid,action,name';
		$papp = $this->field($field)->where('id='.(int)$pid)->find();
		$this->mbx[] =$papp;
//		echo $this->getLastSql();
//		print_r($this->mbx);
//		die;
		if($papp['pid']!=0){
			return $this->mianbaoxie($papp['pid']);
		}else{
			return $this->mbx[0]?array_reverse($this->mbx):null;
		}
	}

 	public function selectChildrenId($id=0){
 		$row = $this->selectChildren($id);
 		unset($this->children);
 		foreach($row as $k=>$v){
 			$ids[] = $v['id'];
 		}
 		return $ids;
 	}

	//增加栏目
	public function insert(){
		//父级分类 更新为 非叶节点
		if($_POST['pid']){
			$data1['leaf'] = '';
			$this->where('id='.$_POST['pid'])->save($data1);
		}
		return parent::add();
	}

	//删除
	public function del(){
		$pid = $this->where('id='.(int)$_POST['id'])->getField('pid');
		$count = $this->where('pid='.$pid)->count();
		if($count ==1 && $pid ){
			$data['leaf'] = '1';
			$this->where('id='.$pid)->save($data);
		}
		return $this->where('id='.(int)$_POST['id'])->delete();
	}

}
?>