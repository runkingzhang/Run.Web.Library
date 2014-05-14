<?php
class FoodOfferModel extends Model {

 	function  insert($oid,$data){
		$data['orderid']=$oid;
		$data['address']= $data['diqu'].' ， '.$data['address'];
		$data['cip']=get_client_ip();
		return $this->data($data)->add();
 	}

}
?>
