<?php
$product= new productController;
$prodnum= $product->getuserproduct();
$products=count($prodnum);
?>
<?php
$payment= new paymentController;
$paynum= $payment->getuserpayment();
$payments=count($paynum);
?>
<?php
$client= new sellerController;
$clinum= $client->getbuyers();
$clients=count($clinum);
?>
 
 <!-- *************************hello************************************* -->
 <div class=" ms-2 mt-3 mb-2 maxw mmarg mdl noheight" style="width: 70%; height: 550px;">
       
       <!-- ***************************** -->
       <div class="d-flex justify-content-between  tocol torow2 mmarg">
       <div class=" ms-2 d-flex justify-content-between maxw mmarg hello hei widthmed widthsm " style="width: 60%; height: 130px; border-radius: 12px; border: 2px solid #e7eaf6; background-color:#D8DBF0;">
           <h3 class=" text-secondary  mt-3 ms-3 ">Hello <?php echo $_SESSION['username'];?></h3>
           <img class="remove" src="./view/asset/image/undraw_hello_re_3evm.svg" alt="IMG" style="height:130%;" >   
         </div>
       <div class=" ms-2 d-flex justify-content-between flex-column maxw mmt  widthmed widthmedi center" style="width: 60%; border-radius: 12px; border: 2px solid #e7eaf6; background-color:#D8DBF0;">
           <h4 class=" text-secondary mt-3 ms-3 mmt font">login date:</h4> 
           <h5 class="text-secondary mb-5 ms-3 font"><?php echo $_SESSION['time'];?></h5>    
         </div>
      </div>
      <!-- ****************************************************** -->
      <div class="w-100 ms-2 mmarg mdl ">
       <div class="row mt-5 pt-2 mmt mdl">
         <div class="col mmt">
           <div class="card" style="border-radius:10px; background-color: #f7f7f7;">
             <div class="card-body">
               
               <h5 class="card-title text-center  text-secondary">payments</h5>
               <p class="card-text fs-5 text-center"><?php echo $payments;?></p>
               <a href="<?php echo BASE_URL;?>displaypayment" class="btn btn-secondary w-100">payments</a>
             </div>
           </div>
         </div>
         <div class="col mmt">
           <div class="card" style="border-radius:10px; background-color: #f7f7f7;">
             <div class="card-body">
               <h5 class="card-title text-center text-secondary">products</h5>
               <p class="card-text fs-5 text-center"><?php echo $products;?></p>
               <a href="<?php echo BASE_URL;?>displayproduct" class="btn btn-secondary w-100">products</a>
             </div>
           </div>
         </div>
     </div>
     <!-- *********************** -->
     </div>
     <!-- ******************************** -->
   </div>  
    <!-- *********************** -->
    <div class="ms-4 mt-3 d-flex flex-column maxw mmarg nbrd mdl" style="width: 250px; height:550px;border-radius: 10px; border: solid 1px grey;">
     <div class="card remove " style="border-radius: 10px;">
       <img src="./view/asset/image/undraw_male_avatar_323b.svg" class="card-img-top mx-auto mt-3 rounded-circle w-50 h-50" alt="...">
       <div class="card-body">
         <h5 class="card-title text-center text-secondary"><?php echo $_SESSION['username'];?></h5>
         <p class="card-text text-center text-secondary"><?php echo $_SESSION['role'] == 1 ? 'buyer' : ($_SESSION['role'] == 2 ? 'admin' : ($_SESSION['role'] == 0 ? 'seller' : ''));?></p>
         <form method="post" class="mr-1" action="updateprofil">
					<input type="hidden" name="id" value="<?php echo $_SESSION['userid'];?>">
					<button class="btn w-100 btn-primary ms-1">update profile</button>
				</form>
       </div>
     </div>

      <div class="w-100 mt-3 maxw nbrd  mmt  mrgb" style=" overflow: scroll; overflow-x: hidden; height:240px; border: solid 1px grey; border-radius: 10px;">
       <h3 class="text-center text-secondary">Products list</h3>
       <?php foreach($prodnum as $product) :?>
       <div class="d-flex justify-content-between align-items-center mt-2 mx-auto" style=" width:95%;  border: 1px solid grey; border-radius: 10px;">
          <h6 class="text-secondary"><?php echo $product['name']?></h6>
          <form method="post" action="productvue">
					<input type="hidden" name="id" value="<?php echo $product['id'];?>">
					<button style="width:30px; height:30px;" class="btn btn-primary mx-2 d-flex justify-content-center align-items-center"><i class="fa fa-eye"></i></button>
					</form>
       </div>
       <?php endforeach?>
      </div>

     </div>