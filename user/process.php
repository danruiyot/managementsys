<?php
session_start();
ob_start();
require_once('../server/conn.php');
require_once('../server/testinput.php');
    $workid = $_SESSION['workid'];
    $mail = $_SESSION['email'];
    $dept = $_SESSION['dept'];
    $email = test_input($_POST["email"]);
    $password = test_input(md5($_POST["pword"]));
    $work_id = test_input($_POST["work_id"]);
    $first_name = test_input($_POST["last"]);
    //login
    if(isset($_POST['login'])){
    $sql="SELECT * FROM `user` WHERE work_id = '$work_id' ";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row['password']==$password){
            $_SESSION["success"] ="Login succesfull";
            $_SESSION["uid"] = $row['id'];
            header('location: ../index.php');

        }else{
            $_SESSION["error1"] = "Wrong Password or email. Please retry";
            header('location: index.php');
        
    }
}
}else{
    $_SESSION["error1"] = "user does not exist. Please signup";
    header('location: index.php');
}
    }else{
        header('location: index.php');
    }
    //signup
    if(isset($_POST['register'])){
        $sql = "INSERT INTO `user`(`email`, `password`, `work_id`) VALUES ('$mail', '$password', '$workid')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["success"] = "registration was succesfull. Please login to continue";
            header('location: index.php');
        } else {
            $_SESSION["error1"] = "Error Registering. pleaseTry again later";
            header('location: signup.php');
        }



    }else{
        header('location: index.php');
    }      

if(isset($_POST['check'])){
    $sql="SELECT * FROM `users` WHERE email = '$email' LIMIT 1";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
$_SESSION['exist'] = "User already exist. please login";
}else{
    $sql2="SELECT * FROM `employee` WHERE email_id = '$email' ";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        $rowss = $result2->fetch_assoc();
            $_SESSION["email"] = $rowss['email_id'];
            $_SESSION["workid"] = $rowss['employee_id'];
            $_SESSION["dept"] = $rowss['dept'];
        header('location: new_user.php');
    }else{
    $_SESSION['error1'] = "User does not exist. please contact admin to be added";
    header('location: index.php');
    }
}
    }else{
        header('location: index.php');
    }
?>