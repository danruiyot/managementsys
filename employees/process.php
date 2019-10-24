<?php 
session_start();
ob_start();
include '../server/conn.php';
include '../server/testinput.php';
    //$new_id = test_input($_POST["new_id"]);
// // engineers
//     $customer_name = test_input($_POST["customer_name"]);
//     $unit_division = test_input($_POST["unit_division"]);
//     $work_address = test_input($_POST["work_address"]);
//     $location = test_input($_POST["location"]);
//     $workpin = test_input($_POST["workpin"]);
//     $office_adress = test_input($_POST["office_adress"]);
//     $office_pincode = test_input($_POST["office_pincode"]);
//     $contact_person = test_input($_POST["contact_person"]);
//     $department = test_input($_POST["department"]);
//     $designation = test_input($_POST["designation"]);
//     $email_id = test_input($_POST["email_id"]);
//     $mobile_1 = test_input($_POST["mobile_1"]);
//     $mobile_2 = test_input($_POST["mobile_2"]);
//     $whatsapp_no = test_input($_POST["whatsapp_no"]);

$employee_name = test_input($_POST["employee_name"]);
$address = test_input($_POST["address"]);
$pincode = test_input($_POST["pincode"]);
$current_desi = test_input($_POST["current_desi"]);
$workpprof = test_input($_POST["workpprof"]);
$email_id = test_input($_POST["email_id"]);
$dept = test_input($_POST["dept"]);
$mobile_1 = test_input($_POST["mobile_1"]);
$mobile_2 = test_input($_POST["mobile_2"]);
$whatsapp_no = test_input($_POST["whatsapp_no"]);
$current_ex = test_input($_POST["current_ex"]);
$past_ex = test_input($_POST["past_ex"]);

   if(isset($_POST['engineers'])){
        $sql = "INSERT INTO employee(`employee_name`, `address`, `pincode`, `current_desi`, `workpprof`, `email_id`, `current_ex`, `past_ex`, `mobile_1`, `mobile_2`, `whatsapp_no`, `dept`) VALUES ('$employee_name', '$address','$pincode','$current_desi','$workpprof','$email_id', '$current_ex', '$past_ex', '$mobile_1','$mobile_2' , '$whatsapp_no', '$dept');"; 
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added Employee successfully";
            //header('location: all.php');
            header('location: all.php');
            
        } else {
            $_SESSION["error1"] = "Error Employee please try again later";
            header('location: all.php');
        }



    }else{
        header('location: ../index.php');
    }
 ?>