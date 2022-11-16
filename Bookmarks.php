<?php
 include("Header.php");
 ?>

   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");?>
     </div>
    <div class="col-8">
    </br></br></br>
    <div class="col" style="margin-left:25px;width:1020px;">
      <?php include("tagsInput.php");?>
      </br>
      <button class="btn btn-sm btn-primary pull-right" style="background-color:#6C452D;border-color:#6C452D;width:100px;" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
    </div>
  </br></br></br>
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
