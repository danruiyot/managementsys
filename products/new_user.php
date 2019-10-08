<?php
function newCustomer() {
    ?>
<div class="w3-section">
<div class="w3-center w3-theme-l4">
<h3>New Employee</h3>
</div>
<hr>
            <div class="w3-section">
        <label>Employee Name</label>
        <input class="w3-input w3-border" type="text" name="customer_name" required>
      </div>
      <div class="w3-section">
        <label>Unit Division Location</label>
        <input class="w3-input w3-border" type="text" name="unit_division" required>
      </div>
      <div class="w3-section">
        <label>Location</label>
        <input class="w3-input w3-border" type="text" name="location" required>
      </div>
      <div class="w3-section">
        <label>Work address</label>
        <input class="w3-input w3-border" type="text" name="work_address" required>
      </div>
      <div class="w3-section">
        <label>Work Add (PIN code)</label>
        <input class="w3-input w3-border" type="text" name="workpin" required>
      </div>
      <div class="w3-section">
        <label>Office adress</label>
        <input class="w3-input w3-border" type="text" name="office_adress" required>
      </div>
      <div class="w3-section">
        <label>Office PIN Code</label>
        <input class="w3-input w3-border" type="text" name="office_pincode" required>
      </div>
      <div class="w3-section">
        <label>Contact Person</label>
        <input class="w3-input w3-border" type="text" name="contact_person" required>
      </div>
      <div class="w3-section">
        <label>Department</label>
<select class="w3-select" name="department">
  <option value="" disabled selected>Choose your option</option>
 <option value="pexpert">Product Expert</option>
<option value="pvendors">Product Vendor</option>
<option value="processdesigners">Process Designer</option>
<option value="3dgroup">3D design Group</option>
<option value="2dgroup">2D Design Group</option>
<option value="productexpert">Product Expert</option>
<option value="productionexperts">Production Expert</option>
<option value="qualityexpert">Quality Expert Team</option>
<option value="logistics">Logidtics Team</option>
<option value="service">Service Team</option>
</select>
      </div>
      <div class="w3-section">
        <label>designation</label>
        <input class="w3-input w3-border" type="text" name="designation" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" name="email_id" required>
      </div>
      <div class="w3-section">
        <label>Mobile number</label>
        <input class="w3-input w3-border" type="tel" name="mobile_1" required>
      </div>
      <div class="w3-section">
        <label>Mobile number 2</label>
        <input class="w3-input w3-border" type="tel" name="mobile_2" >
      </div>
      <div class="w3-section">
        <label>Whatsapp Number</label>
        <input class="w3-input w3-border" type="text" name="whatsapp_no" required>
      </div>



      <button type="submit" name="engineers" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Save details</button>
    <?php
}
?>