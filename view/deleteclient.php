<?php 
	if(isset($_POST['id'])){
		$prods=new productcontroller;
		$prods->deleteuserproducts();
		$oldclient = new clientController();
		$oldclient->deleteclient();
	}
?>