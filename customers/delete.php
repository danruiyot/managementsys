<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
	# code...
	header('location: ../user/');
}
include_once '../server/conn.php';
$id =$_POST['c_id'];
// sql query for deleting data from database
if (isset($_POST['deletes'])) {
	# code...
	mysqli_query($conn,"DELETE FROM customers WHERE c_id='$id'" ) or die(mysqli_error());
	$_SESSION["success"] = "Deleted successfully";
header("location: all.php");

}else{
	header("location: all.php");
}


?>