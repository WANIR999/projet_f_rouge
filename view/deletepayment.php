<?php 
	if(isset($_POST['id'])){
		$oldpayment = new paymentController();
		$oldpayment->deletepayments();
	}
?>