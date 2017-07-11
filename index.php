<?php 
define("PATH",dirname(__FILE__));
require_once(PATH . "/loadfile.php");

include_once("index.php");
session_start();

if(isset($_SESSION['login'])){
  header('Location:buy1.php');
  echo '<script>alert("Logged in ")</script>';  
  echo '<script>window.location="buy1.php"</script>';
  exit;
}

if(isset($_POST['register'])){
  
  $uname = $_POST['name'];
  $pass = $_POST['password'];
  $emeil = $_POST['emeil'];


  $query = "SELECT * FROM user WHERE u_name='$uname'";
  $result = $con->mysqli->query($query);
  while ($row=$result->fetch_array()) {
     $dbname = $row['u_name'];
  }

  if ( $uname == $dbname) {
     echo '<script>alert("Username existed")</script>';  
    }

  else {

    $query = "INSERT INTO user(u_name, u_pass , u_emeil) VALUES ('$uname','$pass','$emeil')";
    $result = $con->mysqli->query($query);
    echo '<script>alert("SUCCESSFULL !!!!, Login again")</script>';  
  }


}


 ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

</head>

<body>
<center>
  <img src="/ass2/im/logo1.png" height="10%" width="15%">
</center>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="" method="post" >
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                User Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>

          </div>

          <br>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="emeil" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" />
          </div>
          
          <button type="submit" class="button button-block" name="register" />Get Started</button>
          
          </form>

        </div>
        
        <div id="login">
          <h1>Welcome Back!</h1>
          
          <form action="loginvalidate.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" />
          </div>
          <br>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" />
          </div>
          <button class="button button-block"/>Log In</button>
          </form>
        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
