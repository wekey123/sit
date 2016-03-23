<?php
include("php/db.php");
//without session  redirect to logout.php
checkSession();
if($_SESSION['type'] == 'Staff'){
	header('location:odviewstaff.php'); exit;
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIT-Journal-View</title>
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

.button {
    background-color: #f44336; /* Green */
    border: none;
    color: white;
    padding: 10px 18px;
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
      <a href="uploadview.php" class="button" style="float:right;">Download List</a>
      <a href="odview.php" class="button" style="float:right;   margin-right: 20px;">Event List</a>
      
      <h2 style=" border-bottom:1px solid #f00">Journal List</h2>
<?php

echo"<table border='1' bgcolor='Black' Text Color='red'>
	<tr style='text-align:center;'>
	<th>No</th>
	<th>TITLE</th>
	<th>AUTHOR NAME</th>
	<th>CO-AUTHOR NAME</th>
	<th>PUBLICATION DATE</th>
	<th>JOURNAL</th>
	<th>VOLUME</th>
	<th>ISSUE</th>
	<th>PAGES</th>
	<th>PUBLISHER</th>
	<th>DOI</th>
	
	</tr> ";
	$result=mysqli_query($conn,"select *from jou");
	$i=1;
	while($row= mysqli_fetch_array($result))
	 {
	  echo "<tr>";
	   echo"<td>".$i."</td>"; 
	  echo"<td>".$row['tit']."</td>"; 
	   echo"<td>".$row['aname']."</td>"; 
       echo"<td>".$row['caname']."</td>"; 
       echo"<td>".$row['pubdate']."</td>"; 
	   echo"<td>".$row['journal']."</td>";
	   echo"<td>".$row['volume']."</td>";
	   echo"<td>".$row['issue']."</td>";
	   echo"<td>".$row['pages']."</td>";
	   echo"<td>".$row['publisher']."</td>";
	   echo"<td>".$row['doi']."</td>";
	  echo "</tr>";
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
