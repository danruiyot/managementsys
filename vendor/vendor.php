<?php
session_start();
ob_start();

include_once('all.php');
?>
<?php
include_once('../templates/header2.php');
include_once '../contactperson/dropdown.php';
?>
<div class="w3-margin">
  <div class="w3-card-2 w3-round w3-white">
  <div class="w3-margin" ><br>
<a href="new.php" onclick="document.getElementById('Show').style.display='block';document.getElementById('showed').style.display='none'" class="w3-green w3-btn w3-round w3-block" id="add">Add new Vendor</a>
<br>
</div>
  <div id="showed">
  <?php
getAll();
?>
</div>

  </div>
  </div>
</div>
</body>
</html>
