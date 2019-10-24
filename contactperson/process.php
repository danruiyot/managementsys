<?php 
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
    # code...
    header('location: user/');
}
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
    $mobile3 = test_input($_POST["mobile3"]);
    $mobile4 = test_input($_POST["mobile4"]);
    $contact_id = test_input($_POST["contactid"]);


$whatsapp_no = test_input($_POST["whatsapp_no"]);
$contactperson_id = test_input($_POST["contactperson_id"]);

   
   if(isset($_POST['contact'])){
        $sql = "INSERT INTO `contactperson`(`contact_name`, `designation`, `address`, `ops_area`, `mail1`, `mail2`, `mobile1`, `mobile2`, `whatsapp_no`,`contactperson_id`) VALUES ('$contact_name', '$designation', '$address', '$ops_area', '$mail1', '$mail2', '$mobile1', '$mobile2' , '$whatsapp_no','$contactperson_id')";
        
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
if(isset($_POST['contactedit'])){
        $sql = "UPDATE `contactperson` SET`contact_name`='$contact_name',`designation`='$designation',`address`='$address',`ops_area`='$ops_area',`mail1`='$mail1',`mail2`='$mail2', `mobile1`='$mobile1',`mobile2`='$mobile2',`mobile3`='$mobile3',`mobile4`='$mobile4',`whatsapp_no`='$whatsapp_no' WHERE contact_id = '$contact_id'";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "UPDATED successfully";
            header('location: contact.php');
        } else {
            $_SESSION["error1"] = "ERROR WHILE UPDATING";
            header('location: contact.php');
        }



    }else{
        header('location: ../index.php');
    }

 ?>