	<?php include('dbcon.php'); ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Add User</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<h1>User Registration Form</h1>
		<div class="register">
			<h2>Add User Here</h2>
			<form method="post" id="register" action="user.php">
				
				<label>Name :</label><br>
				<input type="text" name="name" id="name" placeholder="Enter Your First Name"><br><br>

				<label>Contact Number :</label><br>
				<input type="number" id="num" name="cnum" placeholder="Enter Your Contact Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required><br><br>

				<label>Email Address :</label><br>
				<input type="email" name="email" id="name" placeholder="Enter Your Email Address"><br><br>

				<label>User Type :</label><br>
				<input type="text" name="utype" id="name" placeholder="Enter User Type"><br><br>

				<label>Municipal Council :</label><br>
				<input type="text" name="mname" id="name" placeholder="Enter Your Municipal Council "><br><br>

				<label>Username :</label><br>
				<input type="text" name="username" id="name" placeholder="Enter Your Username"><br><br>

				<label>Password :</label><br>
				<input type="password" name="pass" id="name" placeholder="Enter Your Password"><br><br>

				<label>Re-enter Password :</label><br>
				<input type="password" name="rpass" id="name" placeholder="Enter Your Password"><br><br>
				
				<input type="submit" value="submit" id="sub">

			</form>
		</div>

	

<?php


	

	//escape user inputs for security
	/*$name = mysqli_real_escape_string($con, $_REQUEST['name']);
	$cnum = mysqli_real_escape_string($con, $_REQUEST['cnum']);
	$email = mysqli_real_escape_string($con, $_REQUEST['email']);
	$mname = mysqli_real_escape_string($con, $_REQUEST['mname']);
	$username = mysqli_real_escape_string($con, $_REQUEST['username']);
	$pass = mysqli_real_escape_string($con, $_REQUEST['pass']);
	$rpass = mysqli_real_escape_string($con, $_REQUEST['rpass']);
 
	// Attempt insert query execution
	$sql = "INSERT INTO users (name, cnum, email, mname, username, pass, rpass) VALUES ('$name', '$cnum', '$email', '$mname', '$username', '$pass','$rpass')";
		if(mysqli_query($con, $sql)){
    	echo "Records added successfully.";
		} else{
   		echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

   			header("location:user.php");
				}
 
// Close connection
mysqli_close($con);*/

	//$con = mysql_connect("localhost","root","","login") or die ("Failed to connect to MySQL: " . mysql_error())
	//$db = mysql_select_db("login",$con) or die ("Failed to connect to MySQL: " . mysql_error())
	// echo "Connection Successful";

	//if (isset($_POST['submit'])) {
		# code...
	
	if(isset ($_POST['user_id']) && isset($_POST['name']) && isset($_POST['cnum']) && isset($_POST['email']) && isset($_POST['utype']) && isset($_POST['mname']) && isset ($_POST['username']) && isset ($_POST['pass']) && isset($_POST['rpass']) )
	{
		$saj = mysql_query("SELECT user_id FROM users WHERE user_id = '".$_POST['user_id']."'");
		if(mysql_num_rows($saj) >0)

			{
				echo '<b>The User id already exists.</b>';

			}
		else
		{
			$user_id	 		= $_POST['user_id'];
			$name 		 		= $_POST['name'];
			$contact_no  		= $_POST['cnum'];
			$email 		 		= $_POST['email'];
			$user_type 	 		= $_POST['utype'];
			$mun_council 		= $_POST['mname'];
			$username 	 		= $_POST['username'];
			$password 	 		= $_POST['pass'];
			$re_enter_password  = $_POST['rpass'];
			

		$query = "INSERT INTO users (user_id,name,contact_no,email,user_type,mun_council,username,password,re_enter_password) VALUES ('$user_id','$name','$contact_no','$email','$user_type','$mun_council','$username','$password','$re_enter_password')";
		$data = mysql_query($query) or die (mysql_error());

		header ('location:user.php');

		} 
		
	}
	?>

	</body>

	</html>