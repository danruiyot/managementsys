<?php
function selectCustomer(){

include('../server/conn.php');
$sql = "SELECT * FROM `customers`";
$result = $conn->query($sql);
?>
<select name="customer_id" class="w3-select w3-input w3-border"  id="">
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <option value="<?php echo $row['c_id']; ?>"><?php echo $row['customer_name']; ?></option>
          <?php
    }
    ?>
</select>
    <?php
}
}
?>