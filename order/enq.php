<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');

    include('../templates/header2.php');

    $sql = "SELECT * FROM `enquiries`   ORDER BY e_id ASC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            <div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
<div>
<br>
  <br>
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">

	
              <th>Enquiry Number</th>
              <th class=" w3-hide-small">Visit manager or dealer?</th> 
              <th class=" w3-hide-small">Visit designer?</th>
              <th>Date received</th>
              <th>Product or service</th>
              <th>Action</th>
              </tr>
              <tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>
                  <td></a><?php echo $row["e_id"]  ?></td>
              <td class=" w3-hide-small"><?php echo $row["visit_manager_dealer"]  ?></td>
              <td class=" w3-hide-small"><?php echo $row["visit_designengineer"]  ?></td>
              <td><?php echo $row["dateadded"]  ?></td>
              <td><?php echo $row["product_service"]  ?></td>
              <td><a class="w3-btn w3-green" href="approve.php?q=<?php echo $row["e_id"]  ?>"> Show details</td>
              
              </tr>
    <?php
        }
        ?>
         
         
    </table>
</div>
    </div>
  </div>
  <div class="w3-margin">
    <div class="w3-card w3-white">
                <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();

?>
 
    </div>
  </div>
 