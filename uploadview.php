<?php
require_once("php/db.php");
//without session  redirect to logout.php
checkSession();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIT-Upload Files View</title>
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
    <h2 style=" border-bottom:1px solid #f00">Uploaded Files List</h2>
    <table border='1' bgcolor='Black' Text Color='red' width="100%">
    <tr><th>Sno</th><th>Topic</th><th>Staff Name</th><th>College</th><th>Location</th><th>Dowload</th></tr>
	<?php
	$query = "select * from upload  LEFT JOIN odform ON upload.od_id=odform.id LEFT JOIN staffreg ON upload.staff_id=staffreg.id";
	$result = $conn->query($query);
	$i =1;
	while($row = $result->fetch_assoc()) {
	?>
    <tr style="text-align:center">
        <td><?php echo $i; ?></td>
        <td><?php echo $row['topic']; ?></td>
        <td><?php echo $row['sname']; ?></td>
        <td><?php echo $row['clg']; ?></td>
        <td><?php echo $row['location']; ?></td>
        <td><a href="upload/<?php echo $row['filename']; ?>">download</a></td>
    </tr>
    <?php
	$i++;
	}   
	?>
 	 </table>

	<div class="clr"></div>
    </div>

    <div class="fbg">
        <div class="fbg_resize">
          <div class="clr"></div>
        </div>
    </div>
   <?php include 'elements/footer.php'; ?>
	</div>
</div>
</body>
</html>
