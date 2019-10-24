<?php
session_start();
ob_start();
require '../server/conn.php';
require '../server/testinput.php';

$name = test_input($_POST['department']);
echo $name;
$sql = "INSERT INTO `department`(`name`) VALUES ('$name')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] =$sql ;
    header('location: all.php');
} else {
    $_SESSION['error1'] = "Error: " . $sql . "<br>" . $conn->error;
    header('location: all.php');

}

$conn->close();


?>