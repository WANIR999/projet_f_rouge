<?php 
	if(isset($_POST['submit'])){
		$newclient = new ClientController();
		$newclient->signup();
	}
?>
   
   <div class="container mt-5 maxw" style="height:520px; width:400px; background-color:#d59bf6; border-radius:15px 90px;">
   <div class="mx-auto mt-4 maxw2" style="width: 95%;">
                    <h3 class="text-center text-secondary">Signup</h3>
					<form method="post" class="mx-auto maxw2 needs-validation" style="width:90%;" novalidate>
						<div class="form-group">
							<label for="nom">Full name</label>
							<input type="text" name="name" class="form-control" pattern="(?=.{8,20}$)[a-zA-Z0-9._]" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="prenom">adresse*</label>
							<input type="text" name="adresse" pattern="(?=.{8,20}$)[a-zA-Z0-9._]" class="form-control" placeholder="adresse" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="mat">email*</label>
							<input type="email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,3}" name="email" class="form-control" placeholder="email" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">password*</label>
							<input type="text" name="password" pattern="(?=.{8,20}$)" class="form-control" placeholder="password" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group mt-1">
                        <label>Role</label>
							<select class="form-control" name="role">
								<option value="1">buyer</option>
								<option value="0">seller</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<button type="submit" class="btn w-100 btn-primary" name="submit">signup</button>
						</div>
					</form>
   </div>

  </div>