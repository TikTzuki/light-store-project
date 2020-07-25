<?php 
session_start();
include_once "../model/User.php";
include_once "../config/dbconfig.php";

    //Kiểm tra user còn sống hay k
    if($_SESSION['state']==="0"){
    $_SESSION = array();
    session_destroy();
    header("Location: $site_admin");
    }


$userInput = new User();
$userInput->newUser($_GET['username'],$_POST["password"],$_POST["role_code"],$_POST["birth_day"],$_POST["email"],$_POST["state"]);
$userOld = new User();
$userOld->getUserByUserName($_GET['username']);
$userOld->updateUserAttribute($userInput);
header("Location: $site_admin?page=manager_user");
?>