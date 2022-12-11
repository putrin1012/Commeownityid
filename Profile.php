<?php
//  include("Header.php");
 include("New_header.html");
 include("Class/db.php");
 include("Class/post.php");

//  update --- add user class ---
include("Class/User.php");

session_start();
if(!isset($_SESSION['login'])){
  header("Location: Login.php");
}

$userID = $_SESSION["ID"];
$post = new Post();
$posts = $post->getPostProfile($userID);
 ?>

   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");?>
     </div>
     <!-- update --- change col-12 to col-8 --- -->
    <div class="col-8">
      </br></br></br></br></br>
        <?php include("userInfo.php"); ?>
      </br>

      <?php include("NewPost.php");

        ?></br><?php
        if($posts){
          foreach($posts as $row){
            $user = new User();
            $row_user = $user->getData($row['UserID']);

            include("post.php");
          }
        } else {
        ?>  <?php
        }
      ?>

      </div>
    </div>



  <?php include("footer.php"); ?>
