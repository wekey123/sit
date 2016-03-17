<?php require_once("php/db.php");
if(isset($_POST['addstaff'])){
	@extract($_POST);
	addstaff($_POST,$conn);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SIT | Registration</title>
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
	 <form action="" method="post">
	
      <div class="mainbar">
        <table width="638" bgcolor="#000000">
          <tr bgcolor="#000000">
            <td height="49" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style5"><em>
              <strong>
              <label><a href="regview.php">Staff List</a>              </label>
              </strong>
              <label></label>
            </em>
              <label></label>
            </span>
              <span class="style6">
              <label></label>
              </span>
              <label><div align="center" class="style5"><em><strong>STAFF REGISTRATION</strong></em></div>
              </label> </td>
          </tr>
          <tr>
            <td width="319" height="49" bgcolor="#000000"><div align="center"><span class="style15">&nbsp;
            </span></div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center"><span class="style15">STAFF ID</span></div>
              </label>            </td>
            <td width="307"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="staff_id" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">STAFF NAME</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="sname" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">QUALIFICATION</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="qua" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">EXPERIENCE</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="exp" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">D.O.B</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="dob" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">GENDER</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input name="sex" type="radio" value="Male" />
                MALE 
                <input name="sex" type="radio" value="Female" />
                FEMALE
                <input name="sex" type="radio" value="Others" />
                OTHERS</span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">MAIL ID</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="mailid" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">CONTACT NO</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center"></div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="contactno" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>
              <label><div align="center"><span class="style15">LOCATION</span></div>
            </label>              <div align="center"><span class="style15">&nbsp;</span></div></td>
            <td><div align="center">
            </div>              
              <span class="style15">
              <label>              </label>
              </span>              <label><div align="center">
                <span class="style15">
                <input type="text" name="location" />
                </span></div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" colspan="2" bgcolor="#000000">
            <div align="center">
            
              <div align="center">
                <span class="style15">
                <input type="submit"  name="addstaff" value="Register" />
                </span>
                </div>
            </div> 
            </td>
          </tr>
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
