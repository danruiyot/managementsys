<?php
session_start();
ob_start();
    include('../server/conn.php');
    include('../templates/header2.php');
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    $q = $_GET['engineer_id'];
    $sql = "SELECT * FROM `employee` WHERE employee_id ='$q'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container">
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
             <th>Engineer Name</th>
              <td><?php echo $row["employee_name"]  ?></td></tr>
              <tr>
              <th >Unit Division</th>
              <td ><?php echo $row["address"]  ?></td></tr>
              <tr>
              <th >Work address</th>
              <td ><?php echo $row["pincode"]  ?></td></tr>
              <tr>
              <th>Location</th>
              <td><?php echo $row["workpprof"]  ?></td></tr>
              <tr>
              <th>Work pin</th>
              <td><?php echo $row["current_ex"]  ?></td></tr>
              <tr>
             <th>Office Adress</th>
              <td><?php echo $row["past_ex"]  ?></td></tr>
              <tr>
             <th>Department</th>
              <td><?php echo $row["dept"]  ?></td></tr>
              <tr>
             <th>Email id</th>
              <td><?php echo $row["email_id"]  ?></td></tr>
              <tr>
              <th >mobile number 1</th>
              <td ><?php echo $row["mobile_1"]  ?></td></tr>
              <tr>
              <th >Mobile number 2</th>
              <td ><?php echo $row["mobile_2"]  ?></td></tr>
              <tr>
              <th >whatsapp number 2</th>
              <td ><?php echo $row["whatsapp_no"]  ?></td></tr>
              
 
    </table>
    <br>
    <a href="all.php" class="w3-btn w3-theme">Back</a>
    <br>
    <br>
    <?php
        }
    } else {
        echo "";
    }
        ?>
                   
                   </div>
                   </div>
                   </div>
                   </div>

  