<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');
    include('../templates/header2.php');

    $q = $_GET['who'];
    $sql = "SELECT * FROM `engineers` WHERE department ='$q'";
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
  <tr>
              <th>Name</th>
              <th >Unit Division</th>
              <th>Work address</th>
              <th>Location</th>
              <th >Department</th>
              <th >Action</th>

              </tr>
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>
             
              <td><?php echo $row["engineers"];  ?></td>
              <td ><?php echo $row["unit_division"];  ?></td>
              <td ><?php echo $row["work_address"]; ?></td>
              <td><?php echo $row["location"];  ?></td>
              <td><?php echo $row["department"];  ?></td>
              <a class="w3-btn w3-green w3-round" href="single.php?=engineer_id<?php echo $row["engineer_id"]; ?>">Detailed view</a>

</tr>
    </table>
    <?php
        }
        } else {
          echo "No results, Found";
          // header('location: enq.php');
      }
        ?>
            
  <br>
</div>
</div>
</div>
</div>