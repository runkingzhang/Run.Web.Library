<?php

class DherModel extends Model{

	//加密算法
	public function md250($p){
		return md5('@D^$d0o%3O'.$p.'woniu');
	}

	public function checkLogin($data){
		$w['name'] = $data['name'];
		$w['psw']  = $this->md250($data['psw']);
		$r = $this->where($w)->find();
		if($r){
			$this->where('id='.$r['id'])->save(array('lasttime'=>time()));
			return $r;
		}else{
			return false;
		}
	}

}
?>