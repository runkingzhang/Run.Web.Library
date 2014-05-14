<?php

class FoodModel extends Model {

	public function uploadImg(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile(); // 实例化上传类
		$upload->maxSize  = 3145728 ; // 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
		$upload->savePath =  'upload/images/food/'; // 设置附件上传目录
		$upload->thumb = true;
		$upload->thumbSuffix = 'tb';
		$upload->thumbPrefix = '';
		$upload->thumbRemoveOrigin = false;
		$upload->autoSub = true;
		$upload->subType = date;
		$upload->saveRule = time;
		$upload->thumbPath = $upload->savePath.date('Ymd').'/';
		$upload->thumbMaxWidth = "170";
		$upload->thumbMaxHeight = "170";
		if(!$upload->upload()) { // 上传错误提示错误信息
//			return $upload->getErrorMsg();
			return false;
		}else{ // 上传成功获取上传文件信息
			return  $upload->getUploadFileInfo();
		}
	}
}
?>