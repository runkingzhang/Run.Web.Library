<?php

function smarty_function_myselect($params, &$smarty)
{
	extract($params);
	$model =  (null != $model) ? $model :'ArticleView'; //对象模型
	$field =  (null != $field) ? $field :'*';  //所需字段
	$start =  (int)$start ; //开始
	$limit =  (null != $limit) ? (int)$limit : 10 ;//记录数
	$lname =  (null != $lname) ? $lname : "row"; //默认的section loop

	$w 	 =  str_ireplace(array(';','select','delete','update','insert','drop','truncate','alter'),'',$w); //where字句过滤危险字符
	$sort =  str_ireplace(array(';','select','delete','update','insert','drop','truncate','alter'),'',$sort); //排序字句过滤危险字符
	include_once(THINK_PATH.'/Lib/Think/Core/Model/ViewModel.class.php');
	
	$row = $smarty->slm($model)->field($field)->where($w)->order($sort)->limit($start.','.$limit)->select();//话题列表数据
	//print_r($row);
	//echo $smarty->slm($model)->getLastSql();
	//die;
	$smarty->assign($lname, $row);
	unset($newsList);
}
?>