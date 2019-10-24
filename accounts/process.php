<?php
session_start();
ob_start();
require '../server/conn.php';
require '../server/testinput.php';

$name = test_input($_POST['department']);
$who = $_SESSION['uid'];
$created = test_input($_POST['created']);
$type = test_input($_POST['type']);
$purpose = test_input($_POST['purpose']);
$todate = test_input($_POST['todate']);
$fromdate = test_input($_POST['fromdate']);
echo $name;
$sql = "INSERT INTO `account`(`type`, `purpose`, `created`, `added_by`, `fromdate`, `todate`) VALUES ('$type','$purpose','$created','$who','$fromdate', '$todate')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] ="Task added success fully" ;
    header('location: expenditure.php');
} else {
    $_SESSION['error1'] = 'Task adding Failed';
    header('location: expenditure.php');

}

$conn->close();


?>