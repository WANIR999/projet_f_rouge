<?php
  require_once './view/includes/header.php';
  require_once './autoload.php';
  require_once "./controllers/HomeController.php";
 if(isset($_SESSION['logged']) && $_SESSION['logged']==true){ require_once './view/includes/sidebar.php';}

  $home= new HomeController();
 if(isset($_GET['page'])){
  if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
    $pages= ['paypro','home','addclient','updateclient','deleteclient','displayclient','addproduct','updateproduct','deleteproduct','displayproduct','updatepayment','deletepayment','displaypayment','productvue','login','logout','signup','productpub','creatpayment','updateprofil','clientcard'];
      if(in_array($_GET['page'],$pages)){
                $page=$_GET['page'];
                $home->index($page);
        }else{
          include('./view/includes/404.php');
        }}else{
          $pages= ['login','signup','landing'];
          if(in_array($_GET['page'],$pages)){
            $page=$_GET['page'];
            $home->index($page);
    }else{
      include('./view/includes/404.php');
    }
        }
      }else{
        if(isset($_SESSION['logged']) && $_SESSION['logged']==true){
        $page='home';
        $home->index($page);}else{
          $page='landing';
          $home->index($page);
        }
      }
?> 
<?php
require_once './view/includes/footer.php';
?>