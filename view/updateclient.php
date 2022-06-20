<?php 
	if(isset($_POST['id'])){
		$oldClient = new ClientController();
		$client= $oldClient->getoneclient();
	}else{
        Redirect::to('home');
    }
	if(isset($_POST['submit'])){
		$oldClient = new ClientController();
		$oldClient->updateclients();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card" class="needs-validation" novalidate>
				<div class="card-header">update  client</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" class="needs-validation" novalidate>
						<div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $client->id;?>" >
							<label for="nom">Full name</label>
							<input type="text" name="name" value="<?php echo $client->full_name;?>" class="form-control" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="prenom">adresse*</label>
							<input type="text" name="adresse" value="<?php echo $client->adresse;?>" class="form-control" placeholder="adresse" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="mat">email*</label>
							<input type="text" name="email" value="<?php echo $client->email;?>" class="form-control" placeholder="email" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">password*</label>
							<input type="text" name="password" value="<?php echo $client->password;?>" class="form-control" placeholder="password" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<select class="form-control" name="role">
								<option  value="1" <?php echo $client->role ? 'selected' : ''; ?>>buyer</option>
								<option value="0" <?php echo !$client->role ? 'selected' : ''; ?> >seller</option>
							</select>
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