<?php
session_start();
ob_start();

    include('../server/conn.php');
include('../templates/header2.php');
include('../contactperson/viewone.php');

    $q = $_GET['q'];
    $sql = "SELECT * FROM `vendors` WHERE v_id ='$q'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?><div class="w3-margin">
  <div class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact" >
<div><br>
   <div class="w3-center w3-theme-l2">
            <h3>Vendor Details</h3>
          </div>
          <hr>
<table class="w3-striped w3-table-all w3-mobile w3-bordered  w3-hoverable">

 <?php
              while($row = $result->fetch_assoc()) {

                  ?>
<tr> <th>Vendor Name</th>
              <td><?php echo $row["vendor_name"]  ?></td>
              </tr>
              <?php if($row["ops_area"]){ ?>
              <tr>
              <th>Location</th>
              <td ><?php echo $row["ops_area"]  ?></td>
              </tr>
              <?php } ?>
              <tr>
              <th>Pin Code</th>
              <td><?php echo $row["address"]  ?></td>
              </tr>
              <tr>
    <th>Product</th>
                <td><?php echo $row["product"]  ?></td>
                </tr>
              <tr>
    <th>Designation</th>
    <td ><?php echo $row["address"]  ?></td>
    </tr>
              <tr>
    <th>Email ID</th>
    <td><?php echo $row["mail1"]  ?></td>
    </tr>
              <tr>
    <th >mobile NO.</th>
    <td><?php echo $row["mobile1"]  ?></td>
    </tr>
              <tr>
    <th>Location</th>
    <td><?php echo $row["mobile1"]  ?></td>
    </tr>
              <tr>
    <th >Whatsapp NO. </th>
    <td><?php echo $row["mobile1"]  ?></td>
    </tr>
    </table>
    <table class="w3-striped w3-table-all w3-mobile w3-bordered  w3-hoverable">
    <?php
    $whois = $row['contact_person'];
    getThem($whois);
    ?>
    </table>
    <br>
<div class="w3-bar">
  <a class="w3-btn w3-theme" href="vendor.php">back</a>
</div>
    <br>
    <?php
        }
        ?>
                   
                   </div>
                   </div>
                   </div>
                   </div>
                     <?php
        
    } else {
        echo "";
        header('location: ../index.php');
    }
    



?>

  