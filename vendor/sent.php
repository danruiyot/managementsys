<?php
    include('../server/conn.php');
    include('../templates/header2.php');

    $sql = "SELECT * FROM enquiries JOIN enquiryengineers ON enquiries.e_id=enquiryengineers.enquiry_id WHERE forward_to = 'vendors' ORDER BY new_id DESC";
   

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container">
<div><br>
   <div class="w3-center w3-theme-l2">
            <h3>This is list of enquiries sent to vendors</h3>
          </div>
          <hr>
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
<th>Enquiry Number</th>
<th >Datasheet</th>
<th >Images</th>
<th>Date received</th>
<th>Action</th>
</tr>
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>
             
              <td><?php echo $row["e_id"]  ?></td>
               <td><a download="<?php echo $row["product_service_name"]  ?>" href="../<?php echo $row["datasheet"]  ?>"><span class="fa fa-download">Download</span></a></td>
              <td><a download="<?php echo $row["product_service_name"]  ?>" href="../<?php echo $row["files"]  ?>" title="ImageName"><span class="fa fa-download">Download</span></a></td>
              <td><?php echo $row["dateadded"]  ?></td>
              <td><a class="w3-btn w3-btn w3-green w3-round" href="quotationsingle.php?q=<?php echo $row["e_id"];  ?>">Details</a></td>
              </tr>
    <?php
        }
        
        ?>
        
        </table>
<br>
      </div>
<div class="w3-card w3-white">
 <?php
        
    } else {
        echo "Sorry. No results Yet"; 
    }
$conn->close();
    ?>
</div>
</div> 
</div>
    </div>
