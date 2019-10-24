<?php
function convo($q){
    require('../server/conn.php');
    require('../server/testinput.php');

    $sql ="SELECT * FROM `conversations` WHERE enquiry_id = '$q' ORDER BY dateadded DESC";
    $result = $conn->query($sql);
    ?>
<table class="w3-table-all">
    <?php
    if ($result->num_rows > 0) {
        ?>
<tr>
  <th>Date</th>
  <th>Conversation</th>
</tr>
        <?php
        while($row = $result->fetch_assoc()) {
            ?>
<tr>
  <td><?php echo $row['dateadded'];  ?></td>
  <td><?php echo $row['convo'];  ?></td>
</tr>
            <?php

        }
    }else{
        echo "No Conversations Yet";
    }
    ?>
</table>
    <?php

}
?>

