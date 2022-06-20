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
					<a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" class="needs-validation" novalidate>
						<div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $payment->id;?>">
							<label for="nom">product name</label>
							<input type="text" name="name" value="<?php echo $payment->product;?>" class="form-control" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="prenom">price</label>
							<input type="text" name="price" value="<?php echo $payment->price;?>" class="form-control" placeholder="price" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="prenom">date*</label>
							<input type="date" name="date" value="<?php echo $payment->date;?>" class="form-control" placeholder="date" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>