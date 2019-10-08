<?php
session_start();
ob_start();
require_once('../server/conn.php');
require_once('../server/testinput.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $customer_requirements = test_input($_POST["customer_requirements"]);
    $customer_id = test_input($_POST["customer_id"]);
    $product_service = test_input($_POST["product_service"]);
    $product_service_name = test_input($_POST["product_service_name"]);
    $quantity = test_input($_POST["quantity"]);
    $datasheet = test_input($_POST["datasheet"]);
    $files = test_input($_POST["files"]);
    $visit_manager_dealer = test_input($_POST["visit_manager_dealer"]);
    $visit_designengineer = test_input($_POST["visit_designengineer"]);
    $enq_type = test_input($_POST["enq_type"]);


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

    //products

    $p_name = test_input($_POST["p_name"]);
    $category = test_input($_POST["category"]);
    $stock = test_input($_POST["stock"]);
    $pic = test_input($_POST["pic"]);
    $price = test_input($_POST["price"]);
    $description = test_input($_POST["description"]);

    //new enquiry
    if(isset($_POST['enquiry'])){
 
        $fileinfo=PATHINFO($_FILES["files"]["name"]);
        $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
        move_uploaded_file($_FILES["files"]["tmp_name"],"../lib/images/" . $newFilename);
        $images="lib/images/" . $newFilename;

        $fileinfo1=PATHINFO($_FILES["datasheet"]["name"]);
        $newFilename1=$fileinfo1['filename'] ."_". time() . "." . $fileinfo1['extension'];
        move_uploaded_file($_FILES["datasheet"]["tmp_name"],"../lib/documents/" . $newFilename1);
        $datas="lib/documents/" . $newFilename1;

        $sql = "INSERT INTO `enquiries`(`customer_requirements`, `product_service`, `product_service_name`, `quantity`, `datasheet`, `files`, `visit_manager_dealer`, `visit_designengineer`, `customer_id`, `enq_type`) VALUES ('$customer_requirements', '$product_service', '$product_service_name', '$quantity', '$datas', '$images', '$visit_manager_dealer', '$visit_designengineer', '$customer_id', '$enq_type');";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: ../designeng/all.php');
        } else {
            $_SESSION["error1"] = "Error Adding Enquiry. please Try again later";
            header('location: ../designeng/all.php');
        }



    }else{
        header('location: ../index.php');
    } 
    //adding new engineers
    if(isset($_POST['engineers'])){
        $sql = "INSERT INTO `engineers`(`engineers`, `unit_division`, `work_address`, `location`, `workpin`, `office_adress`, `office_pincode`, `contact_person`, `department`, `designation`, `email_id`, `mobile_1`, `mobile_2`, `whatsapp_no`) VALUES ('$customer_name', '$unit_division', '$work_address', '$location', '$workpin', '$office_adress', '$office_pincode', '$contact_person' , '$department' , '$designation' , '$email_id' , '$mobile_1' , '$mobile_2' , '$whatsapp_no') ;"; 
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: ../admin/');
        } else {
            $_SESSION["error1"] = "Error: " . $sql . "<br>" . $conn->error;
            header('location: ../admin/');
        }
    }else{
        header('location: ../index.php');
    }
//customers
if(isset($_POST['customer'])){
    $sql = "INSERT INTO `customers`(`customer_name`, `unit_division`, `work_address`, `location`, `workpin`, `office_adress`, `office_pincode`, `contact_person`, `department`, `designation`, `email_id`, `mobile_1`, `mobile_2`, `whatsapp_no`) VALUES ('$customer_name', '$unit_division', '$work_address', '$location', '$workpin', '$office_adress', '$office_pincode', '$contact_person' , '$department' , '$designation' , '$email_id' , '$mobile_1' , '$mobile_2' , '$whatsapp_no') ;";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION["success"] = "Added successfully";
        header('location: ../customers/all.php');
    } else {
        $_SESSION["error1"] = "Error: " . $sql . "<br>" . $conn->error;
        header('location: ../customers/all.php');
    }
}else{
    header('location: ../customers/all.php');
}


     //adding products
     if(isset($_POST['products'])){
         //image files
  
         $fileinfo=PATHINFO($_FILES["pic"]["name"]);
         $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
         move_uploaded_file($_FILES["pic"]["tmp_name"],"../lib/images/" . $newFilename);
         $location="lib/images/" . $newFilename;

        $sql = "INSERT INTO `products`(`p_name`, `category`, `stock`, `pic`, `price`, `description`) VALUES ('$p_name','$category','$stock','$location','$price','$description');"; 
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "Added successfully";
            header('location: ../admin/');
        } else {
            $_SESSION["error1"] = "Error: " . $sql . "<br>" . mysqli_error($conn);
            //"Error please try again later";
            header('location: ../admin/');
        }
    }else{
        header('location: ../index.php');
    }


}else{
    header('location: ../index.php');

}
?>