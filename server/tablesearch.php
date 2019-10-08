<?php
session_start();
ob_start();
require_once('../server/conn.php');
$sql="CREATE TABLE `search`.`lostid` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `id_number` INT(10) NOT NULL , `card_type` VARCHAR(25) NOT NULL , `pic` VARCHAR(25) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
if ($conn->query($sql) === TRUE) {
    echo "Table lostid created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>