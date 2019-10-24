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
	<div class="w3-col s12 l3 m3">
  &nbsp;
</div>
<div class="w3-col s12 l4 m4">
<div class="w3-margin w3-white w3-card-4 w3-round-large" >

<div class="">
  <div class="w3-container w3-center">
    <h2>Activate Acount</h2>
  </div>
  <hr>
  <form class="w3-container" method="post" action="process.php">
    <p>      
    <label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" disabled required name="email" value="<?php  echo $_SESSION['email']; ?>" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Workid</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" disabled required name="work_id"value="<?php  echo $_SESSION['workid']; ?>"  type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Password</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required min-length='8' id="p2" name="pword" type="password"></p>
    <span></span>
    <p>      
    <label class="w3-text-brown"><b>Confirm Password</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required min-length='8' id="p3" name="pwordcon" type="password"></p>
   
    <input type="submit" class="w3-btn w3-block w3-green w3-round-large" name="register" value="Create account"></p>
  <br>
  </form>
</div>
</div>
</div>
</div>
</div>