<?php 
	if(isset($_POST['id'])){
		$oldClient = new ClientController();
		$client= $oldClient->getoneclient();
	}else{
        Redirect::to('home');
    }
	if(isset($_POST['submit'])){
		$oldClient = new ClientController();
		$oldClient->updateprofil();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add  client</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" class="needs-validation" novalidate>
						<div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $client->id;?>">
							<label for="nom">Full name</label>
							<input type="text" name="name" pattern="(?=.{8,20}$)[a-zA-Z0-9._]" value="<?php echo $client->full_name;?>" class="form-control" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="prenom">adresse*</label>
							<input type="text" name="adresse" pattern="(?=.{8,20}$)[a-zA-Z0-9._]" value="<?php echo $client->adresse;?>" class="form-control" placeholder="adresse" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="mat">email*</label>
							<input type="text" name="email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,3}" value="<?php echo $client->email;?>" class="form-control" placeholder="email" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">password*</label>
							<input type="text" name="password" pattern="(?=.{4,10}$)[a-zA-Z0-9._]"  class="form-control" placeholder="password" required>
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