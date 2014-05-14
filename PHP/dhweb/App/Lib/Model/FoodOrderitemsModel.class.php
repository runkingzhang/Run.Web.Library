<?php

class FoodOrderitemsModel extends Model {

    function insert($oid,$data) {
		foreach($data as $k=>$v ){
			$v['fid'] = $v['id'];
			unset($v['id']);
			$v['orderid'] = $oid;
			$this->data($v)->add();
		}
		return true;
    }
}
?>