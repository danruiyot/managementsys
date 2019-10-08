<?php
session_start();
ob_start();
include_once('controller/order.php');
?>
<?php
include_once('templates/header.php');
?>
<br>
<br>
<div class="w3-margin">
  <div style="max-width:500px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
      <form action="" method="post">

<?php
getAll();
include_once('products/new_order.php');
?>
 </form>
    </div>
  </div>
</div>
</body>
</html>
