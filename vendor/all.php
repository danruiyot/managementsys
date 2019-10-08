<?php
function getAll(){
    include('../server/conn.php');
    $sql = "SELECT * FROM `vendors` ORDER BY v_id ASC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            
    <div class="w3-row-padding  w3-padding-16" id=""> 
                <div class="">
<div class=" w3-container w3-border-black  ">
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
              <th>Vendor name</th>
              <th>Area of Operation</th> 
              <th>Address</th>
              <th>Mobile number</th>
              <th>Whatsapp number</th>
              <th>Actions</th>
              </tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  $i=1;

                  ?>
 
              <tr>
              <td><?php echo $row["vendor_name"]  ?></td>
              <td><?php echo $row["ops_area"]  ?></td>
              <td><?php echo $row["address"]  ?></td>
              <td><?php echo $row["mobile1"]  ?></td>
              <td><?php echo $row["whatsapp_no"]  ?></td>
              <td><a class="w3-btn w3-green" href="view.php?q=<?php echo $row["v_id"]; ?>">Details</a></td>
              
              </tr>
    
    <?php
        }
        ?>
        </table>
</div>
    </div>
    </div>

            <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();
}


?>