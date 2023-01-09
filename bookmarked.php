<?php
include("Class/db.php");
include("Class/bookmark.php");
include("Class/helper.php");
include("session.php");

$id = $_GET['id'];
$bookmark = new bookmark();
$bookmark->addBookmark($_SESSION['ID'], $id);
//helper::redirect("_index.php");


?>
