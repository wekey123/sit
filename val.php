<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 


$u=$_POST['sid'];
$p=$_POST['pwd'];
$c=$_POST['cate'];

if( $c=="STAFF")
{

$servername="localhost";
$username="root";
$password="";
$dbname="od";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
  die("connection failed:".$conn->connect_error);
  }
    $result=mysqli_query($conn,"select *from staffreg where id='$u'&& dob='$p'");
  while($row=mysqli_fetch_array($result))
  {
   $a=$row['id'];
   $b=$row['dob'];
   if(($u==$a)&&($p==$b))
   {
   include("od.php");
   }
   else
   {
   include("support.php");
   }
   }
}
 elseif ($c=="ADMIN")
{ 
 $c="Admin";
   $d="Admin";
   if(($u==$c)&&($p==$d))
   {
   include("odview.php");
}
}
else
{
echo"Invalid Users";
}


?>

</body>
</html>
