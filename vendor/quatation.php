<?php
session_start();
ob_start();

    include('../server/conn.php');
    include('../templates/header2.php');

    $sql = "SELECT * FROM `enquiries` ORDER BY e_id DESC";
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
<table class="w3-striped w3-table-all w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
<th>Enquiry Number</th>
<th >Visit manager or dealer?</th>
<th >Visit designer?</th>
<th>Date received</th>
<th>Product or service</th>
<th>Action</th>
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
              <td><a class="w3-btn w3-btn w3-green w3-round" href="quotationsingle.php?q=<?php echo $row["e_id"];  ?>">Details</a></td>
              
              </tr>
              <br>
              </table>
              <br>
    <?php
        }
        ?>
                     <?php
        
    } else {
        echo "Sorry. Nothing added yet";
        header('location: ../index.php');
    }
    

$conn->close();
    ?>

</div> 
</div>
    </div>
