<?php
class database {
  /*
  public $db_config['server_name'] = "localhost";
  public $db_config['user_name'] = "root";
  public $db_config['password'] = "";
  public $db_config['database_name'] = "orca";
  */
  public $conn;
  public $table_name = "";

  function __construct($table_name) {
    global $db_config;
    //$this->conn = new mysqli($db_config['server_name'], $db_config['user_name'], $db_config['password'], $db_config['database_name']);
    $this->conn = new mysqli("Localhost", "root", "", "commeownityiddb");
    $this->table_name = $table_name;
  }


  /*function add($name, $email){
    $conn = $this->conn;
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);

    $sql = "INSERT INTO " . $this->table_name . " (name, email) VALUES ('" . $name . "', '" . $email . "')";
    return $conn->query($sql);
  }

  function edit($name, $email, $id) {
   $conn = $this->conn;
   $name = mysqli_real_escape_string($conn, $name);
   $email = mysqli_real_escape_string($conn, $email);
   $sql = "UPDATE " . $this->table_name ." SET name='$name', email='$email' WHERE id='$id'";
   return $conn->query($sql);
 }*/

  function get_data($id) {
    $db = $this->conn;
    $id = is_int($id)?$id:0;
    $query = "SELECT * FROM ". $this->table_name. " WHERE id=".$id;
    $result = $db->query($query);
    return $result->fetch_assoc();
  }

  function delete($id) {
    $db = $this->conn;
    $id = is_int($id)?$id:0;
    $sql = "DELETE FROM ". $this->table_name ." WHERE id=".$id;
    return $db->query($sql);
  }

  function fetch_data(){
    $db = $this->conn;

    //$columnName = implode(", ", $columns);
    $query = "SELECT * FROM ". $this->table_name ." ORDER BY id DESC";
    $result = $db->query($query);

    if ($result== true) {
      if ($result->num_rows > 0) {
        $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg= $row;
      } else {
        $msg= "No Data Found";
      }
    } else {
      $msg= mysqli_error($db);
    }
    return $msg;
  }

}
