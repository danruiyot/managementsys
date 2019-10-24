<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');

    include('../templates/header2.php');
    include('../controller/livesearch.php');
//
    $sql = "SELECT * FROM `enquiries`   ORDER BY e_id ASC";
    $result = $conn->query($sql);
    ?>
 <div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact">
<br>
	<button id="hide" onclick="document.getElementById('Show').style.display='block';document.getElementById('showed').style.display='none'" class="w3-green w3-btn w3-round w3-block" id="add">Add new Enquiry</button>
<br>
<div class="w3-container" id="Show" style="display:none">
      <form action="../controller/process.php" method="post" enctype="multipart/form-data">
      <?php

include('../products/new_enquiry.php');
?>
 </form>
    </div>
    </div>
    </div>
<br> 
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>


<div id="showed">
<header class="w3-center w3-theme-l4"><h3 >All enquiry details</h3>
</header>
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
         
         <br>
    </table>
    <br>
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
