<?php 
if(!$_SESSION['role'] == 0){ Redirect::to('home');}
	if(isset($_POST['submit'])){
		$newproduct = new productController();
		$newproduct->creatprod();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add  product</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
						<div class="form-group">
							<label for="nom">Full name</label>
							<input type="text" name="name" pattern="^([^a-zA-Z]*[A-Za-z]){4}[\s\S]*" class="form-control" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">price*</label>
							<input type="text" name="price" class="form-control" pattern="[0-9]*{4}" placeholder="price" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
							<input type="hidden" name="seller" value="<?php echo $_SESSION['userid'];?>" class="form-control" placeholder="password" >
						<div class="form-group">
							<label for="depart">description*</label>
							<input type="text" name="desc" pattern="^([^a-zA-Z]*[A-Za-z]){4}[\s\S]*" class="form-control" placeholder="description" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">description*</label>
							<input type="file" name="image"  class="form-control" >
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