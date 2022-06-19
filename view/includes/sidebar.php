<div class=" d-flex justify-content-between flex-column mt-3 sidebar mdl" style="background-color: #7c73e6; width:50px; height:550px; border-radius:15px; ">
         <div class=" d-flex justify-content-center mt-2 mmarg ">
            <a href="<?php echo BASE_URL;?>home"> <i class="bi bi-house-door mmarg" style="color: #c4c1e0;" data-bs-toggle="tooltip" data-bs-placement="right" title="home"></i></a>
         </div>
         <div class=" d-flex justify-content-between flex-column torow plusw" style="height:35%;">
         <?php if($_SESSION['role'] == 2){?>
             <a href="<?php echo BASE_URL;?>displayclient" class="mx-auto"> <i class="bi bi-people-fill " style="color: #c4c1e0;"  data-bs-toggle="tooltip" data-bs-placement="right" title="clients"></i></i></a>
             <?php }?>
             <a href="<?php echo BASE_URL;?>displaypayment" class="mx-auto"> <i class="bi bi-currency-dollar mx-auto" style="color: #c4c1e0;" data-bs-toggle="tooltip" data-bs-placement="right" title="payments"></i></a>
             <a href="<?php echo $_SESSION['role'] == 1 ? BASE_URL.'productpub' : ($_SESSION['role'] == 2 ? BASE_URL.'displayproduct' : ($_SESSION['role'] == 0 ? BASE_URL.'addproduct' : ''));?>" class="mx-auto">  <i class="bi bi-handbag-fill mx-auto" style="color: #c4c1e0;" data-bs-toggle="tooltip" data-bs-placement="right" title="products"></i></a> 
         </div>
         <div class=" d-flex justify-content-center mb-2 mmarg">
             <a href="<?php echo BASE_URL;?>logout"> <i class="bi bi-box-arrow-left" style="color: #c4c1e0;" data-bs-toggle="tooltip" data-bs-placement="right" title="logout"></i></a>
         </div>
      </div>