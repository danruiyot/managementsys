
<?php
 if(isset($_SESSION["error1"])){?>
<div class="w3-panel w3-yellow w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
  <h3>Warning!</h3>
  <p><?php echo $_SESSION['error1'];?></p>
</div>
<?php unset( $_SESSION['error1']); }elseif(isset($_SESSION['success'])){ ?>
<!-- success -->
<div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
  <h3>Succes!</h3>
  <p><?php echo $_SESSION['success'];?></p>
</div>
<?php
unset( $_SESSION['success']);
}else{ } ?>