<?php

class PageViewModel extends ViewModel {
	public $viewFields = array(
 	'Appmap'=>array('name','des','keywords','rank','action','content','tmp','url','leaf'),
 	'Appmap'=>array('name'=>'pname','des'=>'pdes','keywords'=>'pkeywords','rank'=>'prank','action'=>'paction','content'=>'pcontent','tmp'=>'ptmp','url'=>'purl','leaf'=>'pleaf', '_on'=>'Appmap.id=Appmap.pid')
 	);
}
?>