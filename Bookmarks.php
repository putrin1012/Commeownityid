<?php
 include("session.php");
 include("New_header.html");
 include("Class/db.php");
 include("Class/User.php");
 include("Class/comment.php");
 include("Class/post.php");
include("Class/bookmark.php");
include("Class/tag.php");

 ?>

   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");
       $post = new Post();
       $posts = $post->getPostBookmarked($_SESSION['ID']);
       ?>
     </div>
    <div class="col-8">
    </br></br></br></br>
    <div class="col" style="margin-left:25px;width:1020px;">
      <form class="d-flex" role="search">
          <input class="form-control me-2"  type="search" placeholder="search here" aria-label="Search">
      </form>
      </br>
      <button class="btn btn-sm btn-primary pull-right" style="background-color:#6C452D;border-color:#6C452D;width:100px;" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
    </div>
  </br></br></br>
  <?php
  if($posts){
    foreach($posts as $row){
      $user = new User();
      $row_user = $user->getData($row['UserID']);

      include("post.php");
      echo "</br>";
}}
      ?>

      </div>
    </div>



  <?php
include("footer.php");
 ?>
