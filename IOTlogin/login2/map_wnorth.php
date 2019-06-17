<?php 
include('dbcon.php');
include('session.php'); 
include('sidebar.php'); 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>COLOMBO 06 - NORTH</h3>

<div class="mapouter">
<div class="gmap_canvas">
<iframe 
    width="1000" 
    height="600" 
    id="gmap_canvas" 
    src="https://maps.google.com/maps?q=wellawatta%20south&t=&z=17&ie=UTF8&iwloc=&output=embed" 
    frameborder="0" 
    scrolling="no" 
    marginheight="0" 
    marginwidth="0">
    </iframe>
    <a href="https://www.crocothemes.net">crocothemes.net</a>
    </div>
    <!--<style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>-->
    </div>
    </body>
        </html>