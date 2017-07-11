<?php
define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");
session_start();

if(isset($_SESSION['login'])){


	if(isset($_SESSION['shop_cart']) && !empty($_SESSION['shop_cart'])){

		foreach ($_SESSION['shop_cart'] as $row => $value) {

				$item_id = $con->mysqli->real_escape_string($value['item_id']);
				$item_qty = $con->mysqli->real_escape_string($value['item_qty']);
				$item_price = $con->mysqli->real_escape_string($value['item_price']);
				$user_id = $con->mysqli->real_escape_string($_SESSION['cur_name']);

				$query = "INSERT INTO cart(u_uid,cart_itemid,cart_qty,cart_price)
			 	VALUES ('$user_id','$item_id','$item_qty','$item_price.') ";

				$result = $con->mysqli->query($query);

				if($result->error){
					echo '<script>alert("Cannot logout")</script>';  
    			    echo '<script>window.location="buy1.php"</script>';
				}
				
					
			
		}

				
	}

	session_unset();
	session_destroy();
	unset($_SESSION['login']);
	header('Location:index.php');
	
		
}

elseif(!isset($_SESSION['login']))  {
	echo '<script>alert("You need to log in")</script>';  
    echo '<script>window.location="index.php"</script>';
}


 ?>