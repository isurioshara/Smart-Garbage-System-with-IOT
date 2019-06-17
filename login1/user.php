<?php

include ("dbcon.php");

//$con = mysql_connect("localhost","root","","login") or die ("Failed to connect to MySQL: " . mysql_error())
	//$db = mysql_select_db("login",$con) or die ("Failed to connect to MySQL: " . mysql_error())
	// echo "Connection Successful";



$q=mysqli_query($con, "select * from users")or die('Error In Session');
$data=mysqli_fetch_row($q);

//$q = mysql_query("select * from users") or die (mysql_error());
//$data = mysql_fetch_row($q);

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>User id</th>";
	echo "<th>Name</th>";
	echo "<th>Contact Number</th>";
	echo "<th>Email Address</th>";
	echo "<th>Municipal Council</th>";
	echo "<th>Username</th>";
	echo "<th>Password</th>";
	echo "<th>Re-enter Password</th>";
	echo "<th>Action</th>";
	echo "</tr>";

	while ($data = mysqli_fetch_row($q))
	{
		echo "<tr>";
		echo "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td>";
		echo "<td><a href='adduser.php'> Add </a>| <a href=''> Delete </a>| <a href='adduser.php'> Edit </a></td>";
		echo "</tr>";

	}

	echo "</table>";
?>