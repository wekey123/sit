<?php
include("db.php");
if(!empty($_POST['submit'])){
	$file_ary = reArrayFiles($_FILES['filesToUpload']);
	$flag = 1;
	$a="'".$_POST['title']."'";
    $b="'".$_POST['description']."'";
	$c=$_POST['staffid'];
    $d=$_POST['eventid'];
    foreach ($file_ary as $file) {
		if(move_uploaded_file($file['tmp_name'],'upload/'.$file['name'])){
			$flag = 1;
			$filename = "'".$file['name']."'";
			$sql = "INSERT INTO upload (staff_id, od_id, title,description,filename,created) VALUES ($c, $d, $a,$b,$filename,'2016-06-17 15:04:57')";
			if ($conn->query($sql) === TRUE) {
				$flag = 1;
			} else {
				$flag = 2;
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else{
			$flag = 2;
		}
    }
	if($flag == 1) echo "Upload Successfully"; else echo "Upload Failure";
	$conn->close();
}else{
?>
    
<!-- IMPORTANT:  FORM's enctype must be "multipart/form-data" -->
<form method="post" action="#" enctype="multipart/form-data">
<label>Title</label><input name="title" id="title" type="text"  placeholder="Event Title"/> <br/>
<label>Tell about Events</label><textarea cols="30" rows="5" name="description" placeholder="Tell about Events"></textarea> <br/>
<input type="hidden" name="eventid" value="<?php echo !empty($_GET['eventid']) ? $_GET['eventid'] : '' ?>" />
<input type="hidden" name="staffid" value="1" />
<input name="filesToUpload[]" id="filesToUpload" type="file" multiple /> <br/>
<input type="submit" value="submit" name="submit" /> <br/>
</form>
<?php
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

?>