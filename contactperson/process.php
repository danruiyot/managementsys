<?php 
session_start();
ob_start();
include '../server/conn.php';
include '../server/testinput.php';
    //$new_id = test_input($_POST["new_id"]);
// engineers
    $contact_name = test_input($_POST["contact_name"]);
    $designation = test_input($_POST["designation"]);
    $address = test_input($_POST["address"]);
    $ops_area = test_input($_POST["ops_area"]);
    $mail1 = test_input($_POST["mail1"]);
    $mail2 = test_input($_POST["mail2"]);
    $mobile1 = test_input($_POST["mobile1"]);
    $mobile2 = test_input($_POST["mobile2"]);
    $whatsapp_no = test_input($_POST["whatsapp_no"]);
   
   if(isset($_POST['contact'])){
        $sql = "INSERT INTO `contactperson`(`contact_name`, `designation`, `address`, `ops_area`, `mail1`, `mail2`, `mobile1`, `mobile2`, `whatsapp_no`) VALUES ('$contact_name', '$designation', '$address', '$ops_area', '$mail1', '$mail2', '$mobile1', '$mobile2' , '$whatsapp_no')"; 
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: contact.php');
        } else {
            $_SESSION["error1"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            header('location: contact.php');
        }



    }else{
        header('location: ../index.php');
    }
 ?>