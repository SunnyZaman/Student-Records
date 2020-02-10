<?php
include "connection.php";
if(isset($_POST['postrecord'])){
    $record = $_POST['postrecord'];
    $delete = "DELETE FROM StudentRecords where StudentNumber='".$record."'";
    $conn->query($delete);
}
?>