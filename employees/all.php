<?php
session_start();
ob_start();
    include('../server/conn.php');

    include('../templates/header2.php');

    $sql = "SELECT * FROM `engineers`   ORDER BY engineer_id ASC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            <div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact">
<div>
	<div class="w3-center w3-theme-l5">
		<h3>
List of all Employees
		</h3>
	</div>
<br>
  <br>
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">

	
              <th>Employee name</th>
              <th class=" w3-hide-small">location</th> 
              <th class=" w3-hide-small">Unit Division</th>
              <th>Work adress</th>
              <th>Mobile number</th>
              <th>Action</th>
              </tr>
              <tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>
                  <td></a><?php echo $row["engineers"]  ?></td>
              <td class=" w3-hide-small"><?php echo $row["location"]  ?></td>
              <td class=" w3-hide-small"><?php echo $row["unit_division"]  ?></td>
              <td><?php echo $row["work_address"]  ?></td>
              <td><?php echo $row["mobile_1"]  ?></td>
              <td><a class="w3-btn w3-green" href="single.php?engineer_id=<?php echo $row["engineer_id"]  ?>">Detailed view</td>
              
              </tr>
    <?php
        }
        ?>
         
         
    </table>
    <br>
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
 