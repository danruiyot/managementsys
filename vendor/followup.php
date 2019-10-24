<?php
session_start();
ob_start();

    include('../server/conn.php');

    include('../templates/header2.php');
    include('../controller/livesearch.php');

    $sql = "SELECT * FROM `quatation`  ORDER BY date_due DESC";
    $result = $conn->query($sql);
    ?>
 <div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container" id="contact">
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
              <th >Amount Due</th> 
              <th>Date due</th>
              <th>Action</th>
              </tr>
              <tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>
                  <td></a><?php echo $row["enquiry_id"]  ?></td>
              <td ><?php echo $row["amount"]  ?></td>
              <td><?php echo $row["date_due"]  ?></td>
              <td>
              <form action="process.php" method="post">
              <input type="text" name="enquiry_id" value="1" style="display: none;"><br>
              <input type="text" name="convo" value="Hello. This is to remind you that your Enquiry of Enquiry NO:<?php echo $row["enquiry_id"];  ?> is Due on <?php echo $row["due_date"]; ?> . Amount payable is <?php echo $row["amount"];  ?>. Thank you. " style="display: none;"><br>

              <input type="submit" class="w3-green w3-btn w3-round" value="Send Reminder" name="sendrem"> 
             </form>
              </td>
              
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
        echo "Sorry. No results found";

    }
    $conn->close();



?>
