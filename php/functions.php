<?php
function login($val,$conn){
	$email = $val['sid'];
	$pwd = $val['pwd'];
	if(isset($email) &&  isset($pwd)){
		$query = "SELECT * FROM staffreg WHERE mailid='$email'";
		$result = $conn->query($query);
		$check = $result->fetch_array(MYSQLI_ASSOC);
		if(!empty($check)){
			if($check['dob']==$pwd){
					$_SESSION['login'] = $check['id'];
					$_SESSION['mailid'] = $check['mailid'];
					$_SESSION['name'] = $check['name'];
					$_SESSION['exp'] = $check['exp'];
					$_SESSION['sex'] = $check['sex'];
					$_SESSION['pwd'] = $check['dob'];
					if($check['type']=='staff')
					header("location: odview.php");
					else{
					header("location: odview.php");
					}
			}
			else	
				setflash("<div class='error msg'>Invalid Password.</div>,You entered an incorrect password. Please try again.");			
		}
		else
			setflash("<div class='error msg'>Invalid Email id.</div>,You are enter incorrect email address for the forgot password. So please try again.");	
	}
}

function db(){
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="od";
	$conn=new mysqli($servername,$username,$password,$dbname);
	if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
			return 'error';
	}
	return $conn;
}
function menuActive(){
	$menus=array('Dashboard'=>array('dashboard'),'About'=>array('about'),'Blog'=>array('blog'),'Reg'=>array('reg'),'Contact'=>array('contact'));
	$name=explode('/', $_SERVER['REQUEST_URI']);
	$name=str_replace('.php','',$name[2]);
	return $_SERVER['REQUEST_URI'] != '/' ? getPageName($name, $menus) : 'Dashboard';
}

function getPageName($name, $array){
	foreach($array as $key => $value){
		if(is_array($value) && in_array($name, $value))
			  return $key;
	}
	return 'Dashboard';
}
?>