<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style type="text/css">
<!--
.style2 {color: #1ca2ce}
.style1 {font-size: large;
	font-style: italic;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {
	font-size: 16px;
	color: #FFFFFF;
}
.style6 {color: #FFFFFF}
.style15 {font-size: 14px; font-family: "Times New Roman", Times, serif; color: #FFFFFF;}
-->
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="support.php">HOD</a></li>
          <li><a href="reg.php">STAFF REGISTRATION </a></li>
          <li><a href="blog.php"><span>Blog</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.php">SETHU <span class="style2">INSTITUTE OF </span>TECHNOLOGY</a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /></a>
          <div id="div">
            <div align="center"><span class="style1">SETHU INSTITUTE OF TECHNOLOGY - BEST COLLEGE IN TAMIL NADU </span> </div>
            <p align="center"><span class="style1"> &quot;A GATEWAY TO KNOWLEDGE AND SUCCESS&quot; </span></p>
          </div>
          <div class="clr"></div>
        <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /></a>
        <div id="div2">
          <div align="center"><span class="style1">SETHU INSTITUTE OF TECHNOLOGY - BEST COLLEGE IN TAMIL NADU </span> </div>
          <p align="center"><span class="style1"> &quot;A GATEWAY TO KNOWLEDGE AND SUCCESS&quot; </span></p>
        </div>
        <div class="clr"></div>
</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="sidebar">
        <div class="searchform"></div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li>About Us </li>
            <li><a href="#">Log-In</a></li>
            <li><a href="#">Contact Us </a></li>
          </ul>
          <p><img src="images/download.jpg" width="228" height="143" /></p>
          <p><img src="images/images.jpg" width="226" height="182" /></p>
        </div>
      </div>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="od";
echo"<table border='1' bgcolor='Black' Text Color='red'>
	<tr>
	<th> &nbsp;&nbsp;&nbsp;STAFF NAME&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;DESIGNATION&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;CATEGORY&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;START DATE&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;END DATE&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;DURATION&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;TOPIC&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;COLLEGE NAME&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;LOCATION&nbsp;&nbsp;&nbsp;</th>
	
	</tr> ";
$con=new mysqli($servername,$username,$password,$dbname);


  if($con->connect_error){
    die("connection failed:".$con->connect_error);
	}
	$result=mysqli_query($con,"select *from odform");
	
	while($row= mysqli_fetch_array($result))
	
	 {
	  echo "<tr>";
	  echo"<td>".$row['sname']."</td>"; 
	   echo"<td>".$row['des']."</td>"; 
       echo"<td>".$row['cate']."</td>"; 
       echo"<td>".$row['start']."</td>"; 
	   echo"<td>".$row['end']."</td>";
	   echo"<td>".$row['dur']."</td>";
	   echo"<td>".$row['topic']."</td>";
	   echo"<td>".$row['clg']."</td>";
	   echo"<td>".$row['loc']."</td>";
	   echo"<td><a href='upload.php?eventid=".$row['id']."'>Link</a></td>";
	  
}
	   
	   echo"</table>";
	   
	   ?>
	    <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
