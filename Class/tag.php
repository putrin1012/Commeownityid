<?php
class tag {
  static function addTags($postid, $tagName) {
    $query = "INSERT INTO tags (PostID, Tags) VALUES ('$postid', '$tagName')";
    $DB = new database();
    $DB->save($query);
  }

  static function getTags($postid) {
    $query = "SELECT Tags FROM tags WHERE PostID = $postid";
    $DB = new database();
    $result = $DB->read($query);

    if (!empty($result)) {
      return $result;
    } else {
      return [];
    }
  }
}
 ?>
