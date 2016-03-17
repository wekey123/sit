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
					$_SESSION['type'] = $check['type'];
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

function addstaff($val,$conn){
	@extract($val);
	$check=mysqli_fetch_array(mysqli_query($conn,"select * from staffreg where staff_id='$staff_id' and status='Staff'"));
	if(empty($check)){//echo '<pre>';print_r($conn);exit;
		$createby = $_SESSION['id'];
		 $sql="INSERT INTO staffreg(staff_id,name,qua,exp,dob,sex,mailid,contactno,location,type) 
  VALUES ('$staff_id','$name','$qua','$exp' ,'$dob' ,'$sex' ,'$mailid' ,'$contactno' ,'$location','Staff' )";
		$result = mysqli_query($conn,$sql);
		header("location: reg.php");
		exit;
	}
	else	
	header("location: reg.php");
}

function addevent($val,$conn){
		@extract($val);
		$staff_id = $_SESSION['id'];
		//echo '<pre>';print_r($conn);
		 $sql="INSERT INTO odform(staff_id,sname,des,clg,start,end,dur,topic,cate,topic,location,status) 
  VALUES ('$staff_id','$sname','$des','$clg' ,'$start' ,'$end' ,'$dur' ,'$topic' ,'$cat','$top','$location',1 )";
		$result = mysqli_query($conn,$sql);
		//print_r($result);exit;
		header("location: odviewstaff.php");
		exit;
}
?>