<?php 
	if(isset($_POST['id'])){
		$oldproduct = new productController();
		$product= $oldproduct->getoneproduct();
	}else{
        Redirect::to('displayproduct');
    }
	if(isset($_POST['submit'])){
		$oldproduct = new productController();
		$oldproduct->updateproducts();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">update  products</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" class="needs-validation" novalidate>
						<div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $product->id;?>">
							<label for="nom">Full name</label>
							<input type="text" name="name" pattern="^([^a-zA-Z]*[A-Za-z]){4}[\s\S]*" value="<?php echo $product->name;?>" class="form-control" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">price*</label>
							<input type="text" name="price" pattern="[0-9]*{4}" value="<?php echo $product->price;?>" class="form-control" placeholder="price" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">description*</label>
							<input type="text" name="desc" pattern="^([^a-zA-Z0-9]*[A-Za-z0-9]){4}[\s\S]*" value="<?php echo $product->description;?>" class="form-control" placeholder="description" required>
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