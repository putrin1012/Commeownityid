<?php
include("Class/db.php");
include("Class/post.php");
include("Class/helper.php");

$id = $_GET['id'];
$postLike = new Post();
$postLike->addLikes($id);
helper::redirect($_SERVER['PHP_SELF']);


?>
