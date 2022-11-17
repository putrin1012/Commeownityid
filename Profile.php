<?php
include("db.php");
 include("Header.php");
 ?>

   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");?>
     </div>
    <div class="col-10">
      </br>
        <?php include("userInfo.php"); ?>
      </br>

      <?php include("NewPost.php");
      for($i = 0; $i < 10; $i++){
        ?></br><?php
        include("post.php");}
      ?>

      </div>
    </div>



  <?php include("footer.php"); ?>
