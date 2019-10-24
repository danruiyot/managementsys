<?php
function contactOption(){
    include('../server/conn.php');
    $sql = "SELECT * FROM `department` ORDER BY name ASC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        
            ?>
             <select class="w3-select w3-border" name="contactperson">
    <option value="" disabled selected>Choose Department</option>
  
  <?php
              while($row = $result->fetch_assoc()) {
                  ?>
 
    <option value="<?php echo $row["name"]  ?>"><?php echo $row["name"]  ?> </option>
    <?php
        }
        ?>
        </select>
            <?php
        
    } else {
        echo "0 results";
    }
}

?>