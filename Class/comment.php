<?php
class comment {
  public function getComment($postid){
    $DB = new database();
    $query = "SELECT * FROM comment WHERE postID = '$postid' ORDER BY DateTimePosted DESC";
    $result = $DB->read($query);
    if (!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }
}
 ?>
