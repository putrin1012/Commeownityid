<?php

$username = "root";
$password = "";
$db = "commeownityiddb";

$conn = new PDO('mysql:host=localhost;dbname=' . $db . ';charset=utf8', $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>