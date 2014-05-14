<?php

class SysAction extends DhadminAction{


	public function selectJson(){
		$rs = D('Syscfg')->getAll();
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
		$sys  = D('Syscfg');
		$r = $sys->edit();
		if($r){
			$sys->commit();
			echo '{success:true,msg:"成功"}';
		}else{
			$sys->rollback();
			echo '{success:false,msg:"失败"}';
		}
	}

}
?>