<?php 
include('dbcon.php');
include('session.php'); 
include('navi.php'); 


$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
//$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper2"> 
    <center><h3>Welcome!</h3></center>
  <center><h2>You've logged in as Admin </h2><center>
	 <div class="reminder">
     <p>Select Area</p>
   <p><a href="user.php">Users</a></p>
   <p><a href="home.php">Bins</a></p>
   <p><a href="home.php">Routes</a></p>
   
</div>
<div class="topright">
    <p><a href="logout.php"><h4>Log out</h4></a></p>
  </div>
</body>
</html>