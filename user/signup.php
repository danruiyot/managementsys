<?php
session_start();
ob_start();
if(isset($_SESSION["uid"])){
    header('location: ../index.php');
}
include('../templates/header2.php');
?>
  <br>
  <br>
<div class="w3-container">
<div class="w3-margin w3-white w3-card-4 w3-round-large" style="max-width:400px;">

<div class="">
  <div class="w3-container w3-center">
    <h2>Activate Acount</h2>
  </div>
  <hr>
  <form class="w3-container" method="post" action="process.php">
    <p>      
    <label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required name="email" type="email"></p>
    <p>      
    <label class="w3-text-brown"><b>Workid</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required name="workid" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Office pin</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required name="officepin" type="text"></p>
    <!-- <p>      
    <label class="w3-text-brown"><b>Password</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required min-length='8' id="p2" name="pword" type="password"></p>
    <p>      
    <label class="w3-text-brown"><b>Department</b></label>
    <input class="w3-input w3-border w3-round-large w3-sand" id="p1" required name="pword2" type="password"></p>
    <p><br> -->
    <Input type="submit" class="w3-btn w3-block w3-green w3-round-large" name="check" value="Check account"></p>
  <br>
  </form>
</div>
</div>
</div>
</div>