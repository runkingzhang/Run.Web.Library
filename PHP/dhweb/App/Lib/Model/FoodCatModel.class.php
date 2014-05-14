<?php

class FoodCatModel extends Model {
	public $copt;
	public $children;

 	//通用下拉菜单
 	protected function CatOption($pid=0,$pn=1){
		for($i=1;$i<$pn;$i++){
			 $tab.="───";
		}
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
		$rs =  $this->copt;
		unset($this->copt);
		return $rs;
	}


 	//查找所有子类，返回数组
 	protected function selectChildren($id=0){
 	$where['pid']= (int)$id;
	$this->children []= $row= $this->field('id,pid')->where($where)->select();
	if(!$this->children[0]){
		unset($this->children);
		return null ;
	}
	foreach($row as $k=>$v){
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

 	public function selectChildrenId($id=0){
 		$row = $this->selectChildren($id);
 		unset($this->children);
 		foreach($row as $k=>$v){
 			$ids[] = $v['id'];
 		}
 		return $ids;
 	}


}
?>