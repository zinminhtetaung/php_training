<?php
session_start();
$id = $_POST['id'];
$password = $_POST['password'];


if ($id == "admin" && $password == "1234") {
    $_SESSION['user'] = true;
    $_SESSION['id'] = "$id";
}

header("location: index.php");
?>