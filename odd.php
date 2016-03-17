<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php

$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
$a=$_POST['sname'];
$b=$_POST['des'];
$c=$_POST['cat'];
$d=$_POST['start'];
$e=$_POST['end'];
$f=$_POST['dur'];
$g=$_POST['topic'];
$h=$_POST['clg'];
$i=$_POST['location'];
 
    $con = mysqli_connect('localhost','root','','od') or die('Unable To connect');
   $stmt = mysqli_prepare($con, "INSERT INTO odform(sname,des,cate,start,end,dur,topic,clg,loc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
           mysqli_stmt_bind_param($stmt, "sssssssss",$a,$b,$c,$d ,$e ,$f ,$g ,$h ,$i);
            mysqli_stmt_execute($stmt);
 
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'new record is success';
		
    }else{
        $msg = 'Could not Insert';
		
    }
    mysqli_close($con);
}

    echo $msg;
include("od.php");

   
	
	?>
<body>
</body>
</html>
