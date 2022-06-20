<?php 
if(!$_SESSION['role'] == 1){ Redirect::to('home');}
	else if(isset($_POST['id'])){
        $product_id=$_POST['id'];
		$prod = new productController();
		$product= $prod->getoneproduct();
	}else{
        Redirect::to('productpub');
    }
	if(isset($_POST['submit'])){
		$payment = new paymentController();
		$payment->creatpayments();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">First creat a payment</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>productpub" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="nom">product</label>
							<input type="text" name="name" value="<?php echo $product->name;?>" class="form-control" placeholder="Name">
							<div class="invalid-feedback">
							not valid
							</div>
							<input type="hidden" name="id" value="<?php echo  $product_id;?>" class="form-control" placeholder="Name">
							<input type="hidden" name="sellerid" value="<?php echo  $product->id_seller;?>" class="form-control" placeholder="Name">
							<input type="hidden" name="buyerid" value="<?php echo $_SESSION['userid'];?>" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="prenom">price</label>
							<input type="text" name="price" value="<?php echo $product->price;?>" class="form-control" placeholder="price">
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="prenom">date*</label>
							<input type="text" name="date" value="<?php echo date("Y/m/d") ;?>" class="form-control" placeholder="date">
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">creat</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>