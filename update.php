<?php

include 'connection.php';
$id = $_REQUEST['id'];
$update = $_REQUEST['text'];
$updateTo = $_REQUEST['text1'];
$sql = "UPDATE tourist SET $update = '$updateTo' WHERE id = $id";

if ($connect->query($sql)) {
    echo "Updated Successfully.";
} else {
    echo "Error occurred: " . $connect->error;
}

$connect->close();

?>
