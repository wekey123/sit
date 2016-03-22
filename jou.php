<?php
include("php/db.php");
//without session  redirect to logout.php
checkSession();
if($_SESSION['type'] == 'Admin'){
	header('location:odview.php'); exit;
}
if(!empty($_POST['submit'])){
	//echo "<pre>"; print_r($_POST); exit;
	@extract($_POST);
	$sess_id = $_SESSION['id'];
	$sql = "INSERT INTO jou (staff_id,tit,aname,caname,pubdate,journal,volume,issue,pages,publisher,doi) VALUES ($sess_id,'$tit','$aname','$caname','$pubdate','$journal','$volume','$issue','$pages','$publisher','$doi')";
	if ($conn->query($sql) === TRUE) {
		$flag = 1;
	} else {
		$flag = 2;
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('location:journalviewstaff.php?errorjou='.$flag );
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SIT | JOURNAL FORM</title>
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
.style15 {font-size: 14px; font-family: "Times New Roman", Times, serif; color: #FFFFFF; font-weight: bold;}
.style19 {font-size: 14px; font-family: "Times New Roman", Times, serif; color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>
<body>
<div class="main">
    <?php include 'elements/header.php'; ?>  <!--header, nav and slider-->
    
    <div class="content">
        <div class="content_resize">
        <?php include 'elements/sidebar.php'; ?>
            <form  action="#" method="post"  enctype="multipart/form-data" >
                 <div class="mainbar">
 		 <table width="638" bgcolor="#000000">
          <tr><td><br/><br/></td></tr>
          <tr>
            <td colspan="2" style="text-align:center";><strong><span class="style5"><i>JOURNAL</i></span></strong></td>
          </tr>
           <tr><td><br/></td></tr>
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">TITLE</span></td>
            <td width="307"><span class="style15"><input type="text" name="tit" /></span></td>
          </tr>
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">AUTHOR NAME </span></td>
            <td width="307"><span class="style15"><input type="text" name="aname" /></span></td>
          </tr>
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">CO-AUTHOR NAME</span></td>
            <td width="307"><span class="style15"><input type="text" name="caname" /></span></td>
          </tr>
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">PUBLICATION DATE</span></td>
            <td width="307"><span class="style15"><input type="text" name="pubdate" class="datepicker"/></span></td>
          </tr>
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">JOURNAL</span></td>
            <td width="307"><span class="style15"><input type="text" name="journal" /></span></td>
          </tr>
          
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">VOLUME</span></td>
            <td width="307"><span class="style15"><input type="text" name="volume" /></span></td>
          </tr>
          
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">ISSUE</span></td>
            <td width="307"><span class="style15"><input type="text" name="issue" /></span></td>
          </tr>
          
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">PAGES</span></td>
            <td width="307"><span class="style15"><input type="text" name="pages" /></span></td>
          </tr>
          
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">PUBLISHER</span></td>
            <td width="307"><span class="style15"><input type="text" name="publisher" /></span></td>
          </tr>
          
          <tr>
            <td width="319" height="49" bgcolor="#000000" style="text-align:center";><span class="style15">DOI</span></td>
            <td width="307"><span class="style15"><input type="text" name="doi" /></span></td>
          </tr>
           <tr><td><br/></td></tr>
		  <tr>
            <td colspan="2" style="text-align:center";><span class="style15"> <input type="submit" name="submit" value="submit" /></span></td>
          </tr>
          
          <tr><td><br/><br/></td></tr>
        </table>
        </div>
        </form>
        <div class="clr"></div>
        </div>
    </div>
  
  
  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
  <?php include 'elements/footer.php'; ?>
</div>
</body>
</html>
<?php
}
?>