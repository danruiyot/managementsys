<?php
function getAll(){
    include('server/conn.php');
    $sql = "SELECT * FROM `products`";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
              <div class="w3-row-padding w3-margin w3-padding-16 w3-center" id="">
              <?php
              while($row = $result->fetch_assoc()) {
                  ?>
    <div class="w3-quarter ">
<div class="w3-card-2 w3-round w3-white ">
    <h6><?php echo $row["p_name"]  ?> </h6>
      <img src="<?php echo $row["pic"]  ?>" alt="Sandwich" style="width:100%">
      <p><a class="w3-btn w3-theme-l1 w3-round" href="#">Buy</a>
      <i>Price <b><?php echo $row["price"]  ?></b></i>
      </p>
      <br>
</div>
    </div>
    <?php
        }
        ?>
    </div>
            <?php
        
    } else {
        echo "0 results";
    }
    $conn->close();
}


?>