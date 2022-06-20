<?php if($_SESSION['role'] == 2){
	$data= new productController();
	$products= $data->getallproducts();
}
else{if(isset($_POST['find'])){
		$data = new productController();
		$products = $data->findproducts();
	}else{
		$data= new productController();
        $products= $data->getuserproduct();
	}}
 ?>
  <div class="mx-auto" style="height:550px; width:95%;">
	<div class="row my-4">
		<div class="col-12 mx-auto">
			<div class="card">
				<div class="card-body bg-light">
                <h3 class="text-secondary text-center" >products list</h3>
               <div class="w-100 d-flex justify-content-between">
              <div>
			  <?php if($_SESSION['role'] == 2){?>
              <a href="<?php echo BASE_URL;?>addproduct" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fas fa-plus"></i></a>
			  <?php }?>
                    <a href="<?php echo BASE_URL;?>home" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-home"></i>
                    </a>
                    <a href="<?php echo BASE_URL;?>logout" title="Déconnexion" class="btn btn-link text-secondary mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php ?></i>
					</a>
              </div>
                    <form method="post" class="float-right mb-2 d-flex flex-row">
                            <input type="text" class="form-control" name="search" placeholder="Recherche">
                        <button class="btn btn-secondary btn-sm ms-1" name="find" type="submit"><i class="fas fa-search"></i></button>
                    </form>
               </div>
                   <div style="overflow-y:scroll !important; height:410px;">
                   <table class="table table-hover" style="border-radius:10px;">
					  <thead>
                      <tr>
					      <th scope="col">product name</th>
					      <th scope="col">price</th>
					      <th scope="col">description</th>
					    </tr>
					  </thead>
					  <tbody>
                      <?php foreach($products as $product):?>
					    	<tr>
						      <th scope="row"><?php echo $product['name']; ?></th>
						      <th scope="row"><?php echo $product['price']; ?>dh</th>
						      <th scope="row"><?php echo $product['description']; ?></th>
                              <td class="d-flex flex-row">
							  <?php if($_SESSION['role'] == 2){?>
                              <form method="post" class="mr-1" action="updateproduct">
						      		<input type="hidden" name="id" value="<?php echo $product['id'];?>">
						      		<button class="btn btn-sm btn-primary ms-1"><i class="fa fa-edit"></i></button>
						      	</form>
						      	<form method="post" class="mr-1" action="deleteproduct">
						      		<input type="hidden" name="id" value="<?php echo $product['id'];?>">
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