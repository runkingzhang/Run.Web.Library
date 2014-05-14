<?php

class FoodOrderModel extends Model {

	public function insert($data){
		$data['pubdate'] =time();
		return $this->data($data)->add();
	}
}
?>