<?php
  require_once './view/includes/header.php';
  require_once './autoload.php';
  require_once "./controllers/HomeController.php";
 if($_SERVER['REQUEST_URI']!='/f_rouge/login' &&  $_SERVER['REQUEST_URI']!='/f_rouge/signup' && isset($_SESSION['logged']) && $_SESSION['logged']==true){ require_once './view/includes/sidebar.php';}

  $home= new HomeController();
 if(isset($_GET['page'])){
  if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
    $pages= ['home','addclient','updateclient','deleteclient','displayclient','addproduct','updateproduct','deleteproduct','displayproduct','updatepayment','deletepayment','displaypayment','dashboardadmin','dashboardclient','productvue','login','logout','signup','productpub','creatpayment','updateprofil'];
      if(in_array($_GET['page'],$pages)){
                $page=$_GET['page'];
                $home->index($page);
        }else{
          include('./view/includes/404.php');
        }}else{
          $pages= ['login','signup'];
          if(in_array($_GET['page'],$pages)){
            $page=$_GET['page'];
            $home->index($page);
    }else{
      include('./view/includes/404.php');
    }
        }
      }
?> 
<?php
require_once './view/includes/footer.php';
?>