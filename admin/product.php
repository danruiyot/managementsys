<?php
      include_once('../templates/header2.php');
      ?>
<div class="w3-margin">
  <div style="max-width:500px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
      <form action="../controller/process.php" enctype="multipart/form-data" method="post">

      <?php
      include_once('../products/add.php');
      ?>
      </form>
    </div>
  </div>
</div>


</body>
</html>
