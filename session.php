<?php
session_start();
//print_r($_SESSION);
if(!isset($_SESSION['login'])){
  //header("Location: Login.php");
  ?> <html>
  <head>
    <meta http-equiv="refresh" content="0; url=Login.php">
  </head>
  <body>
    <script>
    location = "Login.php"
    </script>
  </body>
</html>
    <?php
    exit();
}?>
