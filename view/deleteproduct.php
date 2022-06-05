<?php 
	if(isset($_POST['id'])){
		$oldproduct = new productController();
		$oldproduct->deleteproducts();
	}
?>