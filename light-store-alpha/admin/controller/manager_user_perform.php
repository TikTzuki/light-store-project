<?php 

include_once "../model/User.php";
include_once "../config/dbconfig.php";

    //Kiểm tra user còn sống hay k
    session_start();
    $myUser = new User();
    $myUser->getUserByUserName($_SESSION["username"]);
    $_SESSION["password"] = $myUser->password;
    $_SESSION["role_code"] = $myUser->role_code;
    $_SESSION["birth_day"] = $myUser->birth_day;
    $_SESSION["email"] = $myUser->email;
    $_SESSION["state"] = $myUser->state;
    if($_SESSION['state']==="0"){
    $_SESSION = array();
    session_destroy();
    header("Location: $site_admin");
    }
     //Kiểm tra user còn sống hay k


$userInput = new User();
$userInput->newUser($_GET['username'],$_POST["password"],$_POST["role_code"],$_POST["birth_day"],$_POST["email"],$_POST["state"]);
$userOld = new User();
$userOld->getUserByUserName($_GET['username']);
$userOld->updateUserAttribute($userInput);
header("Location: $site_admin?page=manager_user");
?>