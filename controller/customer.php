<?php
function getAll(){
    include('server/conn.php');
    $sql = "SELECT * FROM `customer` ORDER BY c_id ASC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            
    <div class="w3-row-padding  w3-padding-16" id=""> 
              <?php
              while($row = $result->fetch_assoc()) {
                  $i=1;

                  ?>
    <div class="">
<div class=" w3-container w3-border-black  ">
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
              <th>Customer name</th>
              <th>Location</th> 
              <th>Email</th>
              <th>Mobile number</th>
              <th>Whatsapp number</th>
              </tr>
              <tr>
              <td><?php echo $row["customer_name"]  ?></td>
              <td><?php echo $row["location"]  ?></td>
              <td><?php echo $row["email_id"]  ?></td>
              <td><?php echo $row["mobile_1"]  ?></td>
              <td><?php echo $row["whatsapp_no"]  ?></td>
              
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