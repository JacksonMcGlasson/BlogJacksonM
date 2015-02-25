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
        echo "</div>";
        date_default_timezone_set('America/Los_Angeles');
        echo "Current time:";
        echo "<br />";
        $date = date('m/d/Y h:i:s a', time());
        $now = new DateTime();
        echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
        echo $now->getTimestamp();
    }
}