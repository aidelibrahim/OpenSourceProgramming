<?php
session_start();
define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Your Cart</title>
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

	aside {
		text-align: left;
		float: right;
		max-width: 350px;
		margin: 0;
		padding: 2em;
		font-family: calibri;
		background-color: rgba(161,136,127,1);
	}

	aside h4 {
		color: gray;
	}

	aside p {
		font-family: calibri;
		padding-left: 30px;
		font-size: 17px;
	}

	article {
		text-align: left;
		margin-right: 400px;
		margin-left: 30px;
		padding: 3em;
		overflow: hidden;
		font-family: calibri;
	}
	
	.proceedbutton {
    background-color: #4CAF50;
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

	.editbutton {
    background-color: #bdc3c7;
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	}
	
	.field {
	background-color: #ecf0f1;
	padding: 8px 1px;
	text-align: left;
	}
	table {
		width: 100%;
		border: 2px solid black;
		background-color: rgb(236,240,241);
		font-size: 20px;
	}



	#kanan{
		float: right;
		margin-left: 20px;
	}

	.centered{
		margin: 0;
		width: 800px;
	}

	#ko2{
		display: inline-block;
	}
	.button {
		-webkit-transition-duration :0.4s;
		transition-duration: 0.4s;
		border: none;
		color: white;
		padding: 16px 32px;
		text-align: center;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		background-color: rgb(155,89,182);
	}

	.button:hover{
		background-color:rgb(149,165,166);
		color: white;
	}
	button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
	}

	.cancelbtn {
	    padding: 14px 20px;
	    background-color: #f44336;
	}
	.cancelbtn,.signupbtn {
		float:left;width:40%
	}
	.container {
	    padding: 16px;
	}
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	    padding-top: 60px;
	}
	.modal-content {
	    background-color: #fefefe;
	    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	    border: 1px solid #888;
	    width: 50%; /* Could be more or less, depending on screen size */
	}
	.close {
	    position: absolute;
	    right: 35px;
	    top: 15px;
	    color: #000;
	    font-size: 40px;
	    font-weight: bold;
	}

	.close:hover,
	.close:focus {
	    color: red;
	    cursor: pointer;
	}

	/* Clear floats */
	.clearfix::after {
	    content: "";
	    clear: both;
	    display: table;
	}

	@media screen and (max-width: 300px) {
	    .cancelbtn, .signupbtn {
	       width: 100%;
	    }
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

<?php //printf( '<pre>%s</pre>', print_r($_SESSION,TRUE) ); untuk debugging ?>

  <br><br>
  <h1>Your Cart!</h1>
  <h4>Here is the list of the item(s) that you add to your cart</h4>
 
 	<aside>
		<fieldset>

		<h2><b>Please check</b></h2>
		<h3>Your address:</h3>
		<div class="field">
		<?php
			 $cur_user = $_SESSION['cur_name'];
			 $que = "select * from user where u_id = '$cur_user'";
   		     $query = $con->mysqli->query($que);
			while ($row = $query->fetch_array()) {
				echo '<p>'.$row['u_adrr'].'</p>';
			}

		?>
		</div>

		<!--sini call ADDRESS from database, edit ikut db kau-->

		<br><br>
		<a href="profile.php" class="editbutton">Edit my address</a>
		<br><br>

		<p><b><i>We will ship your item(s) to this address</i></b></p>

		</fieldset>
	</aside>
	
	
	<article>
		<h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="30%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="25%">Price</th>  
                               <th width="20%">Total</th>  
                               <th width="8%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shop_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shop_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_qty"]; ?></td>  
                               <td>RM <?php echo $values["item_price"]; ?></td>  
                               <td>RM <?php echo number_format($values["item_qty"] * $values["item_price"], 2); ?></td>  
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_qty"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">RM <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
				</div>

 		<br><br><br>
 		<center>
			<a onclick="document.getElementById('spon').style.display='block'" style="width: :auto" class="proceedbutton">PROCEED TO PAYMENT</a>
		</center>
		<br>

		<div id="spon" class="modal">
		<span onclick="document.getElementById('spon').style.display='none'" class="close" title="Close Modal">X</span>

			<form class="modal-content animate" method="post" action="">
				<div class="container">
				<label><b>Choose type of payment:</b></label> <br><br>
					<input type="radio" name="rad1" value="CIMB" checked="">&nbsp CIMB clicks <br>
					<input type="radio" name="rad1" value="Bank Islam">&nbsp Maybank2u <br>
					<input type="radio" name="rad1" value="Bank Islam">&nbsp HongLeong Bank <br>
					<input type="radio" name="rad1" value="Bank Islam">&nbsp Paypal <br><br><br>

					<div class="clearfix">
						<button type="button" onclick="document.getElementById('spon').style.display='none'" class="cancelbtn">Cancel</button>
						<button type="submit" onclick="document.getElementById('spon').style.display='none'"  name="go" class="signupbtn">Continue Online Transaction</button>

					</div>
				</div>
			</form>
		</div>
	</article>



</div>
	
</div>

</body>

<?php
$user_id = $con->mysqli->real_escape_string($_SESSION['cur_name']);

 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shop_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {	
                	 $id =$_GET['id']; 	  
                	 $query = "DELETE FROM cart WHERE cart_itemid ='$id'";
                     $result = $con->mysqli->query($query); 
                     unset($_SESSION["shop_cart"][$keys]);
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  

 }

 if(isset($_POST['go'])){

 		$query = "DELETE FROM cart WHERE u_uid ='$user_id'";
       	$result = $con->mysqli->query($query); 
        unset($_SESSION["shop_cart"]);
        echo '<script>alert("Item Removed")</script>';  

 }

 

 ?>

</html>


