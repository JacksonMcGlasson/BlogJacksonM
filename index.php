<?php

require_once (__DIR__ . "/controller/login-verify.php");
require_once (__DIR__ . "/view/header.php");
//if the user is logged in they can access the blog post form
if (authenticateUser()) {
    require_once (__DIR__ . "/view/navigation.php");
}
require_once (__DIR__ . "/controller/create-db.php");
require_once (__DIR__ . "/controller/read-posts.php");
require_once (__DIR__ . "/view/footer.php");


