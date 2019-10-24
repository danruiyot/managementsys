<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');

    include('../templates/header2.php');

    $sql = "SELECT * FROM `employee`   ORDER BY employee_id DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            <div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact">
  <br>
  <div id="samba">
  <button onclick="document.getElementById('Show').style.display='block';document.getElementById('showed').style.display='none';document.getElementById('samba').style.display='none';" class="w3-green w3-btn w3-round w3-block" id="add">Add new Employee</button>
</div>
<br>
<div id="Show" style="display: none;">
 <form action="process.php" method="post">
  <?php
require 'new.php';
  ?>
     </form>
</div>
</div>
<div id="showed">
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
              <th>Current designation</th>
              <th>Mobile number</th>
              <th>Department</th>
              <th>Action</th>
              </tr>
              <tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>
                  <td></a><?php echo $row["employee_name"]  ?></td>
              <td><?php echo $row["current_desi"]  ?></td>
              <td><?php echo $row["mobile_1"]  ?></td>
              <td><?php echo $row["dept"]  ?></td>
              <td><a class="w3-btn w3-green" href="single.php?engineer_id=<?php echo $row["employee_id"]  ?>">Details</td>
              
              </tr>
    <?php
        }
        ?>
         
         
    </table>
    <br>
               <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();

?>
</div>
    </div>
  </div>

 