<?php if(isset($_POST['find'])){
		$data = new clientController();
		$clients = $data->findclient();
	}else{
		$data= new ClientController();
        $clients= $data->getAllClient();
	}
 ?>
  <div class="container">
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-body bg-light">
                <a href="<?php echo BASE_URL;?>addclient" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-plus"></i></a>
                    <a href="<?php echo BASE_URL;?>displayclient" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fas fa-home"></i>
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
					      <th scope="col">adresse</th>
					      <th scope="col">email</th>
					      <th scope="col">role</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($clients as $client):?>
					    	<tr>
						      <th scope="row"><?php echo $client['full_name']; ?></th>
						      <td><?php echo $client['adresse'];?></td>
						      <td><?php echo $client['email'];?></td>
                              <td>
						      	<?php echo $client['role']
						      			?
						      			'<span class="badge badge-secondary">buyer</span>'
						      			:
						      			'<span class="badge badge-secondary">seller</span>';
						      ;?></td>
                              <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="updateclient">
						      		<input type="hidden" name="id" value="<?php echo $client['id'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      	<form method="post" class="mr-1" action="deleteclient">
						      		<input type="hidden" name="id" value="<?php echo $client['id'];?>">
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