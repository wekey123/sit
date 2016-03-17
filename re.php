<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="od";
$a=$_POST['id'];
$b=$_POST['sname'];
$c=$_POST['qua'];
$d=$_POST['exp'];
$e=$_POST['dob'];
$f=$_POST['sex'];
$g=$_POST['mailid'];
$h=$_POST['contactno'];
$i=$_POST['location'];


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
  }
  $sql="INSERT INTO staffreg(id,name,qua,exp,dob,sex,mailid,contactno,location) 
  VALUES ('$a','$b','$c','$d' ,'$e' ,'$f' ,'$g' ,'$h' ,'$i' )";
  
  if(mysqli_query($conn,$sql)){
    echo"new record is success";
		
	}else{
	echo"not inserted";
	}
	
	
	
	?>
<body>
</body>
</html>
