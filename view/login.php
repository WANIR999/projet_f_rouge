<?php
  $log= new ClientController;
  $log->authent();
?>

<div class="container mt-5 maxw" style="height:300px; width:350px; background-color:#d59bf6; border-radius:15px;">
<div class="mx-auto mt-4 maxw2" style="width: 95%;">
                    <h3 class="text-center text-secondary">login</h3>
					<form method="post" class="mx-auto maxw2 needs-validation" novalidate style="width:90%;">
						<div class="form-group">
							<label for="nom">Full name</label>
							<input type="text" name="name" class="form-control" placeholder="Name" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group">
							<label for="depart">password*</label>
							<input type="text" name="password" class="form-control" placeholder="password" required>
							<div class="invalid-feedback">
							not valid
							</div>
						</div>
						<div class="form-group mt-2">
							<button type="submit" class="btn w-100 btn-primary" name="submit">login</button>
						</div>
					</form>
   </div>

  </div>