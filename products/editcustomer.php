<div class="w3-section">
<div class="w3-center w3-theme-l4">
<h3>New Customer</h3>
</div>
<hr>
<div class="w3-col s12 l7 m7">
            <div class="w3-section">
              <input type="text" hidden="" name="customer_id" value="<?php echo $row['c_id']; ?>">
        <label>Customer Name</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['customer_name']; ?>" name="customer_name" required>
      </div>
      <div class="w3-section">
        <label>Unit Division Location</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['unit_division']; ?>" name="unit_division" required>
      </div>
      <div class="w3-section">
        <label>Location</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['location']; ?>" name="location" required>
      </div>
      <div class="w3-section">
        <label>Work address</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['work_address']; ?>" name="work_address" required>
      </div>
      <div class="w3-section">
        <label>Work Add (PIN code)</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['workpin']; ?>" name="workpin" required>
      </div>
      <div class="w3-section">
        <label>Office adress</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['office_adress']; ?>" name="office_adress" required>
      </div>
      <div class="w3-section">
        <label>Office PIN Code</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['office_pincode']; ?>" name="office_pincode" required>
      </div>

      <div class="w3-section">
        <label>Department</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['department']; ?>" name="department" required>
      </div>
      <div class="w3-section">
        <label>designation</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['designation']; ?>" name="designation" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="email" value="<?php echo $row['email_id']; ?>" name="email_id" required>
      </div>
      <div class="w3-section">
        <label>Mobile number</label>
        <input class="w3-input w3-border" type="tel" value="<?php echo $row['mobile_1']; ?>" name="mobile_1" required>
      </div>
      <div class="w3-section">
        <label>Mobile number 2</label>
        <input class="w3-input w3-border" value="<?php echo $row['mobile_2']; ?>" type="tel" name="mobile_2" >
      </div>
      <div class="w3-section">
        <label>Whatsapp Number</label>
        <input class="w3-input w3-border" value="<?php echo $row['whatsapp_no']; ?>" type="text" name="whatsapp_no" required>
      </div>
    </div>
      

      <div class="w3-col s12 l4 m4 w3-margin w3-padding">
      <div class="w3-section">
        <?php
contactOption();
?>
      </div>
      </div>

      <button type="submit" name="customeredit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom">Save details</button>
