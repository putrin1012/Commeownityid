<!--?php
  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: Login.php");
  }else{
    echo "<script>alert('Selamat datang! :3');</script>";
  }
?-->

<?php
 include("Header.php");
 ?>



   <div class="row">
     <div class="col-2">
       <?php include("Sidebar.php");?>
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
