<?php
    if(isset($_POST['submit'])){
        $insert ="INSERT INTO Rankings(StudentNumber, FirstName, LastName, Major) VALUES('".$_POST['record']."')";
        $conn->query($insert);
    }
?>