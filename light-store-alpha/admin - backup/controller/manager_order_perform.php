<?php
    include_once '../model/Order.php';
    include_once "../config/dbconfig.php";
    
    //Kiểm tra user còn sống hay k
    if($_SESSION['state']==="0"){
    $_SESSION = array();
    session_destroy();
    header("Location: $site_admin");
    }

$order_id = $_GET['order_id'];
$newState = $_GET['new_state'];
$orderManager = new Order();
$orderManager->getOrderBy($order_id);
$orderManager->updateDeliveryState($newState);

header("Location: $site_admin?page=manager_order");
?>