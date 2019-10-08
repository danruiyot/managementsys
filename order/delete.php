<?php
session_start();
ob_start();
include_once '../conn/conn.php';
$id =$_POST['id'];
// sql query for deleting data from database
if (isset($_POST['deletes'])) {
	# code...
	mysqli_query($conn,"DELETE FROM results WHERE id='$id'" ) or die(mysqli_error());
	$_SESSION["success"] = "Deleted successfully";
header("location: edit.php");

}else{
	header("location: all.php");
}


?>