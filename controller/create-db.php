<?php

require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);
//checks for connection error
if ($connection->connect_error) {
    die("Error: " . $connection->connect_error);
}

$exists = $connection->select_db($database);

if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");
    if ($query) {
        echo "Succesfully created database: " . $database;
    }
} else {
    echo "Database already exists";
}
//creates table for posts
$query = $connection->query("CREATE TABLE posts("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL, "
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

$connection->close();
