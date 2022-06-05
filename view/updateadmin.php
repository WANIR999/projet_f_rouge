<?php 
	if(isset($_POST['id'])){
		$oldadmin = new adminController();
		$admin= $oldadmin->getoneadmin();
	}else{
        Redirect::to('displayadmin');
    }
	if(isset($_POST['submit'])){
		$oldadmin = new adminController();
		$oldadmin->updateadmins();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add  client</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>displayadmin" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $admin->id;?>">
							<label for="nom">Full name</label>
							<input type="text" name="name" value="<?php echo $admin->full_name;?>" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="depart">password*</label>
							<input type="text" name="password" value="<?php echo $admin->password;?>" class="form-control" placeholder="password">
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