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
					if($check['type']=='Staff')
					header("location: odviewstaff.php");
					else{
					header("location: odview.php");
					}
			}
			else	
				header("location: support.php");		
		}
		else
			header("location: support.php");
	}
}
?>