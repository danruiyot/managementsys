<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}

    include('../server/conn.php');
    include('../templates/header2.php');

    $q = $_GET['q'];
    $sql = "SELECT * FROM `contactperson` WHERE contact_id ='$q'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact">
<div><br>
   <div class="w3-center w3-theme-l2">
            <h3>Contact Person Details</h3>
          </div>
          <hr>
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>

             <th>Contact Name</th>
              <td><?php echo $row["contact_name"]  ?></td></tr>
              <tr>
              <th >Operation Area</th>
              <td ><?php echo $row["ops_area"]  ?></td></tr>
              <tr>
              <th >Designation</th>
              <td ><?php echo $row["designation"]  ?></td></tr>
              <tr>
             <th>Adress</th>
              <td><?php echo $row["address"]  ?></td></tr>
             <tr>
             <th>Email 1</th>
              <td><?php echo $row["mail1"]  ?></td></tr>
              <tr>
              <tr>
             <th>Email 2</th>
              <td><?php echo $row["mail2"]  ?></td></tr>
              <tr>
              <th >mobile number 1</th>
              <td ><?php echo $row["mobile1"]  ?></td></tr>
              <tr>
              <th >Mobile number 2</th>
              <td ><?php echo $row["mobile2"]  ?></td></tr>
              <tr>
              <th >whatsapp number 2</th>
              <td ><?php echo $row["whatsapp_no"]  ?></td></tr>
              
 
    </table>
    <br>
<div class="w3-bar">
  <a class="w3-btn w3-theme" href="contact.php">back</a>
</div>
    <br>
    <?php
        }
        ?>
                   
                   </div>
                   </div>
                   </div>
                   </div>
                     <?php
        
    } else {
        echo "";
        header('location: all.php');
    }
    



?>

  