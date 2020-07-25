<?php 
$_SESSION = array();
session_destroy();
header("Location: $site_admin");
?>