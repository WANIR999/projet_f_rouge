<?php 
	if(isset($_POST['submit'])){
		$newclient = new ClientController();
		$newclient->addClients();
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
							<label for="nom">Full name</label>
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="prenom">adresse*</label>
							<input type="text" name="adresse" class="form-control" placeholder="adresse">
						</div>
						<div class="form-group">
							<label for="mat">email*</label>
							<input type="text" name="email" class="form-control" placeholder="email">
						</div>
						<div class="form-group">
							<label for="depart">password*</label>
							<input type="text" name="password" class="form-control" placeholder="password">
						</div>
						<div class="form-group">
							<select class="form-control" name="role">
								<option value="1">buyer</option>
								<option value="0">seller</option>
							</select>
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