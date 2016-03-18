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
$query = "select * from odform";
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

.button1 {
    background-color: #f44336; /* Green */
    border: none;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	margin-bottom:10px;
}

.button2 {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
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
	<th>&nbsp;&nbsp;&nbsp;ACTION&nbsp;&nbsp;&nbsp;</th>
	
	</tr> ";
	$result=mysqli_query($conn,"select *from odform");
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
	   $query = "SELECT * FROM staffreg WHERE id='". $row['staff_id']."'";
		$result=mysqli_query($conn,$query);
		$check = mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(!empty($check)){
			$mails=$check['mailid'];
		}
	   $eventid = $row['id'];
	   if($row['status'] == 2)
	   echo"<td>Approved</td>";
	   else if($row['status'] == 1)
	   echo"<td><button class='approval button2' rel='2' rel2='".$row['id']."'>Approval</button><button class='approval button1' rel='3' rel2='".$row['id']."'>Cancel</button></td>";
	   else if($row['status'] == 3)
	   echo"<td>Cancelled</td>";
	   else if($row['status'] == 4)
	  // echo"<td><a href='uploadview.php'>Click to mail</a></td>";
	   echo"<td><a id='newMail' href='#' rel='".$mails."'>Click to mail</a></td>";
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
  <?php include 'elements/footer.php'; ?>
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
