<?php 
include('dbcon.php');
include('session.php'); 

/*include('sidebar.php'); */


$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <!-- Side navigation -->
   <div class="sidenav">
     
        <a class="active" href="home.php"><h4>Home</h4></a>
        <a href="news.php" ><h4>Divisions</h4></a>
        <a href="map.php" ><h4>Site Maps</h4></a>
        <a href="news.php" ><h4>News</h4></a>
        <a href="project.php" ><h4>Projects</h4></a>
        <a href="news.php" ><h4>About Us</h4></a>
        <a href="news.php" ><h4>Contacts</h4></a>
        <li>
          <a href="logout.php"><h4>Log Out</h4></a></li>
 
        </div>
  <div class="header1">
  <h3>Welcome! to Colombo MC Waste Management System (D-2B).</h3>
  </div>


<div class="form-wrapper2"> 
<img src="img/colmap.png" alt="site map-Colombo" width="380px" height="435" top="50%" float="left" left="20%">
<h4>You've logged in as <?php echo $row['name']; ?> </h4>
<div class="subtitle_wrapper">
    <h2>Select Division to view map</h2>
</div>
<div class="reminder">
  <div class="reigonbox">
<div class="areabox">
  <a href="map_wsouth.php">COLOMBO 06 - SOUTH</a>
</div>
  <div class="areabox">
    <a href="map_wnorth.php">COLOMBO 06 - NORTH</a>
  </div>
  <div class="areabox">
    <a href="map_havelock.php">HAVELOCK TOWN</a>
  </div>
  <div class="areabox">
    <a href="map_milagiri.php">MILAGIRI</a>
  </div>
  <div class="areabox">
    <a href="map_col04.php">COLOMBO 04</a>
  </div>


</div>
</body>

</html>