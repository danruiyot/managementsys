<?php
session_start();
ob_start();
include_once('../products/new_user.php');
?>
<?php
include_once('../templates/header2.php');
?>
<br>
<br>
<div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
      <form action="../controller/process.php" method="post">

<?php
newCustomer();
?>
 </form>
    </div>
  </div>
</div>
</body>
</html>
