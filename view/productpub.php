 <?php 
 if(!$_SESSION['role'] == 1){ Redirect::to('home');}
 $data= new productController();
 $products= $data->getAllproducts();
 ?>
 <!-- *************************hello************************************* -->
 <div class=" ms-2 mt-3 mb-2 maxw mmarg mdl noheight" style="width: 100%; height: 550px;">
       
       <!-- ***************************** -->
      <div class="d-flex justify-content-between  tocol torow2 mmarg">
         <div class=" mx-auto d-flex justify-content-center maxw  hello widthmed widthsm " style="width:60%; border-radius: 12px; border: 2px solid #e7eaf6; background-color:#D8DBF0;">
           <h3 class=" text-secondary  py-3 ">Products</h3>
         </div>
      </div>
      <!-- ****************************************************** -->
      <div class="w-100 ms-2 mmarg mdl " style="overflow:scroll; height:500px;">
       <div class="row mt-5 pt-2 mmt mdl">
         <?php foreach($products as $product):?>
         <div class="col mmt">
         <div class="card mx-auto my-2" style="width:200px; height:300px; border-radius:15px;">
        <img src="./view/asset/image/<?= $product['image'];?>" class="card-img-top" style="height:40%;border-radius:15px;" alt="img">
        <div class="card-body">
        <h5 class="card-title text-center text-secondary"><?php echo$product['name'];?></h5>
        <p class="card-text text-center text-success" style="font-size:15px;"><?php echo$product['price'];?>dh</p>
        <p class="card-text text-center" style="font-size:15px;"><?php echo$product['description'];?></p>
      </div>
      <div class=" d-flex justify-content-center">
      <form method="post" class="mr-1" action="creatpayment">
					<input type="hidden" name="id" value="<?php echo $product['id'];?>">
					<button class="btn btn-sm btn-primary my-2 ">Buy it</button>
			</form>
      </div>
    </div>
         </div>
         <?php endforeach;?>
       
     </div>
  
     <!-- *********************** -->
     </div>
     <!-- ******************************** -->
   </div>  
    <!-- *********************** -->