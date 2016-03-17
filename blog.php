<?php require_once("php/db.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SIT | Blog</title>
<?php include 'elements/header_includes.php'; ?>
<style type="text/css">
<!--
.style2 {color: #1ca2ce}
.style1 {font-size: large;
	font-style: italic;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>
<body>
<div class="main">
    <?php include 'elements/header.php'; ?>  <!--header, nav and slider-->
  
  <!--home page content starting -->
  <div class="content">
    <div class="content_resize">
      <div class="mainbar"></div>
 <?php include 'elements/sidebar.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
     <!--home page content ending -->
     
  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
  
    <?php include 'elements/footer.php'; ?>
</div>
</body>
</html>
