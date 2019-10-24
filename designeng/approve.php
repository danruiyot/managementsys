<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');
    include('../templates/header2.php');
    include('convo.php');

    $q = $_GET['q'];
    $sql = "SELECT * FROM `enquiries` WHERE e_id ='$q'";
    $ReadSql = "SELECT * FROM `enquiries` WHERE e_id ='$q'";
    $result = $conn->query($sql);
    $res = mysqli_query($conn, $ReadSql);

    $r = mysqli_fetch_assoc($res);
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
<div class=" w3-row ">
  <div style="max-width:800px;" class=" w3-margin w3-col l9 m9 s9 w3-card-2 w3-round w3-white">
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
              <th >Visit manager or dealer?</th>
              <td ><?php echo $row["visit_manager_dealer"]  ?></td></tr>
              <tr>
              <th >Visit designer?</th>
              <td ><?php echo $row["visit_designengineer"]  ?></td></tr>
              <tr>
              <th>Date received</th>
              <td><?php echo $row["dateadded"]  ?></td></tr>
              <tr>
              <th>Datasheet</th>
              <td><a download="<?php echo $row["product_service_name"]  ?>" href="../<?php echo $row["files"]  ?>" title="ImageName"><span class="fa fa-download">Download</span></a></td></tr><tr>
              <th>Images</th>
              <td><a download="<?php echo $row["product_service_name"]  ?>" href="../<?php echo $row["datasheet"]  ?>"><span class="fa fa-download">Download</span></a></td></tr>
    <?php
        }
        ?>
                     <?php
        
    } else {
        echo "";
        header('location: all.php');
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
        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
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
<div class="w3-col s3 l3 m3 w3-card-2 w3-round w3-margin w3-white ">
      <div class="w3-container ">
        <div class="">
        <br>
     
	<button id="hide"  onclick="document.getElementById('samba').style.display='block';document.getElementById('sideTable').style.display='none'" class="w3-green w3-btn w3-round w3-block" id="add">Add conversation</button>
<br>
<div id="samba" style="display:none;">
<form action="process.php" method="post">
<input type="text" name="enquiry_id" hidden value="<?php echo $q; ?>" id="">
<input type="text" name="customer_id" hidden value="<?php echo $r['customer_id']; ?>" id="">
<input type="text" name="convo" class="w3-input w3-round w3-border"  id="" placeholder="What was said">
<br>
<input type="submit" name="conversation" value="Submit" class="w3-btn w3-green w3-round">
</form>
<br>
</div>
<div id="sideTable">
<?php
convo($q);
?>
<br>
        </div>
      </div>
    </div>

    </div>
