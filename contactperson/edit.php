<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');
}
    include('../server/conn.php');
    include('../templates/header2.php');

    $q = $_GET['q'];
    if ($q==null) {
      # code...
      header("location:all.php");
    }
    $sql = "SELECT * FROM `contactperson` WHERE contact_id ='$q'";
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
          <form method="post" action="process.php">
<table class="w3-striped w3-table w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>
             <th>Contact name</th>
              <td><input type="text" name="contact_name" value="<?php echo $row["contact_name"]; ?>"></td></tr>
              <tr>
              <th >Designation</th>
              <td ><input type="text" name="designation" value="<?php echo $row["designation"];  ?>"></td></tr>
              <tr>
              <th >Operation area?</th>
              <td ><input type="text" name="ops_area" value="<?php echo $row["ops_area"];  ?>"></td></tr>
              <tr>
              <th>Email 1</th>
              <td><input type="text" name="mail1" value="<?php echo $row["mail1"]; ?>"></td></tr>
              <tr>
              <th>Email 2</th>
              <td><input type="text" name="mail2" value="<?php echo $row["mail2"];  ?>"></td></tr>
              <tr>
             <th>Mobile 1</th>
              <td><input type="text" name="mobile1" value="<?php echo $row["mobile1"];  ?>"></td></tr>
              <tr>
             <th>Mobile 2</th>
              <td><input type="text" name="mobile2" value="<?php echo $row["mobile2"];  ?>"></td></tr>
              <tr>
             <th>Mobile </th>
              <td><input type="text" name="mobile3" value="<?php echo $row["mobile3"];  ?>"></td></tr>
              <tr>
              <th >Mobile 4</th>
              <td ><input type="text" name="mobile4" value="<?php echo $row["mobile4"];  ?>"></td></tr>
              <tr>
              <th >Whatsapp number</th>
              <td ><input type="text" name="whatsapp_no" value="<?php echo $row["whatsapp_no"];  ?>"></td></tr>

             <input type="text" hidden name="contactid" value="<?php echo $row["contact_id"];  ?> ">       

            
    </table><br>
    <input type="submit" name="contactedit" class="w3-btn w3-green" value="Submit">
</form><br>
    <form action="delete.php" method="post">
                  <input type="text" hidden="" value="<?php echo $row["contact_id"];  ?>" name="contact_id">
                  
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
