<?php
function getThem($whois){

    $who = explode('|', $whois);

    include('../server/conn.php');

$sql = "SELECT * FROM `contactperson` WHERE contact_id IN (" . implode(',', $who) . ")";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    ?>
    <tr  class="w3-theme-l2">
    <th>Contact Person</th>
    <th>Designation</th>
    <th> Address </th>
    <th>Email id</th>
    <th>Mobile 1</th>
    <th>Mobile 2</th>
    <th>Whatsapp Number</th>
    </tr>
                        <?php
                        while($row = $result->fetch_assoc()) {
                        ?>
         <tr>               
                        <td><?php echo $row["contact_name"]  ?></td>
                        <td ><?php echo $row["designation"]  ?></td>
                        <td><?php echo $row["address"]  ?></td>
                        <td><?php echo $row["mail1"]  ?></td>
                        <td ><?php echo $row["mobile1"]  ?></td>
                        <td ><?php echo $row["mobile2"]  ?></td>
                        <td ><?php echo $row["whatsapp_no"]  ?></td>
</tr>
                <br>
                <?php
                }
                ?>
    <?php

} else {
    echo "No Contact Person";
}
}

function getThemall($whois){

    $who = explode('|', $whois);

    include('../server/conn.php');
// INNER JOIN conversations.contactperson_id=contactperson.contact_id
    $sql1 = "SELECT * FROM `contactperson` LEFT JOIN conversations ON conversations.contactperson_id=contactperson.contact_id  WHERE contact_id IN (" . implode(',', $who) . ")";
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        // output data of each row

        ?>
<tr class="w3-theme-l2">
    <th>Contact Person</th>
    <th>Designation</th>
    <th> Address </th>
    <th>Email id</th>
    <th>Mobile 1</th>
    <th>Whatsapp Number</th>
</tr>
        <?php
        while($row = $result->fetch_assoc()) {
            ?><tr>
            <td><?php echo $row["contact_name"]  ?></td>
           <?php
           $conta = $row["contact_id"];

           ?>

            <td ><?php echo $row["designation"]  ?></td>
            <td><?php echo $row["address"]  ?></td>
            <td><?php echo $row["mail1"]  ?></td>
            <td ><?php echo $row["mobile1"]  ?></td>
            <td ><?php echo $row["whatsapp_no"]  ?></td>
            </tr>
            <br>
            <?php
        }
        ?>
        <?php

    } else {
        echo "No Contact Person";
    }

return $conta;
}
?>

