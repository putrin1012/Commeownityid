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
        $blobImage1 = $this->uploadToBlob("myImage1");
        $blobImage2 = $this->uploadToBlob("myImage2");
        $blobImage3 = $this->uploadToBlob("myImage3");

        //echo $location;
        //$mediaContent1 = base64_encode($data['myImage1']);

        $query = "INSERT INTO posts
        (textContent, UserID, mediaContent, mediaContent2, mediaContent3, Location, postCategory)
        VALUES
        ('$textContent','$userid', '$blobImage1','$blobImage2','$blobImage3','$location','$postCategory')";
        $DB->save($query);

        $last_id = $DB->last_insert_id();
        $tags = explode(',', $_POST['tags']);
        foreach ($tags as $tag) {
          $tagPost = new tag();
          $tagPost->addTags($last_id,trim($tag));
        }

        //$target_dir = "uploads/";
        //$target_file = $target_dir . basename($files["fileToUpload"]["name"]);



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
    $query = "SELECT * FROM posts LEFT JOIN bookmarks ON bookmarks.PostID = posts.PostID WHERE bookmarks.UserID = '$userid' ORDER BY bookmarkTime DESC";
    $DB = new database();
    $result = $DB->read($query);
    if (!empty($result)) {
      //print_r($result);
      return $result;
    } else {
      return false;
    }
  }

  public function uploadToBlob($inputName) {
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES[$inputName]['name'],PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES[$inputName]["tmp_name"]);
    if($check !== false) {

    $uploadOk = 1;
    } else {

    $uploadOk = 0;
    }
    }

    // Check file size
    if ($_FILES[$inputName]["size"] > 500000) {

    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {

    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      return 0;
    } else {
      return base64_encode(file_get_contents($_FILES[$inputName]["tmp_name"]));
    }
  }

  public function deletePost($id) {

  }

  public function addLikes($id) {
    $query = "SELECT Likes FROM posts WHERE PostID = $id";
    $DB = new database();
    $result = $DB->read($query);

    if($result) {
      $row = $result[0]['Likes'];
      $row = is_numeric($row)?$row:0;
      $row++;

      $query = "UPDATE posts SET Likes = $row WHERE PostID=$id";
      $DB->save($query);
    } else {
      return false;
    }
  }

  public function getPostBySearch($searchTag) {
    $query = "SELECT * FROM posts WHERE PostID IN (SELECT PostID FROM tags WHERE Tags='$searchTag') ORDER BY dateTimeCreated DESC";
    $DB = new database();
    $result = $DB->read($query);
    if (!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }

  public function getPostbyID() {
    $id = $_GET['id'];
    $query = "SELECT * FROM posts WHERE PostID = $id LIMIT 1";
    $DB = new database();
    $result = $DB->read($query);
    if (!empty($result)) {
      return $result;
    } else {
      return false;
    }
  }


}
