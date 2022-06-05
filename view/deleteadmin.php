<?php 
	if(isset($_POST['id'])){
		$oldadmin = new adminController();
		$oldadmin->deleteadmins();
	}
?>