<?php
if($_SESSION['role']=='2'){
    require_once './view/dashboardadmin.php';
}
if($_SESSION['role']=='1'){
    require_once './view/dashboardclient.php';
}
if($_SESSION['role']=='0'){
    require_once './view/dashboardseller.php';
}
?>