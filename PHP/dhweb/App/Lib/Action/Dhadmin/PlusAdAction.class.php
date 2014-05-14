<?php

class PlusAdAction extends DhadminAction {



	public function selectJson(){
		$rs = D('PlusAd')->getAll();
		$rs['id']=1;
		if($rs){
			$r['info'] = $rs;
			$r['success'] = true;
			echo json_encode($r);
		}else{
			$r['success'] = true;
			echo json_encode($r);
		}
	}

	public function edit(){
		$ad  = D('PlusAd');
		$r = $ad->edit();
		if($r){
			$ad->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$ad->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}
}
?>