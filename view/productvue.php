<?php 
	if(isset($_POST['id'])){
		$oldproduct = new productController();
		$product= $oldproduct->getoneproduct();
	}else{
        Redirect::to('displayproduct');
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
					<form method="post">
						<div class="form-group">
							<label for="nom">Full name</label>
							<input type="text" name="name" value="<?php echo $product->name;?>" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="depart">price*</label>
							<input type="text" name="price" value="<?php echo $product->price;?>" class="form-control" placeholder="price">
						</div>
						<div class="form-group">
							<label for="depart">description*</label>
							<input type="text" name="desc" value="<?php echo $product->description;?>" class="form-control" placeholder="description">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>