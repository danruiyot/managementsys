<?php
session_start();
ob_start();
if (isset($_SESSION["uid"])) {
	header('location: ../index.php');
	# code...
}
?>

<?php
include('../templates/header2.php');
?>
<br>
<div class="w3-row w3-margin">
<div class="w3-col s12 m4 l4">
	<div class="w3-clear-fix w3-margin w3-padding">
<div class="w3-round w3-card w3-white">
	<br>
	<p class="w3-margin">
		if You dont have an account, please contact the system admin, to be added and provide a valid email adress.
		but For demo, <br>
		Workid = 1 <br>
		password = 123
	</p>
	<br>
		</div>
	</div>
</div>
<div class="w3-col s12 m4 l4">
<div class="w3-round w3-card w3-white">
<br>
<div class="w3-center">
<h3>
Login
</h3>
<hr>
</div>
<form class="w3-container" method="post" action="process.php">
    
    <label class="w3-text-brown"><b>Work_id</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required name="work_id" type="text"></p>
    <p>      
    <label class="w3-text-brown"><b>Password</b></label>
    <input class="w3-input w3-round-large w3-border w3-sand" required min-length='8' id="p2" name="pword" type="password"></p>
    <p>
    <input type="submit" class="w3-btn w3-block w3-green w3-round"  name="login" value="Login"><br>
<a class="w3-btn w3-teal w3-right w3-round" href="signup.php">Activate Account</a></p>
<br>
<a class="w3-center" href="">forgot <b>password?</b></a>
<br>
<br>
  </form>
  </div>
</div>
</div>
</body>
</html>
