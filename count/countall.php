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
function employeeCount(){
    require('server/conn.php');
 
    $sql = "SELECT * FROM engineers";
    
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