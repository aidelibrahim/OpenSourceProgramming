<?php  
define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WAA Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style>
  
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

  input[type=text] {
    width: 20%;
    padding: 2px 5px;
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

    input[type=submit] {
    width: 40%;
    padding: 2px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #2ecc71;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    background-color: #2ecc71;
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
  <li style="float:right"><a class="active" href="logoutvalidate.php">Logout</a></li>
</ul>

<div class="container">
  <h2>Groceries</h2>
  <p>20 items found</p>
  
  <!--first row-->
  <!--milo-->
  <div class="row">
   <?php
   
   $que = "select * from item";
   $query = $con->mysqli->query($que);
		while ($row = $query->fetch_array()) {

   ?>
   	<form method="post" action="buy1.php?action=add&id=<?php echo $row[0];?> ">
   		<input type="hidden" name="hid_name" value="<?php echo $row[1]; ?>" >
   		<input type="hidden" name="hid_price" value="<?php echo $row[2]; ?>" >
      <input type="hidden" name="hid_itemid" value="<?php echo $row[0]; ?>" >  	
   	
   	
    <div class="col-md-4">
      <div class="thumbnail">
        <a>
          <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal" src=<?php echo 
          $row[4]; ?> alt="Lights" style="width:100%" width="50" height="250">
		  <div class="caption">
			<h4><b><?php echo $row[1]; ?></b></h4>
			<h4>RM <?php echo $row[2]; ?></h4>
          </div>
          <div class="modal-footer">
         	 	<input type="text" name="quantity" value="1">
          		<input type="submit" value="Add to cart" name="cart" class="btn btn-default">
		  </div>
        </a>
      </div>
    </div>
    </form>
	<?php 

		} // end while

	if(isset($_POST['cart']))
	{
		if(isset($_SESSION["shop_cart"])){

			$item_array_id = array_column($_SESSION["shop_cart"],"item_id");

			if(!in_array($_GET['id'],$item_array_id)){
				
			$count = count($_SESSION["shop_cart"]);
			$item_array = array (
				'item_id' => $_GET['id'],
				'item_name' => $_POST['hid_name'],
				'item_price' => $_POST['hid_price'],
				'item_qty' => $_POST['quantity']
				);
			$_SESSION["shop_cart"][] = $item_array;

			}

			else {
				  echo '<script>alert("Item Already Added")</script>';  
          echo '<script>window.location="buy1.php"</script>';
			}

		}

		else {

			$item_array = array (
				'item_id' => $_GET['id'],
				'item_name' => $_POST['hid_name'],
				'item_price' => $_POST['hid_price'],
				'item_qty' => $_POST['quantity']
				);
			$_SESSION["shop_cart"][] = $item_array;

		}

		//$item_name = $_POST["hid_name"];
		//$item_price = $_POST['hid_price'];
	}

    //ADD item from cart database


	?>
  
	<ul class="pager">
		<li class="previous"><a href="#">Previous</a></li>
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="buy2.php">2</a></li>
				<li><a href="buy3.php">3</a></li>
			</ul>
		<li class="next"><a href="buy2.php">Next</a></li>
	</ul>
	
</div>


<script>

var modal = document.getElementById('myModal');
var btn - document.getElementById("cart");

</script>


</body>
</html>


