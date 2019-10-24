<?php 
session_start();
ob_start();
include '../server/conn.php';
include '../server/testinput.php';
    //$new_id = test_input($_POST["new_id"]);
// engineers
    $customer_name = test_input($_POST["customer_name"]);
    $unit_division = test_input($_POST["unit_division"]);
    $work_address = test_input($_POST["work_address"]);
    $location = test_input($_POST["location"]);
    $workpin = test_input($_POST["workpin"]);
    $office_adress = test_input($_POST["office_adress"]);
    $office_pincode = test_input($_POST["office_pincode"]);
    $contact_person = test_input($_POST["contact_person"]);
    $department = test_input($_POST["department"]);
    $designation = test_input($_POST["designation"]);
    $email_id = test_input($_POST["email_id"]);
    $mobile_1 = test_input($_POST["mobile_1"]);
    $mobile_2 = test_input($_POST["mobile_2"]);
    $whatsapp_no = test_input($_POST["whatsapp_no"]);

    $convo  = test_input($_POST["convo"]);
    $customer_id  = test_input($_POST["customer_id"]);
 
   if(isset($_POST['engineers'])){
        $sql = "INSERT INTO customer(`customer_name`, `unit_division`, `work_address`, `location`, `workpin`, `office_adress`, `office_pincode`, `contact_person`, `department`, `designation`, `email_id`, `mobile_1`, `mobile_2`, `whatsapp_no`) VALUES ('$customer_name', '$unit_division', '$work_address', '$location', '$workpin', '$office_adress', '$office_pincode', '$contact_person' , '$department' , '$designation' , '$email_id' , '$mobile_1' , '$mobile_2' , '$whatsapp_no') ;"; 
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: customer.php');
        } else {
            $_SESSION["error1"] = "Error please try again later";
            header('location: customer.php');
        }



    }else{
        header('location: customer.php');
    }
    
    if(isset($_POST['conversation'])){
        $sql = "INSERT INTO `conversations`(`customer_id`, `enquiry_id`, `convo`) VALUES ('$customer_id', '$enquiry_id', '$convo') ;"; 
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: customer.php');
        } else {
            $_SESSION["error1"] = "Error please try again later";
            header('location: customer.php');
        }



    }else{
        header('location: customer.php');
    }

 ?>