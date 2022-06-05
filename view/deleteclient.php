<?php 
	if(isset($_POST['id'])){
		$oldclient = new clientController();
		$oldclient->deleteclient();
	}
?>