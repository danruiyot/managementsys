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
<div class="w3-row">
<div class="w3-hide-small w3-hide-medium w3-col s12 m4 l4">
  &nbsp;
</div>
<div class="w3-col s12 m8 l4">

<div class="w3-margin w3-white w3-card-4 w3-round-large" >

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
    <input type="submit" class="w3-btn w3-block w3-green w3-round-large" name="check" value="Check account"></p>
  <br>
  </form>
</div>
</div>
</div>
</div>