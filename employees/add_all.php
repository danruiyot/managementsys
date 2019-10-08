<?php
session_start();
ob_start();
include_once('../products/new_user.php');
?>
<?php
include_once('../templates/header2.php');
?>
<br>

<div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
	<button onclick="document.getElementById('Show').style.display='block';document.getElementById('showed').style.display='none'" class="w3-green w3-btn w3-round w3-block" id="add">Add new Customer</button>
<br>
<div class="w3-container" id="Show" style="display:none">
      <form action="../controller/process.php" method="post">
      <?php
newCustomer();
?>
 </form>
    </div>
    </div>
  </div>
</div>