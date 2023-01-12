<?php
//include("Header.php");

 include("New_header.html");

 ?>

<?php
include("Class/db.php");
include("Class/post.php");
include("Class/comment.php");
include("Class/User.php");
include("Class/helper.php");
include("Class/bookmark.php");
include("Class/tag.php");
 //include("Header.php");
 ?>

<?php
    include("session.php");


  //collect posts

  $post = new Post();
  $DB = new database();
  $userID = $_SESSION["ID"];
  $postToEdit = $post->getPostbyID();

?>




 <!--?php

   if($_SERVER['REQUEST_METHOD'] == "POST"){
     //print_r($_POST);
     $post = new Post();
     $post->createPost($_POST);
   }
 ?-->


   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");?>
     </div>
    <div class="col-8">
    </br></br></br></br>
        <?php
        include("editpost.php");
        print_r($postToEdit);
        ?>

      </div>
    </div>
  <?php
include("footer.php");
 ?>
