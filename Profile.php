<?php
//  include("Header.php");
 include("New_header.html");
 ?>

   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.html");?>
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
