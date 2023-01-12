<?php
include("Class/db.php");
include("Class/post.php");
include("Class/helper.php");
include("session.php");

$id = $_GET['id'];
$postDelete = new Post();
$postDelete->deletePost($id);
helper::redirect($_SERVER['HTTP_REFERER']);


?>
