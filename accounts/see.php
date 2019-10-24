<?php
 function see($type)
{
require '../server/conn.php';
 $sql = "SELECT * FROM `account` WHERE type = '$type'";
     $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    	?>
<table class="w3-table-all">
	<tr class="w3-theme-l2">
		<th>From</th>
		<th>To</th>
		<th>Task</th>
	</tr>
    	<?php
    while($row = $result->fetch_assoc()) {
    	?>
    	<tr>
    		<td><?php echo $row['fromdate']; ?></td>
    		<td><?php echo $row['todate']; ?></td>
    		<td><?php echo $row['purpose']; ?></td>
    	</tr>
    	<?php
    }
    ?>
</table>
    	<?php
    }else{
    	echo "No Task Yet";
    }
}

?>