<?php
$myserver = "localhost";
$username = "root";
$pass = "";
//$mydb="MIT";


// Create connection
//$conn = mysqli_connect($myserver, $username, $pass);

$connection= new mysqli($myserver,$username,$pass,$mydb);

if ($connection->connect_error){
    die("Failed to connect".$connection->connect_error);
}echo "Connected successfully";


//create database
//$db = "CREATE DATABASE MIT";
//if ($connection->query($db) === true){
//    echo "Creation successful";
//}else{
//    echo "Creation error".$connection->error;
//}
//$connection->close();
$db = "CREATE TABLE students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($connection->query($db) === TRUE) {
    echo "Table students created successfully";
} else {
    echo "Error creating table: " . $connection->error;
}

$connection->close();














