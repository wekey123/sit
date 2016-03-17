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



function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);
    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

 function checkSession($params = null){
	 if(empty($_SESSION['name']) &&  empty($_SESSION['pwd'])){
		header('location:logout.php'); exit;
	}
 }

?>