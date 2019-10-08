<?php
session_start();
ob_start();
    include('../server/conn.php');
    include('../templates/header2.php');

    $sql = "SELECT * FROM enquiries JOIN enquiryengineers ON enquiries.e_id=enquiryengineers.enquiry_id WHERE approved = 'yes' ORDER BY new_id DESC";
   

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
<div><br>
   <div class="w3-center w3-theme-l2">
            <h3>sent enquiries</h3>
          </div>
          <hr>
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
<th>Enquiry Number</th>
<th >Visit manager or dealer?</th>
<th >Visit designer?</th>
<th>Date received</th>
<th>Product or service</th>
</tr>
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>
             
              <td><?php echo $row["e_id"]  ?></td>
              <td ><?php echo $row["visit_manager_dealer"]  ?></td>
              <td ><?php echo $row["visit_designengineer"]  ?></td>
              <td><?php echo $row["dateadded"]  ?></td>
              <td><?php echo $row["product_service"]  ?></td>
              </tr>
    <?php
        }
        
        ?>
        
        </table></div>
<div class="w3-card w3-white">
 <?php
        
    } else {
        echo "No Results";
    }
$conn->close();
    ?>
</div>
</div> 
</div>
    </div>
