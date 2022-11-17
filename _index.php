<?php
//  include("Header.php");
 include("New_header.html");
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
