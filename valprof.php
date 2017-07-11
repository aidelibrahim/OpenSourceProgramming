<?php
define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");
session_start(); 
$user_id = $con->mysqli->real_escape_string($_SESSION['cur_name']);

$name = $_POST['name'];
$emeil = $_POST['emeil'];
$adr = $_POST['address'];

$query = "UPDATE user SET u_name = '$name',u_emeil='$emeil', u_adrr='$adr' WHERE u_id ='$user_id'";
$result = $con->mysqli->query($query);

if($result->connect_errno){
	header('Location:editprofile.php');
}

else {
	header('Location:profile.php');
}

 ?>