<?php
require_once("php/db.php");


if(isset($_SESSION['name']) &&  isset($_SESSION['pwd'])){
$query = "select * from staffreg WHERE type='Staff'";
$result = mysqli_query($conn, $query);
}
else{
header('location:logout.php');
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIT-OD-View</title>
<?php include 'elements/header_includes.php'; ?>
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
  <?php include 'elements/header.php'; ?>  <!--header, nav and slider-->
  <div class="content">
    <div class="content_resize">
      <?php //include 'elements/sidebar.php'; ?>
      <h2 style=" border-bottom:1px solid #f00">Staff List</h2>
<?php

echo"<table border='1' bgcolor='Black' Text Color='red'>
	<tr>
	<th> &nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;</th>
	<th> &nbsp;&nbsp;&nbsp;STAFF NAME&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;QUALIFICATION&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;EXPERIENCE&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;SEX&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;E-MAIL&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;CONTACT NO&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;STAFF ID&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;LOCATION&nbsp;&nbsp;&nbsp;</th>
	
	</tr> ";

	$i=1;
	while($row= mysqli_fetch_array($result))
	
	 {
	  echo "<tr>";
	   echo"<td>".$i."</td>"; 
	  echo"<td>".$row['name']."</td>"; 
	   echo"<td>".$row['qua']."</td>"; 
       echo"<td>".$row['exp']."</td>"; 
       echo"<td>".$row['dob']."</td>"; 
	   echo"<td>".$row['sex']."</td>";
	   echo"<td>".$row['mailid']."</td>";
	   echo"<td>".$row['contactno']."</td>";
	   echo"<td>".$row['staff_id']."</td>";
	   echo"<td>".$row['loc']."</td>";
	$i++;  
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
<script>
$( ".approval" ).click(function() {
	$('#odid').val($(this).attr('rel2'));
	$('#status').val($(this).attr('rel'));
  $( "#approvalForm" ).submit();
});
</script>
</body>
</html>
