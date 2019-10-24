<?php
session_start();
ob_start();


include_once('../templates/header2.php');
include_once '../contactperson/dropdown.php';
?>
<div class="w3-margin">
  <div class="">

<?php 
    include('../server/conn.php');

    $who = $_GET['who'];
    if ($who==null) {
      # code...
      header("location:all.php");
    }
    $sql = "SELECT * FROM `vendors` WHERE v_id ='$who'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {

 ?>
  <div>
    <form class="" method="post" action="process.php">
  <?php
include 'vendoredit.php';
  ?></form>
  </div>
 <?php
        }
    } else {
        echo "";
        // header('location: enq.php');
    }
?>
  </div>
  </div>
</div>
</body>
</html>
