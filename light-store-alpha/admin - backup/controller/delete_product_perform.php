<?php 
include_once '../model/Connection.php';
include_once '../config/bdconfig.php';
    //Kiểm tra user còn sống hay k
    if($_SESSION['state']==="0"){
    $_SESSION = array();
    session_destroy();
    header("Location: $site_admin");
    }

$id = $_GET["light_id"];
$connect = new Connection();
$connect->update("UPDATE bongden SET trangthai='-1' WHERE mabd='$id' ");
header("Location: $site_admin?page=manager_product");
?>