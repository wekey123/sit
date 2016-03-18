<?php require_once("php/db.php");
if(isset($_POST['Submit'])){
	@extract($_POST);
	sendmail($_POST,$conn);
}
?>
