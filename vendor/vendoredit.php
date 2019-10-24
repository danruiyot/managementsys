
<div class="w3-margin">
  <div class="w3-card-2 w3-round w3-white">

<div class="w3-container" id="Show">
<div class="w3-row">
      <form action="process.php" method="post">
  
<div class="w3-section">
<div class="w3-center w3-theme-l4">
<h3> Vendor Edit</h3>
</div>
<hr>
    <div class="w3-col s12 l7 m7 w3-margin">

            <div class="w3-section">
        <label>vendor Name</label>
        <input class="w3-input w3-border" hidden="" type="text" value="<?php echo $row['v_id']; ?>" name="v_id" required>

        <input class="w3-input w3-border" type="text" value="<?php echo $row['vendor_name']; ?>" name="vendor_name" required>
      </div>
      <div class="w3-section">
        <label>Address</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['address']; ?>" name="address" required>
      </div>
      <div class="w3-section">
        <label>Operations Area</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['ops_area']; ?>" name="ops_area" required>
      </div>
      <div class="w3-section">
        <label>Email 1</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['mail1']; ?>" name="mail1" required>
      </div>
      <div class="w3-section">
        <label>Email 2</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['mail2']; ?>" name="mail2" >
      </div>
      <div class="w3-section">
        <label>Mobile 1</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['mobile1']; ?>" name="mobile1" required>
      </div>
      <div class="w3-section">
        <label>Mobile 2</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['mobile2']; ?>" name="mobile2" required>
      </div>
      <div class="w3-section">
        <label>Whatsapp Number</label>
        <input class="w3-input w3-border" type="text" value="<?php echo $row['whatsapp_no']; ?>" name="whatsapp_no" required>
      </div>
    </div>
    <div class="w3-col s12 l4 m4 w3-margin w3-padding">
        <div class="w3-section">
            <?php
            contactOption();
            ?>
        </div>
    </div>
      <button type="submit" name="vendoredit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Update details</button>

 </form>
</div>
    </div>
  </div>
  </div>
</div>
</body>
</html>

