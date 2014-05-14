<?php

class PassportModel extends Model {

	public  function getPassport(){
		return  unserialize($_SESSION['pspt']);
	}

}
?>