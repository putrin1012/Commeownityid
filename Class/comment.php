<?php
class comment {
  public function getComment($postid){
    $DB = new database();
    $query = "SELECT * FROM comments WHERE postID = '$postid' ORDER BY DateTimePosted DESC";
    $result = $DB->read($query);
    if (!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }


  public function createComment($postid, $userid) {
    $DB = new database();
    $textContent = $_GET['comment'];
    $query = "INSERT INTO comments (userID, textContent) VALUES ('$userid','$textContent') WHERE postID = '$postid' ORDER BY DateTimePosted DESC";
    $result = $DB->save($query);
  }
}
 ?>
