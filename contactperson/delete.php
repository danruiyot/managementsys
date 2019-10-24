<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
	# code...
	header('location: user/');
}
include_once '../server/conn.php';
$id =$_POST['contact_id'];
// sql query for deleting data from database
if (isset($_POST['deletes'])) {
	# code...
	mysqli_query($conn,"DELETE FROM contactperson WHERE contact_id='$id'" ) or die(mysqli_error());
	$_SESSION["success"] = "Deleted successfully";
header("location:  contact.php");

}else{
	$_SESSION["error2"] = "Could not Delete";

	header("location: contact.php");
}


?>