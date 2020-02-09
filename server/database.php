<?php
    // include "connection.php";
 // Create database, we comment this out if it already exists
 $sql = "CREATE DATABASE IF NOT EXISTS StudentDB";
 if ($conn->query($sql) === TRUE) {
     echo "Database created successfully";
 } else {
     echo "Error creating database: " . $conn->error;
 }

 // sql to create table if already created we can comment it out
 $sql = "CREATE TABLE IF NOT EXISTS StudentRecords (
 StudentNumber VARCHAR(300) PRIMARY KEY,
 FirstName VARCHAR(30) NOT NULL,
 LastName VARCHAR(300) NOT NULL,
 Major VARCHAR(50) NOT NULL
 )";

 if ($conn->query($sql) === TRUE) {
     echo "Student Records Table created successfully";
 } else {
     echo "Error creating table: " . $conn->error;
 }
?>