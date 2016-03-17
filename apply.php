<?php
require_once("php/db.php");

if(isset($_POST['Submit'])){
	@extract($_POST);
	addevent($_POST,$conn);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SIT | OD FORM</title>
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
	 <form  action="" method="post"  enctype="multipart/form-data" >
	
      <div class="mainbar">
        <table width="638" bgcolor="#000000">
          <tr bgcolor="#000000">
            <td height="49" colspan="2"><span class="style5"><em>
              <strong>
              <label>              </label>
              </strong>
              <label></label>
            </em>
              <label></label>
            </span>
              <span class="style6">
              <label></label>
              </span>
              <label>
              <div align="center" class="style5"> 
                      <div align="center"><em><strong>&nbsp;&nbsp;&nbsp;&nbsp; APPLICATION </strong></em><em><strong>
                          </strong></em><em><strong>
                            </strong></em><em><strong>
                              </strong></em><em><strong>
                              </strong></em></div>
                  <em><strong>
                <label></label></strong></em></div>
              </label> </td>
          </tr>
          <tr>
            <td width="319" height="49" bgcolor="#000000" ><div align="center"><span class="style15">
            </span></div>
              <span class="style15"><label>              </label>
              </span>
              <div align="center"><strong><span class="style15">  NAME</span></strong>                <strong>
                </label>              
              </strong></div></td>
            <td width="307">
              <div align="center"><span class="style15">              </span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>              <label>
                <div align="center"><span class="style15">
                  <input type="text" name="sname" />
                </span> </div>
              </label>              </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center"><span class="style15">
            </span><span class="style15"></span><span class="style15"></span><span class="style15"></span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>
              <label>
              <div align="center"><span class="style19">DESIGNATION</span>                <strong>              </div>
              </label></td>
            <td><div align="center"><span class="style15">
            </span><span class="style15"></span><span class="style15"></span><span class="style15"></span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>              <label>
                <label>
                
                <div align="center">
                  <select name="des">
                    <option selected="selected">- - - - SELECT - - - -</option>
                    <option>Assistent Professor - PM</option>
                    <option>Assistent Professor - TM</option>
                    <option>Professor - PM</option>
                  </select>
                </div>
                </label>                <div align="center">
                  </label>                
                </div></td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                  <label> </label>
                </span>
                <label>
                <div align="center"><span class="style19">COLLEGE NAME</span></div>
                </label>
                <div align="center"><span class="style15"></span></div></td>
            <td><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                  <label> </label>
                </span>
                <label>
                <div align="center"><span class="style15">
                  <input type="text" name="clg" />
                </span> </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000">
              <div align="center"><span class="style15">              </span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>
              <label>
              <div align="center"><span class="style19">START DATE </span> </div>
              </label>              
                  <div align="center"><span class="style15"></span></div></td>
            <td>
              <div align="center"><span class="style15">              </span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>              <label>
                <div align="center"><span class="style15">
                  <input type="text" name="start" />
                </span> </div>
              </label>              </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000">                <div align="center"><span class="style15"></span></div>              <span class="style15"><label>              </label>
              </span>
                            <strong>
                            <label>
                            <div align="center"><span class="style15">END DATE </span></div>
              </label></td>
            <td>
              <div align="center"><span class="style15">              </span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>              <label>
                <div align="center"><span class="style15">
                  <input type="text" name="end" />
                </span> </div>
              </label>              </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000">                <div align="center"><span class="style15"></span></div>              <span class="style15"><label>              </label>
              </span>
                           
                            <label>
                            <div align="center"><span class="style15">DURATION </span></div>
                            </label>              
                            <div align="center"><span class="style15"></span></div></td>
            <td>
              <div align="center"><span class="style15">              </span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>              <label>
                <label>
                
                <div align="center">
                  <input type="text" name="dur" />
                </div>
                </label>                <div align="center">
                  </label>              
                </div></td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000">
              <div align="center"><span class="style15">              </span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>
              <label>
              <div align="center"><span class="style19">TITLE OF THE PROGRAM </span> </div>
              </label>              
                  <div align="center"><span class="style15"></span></div></td>
            <td>
              <div align="center"><span class="style15">              </span><span class="style15"></span><span class="style15"></span></div>
              <span class="style15"><label>              </label>
              </span>              <label>
                <div align="center"><span class="style15">
                  <input type="text" name="topic" />
                </span> </div>
              </label>              </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                  <label> </label>
                </span>
                <label>
                <div align="center"><span class="style19"> CATEGORY </span> </div>
              </label>
                <div align="center"><span class="style15"></span></div></td>
            <td><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                  <label> </label>
                </span>
                <label>
                <label>
                <div align="center">
                  <select name="cat">
                    <option>- - - - SELECT - - - -</option>
                    <option>WORK SHOP</option>
                    <option>SEMINAR</option>
                    <option>FDP</option>
                    <option>CONFERENCE</option>
                    <option>FDTP</option>
                    <option>JOURNAL</option>
                  </select>
                </div>
              </label>
                <div align="center">
                  </label>
              </div></td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                <label> </label>
                </span>
                <label>
                <div align="center"><span class="style19">TOPIC</span> </div>
                </label>
                <div align="center"><span class="style15"></span></div></td>
            <td><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                <label> </label>
                </span>
                <label>
                <div align="center"><span class="style15">
                  <input type="text" name="top" />
                </span> </div>
              </label>
            </td>
          </tr>
          <tr>
            <td height="49" bgcolor="#000000"><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                <label> </label>
                </span>
                <label>
                <div align="center"><span class="style19">LOCATION</span> </div>
              </label>
                <div align="center"><span class="style15"></span></div></td>
            <td><div align="center"><span class="style15"> </span><span class="style15"></span><span class="style15"></span></div>
                <span class="style15">
                <label> </label>
                </span>
                <label>
                <div align="center"><span class="style15">
                  <input type="text" name="location" />
                </span> </div>
              </label>            </td>
          </tr>
       
          <tr>
            <td height="49" colspan="2" bgcolor="#000000"><div align="center"><span class="style15">
                <label> 
                <div align="center"><span class="style15">
                  <input type="submit" name="Submit" value="Register" />



                  </span>
                  </label>
              </div>                <div align="center" class="style6"></div>                </td>
          </tr >
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
