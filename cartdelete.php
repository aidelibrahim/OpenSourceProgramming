if(isset($_POST['cart_id']))
{
     $command = "DELETE FROM cart WHERE id= ".$_POST['cart_id'].";
     mysqli_query($conn,$command);

 //Redirect to cart page after this by using header("location")

}