<?php

session_start();
require_once (__DIR__ . "/Database.php");

$path = "/BlogJacksonM/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";

if(!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}