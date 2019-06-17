<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
        <a href="#default" class="logo"><h1>Program Name</h1></a></div>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <center><h3>Admin Login</h3></center>
	  <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" autofocus required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
   
   //if($_SERVER["REQUEST_METHOD"] == "POST") {
   if(isset($_POST['login'])){
      // username and password sent from form 

      $username = mysqli_real_escape_string($con, $_POST['user']);
      $password = mysqli_real_escape_string($con, $_POST['pass']); 
      
      $sql = "SELECT username FROM admin WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $username;
         
         header("location: home.php");
      }
   }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   


		  ?>
  <div class="reminder">
    <p>Not a member? <a href="#">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>