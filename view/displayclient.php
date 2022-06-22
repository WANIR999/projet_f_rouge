<?php if(isset($_POST['find'])){
		$data = new clientController();
		$clients = $data->findclient();
	}else{
		$data= new ClientController();
        $clients= $data->getAllClient();
	}
 ?>
  <div class="mx-auto" style="height:550px; width:95%;">
	<div class="row my-4">
		<div class="col-12 mx-auto">
			<div class="card">
				<div class="card-body bg-light">
                <h3 class="text-secondary text-center" >Client list</h3>
               <div class="w-100 d-flex justify-content-between">
              <div>
                    <a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-home"></i>
                    </a>
                    <a href="<?php echo BASE_URL;?>home" title="Déconnexion" class="btn btn-link text-secondary mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php ?></i>
					</a>
              </div>
                    <form method="post" class="float-right mb-2 d-flex flex-row">
                            <input type="text" class="form-control" name="search" placeholder="Recherche">
                        <button class="btn btn-secondary btn-sm ms-1" name="find" type="submit"><i class="fas fa-search"></i></button>
                    </form>
               </div>
                   <div style="overflow-y:scroll; overflow-x:scroll !important; height:410px;">
                   <table class="table table-hover" style="border-radius:10px;">
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
						      			'<span class="badge badge-primary text-secondary">buyer</span>'
						      			:
						      			'<span class="badge badge-primary  text-secondary">seller</span>';
						      ;?></td>
                              <td class="d-flex flex-row">
								  <?php if($_SESSION['role'] == 2){?>
						      	<form method="post" class="mr-1" action="deleteclient">
						      		<input type="hidden" name="id" value="<?php echo $client['id'];?>">
						      		<button class="btn btn-sm btn-danger ms-1"><i class="fa fa-trash"></i></button>
						      	</form>
								  <?php }?>
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
</div>