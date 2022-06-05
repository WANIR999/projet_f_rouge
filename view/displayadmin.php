<?php if(isset($_POST['find'])){
		$data = new adminController();
		$admins = $data->findadmins();
	}else{
		$data= new adminController();
        $admins= $data->getAlladmins();
	}
 ?>
  <div class="container">
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-body bg-light">
                <a href="<?php echo BASE_URL;?>addadmin" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-plus"></i></a>
                    <a href="<?php echo BASE_URL;?>displayadmin" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fas fa-home"></i>
                    </a>
                    <a href="<?php echo BASE_URL;?>logout" title="Déconnexion" class="btn btn-link mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php ?></i>
					</a>
                    <form method="post" class="float-right mb-2 d-flex flex-row">
                            <input type="text" class="form-control" name="search" placeholder="Recherche">
                        <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">full name</th>
					      <th scope="col">password</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($admins as $admin):?>
					    	<tr>
						      <th scope="row"><?php echo $admin['full_name']; ?></th>
                              <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="updateadmin">
						      		<input type="hidden" name="id" value="<?php echo $admin['id'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      	<form method="post" class="mr-1" action="deleteadmin">
						      		<input type="hidden" name="id" value="<?php echo $admin['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>