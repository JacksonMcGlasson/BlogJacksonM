<?php

require_once (__DIR__ . "/../model/config.php");
//retrieves post from database
$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);
//shows posts
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class = 'posts'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<br />";
        echo "<p>" . $row['post'] . "</h1>";
        echo "<br />";
        echo "<p>" . $row['time'] . "</h1>";
        echo "</div>";
        
        
        $date = date('m/d/Y h:i:s a', time());
    }
}