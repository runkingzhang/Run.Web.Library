<?php

class FileAction extends DhadminAction {



	public function editUpload(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile(); // 实例化上传类
		$upload->maxSize  = 2097152 ; // 设置附件上传大小
		$upload->allowExts  = array('doc', 'xls', 'ppt', 'pdf', 'txt', 'rar' , 'zip');; // 设置附件上传类型
		$upload->savePath =  'upload/files/editor/'; // 设置附件上传目录
		$upload->thumb = false;
		$upload->thumbSuffix = 'tb';
		$upload->thumbPrefix = '';
		$upload->thumbRemoveOrigin = false;
		$upload->autoSub = true;
		$upload->subType = date;
		$upload->saveRule = time;
		$upload->thumbPath = $upload->savePath.date('Ymd').'/';
		$upload->thumbMaxWidth = "160";
		$upload->thumbMaxHeight = "160";
		if(!$upload->upload()) { // 上传错误提示错误信息
			//alert("上传文件失败。");
			$error = $upload->getErrorMsg();
			echo '<script>alert("'.$error.'");history.back();</script>';
			exit;
		}
		$img = $upload->getUploadFileInfo();
		$sys = D('Syscfg')->find(10);
		$file_url = $sys['value'].$img['0']['savepath'].$img['0']['savename'];
//		header('Content-type: text/html; charset=UTF-8');
//		echo json_encode(array('error' => 0, 'url' => $file_url));
//		exit;

	  //插入图片，关闭层
	    echo '<html>';
	    echo '<head>';
	    echo '<title>Insert Accessory</title>';
	    echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	    echo '</head>';
	    echo '<body>';
	    echo '<script type="text/javascript">parent.KE.plugin["accessory"].insert("' . $_POST['id'] . '", "' . $file_url . '","' . $_POST['imgTitle'] . '","");</script>';
	    echo '</body>';
	    echo '</html>';
	    exit;


	}

	//编辑器提示，关闭层
	public function editAlert($msg)
	{
	    echo '<html>';
	    echo '<head>';
	    echo '<title>error</title>';
	    echo '<meta http-equiv="content-type" content="text/html; charset=utf-8">';
	    echo '</head>';
	    echo '<body>';
	    echo '<script type="text/javascript">alert("'.$msg.'");history.back();</script>';
	    echo '</body>';
	    echo '</html>';
	    exit;
	}


}
?>