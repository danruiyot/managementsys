<?php

session_start();
ob_start();
include_once '../server/conn.php';
$id =$_POST['vendor_id'];
// sql query for deleting data from database
if (isset($_POST['deletes'])) {
	# code...
	mysqli_query($conn,"DELETE FROM vendors WHERE v_id='$id'" ) or die(mysqli_error());
	$_SESSION["success"] = "Deleted successfully";
header("location: vendor.php");

}else{
	$_SESSION["error1"] = " Error occured. could not Deleted";
	header("location: vendor.php");
}


?>