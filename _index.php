<?php
//  include("Header.php");
 include("New_header.html");
 ?>

 include("Class/db.php");
include("Class/post.php");
 <!-- include("Header.php"); -->
 ?>

<!--?php    (Pindah ke Login )
  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: Login.php");
  }else{
    echo "<script>alert('Selamat datang! :3');</script>";
  }
?-->




 <?php

   if($_SERVER['REQUEST_METHOD'] == "POST"){
     //print_r($_POST);
     $post = new Post();
     $post->createPost($_POST);
   }
 ?>


   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.html");?>
     </div>
    <div class="col-8">
    </br>
        <?php
        include("NewPost.php");
        ?></br></br><?php
        for($i = 0; $i < 10; $i++){
          include("post.php");
        ?>
      </br>
      <?php
        }
        ?>

      </div>
    </div>
  <?php
include("footer.php");
 ?>
