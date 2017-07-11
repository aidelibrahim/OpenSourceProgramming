<?php

define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");


$uname = $_POST['name'];
$pass = $_POST['password'];
$emeil = $_POST['emeil'];


$query = "SELECT * FROM user WHERE u_name='$uname'";
$result = $con->mysqli->query($query);
while ($row=$result->fetch_array()) {
	$dbname = $row['u_name'];
}

if ( $uname== $dbname) {
	echo '<script>alert("Username existed")</script>';  
    echo '<script>window.location="index.php"</script>'; 
	header('Location:index.php');
}

else {

	$query = "INSERT INTO user(u_name, u_pass , u_emeil) VALUES ('$uname','$pass','$emeil')";
	$result = $con->mysqli->query($query);
	echo '<script>alert("SUCCESSFULL !!!!, Login again")</script>';  
    echo '<script>window.location="index.php"</script>';
	header('Location:index.php');
}



 ?>