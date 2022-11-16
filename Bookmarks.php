<?php
 include("Header.php");
 ?>

   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");?>
     </div>
    <div class="col-8">
    </br></br></br>
    <?php include("tagsInput.php");?>
  </br>
    <?php
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
