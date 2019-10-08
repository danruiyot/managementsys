<?php
session_start();
ob_start();
include_once('all.php');
?>
<?php
include_once('../templates/header2.php');
?>
<div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
  <div class="w3-margin" ><br>
<button onclick="document.getElementById('Show').style.display='block';document.getElementById('showed').style.display='none'" class="w3-green w3-btn w3-round w3-block" id="add">Add new Vendor</button>
<br>
</div>
  <div id="showed">
  <?php
getAll();
?>
</div>
<div class="w3-container" id="Show" style="display:none">
      <form action="process.php" method="post">
      <?php
require('new.php');
?>
 </form>
    </div>
  </div>
</div>
</body>
</html>
