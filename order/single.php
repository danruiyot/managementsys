<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');
    include('../templates/header2.php');
$q=$_GET['q'];
    $sql = "SELECT * FROM `enquiries` WHERE e_id = $q";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact">
<div><br>
   <div class="w3-center w3-theme-l2">
            <h3>Enqury approval</h3>
          </div>
          <hr>
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>
             <th>Enquiry Number</th>
              <td><?php echo $row["e_id"]  ?></td></tr>
              <tr>
              <th>Date received</th>
              <td><?php echo $row["dateadded"]  ?></td></tr>
              <tr>
              <th>Product or service</th>
              <td><?php echo $row["product_service"]  ?></td></tr>
    <?php
        }
        ?>
                     <?php
        
    } else {
        echo "";
        header('location: ../index.php');
    }
    
?>    <br>
    </table>
    <?php
$sql2 = "SELECT * FROM `department`";
$result2 = $conn->query($sql2);
?>
<?php
if ($result2->num_rows > 0) {
  ?>
        <form action="process.php" method="post">
         
<input type="text" name="enquiry_id" value="<?php echo $q; ?>" style="display: none;"><br>
<div class="w3-section">
        <label>Order Tracking By</label>
        <select name="bywho" id="">
        <option value="producteng">Product Engineer</option>
        <option value="vendor">Vendor</option>
        </select>
      </div>
<div class="w3-section">
        <label>Vendor quality instpection</label>
        <input class="w3-input w3-border" type="date" name="datedue" required>
      </div>
      <div class="w3-section">
        <label>Material Pickup and Drop request</label>
        <input class="w3-input w3-border" type="number" name="amount" required>
      </div>
      <div class="w3-section">
        <label>Vendor Service request</label>
        <input class="w3-input w3-border" type="number" name="amount" required>
      </div>

     

    <button type="submit" name="quotation" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Submit</button>

    </form>
    <?php

}
$conn->close();
    ?>

</div> 
</div>
    </div>
