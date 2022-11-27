<?php
class User {
  public function getData($id){
    $query = "SELECT * FROM users WHERE ID = '$$id' limit 1";
    $DB = new database();
    $result = $DB->read($query);

    if($result) {
      $row 
    }
  }
}
 ?>
