<?php
require_once("php/db.php");

if(isset($_POST['status'])){
	$id = $_POST['id'];
	$status = $_POST['status'];
	$query = "SELECT * FROM odform WHERE id='$id'";
	$result=mysqli_query($conn,$query);
	$check = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(!empty($check)){
		$query1 = "UPDATE odform Set status = '$status' WHERE id='$id'";
		mysqli_query($conn,$query1)or die(mysqli_error($conn));
		header('location:odview.php');
	}
}
else{
if(isset($_SESSION['name']) &&  isset($_SESSION['pwd'])){
$query = "select * from odform WHERE staff_id = ".$_SESSION['id'];
$result = mysqli_query($conn, $query);
}
else{
header('location:logout.php');
}
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
.button {
    background-color: #f44336; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin-bottom:10px;
}
</style>
</head>
<body>
<div class="main">
  <?php include 'elements/header.php'; ?>  <!--header, nav and slider-->
  
  <div class="content">
    <div class="content_resize">
      <?php //include 'elements/sidebar.php'; ?>
      <h2 style=" border-bottom:1px solid #f00">Event List</h2>
      <a href="apply.php" class="button" style="">Add Event</a>
<?php

echo"<table border='1' bgcolor='Black' Text Color='red'>
	<tr>
	<th> &nbsp;&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;</th>
	<th> &nbsp;&nbsp;&nbsp;STAFF NAME&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;DESIGNATION&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;CATEGORY&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;START DATE&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;END DATE&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;DURATION&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;TOPIC&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;COLLEGE NAME&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;LOCATION&nbsp;&nbsp;&nbsp;</th>
	<th>&nbsp;&nbsp;&nbsp;STATUSnbsp;&nbsp;&nbsp;</th>
	</tr> ";
$con=new mysqli($servername,$username,$password,$dbname);


  if($con->connect_error){
    die("connection failed:".$con->connect_error);
	}
	$result=mysqli_query($con,"select *from odform");
	$i=1;
	while($row= mysqli_fetch_array($result))
	
	 {
	  echo "<tr>";
	   echo"<td>".$i."</td>"; 
	  echo"<td>".$row['sname']."</td>"; 
	   echo"<td>".$row['des']."</td>"; 
       echo"<td>".$row['cate']."</td>"; 
       echo"<td>".$row['start']."</td>"; 
	   echo"<td>".$row['end']."</td>";
	   echo"<td>".$row['dur']."</td>";
	   echo"<td>".$row['topic']."</td>";
	   echo"<td>".$row['clg']."</td>";
	   echo"<td>".$row['loc']."</td>";
	   if($row['status'] == 2)
	   echo"<td>Approved</td>";
	   else if($row['status'] == 1)
	   echo"<td>Waiting for Approval</td>";
	   else
	   echo"<td>Cancelled</td>";
	$i++;  
}
	   
	   echo"</table>";
	   
	   ?>
       <form method="post" action="" id="approvalForm">
       		<input type="hidden" id="status" name="status" value=""  />
       		<input type="hidden" id="odid" name="id" value=""  />
       </form>
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
