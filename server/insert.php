<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $values  =  "'" . implode("', '", $_POST['record']) . "'";
        $insert ="INSERT INTO StudentRecords(StudentNumber, FirstName, LastName, Program) VALUES({$values})";
        $conn->query($insert);
        header('location: ../index.php'); //redirect
    }
?>