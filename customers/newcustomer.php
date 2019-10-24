<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
?>
<?php
include_once('../templates/header2.php');
?>
<div class="w3-margin">
  <div class="w3-card-2 w3-round w3-white">
  <div class="w3-margin" ><br>
    <div id="showed">
  <?php
include_once('../contactperson/dropdown.php');
  
?>
</div>
<div class="w3-container">
<div class="w3-row">
      <form action="../controller/process.php" method="post">
      <?php
require('../products/new_customer.php');
?>
 </form>
</div>
 </div>
  </div>
</div>
</div>
</body>
</html>
