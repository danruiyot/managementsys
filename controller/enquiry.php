<?php
function getAll(){
    include('server/conn.php');
    $sql = "SELECT * FROM `enquiries` ORDER BY e_id ASC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
              <div class="w3-row" id="">
              <div class="w3-col m12 l12 w3-border-black  ">
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
              <th>Enquiry Number</th>
              <th class=" w3-hide-small">Visit manager or dealer?</th> 
              <th class=" w3-hide-small">Visit designer?</th>
              <th>Date received</th>
              <th>Product or service</th>
              </tr>
              <tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>

             
              <td><?php echo $row["e_id"]  ?></td>
              <td class=" w3-hide-small"><?php echo $row["visit_manager_dealer"]  ?></td>
              <td class=" w3-hide-small"><?php echo $row["visit_designengineer"]  ?></td>
              <td><?php echo $row["dateadded"]  ?></td>
              <td><?php echo $row["product_service"]  ?></td>
              </tr>
    <?php
        }
        ?>
         
         
    </table>
</div>
    </div>
            <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();
}


?>