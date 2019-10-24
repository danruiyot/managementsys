<?php
session_start();
ob_start();

if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
   include('../server/conn.php');

    include('../templates/header2.php');
    if ($_SESSION['q']== NULL) {
       $_SESSION['q']= $_GET['q'];
    }
  
    $type = $_SESSION['q'];

    $sql = "SELECT * FROM  `customers`  WHERE c_id = '$type'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        

include_once('../templates/header2.php');
?>
<div class="w3-margin">
  <div class="w3-card-2 w3-round w3-white">
  <div class="w3-margin" ><br>
    <div id="showed">
      <?php
              while($row = $result->fetch_assoc()) {
                  ?>
  <?php
include_once('../contactperson/dropdown.php');
  
?>
</div>
<div class="w3-container">
<div class="w3-row">
      <form action="../controller/process.php" method="post">
      <?php
require('../products/editcustomer.php');
?>
 </form>
</div>
 </div>
  <?php
        }
        ?>
  </div>
</div>
</div>
            <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();



?>
</body>
</html>
