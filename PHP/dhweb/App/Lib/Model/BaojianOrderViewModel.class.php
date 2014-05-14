<?php

class BaojianOrderViewModel extends ViewModel {
	public $viewFields = array(
 	'BaojianOrder'=>array('id','r_id','isread','name','phone','danwei','pubdate','orderdate','lunsup','note','ip','anote','status','_type'=>'LEFT'),
 	'Baojian'=>array('title'=>'r_name', '_on'=>'Baojian.id=BaojianOrder.r_id')
 	);


}
?>