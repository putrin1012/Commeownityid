<?php
//include("Header.php");
 include("New_header.html");
 ?>

<?php include("Class/db.php");
include("Class/post.php");
 //include("Header.php");
 ?>

<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: Login.php");
  }else{
    echo "<script>alert('Selamat datang! :3');</script>";

  }

  //printr($_SESSION['ID']);
  //collect posts
  $post = new Post();
  $location = "Bekasi";
  $posts = $post->getPostTimeline($location);
?>




 <?php

   if($_SERVER['REQUEST_METHOD'] == "POST"){
     //print_r($_POST);
     $post = new Post();
     $post->createPost($_POST);
   }
 ?>


   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");?>
     </div>
    <div class="col-8">
    </br></br></br></br>
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
