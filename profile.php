<?php 
define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");
session_start();

$user_id = $con->mysqli->real_escape_string($_SESSION['cur_name']);

$query = "SELECT * FROM user WHERE '$user_id' ";
$result = $con->mysqli->query($query);

while ($row = $result->fetch_array()) {
	$name = $row['u_name'];
	$address = $row['u_adrr'];
	$emeil = $row['u_emeil'];
}

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>User Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	
	<style type="text/css">
		
	article {
		text-align: left;
		margin-right: 400px;
		margin-left: 30px;
		padding: 3em;
		overflow: hidden;
		font-family: calibri;
		background-color: rgba(161,136,127,1);
		position: relative;
	}
	
	.savebutton {
		background-color: rgba(93,64,55 ,0.9);
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
	}
	
	input[type=text] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 3px solid #ccc;
		-webkit-transition: 0.5s;
		transition: 0.5s;
		outline: none;
	}

	input[type=text]:focus {
		border: 3px solid #555;
	}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(93,64,55 ,1);
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 24px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: rgba(161,136,127 ,1);
}

.active {
    background-color: rgba(244,67,54 ,1);
}
	
	</style>
</head>

<body>

<ul>
  <li><a href="buy1.php">Home</a></li>
  <li><a href="index.php">Login</a></li>
  <li><a href="cart.php">Cart</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li style="float:right"><a class="active" href="#logout">Logout</a></li>
</ul>
	
	<div class="container">
	
	<br><br>
	<h2>User Profile</h2>
	<h4>You can edit your personal details here</h4><br><br>
	
	<article>
		
		<form>
			<label for="fname">Name</label>
			<?php echo $name; ?><br>
			
			<label for="lname">Email Address</label>
			<?php echo $emeil; ?><br>
			
			<label for="lname">Default Shipping Address :</label>
			<?php echo $address; ?><br>
	
		</form>
		
		
	</article>
	
	<br><br>
	<a href="editprofile.php" class="savebutton">EDIT PROFILE</a> <!--saved into database-->
	
	</div>

</body>

</html>