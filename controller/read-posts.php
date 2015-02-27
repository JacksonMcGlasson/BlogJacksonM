<?php
//getting information from other page
require_once (__DIR__ . "/../model/config.php");
//retrieves post from database
$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);
//shows posts
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class = 'posts'>";
        //shows the title of the post
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<br />";
        //shows the actual post body
        echo "<p>" . $row['post'] . "</h1>";
        echo "<br />";
        //shows time of the post
        echo "<p>" . $row['time'] . "</h1>";
        echo "<br />";
        echo "</div>";
    }
}