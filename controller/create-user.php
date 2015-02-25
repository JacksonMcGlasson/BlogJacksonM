<?php

require_once (__DIR__ . "/../view/header.php");
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../view/footer.php");

//filters login data
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//makes the cyrpt for the password
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

$hashedPassword = crypt($password, $salt);

$use = $_SESSION["connection"]->query("SELECT username FROM users WHERE username='" . $username . "'");
$ema = $_SESSION["connection"]->query("SELECT username FROM users WHERE email='" . $email . "'");
//sends register info to user table
if (!$use->num_rows > 0 && !$ema->num_rows > 0) {
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
//checks if user was created successfully
    if ($query) {
        echo "Succesfully created user: $username";
    } else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
} else {
    echo "<p>Username and/or email is already registered to an account ";
}
