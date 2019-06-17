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
    <center><h3>Login here</h3></center>
	  <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" autofocus required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="login"></input>
    </div>
  </form>
  <?php

  	//variable declairation
  	//$username = '';
  	//$errors = array();

	if (isset($_POST['login']))
		{
			/*$user = $_POST['user'];
			$password = $_POST['pass'];
			$op = $_GET['op'];

			if($op == "in"){

				$sql = mysql_query("SELECT * FROM users WHERE username='$user' AND password='$password'");
    			if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        			$qry = mysql_fetch_array($sql);
        			$_SESSION['user'] = $qry['user'];
        			$_SESSION['nama'] = $qry['nama'];
        			$_SESSION['level'] = $qry['level'];
        			if($qry['level']=="Admin"){
            		header("location:home_admin.php");
        		}else if($qry['level']=="user"){
            		header("location:home_user.php");
        }
    }else{
			}*/


			/*global $con, $username, $errors;
			//receive all the inputs from th form call the e() function
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password =  mysqli_real_escape_string($con, $_POST['pass']);

			//make sure the from is filled properly
			if (empty($username)){
				array_push($errors, "username is required");
			}
			if (empty($password)){
				array_push($errors, "password is required");
			}

			attempt login if no errors on form
			if(count($errors) == 0) {

				$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				$results = mysqli_query($con, $query);

				if(mysqli_num_rows($results) == 1){ //user found
					//check if user is admin or user
					$logged_in_user = mysqli_fetch_assoc($results);
					if($logged_in_user['user_type'] == 'admin'){

						$_SESSION['user_id'] = $logged_in_user;
						$_SESSION['success'] = "You are now logged in";
						header('location: titles.php');
					}else {

						$_SESSION['user_id'] = $logged_in_user;
						$_SESSION['success'] = "You are now logged in";
						header('location: home.php');
					}
				}else{
					array_push($errors, "Wrong username/password Combination");
				}*/
			//}
			

			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
						

					$_SESSION['user_id']=$row['user_id'];

					if($row=['user_type']=='admin'){
							header('location:home.php');

					} else{
				header('location:titles.php');
					}
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}

		  ?>
  <div class="reminder">
  	<p><a href="admin.php">Admin Login</a></p>
    <p>Not a member? <a href="#">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>