<?php 
if(!$_SESSION['role'] == 2){ Redirect::to('home');}
	if(isset($_POST['submit'])){
		$newclient = new ClientController();
		$newclient->addClients();
	}
?>
<div class="container my-auto">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Add  client</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post" class="needs-validation" novalidate >
						<div class="form-group">
							<label for="nom">Full name</label>
							<input type="text" name="name" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,3}" class="form-control" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="prenom">adresse*</label>
							<input type="text" name="adresse" class="form-control" pattern="(?=.{8,20}$)[a-zA-Z0-9._]" placeholder="adresse" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="mat">email*</label>
							<input type="text" name="email" class="form-control" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,3}" placeholder="email" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">password*</label>
							<input type="password" name="password" class="form-control" pattern="(?=.{8,20}$)" placeholder="password" required>
							<div class="invalid-feedback">
							not valid
							</div>
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