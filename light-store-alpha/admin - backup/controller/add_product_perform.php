<?php 
    include_once '../model/Light.php';
    include_once "../config/dbconfig.php";

    //Kiểm tra user còn sống hay k
    if($_SESSION['state']==="0"){
    $_SESSION = array();
    session_destroy();
    header("Location: $site_admin");
    }
    
    $name = $_POST["light_name"];
    $category_id = $_POST["light_category"];
    $price = $_POST["light_price"];
    $quantity = $_POST["light_quantity"];
    $size = $_POST["light_size"];
    $color = $_POST["light_color"];
    $weight = $_POST["light_weight"];
    $brand_id = $_POST["light_brand"];
    $detail = $_POST["light_detail"];
    $state = isset($_POST["light_state"])? "1" : "0";
    //Thư mực chứa hình ảnh
    $site_img_path;
    //Tên hình ảnh
    $image = basename($_FILES["light_image"]["name"]);
    $target_file = $site_img_path.$image;
    //Nếu hình ảnh đã tồn tại
    while(file_exists($target_file)){
        $random_number = rand(1,100);
        $image = substr($image, 0, strpos($image,"."))."$random_number".strstr($image,".");
        $target_file = $site_img_path.$image;
    }
    $fileImageTemp = $_FILES["light_image"]["tmp_name"];
    //Up load ảnh
    $result = move_uploaded_file($fileImageTemp, $target_file);
    //Insert ảnh
    $light = new Light();
    $light->Light("",$name, $category_id, $price, $quantity, $size, $color, $weight, $brand_id, $detail, $image, $state);
     $light->insert();
     header("Location: $site_admin?page=add_product");
?>