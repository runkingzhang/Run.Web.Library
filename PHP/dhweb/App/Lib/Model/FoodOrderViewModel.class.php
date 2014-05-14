<?php

class FoodOrderViewModel extends ViewModel {
	public $viewFields = array(
 	'FoodOrder'=>array('id','totalprices','isread','status','order_code','note','pubdate'),
 	'FoodOffer'=>array('id'=>'offer_id','name','phone','address','gettime' ,'note'=>'off_note','cip', '_on'=>'FoodOffer.orderid=FoodOrder.id')
 	);
}
?>