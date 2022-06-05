<?php 
	if(isset($_POST['id'])){
		$oldpayment = new paymentController();
		$payment= $oldpayment->getonepayment();
	}else{
        Redirect::to('displaypayment');
    }
	if(isset($_POST['submit'])){
		$oldpayment = new paymentController();
		$oldpayment->updatepayments();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">update  payment</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>displaypayment" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $payment->id;?>">
							<label for="nom">Full name</label>
							<input type="text" name="name" value="<?php echo $payment->name;?>" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="prenom">adresse*</label>
							<input type="date" name="adresse" value="<?php echo $payment->date;?>" class="form-control" placeholder="adresse">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">add</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>