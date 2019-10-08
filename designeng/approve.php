<?php
session_start();
ob_start();
    include('../server/conn.php');
    include('../templates/header2.php');

    $q = $_GET['q'];
    $sql = "SELECT * FROM `enquiries` WHERE e_id ='$q'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
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
              <th >Visit manager or dealer?</th>
              <td ><?php echo $row["visit_manager_dealer"]  ?></td></tr>
              <tr>
              <th >Visit designer?</th>
              <td ><?php echo $row["visit_designengineer"]  ?></td></tr>
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
    



?>

         
    </table>
    <?php
$sql2 = "SELECT * FROM `department`";
$result2 = $conn->query($sql2);
?>
<?php
if ($result2->num_rows > 0) {
  ?>
        <form action="process.php" method="post">
         
<input type="text" name="acceptedby" value="1" style="display: none;"><br>
<input type="text" name="enquiry_id" value="<?php echo $q; ?>" style="display: none;"><br>
<label>Forward to</label>
<select name="forward_to" class="w3-select" required="">
  <option value="not selected">Who to forward to</option>
  <?php
    while($row = $result2->fetch_assoc()) {
        ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
          <?php
    } //enquiry_id`, `acceptedby`, `approved`, `dateadded`, `forward_to`
    ?>
    </select><br>
  <p>

    <b>Do you aprove</b> &nbsp;
  <input class="w3-radio" type="radio" name="approved" value="No" checked>
  <label>No</label>
  <input class="w3-radio" type="radio" name="approved" value="Yes">
  <label>Yes</label></p>
</p>
    <button type="submit" name="enquiry" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Submit</button>

    </form>
    <?php

}
$conn->close();
    ?>

</div> 
</div>
    </div>
