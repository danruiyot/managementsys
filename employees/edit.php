<?php
session_start();
ob_start();
    include('../server/conn.php');
    include('../templates/header2.php');

    $q = $_GET['q'];
    if ($q==null) {
      # code...
      header("location:all.php");
    }
    $sql = "SELECT * FROM `enquiries` WHERE e_id ='$q'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" style="margin-top:75px">
<div><br>
   <div class="w3-center w3-theme-l2">
            <h3>Enqury approval</h3>
          </div>
          <hr>
          <form method="post" action="process">
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>
             <th>Enquiry Number</th>
              <td><?php echo $row["e_id"]  ?></td></tr>
              <tr>
              <th >Visit manager or dealer?</th>
              <td ><?php echo $row["visit_manager_dealer"]  ?></td></tr>
              <tr>
              <th >Visit designer?</th>
              <td ><?php echo $row["visit_designengineer"]  ?></td></tr>
              <tr>
              <th>Date received</th>
              <td><?php echo $row["dateadded"]  ?></td></tr>
              <tr>
              <th>Product or service</th>
              <td><?php echo $row["product_service"]  ?></td></tr>
            
    </table><br>
    <input type="submit" name="edit" class="w3-btn w3-green" value="Submit">
</form><br>
    <form action="delete.php" method="post">
                  <input type="text" hidden="" value="<?php echo $row["e_id"]  ?>" name="id">
                  
                  <input type="submit" class="w3-red w3-submit  w3-btn" value="Delete" name="deletes">
                </form>
  <br>
</div>
</div>
</div>
</div>
    <?php
        }
        ?>
                     <?php
        
    } else {
        echo "";
        // header('location: enq.php');
    }
    



?>
