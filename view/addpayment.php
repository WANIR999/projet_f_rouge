<?php 
	if(isset($_POST['submit'])){
		$newpayment = new paymentController();
		$newpayment->addpayments();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add  payment</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>displaypayment" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="nom">name</label>
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="depart">date*</label>
							<input type="date" name="date" class="form-control" placeholder="password">
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