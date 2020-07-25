<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "./pages/{$page}.php";
if(file_exists($path)){
	require './pages/header.php';
	require $path;
	require './pages/footer.php' ;
}
?>
