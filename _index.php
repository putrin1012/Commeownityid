<?php
//include("Header.php");

 include("New_header.html");

 ?>

<?php include("Class/db.php");
include("Class/post.php");
include("Class/User.php");
 //include("Header.php");
 ?>

<?php
  session_start();
  //print_r($_SESSION);
  if(!isset($_SESSION['login'])){
    header("Location: Login.php");
  }


  //collect posts

  $post = new Post();
  $DB = new database();
  $userID = $_SESSION["ID"];
  $Locationquery = "SELECT Location FROM users WHERE ID='$userID'";
  $result = $DB->read($Locationquery);

  $location = $result[0]['Location'];
  $posts = $post->getPostTimeline($location);
  //print_r($posts);
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
        if($posts){
          foreach($posts as $row){
            $user = new User();
            $row_user = $user->getData($row['UserID']);

            include("post.php");

          }
        }

        ?>
      </br>
      <?php

        ?>

      </div>
    </div>
  <?php
include("footer.php");
 ?>
