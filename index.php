<?php
    include "server/connection.php";
    include "server/database.php";
    include "server/insert.php";
    $sql = "SELECT * FROM StudentRecords";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate" />
    <meta http-equiv="Content-Language" content="en_US" /> 
    <title>Student Records</title>
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="js/modal.js"></script>
    <script defer src="js/delete.js"></script>
    <script defer src="js/validation.js"></script>

</head>
<body>
    
    <div class="container is-fluid">
        <h1 class="title m-t10">Ryerson's Student Records</h1>
        <!-- Add new record button -->
        <div class="field">
            <button class="button is-primary is-pulled-right modal-open">
                Add new Student Record</button>
        </div>
        <!-- Modal: Add new record -->
        <div class="modal">
            <div class="modal-background"></div>
                <div class="modal-content">
                <!-- Form fields -->
                <div class="box">
                <form name="editForm" action="server/insert.php" method="POST">
                        <!-- Student Number input -->
                        <div class="field">
                            <label class="label">Student Number:</label>
                            <div class="control">
                                <input class="input" name="record[studentNumber]" type="text">
                            </div>
                        </div>
                        <!-- First Name input -->
                        <div class="field">
                            <label class="label">First Name:</label>
                            <div class="control">
                                <input class="input" name="record[firstName]" type="text">
                            </div>
                        </div>
                        <!-- Last Name input -->
                        <div class="field">
                            <label class="label">Last Name:</label>
                            <div class="control">
                                <input class="input" name="record[lastName]" type="text">
                            </div>
                        </div>
                        <!-- Program input -->
                        <div class="field">
                            <label class="label">Program:</label>
                            <div class="control">
                                <input class="input" name="record[program]" type="text">
                            </div>
                        </div>
                        <button class="button is-dark close" type="reset">
                            Cancel
                        </button>
                        <button class="button is-success submit-button" name="submit" type="submit" disabled="disabled">
                            Submit
                        </button>
                 </form>
                 </div>
                </div>
                <button class="modal-close"></button>
        </div>
        <!-- Table -->
        <table class="table is-striped is-fullwidth">
            <thead>
                <tr>
                <th>Student Number</th> <!-- Primary key -->
                <th>First Name</th>
                <th>Last Name</th>
                <th>Program</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                            echo "
                            <tr>
                                <td>{$row['StudentNumber']}</td>
                                <td>{$row['FirstName']}</td>
                                <td>{$row['LastName']}</td>
                                <td>{$row['Program']}</td>
                                <td><i class='fas fa-trash-alt'
                                onClick='deleteRecord({$row['StudentNumber']})'></i></td>
                            </tr>
                         ";
                        }
                    }
                ?>
                </tbody>
        </table>
    </div>
</body>
</html>
