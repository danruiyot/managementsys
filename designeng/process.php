<?php 
session_start();
ob_start();
include '../server/conn.php';
include '../server/testinput.php';
    //$new_id = test_input($_POST["new_id"]);
    $enquiry_id = test_input($_POST["enquiry_id"]);
    $acceptedby = test_input($_POST["acceptedby"]);
    $approved = test_input($_POST["approved"]);
    $forward_to = test_input($_POST["forward_to"]);

    $customer_id = test_input($_POST["customer_id"]);
    $convo = test_input($_POST["convo"]);
  

    //new enquiry
    //`new_id`, `enquiry_id`, `acceptedby`, `approved`, `dateadded`, `forward_to`
    if(isset($_POST['enquiry'])){
        $sql = "INSERT INTO `enquiryengineers`(`enquiry_id`, `acceptedby`, `approved`, `forward_to`)  VALUES ('$enquiry_id', '$acceptedby', '$approved', '$forward_to')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
           header('location: ../index.php');
        } else {
            $_SESSION["error1"] = "Error Adding Enquiry. please Try again later";
            header('location: ../index.php');
        }



    }else{
        header('location: ../index.php');
    }

    if(isset($_POST['conversation'])){
        $sql = "INSERT INTO `conversations`(`customer_id`, `enquiry_id`, `convo`) VALUES ('$customer_id', '$enquiry_id', '$convo') ;"; 
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: all.php');
        } else {
            $_SESSION["error1"] = "Error please try again later";
            header('location: all.php');
        }



    }else{
        header('location: all.php');
    }
 ?>