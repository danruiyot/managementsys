<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');

    include('../templates/header2.php');

    $sql = "SELECT * FROM `department`   ORDER BY name ASC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
            <div class=" w3-row w3-margin">
  <div class="w3-col s12 m3 l4">
<div class=" w3-card-2 w3-round w3-white w3-container" id="contact">
  <br>
  <div id="samba">
  <button onclick="document.getElementById('Show').style.display='block';document.getElementById('showed').style.display='none';document.getElementById('samba').style.display='none';" class="w3-green w3-btn w3-round w3-block" id="add">New Department</button>
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
List of all Departments
		</h3>
	</div>
<br>
  <br>
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">

	
              <th>Employee name</th>
              <th>Action</th>
              </tr>
              <tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>
                  <td></a><?php echo $row["name"]  ?></td>
              <td>
                <form>
                  <button class="w3-btn" href="edit.php?id=<?php echo $row["id"]  ?>"><span class="fa fa-trash"></button>
                  <a class="w3-btn " href="edit.php?id=<?php echo $row["id"]  ?>"><span class="fa fa-pencil"></span>
                  </form>
                </td>
              
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

 