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
			<div class="card">
				<div class="card-header">Add  client</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>displayclient" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $client->id;?>">
							<label for="nom">Full name</label>
							<input type="text" name="name" value="<?php echo $client->full_name;?>" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="prenom">adresse*</label>
							<input type="text" name="adresse" value="<?php echo $client->adresse;?>" class="form-control" placeholder="adresse">
						</div>
						<div class="form-group">
							<label for="mat">email*</label>
							<input type="text" name="email" value="<?php echo $client->email;?>" class="form-control" placeholder="email">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>