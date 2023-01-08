<?php
class Post {
  private $error = "";

  public function createPost($userid,$data){
    $DB = new database();
    if(!empty($data['content'])){
      try {
        $textContent = addslashes($data['content']);
        $postCategory = addslashes($data['PostCategory']);
        $location = $DB->read("SELECT location FROM users WHERE ID = '$userid'");
        $location = $location[0]['location'];

        //echo $location;
        $mediaContent1 = base64_encode($data['myImage1']);

        $query = "INSERT INTO posts (textContent, UserID, mediaContent, Location, postCategory) VALUES ('$textContent','$userid', '$mediaContent1','$location','$postCategory')";
        $DB->save($query);
      } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
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
    $query = "SELECT * FROM posts WHERE UserID = '$id' ORDER BY dateTimeCreated DESC";
    $DB = new database();
    $result = $DB->read($query);
    if (!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }

  public function getPostBookmarked($userid) {
    $query = "SELECT * FROM posts LEFT JOIN bookmarks ON bookmarks.PostID = posts.PostID WHERE bookmarks.UserID = '$userid'";
    $DB = new database();
    $result = $DB->read($query);
    if (!empty($result)) {
      print_r($result);
      return $result;
    } else {
      return false;
    }
  }

  public function addLikes($id) {

  }

}
