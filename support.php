<?php 
include 'php/db.php'; 
if(isset($_POST['login'])){
	$email = $_POST['sid'];
	$password = $_POST['pwd'];
	login($_POST , $conn);
}else{
	$email = '';
	$password = '';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SIT | Support</title>
<?php include 'elements/header_includes.php'; ?>
<style type="text/css">
<!--
.style2 {color: #1ca2ce}
.style1 {font-size: large;
	font-style: italic;
	font-weight: bold;
	color: #FFFFFF;
}
.style4 {
	font-size: 14px;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {font-size: 18px; font-weight: bold; color: #FFFFFF; }
-->
</style>
</head>
<body>
<div class="main">
    <?php include 'elements/header.php'; ?>  <!--header, nav and slider-->
  
  <!-- page content starting -->
  <div class="content">
    <div class="content_resize">
       <?php include 'elements/sidebar.php'; ?>
	  <form  action="" method="post">
          <div class="mainbar">
            <table width="607" height="355" bgcolor="#000000">
              <tr>
                <td colspan="2" >&nbsp;
                    <label>
                    <div align="center" class="style5">LOG - IN </div>
                </label>
                <label></label>            </td>
                <td> <label>
                    <select name="cate">
                      <option>ADMIN</option>
                      <option>STAFF</option>
                     </select>
                    </label></td>
              </tr>
              <tr>
                <td ><div align="center"><span class="style4">USER NAME </span></div></td>
                <td><input type="text" name="sid" /></td>
              </tr>
              <tr>
                <td ><div align="center"><span class="style4">PASSWORD </span></div></td>
                <td><input type="password" name="pwd" /></td>
              </tr>
              <tr>
                <td></td><td><input type="submit" id="loginsub" name="login" value="Log In"> </td>
              </tr>
            </table>
          </div>
	  </form>
      <div class="clr"></div>
    </div>
  </div>
       <!-- page content ending -->
  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
      <?php include 'elements/footer.php'; ?>
</div>
</body>
</html>