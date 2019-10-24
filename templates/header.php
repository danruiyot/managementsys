<!DOCTYPE html>
<html>
<title>Engineers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="lib/images/download.png"  style="max-width: 16px; max-height: 16px;">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lobster">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- bootstrapp -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body class="w3-bar w3-theme-l4">

<div class="w3-bar w3-theme ">
  
  <a href="index.php" class="w3-bar-item w3-button"> 
  <img style="max-width: 32px; max-height: 32px;" class="w3-square" src="lib/images/download.png"></a>
  
<?php
//if(isset($_SESSION["uid"])){

?>
 <?php
if(isset($_SESSION["uid"])){
?>
  <div class="w3-dropdown-hover w3-right">
    <button class="w3-button">ACCOUNT</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">Change Password</a>
      <a href="user/logout.php" class="w3-bar-item w3-hover-red w3-button">Logout</a>
    </div>
  </div>

<?php
}
?>
  <a class="w3-button w3-theme w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</a>
<!-- dropdown -->
<div class="w3-sidebar w3-bar-block w3-theme-l2 w3-border w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
  <a href="customers/newcustomer.php" class="w3-bar-item w3-button">ADD CUSTOMER</a>
      <a href="customers/customer.php" class="w3-bar-item w3-button">CUSTOMER DETAILS </a>
<div class="w3-dropdown-hover">
    <button class="w3-button">ENQUIRY COLLECTION</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="designeng/all.php" class="w3-bar-item w3-button">ENQUIRIES LIST</a>
      <a href="designeng/data.php" class="w3-bar-item w3-button">DOCUMENT ATTACHMENTS</a>
    </div>
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">PRODUCT</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="allproducts/product.php" class="w3-bar-item w3-button">ADD PRODUCT</a>
      <a href="allproducts/view.php?Q=stdprod" class="w3-bar-item w3-button">STD PRODUCT</a>
      <a href="allproducts/view.php?Q=nonstandardprod" class="w3-bar-item w3-button">NON-STD PRODUCT</a>
    </div>
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">OPERATIONS</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="employees/addone.php?q=product_expert" class="w3-bar-item w3-button">PRODUCT EXPERTS</a>
      <a href="employees/addone.php?q=process_designers" class="w3-bar-item w3-button">PROCESS DESIGNERS</a>
      <a href="employees/addone.php?q=3d_Group" class="w3-bar-item w3-button">3D MODELLING GROUP</a>
      <a href="employees/addone.php?q=2d_group" class="w3-bar-item w3-button">2D DRAFTSMAN</a>
      <a href="employees/addone.php?q=product_expert" class="w3-bar-item w3-button">PRODUCT EXPERT GROUP</a>
      <a href="employees/addone.php?q=production_experts" class="w3-bar-item w3-button">PRODUCTION EXPERT</a>
      <a href="employees/addone.php?q=quality_expert" class="w3-bar-item w3-button">QUALITY EXPERT</a>
      <a href="employees/addone.php?q=logistics" class="w3-bar-item w3-button">LOGISTIC TEAM</a>
      <a href="employees/addone.php?q=service" class="w3-bar-item w3-button">SERVICE TEAM</a>
    </div>
  </div>

  <div class="w3-dropdown-hover">
    <button class="w3-button">VENDOR DEVELOPMENT</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="vendor/vendor.php" class="w3-bar-item w3-button">VENDORS </a>
      <a href="vendor/sent.php" class="w3-bar-item w3-button">SEND ENQUIRIES</a>
      <a href="vendor/followup.php" class="w3-bar-item w3-button">FOLLOWUP REMINDERS</a>
      <a href="#" class="w3-bar-item w3-button">PD CHART</a>
    </div>
  </div>

  <a href="contactperson/contact.php" class="w3-bar-item w3-button">CONTACT PERSONS</a>
  <a href="department/all.php" class="w3-bar-item w3-button">DEPARTMENT</a>

  <div class="w3-dropdown-hover">
    <button class="w3-button">ORDER EXECUTION</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <a href="designeng/enq.php?type=stdenquiry" class="w3-bar-item w3-button">STD ENQUIRY</a>
      <a href="designeng/enq.php?type=nonstdenquiry" class="w3-bar-item w3-button">NON-STD ENQUIRY</a>
      <a href="order/orders.php" class="w3-bar-item w3-button">CUSTOMER ORDER CONFIRMATION</a>
      <a href="order/orders.php" class="w3-bar-item w3-button">QUALITY INSPECTION</a>
      <a href="order/orders.php" class="w3-bar-item w3-button">QUATATION FROM PE</a>
      <a href="vendor/quatation.php" class="w3-bar-item w3-button">QUOTATIONS FROM VENDORS</a>
      <a href="vendor/quatation.php" class="w3-bar-item w3-button">QUOTATIONS FROM DESIGN ENG</a>
      <a href="order/orders.php" class="w3-bar-item w3-button">ORDER TRACKING</a>
      <a href="order/orders.php" class="w3-bar-item w3-button">CUSTOMER PO</a>
    </div>
  </div> 

  <div class="w3-dropdown-hover">
    <button class="w3-button">HUMAN RESOURCE</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="employees/all.php" class="w3-bar-item w3-button">EMPLOYEE LIST</a>
      <a href="#" class="w3-bar-item w3-button">EMPLOYEE DOCUMENTS</a>
    </div>
  </div>
  
  <div class="w3-dropdown-hover">
    <button class="w3-button">ACCOUNTS</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">CUSTOMER PAYMENTS</a>
      <a href="#" class="w3-bar-item w3-button">EMPLOYEE PAYMENTS</a>
      <a href="#" class="w3-bar-item w3-button">TAX PAYMENTS</a>
      <a href="#" class="w3-bar-item w3-button">DAILY EXPENSES</a>
    </div>
  </div>

  <div class="w3-dropdown-hover">
    <button class="w3-button">SALES & MARKETING</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">NEW CUSTOMER DEVELOPMENTS</a>
      <a href="#" class="w3-bar-item w3-button">ENQUIRY GENERATION </a>
      <a href="#" class="w3-bar-item w3-button">MARKET ANALYSIS </a>
    </div>
  </div>

      <a href="tasks/expenditure.php" class="w3-bar-item w3-button">TASK</a>
  <?php
//}else{
  ?>
  <!-- <a href="user/" class="w3-bar-item w3-right w3-theme w3-button">Login</a> -->
<?php
//}
?>
</div>
  <!--  -->
</div>
<?php
include('messages/messages.php');
?>
<script>
function openLeftMenu() {
  document.getElementById("leftMenu").style.display = "block";
}

function closeLeftMenu() {
  document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
  document.getElementById("rightMenu").style.display = "block";
}

function closeRightMenu() {
  document.getElementById("rightMenu").style.display = "none";
}
</script>
