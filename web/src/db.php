<?php
$con = mysqli_connect("db", "user", "pass", "testdb");
if (!$con) {
    die("error during connect to database");
}


$sql = "
CREATE DATABASE IF NOT EXISTS testdb;
USE testdb;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);
";
//id INT AUTO_INCREMENT PRIMARY KEY,
if (mysqli_multi_query($con, $sql)) {
    do {
        if ($result = mysqli_store_result($con)) {
            mysqli_free_result($result);
        }
    } while (mysqli_more_results($con) && mysqli_next_result($con));
}
?>