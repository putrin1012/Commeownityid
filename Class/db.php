<?php
class database {

  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "commeownityiddb";
  private $conn;


  function connect() {
    //$this->conn = new mysqli($db_config['server_name'], $db_config['user_name'], $db_config['password'], $db_config['database_name']);
    $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    return $this->conn;
  }

  function read($query) {
    $this->connect();
    $result = $this->conn->query($query);;

      if($result == false){
      //return false;
      return $result;
    } else {
      $data = false;
      while($row = mysqli_fetch_array($result)){
        $data[] = $row;
      }
    }
    return $data;
  }

  function save($query) {
      $this->connect();
      $result = mysqli_query($this->conn, $query);

      if($result == false){
        return false;
      } else {
        return true;
      }
  }

  function last_insert_id() {
    return mysqli_insert_id($this->conn);
  }

}


?>
