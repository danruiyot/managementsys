<?php
session_start();
ob_start();
include_once('../products/new_user.php');

include_once('../templates/header2.php');
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
$q=$_GET['q'];
?>

<br>
<div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" >
<div class="w3-container" id="Show">
      <form action="process.php" method="post">
<div class="w3-section">
<div class="w3-center w3-theme-l4">
<h3>New Employee</h3>
</div>
<hr>
            <div class="w3-section">
        <label>Employee Name</label>
        <input class="w3-input w3-border" type="text" name="employee_name" required>
      </div>
      <div class="w3-section">
        <label>Address</label>
        <input class="w3-input w3-border" type="text" name="address" required>
      </div>
      <div class="w3-section">
        <label>Pin Code</label>
        <input class="w3-input w3-border" type="text" name="pincode" required>
      </div>
       <div class="w3-section">
        <label>Department</label>
        <input class="w3-input w3-border" type="text" name="dept" disabled value="<?php echo $q; ?>">
      </div>
      
      <div class="w3-section">
        <label>Current Designation</label>
        <input class="w3-input w3-border" type="text" name="current_desi" required>
      </div>

      <div class="w3-section">
        <label>Work Profile</label>
        <input class="w3-input w3-border" type="text" name="workpprof" required>
      </div>
      <div class="w3-section">
        <label>Email Id</label>
        <input class="w3-input w3-border" type="text" name="email_id" required>
      </div>
      <div class="w3-section">
        <label>Mobile 1</label>
        <input class="w3-input w3-border" type="text" name="mobile_1" required>
      </div>
      <div class="w3-section">
        <label>Mobile 2</label>
        <input class="w3-input w3-border" type="tel" name="mobile_2" required>
      </div>
      <div class="w3-section">
        <label>Whatsapp Number</label>
        <input class="w3-input w3-border" type="tel" name="whatsapp_no" required>
      </div>
      <div class="w3-section">
        <label>Current Experience (Activity)</label>
        <input class="w3-input w3-border" type="text" name="current_ex" required>
      </div>
      <div class="w3-section">
        <label>Past Experirence</label>
        <input class="w3-input w3-border" type="text" name="past_ex" required>
      </div>

      <button type="submit" name="engineers" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Save details</button>
 </form>
    </div>
    </div>
  </div>
</div>