<!DOCTYPE html>
<html>
<title>Engineers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="lib/images/download.png"  style="max-width: 16px; max-height: 16px;">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-bar w3-theme-l4">

<div class="w3-bar w3-theme-l2">
  
  <a href="index.php" class="w3-bar-item w3-button"> 
  <img style="max-width: 32px; max-height: 32px;" class="w3-square" src="lib/images/download.png"></a>
  <a href="index.php" class="w3-bar-item w3-button">OVERVIEW</a>

  <a class="w3-button w3-theme w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</a>
<!-- dropdown -->
<div class="w3-sidebar w3-bar-block w3-theme-l2 w3-border w3-card w3-animate-right" style="display:none;right:0;" id="rightMenu">
  <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
<div class="w3-dropdown-hover">
    <button class="w3-button">ENQUIRY COLLECTION</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="customers/customer.php" class="w3-bar-item w3-button">CUSTOMER DETAILS </a>
      <a href="designeng/all.php" class="w3-bar-item w3-button">ENQUIRIES LIST</a>
      <a href="designeng/data.php" class="w3-bar-item w3-button">DOCUMENT ATTACHMENTS</a>
    </div>
  </div>
  <div class="w3-dropdown-hover">
    <button class="w3-button">ENQ ANALYSIS</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="designeng/enq.php?type=stdenquiry" class="w3-bar-item w3-button">STD ENQUIRY</a>
      <a href="designeng/enq.php?type=nonstdenquiry" class="w3-bar-item w3-button">NON-STD ENQUIRY</a>
      <a href="designeng/enq.php?type=repair" class="w3-bar-item w3-button">REPAIR</a>
    </div>
  </div>

  <div class="w3-dropdown-hover">
    <button class="w3-button">OPERATIONS</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="employees/view.php?who=pexpert" class="w3-bar-item w3-button">PRODUCT EXPERTS</a>
      <a href="vendors/vendor.php" class="w3-bar-item w3-button">PRODUCT VENDORS</a>
      <a href="employees/view.php?who=processdesigners" class="w3-bar-item w3-button">PROCESS DESIGNERS</a>
      <a href="employees/view.php?who=3dgroup" class="w3-bar-item w3-button">3D MODELLING GROUP</a>
      <a href="employees/view.php?who=2dgroup" class="w3-bar-item w3-button">2D DRAFTSMAN</a>
      <a href="employees/view.php?who=productexpert" class="w3-bar-item w3-button">PRODUCT EXPERT GROUP</a>
      <a href="employees/view.php?who=productionexperts" class="w3-bar-item w3-button">PRODUCTION EXPERT</a>
      <a href="employees/view.php?who=qualityexpert" class="w3-bar-item w3-button">QUALITY EXPERT</a>
      <a href="employees/view.php?who=logistics" class="w3-bar-item w3-button">LOGISTIC TEAM</a>
      <a href="employees/view.php?who=service" class="w3-bar-item w3-button">SERVICE TEAM</a>
    </div>
  </div>

  <div class="w3-dropdown-hover">
    <button class="w3-button">VENDOR DEVELOPMENT</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="vendor/vendor.php" class="w3-bar-item w3-button">VENDORS </a>
      <a href="vendor/sent.php" class="w3-bar-item w3-button">SEND ENQUIRIES</a>
      <a href="vendor/followup.php" class="w3-bar-item w3-button">FOLLOWUP REMINDERS</a>
      <a href="vendor/quatation.php" class="w3-bar-item w3-button">QUOTATIONS FROM VENDORS</a>
      <a href="#" class="w3-bar-item w3-button">PD CHART</a>
    </div>
  </div>

  <a href="contactperson/contact.php" class="w3-bar-item w3-button">CONTACT PERSONS</a>

  <div class="w3-dropdown-hover">
    <button class="w3-button">ORDER EXECUTION</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">CUSTOMER ORDER CONFIRMATION</a>
      <a href="#" class="w3-bar-item w3-button">ORDER TRACKING</a>
      <a href="#" class="w3-bar-item w3-button">CUSTOMER PO</a>
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

  <div class="w3-dropdown-hover">
<button class="w3-button">TASK MANAGEMENT</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="#" class="w3-bar-item w3-button">YEARLY TASK</a>
      <a href="#" class="w3-bar-item w3-button">MONTHLY  TASK</a>
      <a href="#" class="w3-bar-item w3-button">WEEKLY TASK</a>
      <a href="#" class="w3-bar-item w3-button">DAILY TASK</a>
    </div>
  </div>
</div>
  <!--  -->
</div>
<br>
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