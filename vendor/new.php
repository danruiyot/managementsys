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
<a href="vendor.php"  class="w3-green w3-btn w3-round w3-block" id="add">Vendor list</a>
<br>
</div>
<div class="w3-container" id="Show">
<div class="w3-row">
      <form action="process.php" method="post">
  
<div class="w3-section">
<div class="w3-center w3-theme-l4">
<h3>New Vendor</h3>
</div>
<hr>
    <div class="w3-col s12 l7 m7 w3-margin">

            <div class="w3-section">
        <label>vendor Name</label>
        <input class="w3-input w3-border" type="text" name="vendor_name" required>
      </div>
      <div class="w3-section">
        <label>Address</label>
        <input class="w3-input w3-border" type="text" name="address" required>
      </div>
      <div class="w3-section">
        <label>Operations Area</label>
        <input class="w3-input w3-border" type="text" name="ops_area" required>
      </div>
      <div class="w3-section">
        <label>Email 1</label>
        <input class="w3-input w3-border" type="text" name="mail1" required>
      </div>
      <div class="w3-section">
        <label>Email 2</label>
        <input class="w3-input w3-border" type="text" name="mail2" required>
      </div>
      <div class="w3-section">
        <label>Mobile 1</label>
        <input class="w3-input w3-border" type="text" name="mobile1" required>
      </div>
      <div class="w3-section">
        <label>Mobile 2</label>
        <input class="w3-input w3-border" type="text" name="mobile2" required>
      </div>
      <div class="w3-section">
        <label>Whatsapp Number</label>
        <input class="w3-input w3-border" type="text" name="whatsapp_no" required>
      </div>
    </div>
    <div class="w3-col s12 l4 m4 w3-margin w3-padding">
        <div class="w3-section">
            <?php
            contactOption();
            ?>
        </div>
    </div>
      <button type="submit" name="vendor" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Save details</button>

 </form>
</div>
    </div>
  </div>
  </div>
</div>
</body>
</html>

