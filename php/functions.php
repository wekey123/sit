<?php
function login($val,$conn){
	$email = $val['sid'];
	$pwd = $val['pwd'];
	if(isset($email) &&  isset($pwd)){
		$query = "SELECT * FROM staffreg WHERE staff_id='$email'";
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
					$_SESSION['id'] = $check['id'];
					$_SESSION['type'] = $check['type'];
					header("location: index.php");
			}
			else	
				header("location: support.php?error=1");		
		}
		else
			header("location: support.php?error=2");
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

function addstaff($val,$conn){
	@extract($val);
	$query = mysqli_query($conn,"select * from staffreg where staff_id='$staff_id' and type='Staff'");
	if(mysqli_num_rows($query) > 0){
		header("location: reg.php?error=1"); // already exists
		exit;
	}else{
		$sql1="INSERT INTO staffreg(name,qua,exp,dob,sex,mailid,contactno,location,type,staff_id)  VALUES ('$sname','$qua','$exp','$dob','$sex','$mailid','$contactno','$location','Staff','$staff_id')";
		if ($conn->query($sql1) === TRUE) {
		 header("location: regview.php?success=1");
		 exit;
		}else{
		 header("location: reg.php?error=2"); // insert Failed 
		 exit;
		}
	}
}

function addevent($val,$conn,$staff_id){
		@extract($val);
		  $sql="INSERT INTO odform(staff_id,sname,des,cate,start,end,dur,topic,clg,loc,status) VALUES ('$staff_id','$sname','$des','$cat','$start','$end','$dur','$top','$clg','$location',1)";
		if ($conn->query($sql) === TRUE) {
			header("location: odviewstaff.php?success=1");
			exit;
		}else{
			echo $conn->error; exit;
		    header("location: apply.php?error=1"); // insert Failed 
		    exit;
		}
}

function sendmail($val,$conn){
	@extract($val);
	//echo '<pre>';print_r($val);exit;
	$to1      = $to;
	$subject1 = $subject;
	$message1 = $message;
	$headers = 'From: mani1498@gmail.com' . "\r\n" .
    'Reply-To: mani1498@gmail.com' . "\r\n" .
    'X-Mailer: SIT/HOD';
	mail($to1, $subject1, $message1, $headers);
	header("location: odview.php"); // insert Failed 
		    exit;
}
?>