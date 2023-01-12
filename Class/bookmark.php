<?php

class bookmark {
  
  public static function isBookmarked($userid, $postid) {
    $DB = new database();
    $query = "SELECT COUNT(bookmarkID) as countID from bookmarks WHERE UserID = $userid AND PostID = $postid";
    $result = $DB->read($query);
    if($result) {
      return $result[0]['countID'] > 0;
    }
    return false;

  }

  public function addBookmark($userid, $postid) {
    if (self::isBookmarked($userid, $postid)) {
      //echo 1;
      return;
    }

    //echo 2;
    $query = "INSERT into bookmarks (PostID, UserID) VALUES ('$postid','$userid')";
    $DB = new database();
    $DB->save($query);
    echo $query;
  }
}
?>
