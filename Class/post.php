<?php
class Post {
  private $error = "";

  public function createPost($data){
    if(!empty($data['post'])){
      $post = addslashes($data['post']);
      $query = "INSERT INTO posts (textContent) VALUES ('textContent')";
      $DB = new database();
      $DB->save($query);
    } else {
      $this->error = "Type Something<br>";
    }

    return $this->error;
  }

  public function getPostTimeline($location){
    $query = "SELECT * FROM posts WHERE location = '$location' ORDER BY dateTimeCreated DESC";
    $DB = new database();
    $result = $DB->read($query);
    if (!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }

  public function getPostProfile($id) {
    // update --- change id to UserID in the query -----
    $query = "SELECT * FROM posts WHERE UserID = '$id' ORDER BY dateTimeCreated";
    $DB = new database();
    $result = $DB->read($query);
    if (!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }

}
