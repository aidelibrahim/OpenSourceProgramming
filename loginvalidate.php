<?php
define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");
session_start();
unset($_SESSION['shop_cart']);
$n1 = $_POST['email'];
$n2 = $_POST['password'];

$sql = "SELECT * FROM user WHERE u_emeil = '$n1' AND u_pass = '$n2'";
$result = $con->mysqli->query($sql);

while ($row = $result->fetch_array()) {
	$chck_mail = $row['u_emeil'];
	$chcl_pass = $row['u_pass'];
	$nama = $row['u_id'];
}


if($n1 == $chck_mail && $n2 == $chcl_pass){

	$_SESSION['login'] = true ; 
	$_SESSION['cur_name'] = $nama;


//This is get data from database

 	$user_id = $_SESSION['cur_name'];
 	$que = "SELECT * FROM cart c LEFT JOIN item i ON c.cart_itemid = i.item_id WHERE u_uid='$user_id' ";
    $query = $con->mysqli->query($que);	
    $int = 0;
    
    while ($row = $query->fetch_array()) {

    	if(!isset($_SESSION['shop_cart'])){

    		$count = count($_SESSION["shop_cart"]);
    		$item_array = array (
				'item_id' => $row['cart_itemid'],
				'item_name' => $row['item_name'],
				'item_price' => $row['cart_price'],
				'item_qty' => $row['cart_qty']
				);
		$_SESSION["shop_cart"][] = $item_array;

    	}

    	else{

    		$item_array = array (
				'item_id' => $row['cart_itemid'],
				'item_name' => $row['item_name'],
				'item_price' => $row['cart_price'],
				'item_qty' => $row['cart_qty']
				);
			$_SESSION["shop_cart"][] = $item_array;
    	}
    	
    }

	
    
header('Location:buy1.php');

}

else {
	
	header('Location:index.php');
}

?>
