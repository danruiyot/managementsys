<?php 
session_start();
ob_start();

include '../server/conn.php';
include '../server/testinput.php';
    //$new_id = test_input($_POST["new_id"]);
// engineers
    $vendor_name = test_input($_POST["vendor_name"]);
    $address = test_input($_POST["address"]);
    $ops_area = test_input($_POST["ops_area"]);
    $mail1 = test_input($_POST["mail1"]);
    $mail2 = test_input($_POST["mail2"]);
    $mobile1 = test_input($_POST["mobile1"]);
    $mobile2 = test_input($_POST["mobile2"]);
    $product = test_input($_POST["product"]);
    $whatsapp_no = test_input($_POST["whatsapp_no"]);
    $contact_person = implode(",",$_POST["contact_person"]);


    $vendorid = test_input($_POST["v_id"]);
    $amount = test_input($_POST["amount"]);
    $enquiry_id = test_input($_POST["enquiry_id"]);
    $status = test_input($_POST["status"]);
    $date_due = test_input($_POST["date_due"]);
    $reminders = test_input($_POST["reminders"]);
    $status = test_input($_POST["status"]);
    
    $convo = test_input($_POST["status"]);
   
   if(isset($_POST['vendor'])){
        $sql = "INSERT INTO `vendors`(`vendor_name`, `address`, `ops_area`, `mail1`, `mail2`, `mobile1`, `mobile2`, `whatsapp_no`, `product`,`contact_person`) VALUES ('$vendor_name', '$address', '$ops_area', '$mail1', '$mail2', '$mobile1', '$mobile2' , '$whatsapp_no' , '$product', '$contact_person') ;";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: vendor.php');
        } else {
            $_SESSION["error1"] = "Error: " ;
            header('location: vendor.php');
        }



    }else{
        header('location: ../index.php');
    }

    if(isset($_POST['vendoredit'])){
        $sql = "UPDATE `vendors` SET `vendor_name`='$vendor_name',`address`='$address',`mail2`='$mail2',`ops_area`='$ops_area',`mail1`='mail1',`mobile1`='$mobile1',`mobile2`='$mobile2', `whatsapp_no`='$whatsapp_no',`contact_person`='$contact_person' WHERE v_id= '$vendorid';";

        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Update successfully";
            header('location: vendor.php');
        } else {
            $_SESSION["error1"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            header('location: vendor.php');
        }



    }else{
        header('location: ../index.php');
    }





    

    if(isset($_POST['single'])){
        $sql = "INSERT INTO `quatation`( `amount`, `enquiry_id`, `status`, `date_due`, `reminders`) VALUES ('$amount', '$enquiry_id', '$status', '$date_due', '$reminders') ;"; 
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: quatation.php');
        } else {
            $_SESSION["error1"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            header('location: quatation.php');
        }
        }else{
            header('location: ../index.php');
        }

        if(isset($_POST['quotation'])){
            $sql = "INSERT INTO `conversations`(`enquiry_id`, `convo`)  VALUES ('$enquiry_id', '$convo') ;"; 
            
            if ($conn->query($sql) === TRUE) {
                $_SESSION["success"] = "Added successfully";
                header('location: quatation.php');
            } else {
                $_SESSION["error1"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
                header('location: quatation.php');
            }
            }else{
                header('location: ../index.php');
            }
 ?>