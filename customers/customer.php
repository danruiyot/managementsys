<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
	# code...
	header('location: ../user/');
}
include_once('all.php');
?>
<?php
include_once('../templates/header2.php');
?>
<div class="w3-margin">
  <div class="w3-card-2 w3-round w3-white">
  <div class="w3-margin" ><br>
  <div id="showed">
  <h2 class="w3-center">List of all Customers</h2>
  <?php
getAll();
?>
</div>
<!-- <div class="w3-container" id="Show" style="display:none">
      <form action="../controller/process.php" method="post">
      <?php
//require('../products/new_customer.php');
?>
 </form>
 -->    </div>
  </div>
</div>
</body>
</html>
