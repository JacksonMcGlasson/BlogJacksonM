<?php

require_once (__DIR__ . "/../view/header.php");
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../view/footer.php");

$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

if ($query) {
    echo "<p>Successfully inserted post : $title</p>";
} else {
    echo "<p>$connection->error</p>";
}