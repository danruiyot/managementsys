<?php
session_start();
ob_start();
include ('../templates/header2.php');
    include('../server/conn.php');
    $sql = "SELECT * FROM `enquiries` ORDER BY e_id DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            <div class="w3-margin">
  <div style="max-width:1000px;" class="w3-card-2 w3-round w3-white">
  <div class="w3-margin" >

    <div class="w3-row-padding  w3-padding-16" id=""> 
                <div class="">
<div class=" w3-container w3-border-black  ">
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
              <th>Enquiry No.</th>
              <th class="w3-hide-small">Product or service</th> 
              <th>Name</th>
              <th>Data Sheet</th>
              <th>Images</th>
              </tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  $i=1;

                  ?>
 
              <tr>
              <td><?php echo $row["e_id"]  ?></td>
              <td class="w3-hide-small"><?php echo $row["product_service"]  ?></td>
              <td><?php echo $row["product_service_name"]  ?></td>
              <td><a download="<?php echo $row["product_service_name"]  ?>" href="../<?php echo $row["datasheet"]  ?>"><span class="fa fa-download">Download</span></a></td>
              <td><a download="<?php echo $row["product_service_name"]  ?>" href="../<?php echo $row["files"]  ?>" title="ImageName"><span class="fa fa-download">Download</span></a></td>
              
              </tr>
    
    <?php
        }
        ?>
        </table>
</div>
    </div>
    </div>
</div>
</div>
</div>
            <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();

?>