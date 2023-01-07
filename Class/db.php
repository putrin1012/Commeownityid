<?php
class database {

  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "commeownityiddb";


  function connect() {
    //$this->conn = new mysqli($db_config['server_name'], $db_config['user_name'], $db_config['password'], $db_config['database_name']);
    $conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    return $conn;
  }

  function read($query) {
    $conn = $this->connect();
    $result = $conn->query($query);;
    

    if(!$result){
      //return false;
      return $result;
    } else {
      $data = false;
      while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
      }
    }
    return $data;
  }

  function save($query) {
      $conn = $this->connect();
      $result = mysqli_query($conn, $query);

      if($result == false){
        return false;
      } else {
        return true;
      }
  }

}


?>
