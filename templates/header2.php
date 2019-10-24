<!DOCTYPE html>
<html>
<title>Engineers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../lib/images/download.png"  style="max-width: 16px; max-height: 16px;">
<!-- W3css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lobster">

<!-- bootstrapp -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-bar w3-theme-l4">

<div class="w3-bar w3-theme">
  
<a href="../index.php" class="w3-bar-item w3-button"> 
  <img style="max-width: 32px; max-height: 32px;" class="w3-square" src="../lib/images/download.png"></a>
  

 <?php
if(isset($_SESSION["uid"])){
?>
    <a href="../user/logout.php" class="w3-bar-item w3-button w3-right w3-hover-red">Logout</a>

<?php
}
?>
    <a href="../index.php" class="w3-bar-item w3-button w3-right w3-hover-red"><span class="fa fa-home"></span> Home</a>
        </div>
      </div>
      <div class="w3-">
      <br>
      <?php
include('../messages/messages.php');
?>
      </div>
<br>