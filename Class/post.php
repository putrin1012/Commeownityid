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

  private function createPostID(){

  }
}
