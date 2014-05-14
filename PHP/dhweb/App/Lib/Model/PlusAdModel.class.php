<?php

class PlusAdModel extends Model {

	public function getAll(){
		$r = $this->select();
		foreach($r as $k=>$v){
			$row[$v['name']] = $v['value'];
		}
		return $row;
	}


	public function edit(){
		$row = $_POST;
		foreach($row as $k=>$v){
			$this->where("name = '$k'")->save(array('value'=>$v));
		}
		return true;
	}

}
?>