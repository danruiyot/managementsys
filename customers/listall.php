<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: ../user/');

}
    include('../server/conn.php');
    include('../templates/header2.php');
    include('convo.php');
include('../contactperson/viewone.php');

    $q = $_GET['q'];
    $sql = "SELECT * FROM `customers` LEFT JOIN enquiries ON customers.c_id=enquiries.customer_id WHERE c_id ='$q'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
  <div class="w3-row">
  <div  class="w3-margin w3-col l11 m12 s12 w3-card-2 w3-round w3-white">
<div class="w3-container">
<div><br>
   <div class="w3-center w3-theme-l2">
            <h3>Customer Details</h3>
          </div>
          <hr>

<table id="myTable" class="w3-striped w3-table-all w3-bordered  w3-hoverable">
<tr class="w3-theme-l2">
 <?php
              while($row = $result->fetch_assoc()) {
                  ?>
<tr>
             <th>Customer Name</th>
              <td><?php echo $row["customer_name"]  ?></td></tr>
              <tr>
              <th >Unit Division</th>
              <td ><?php echo $row["unit_division"]  ?></td></tr>
              <tr>
              <th >Work address</th>
              <td ><?php echo $row["work_address"]  ?></td></tr>
              <tr>
              <th>Location</th>
              <td><?php echo $row["location"]  ?></td></tr>
              <tr>
              <th>Work pin</th>
              <td><?php echo $row["workpin"]  ?></td></tr>
              <tr>
             <th>Office Adress</th>
              <td><?php echo $row["office_adress"]  ?></td></tr>
              <tr>
              <th >Office Pin code</th>
              <td ><?php echo $row["office_pincode"]  ?></td></tr>
              <tr>
              <th>department</th>
              <td><?php echo $row["department"]  ?></td></tr>
              <tr>
              <th>designation</th>
              <td><?php echo $row["designation"]  ?></td></tr>
              <tr>
             <th>Email id</th>
              <td><?php echo $row["email_id"]  ?></td></tr>
              <tr>
              <th >mobile number 1</th>
              <td ><?php echo $row["mobile_1"]  ?></td></tr>
              <tr>
              <th >Mobile number 2</th>
              <td ><?php echo $row["mobile_2"]  ?></td></tr>
              <tr>
              <th >whatsapp number 2</th>
              <td ><?php echo $row["whatsapp_no"]  ?></td></tr>

 
    </table>
<?php
if($row["e_id"]){
?>
<br>
<table class="w3-table-all w3-stripped">
    <h4 class="w3-center">Enquiries</h4>
    <hr>
    <tr>
        <th>Enquiry Number</th>
        <th>Product Details</th>
    </tr>
    <tr>
        <td><?php echo $row["e_id"]  ?></td>
        <td><?php echo $row["customer_requirements"]  ?></td>
    </tr>
</table>
    <?php
   }
?>
<br>
<table class="w3-table-all w3-stripped">
     <h4 class="w3-center">Contact Persons</h4>

    <?php

    $whois = $row['contact_person'];
    getThemall($whois);


    ?>
</table>
    <br>
<div class="w3-bar">
  <a class="w3-btn w3-theme" href="customer.php">back</a>
</div>
    <br>
    <?php
        }
        ?>

</div>
  </div>
    </div>
    <div class="w3-col s12 l9 m12 w3-card-2 w3-round w3-margin w3-white ">
      <div class="w3-container ">
        <div class="">
        <br>

<button id="hide" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green" class="w3-green w3-btn w3-round " id="add">Add remarks</button>

  <div id="id01" class="w3-modal w3-margin">
    <div class="w3-modal-content w3-padding">
      <span onclick="document.getElementById('id01').style.display='none'"class="w3-button w3-display-topright">&times;</span>      <br>
      <br>
<form action="process.php" method="post">
    <input type="text" name="customer_id" hidden value="<?php echo $q; ?>" id="">
    <input type="text" name="contactperson_id" hidden value="<?php echo $conta; ?>" id="">
<input type="text" name="convo" class="w3-input w3-round w3-border"  id="" placeholder="What was said">
<br>
<input type="submit" name="conversation" value="Submit" class="w3-btn w3-green w3-round">
</form>
<br>
</div>
</div>
<div id="sideTable">
<?php
convo($q);
?>
<br>
        </div>
      </div>
    </div>
        <?php
    } else {
        echo "";
    }
?>
                   </div>
