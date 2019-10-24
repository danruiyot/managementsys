<?php
function customerCount(){
   require('server/conn.php');

   $sql = "SELECT * FROM customers";
   
   if ($result = mysqli_query($conn,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf($rowcount);
      mysqli_free_result($result);
   }
}
function employeeCount($table){
    require('server/conn.php');
 
    $sql = "SELECT * FROM $table";
    
    if ($result = mysqli_query($conn,$sql)){
       $rowcount = mysqli_num_rows($result);
       
       printf($rowcount);
       mysqli_free_result($result);
    }
 }
 function productCount(){
    require('server/conn.php');
 
    $sql = "SELECT * FROM products";
    
    if ($result = mysqli_query($conn,$sql)){
       $rowcount = mysqli_num_rows($result);
       
       printf($rowcount);
       mysqli_free_result($result);
    }
 }
 function enquiriesCount(){
    require('server/conn.php');
 
    $sql = "SELECT * FROM enquiries";
    
    if ($result = mysqli_query($conn,$sql)){
       $rowcount = mysqli_num_rows($result);
       
       printf($rowcount);
       mysqli_free_result($result);
    }
 }
?>