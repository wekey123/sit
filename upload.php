<?php
include("php/db.php");

//without session  redirect to logout.php
checkSession();
if($_SESSION['type'] == 'Admin'){
	header('location:odview.php'); exit;
}
if(!empty($_POST['submit'])){

	$file_ary = reArrayFiles($_FILES['filesToUpload']);
	$flag = 1;
	$a="'".$_POST['title']."'";
    $b="'".$_POST['description']."'";
	$c=$_POST['staffid'];
    $d=$_POST['eventid'];

	$query1 = "UPDATE odform Set status = 4 WHERE id=$d";
	if ($conn->query($query1) !== TRUE) {
		header('location:upload.php?eventid='.$_GET['eventid']);
		exit;
	}
	
	
    foreach ($file_ary as $file) {
		if(move_uploaded_file($file['tmp_name'],'upload/'.$file['name'])){
			$flag = 1;
			$filename = "'".$file['name']."'";
			$sql = "INSERT INTO upload (staff_id, od_id, title,description,filename,created) VALUES ($c, $d, $a,$b,$filename,'2016-06-17 15:04:57')";
			if ($conn->query($sql) === TRUE) {
				$flag = 1;
			} else {
				$flag = 2;
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else{
			$flag = 2;
		}
    }
	if($flag == 1) echo "Upload Successfully"; else echo "Upload Failure";
	header('location:uploadview.php');
}else{
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
           <?php include 'elements/sidebar.php'; ?>  
		  <form method="post" action="#" enctype="multipart/form-data">
		   <div class="mainbar">
            <table width="607" height="355" bgcolor="#000000">
              <tr>
              <td></td>
                <td>UPLOAD FORM</td>
              </tr>
              <tr>
                <td ><div align="center"><span class="style4">Title</span></div></td>
                <td><input name="title" id="title" type="text"  placeholder="Event Title"/> </td>
              </tr>
              <tr>
                <td ><div align="center"><span class="style4">Tell about Events</span></div></td>
                <td><textarea cols="30" rows="5" name="description" placeholder="Tell about Events"></textarea>
                <input type="hidden" name="eventid" value="<?php echo !empty($_GET['eventid']) ? $_GET['eventid'] : '' ?>" />
				<input type="hidden" name="staffid" value="1" />
                </td>
              </tr>
              <tr>
                <td ><div align="center"><span class="style4">Upload Files</span></div></td>
                <td><input name="filesToUpload[]" id="filesToUpload" type="file" multiple /></td>
              </tr>
              <tr>
                <td></td><td><input type="submit" value="submit" name="submit" /></td>
              </tr>
            </table>
          </div>
          </form>
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
</html>
<?php
}
?>