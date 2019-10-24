<?php
session_start();
ob_start();
if ($_SESSION['uid'] == NULL) {
  # code...
  header('location: user/');
}
      include_once('../templates/header2.php');

    include('../server/conn.php');
    $q = $_GET['Q'];
    $sql = "SELECT * FROM `products` WHERE category ='$q' ";
    $result = $conn->query($sql);
    ?>
<div class="w3-margin">
  <div style="max-width:800px;" class="w3-card-2 w3-round w3-white">
<div class="w3-container">
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
              <div class="w3-margin w3-center" id="">
              <table class="w3-table-all w3-bordered w3-sripped">
              <tr class="w3-theme">
              <th>Product Name</th>
              <th>Category</th>
              <th>Images</th>
              <th>Datasheet</th>
              <th>Drawings</th>
              </tr>
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                  <td><?php echo $row["p_name"]  ?></td>
                  <td><?php echo $row["category"]  ?></td>
                  <td><a download="<?php echo $row["p_name"]  ?>" href="../<?php echo $row["pic"]  ?>"><span class="fa fa-download">Download</span></a></td>
                  <td><a download="<?php echo $row["p_name"]  ?>" href="../<?php echo $row["datasheet"]  ?>"><span class="fa fa-download">Download</span></a></td>
                  <td><a download="<?php echo $row["p_name"]  ?>" href="../<?php echo $row["drawings"]  ?>"><span class="fa fa-download">Download</span></a></td>
              
                  </tr>
      <br>
</div>
    </div>
    <?php
        }
        ?>
        </table>
    </div>
            <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();



?>