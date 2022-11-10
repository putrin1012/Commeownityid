<?php
 include("Header.php");
 include("Sidebar.php");
 ?>
</br>
<div style="width=800px;margin:auto;min-height:400px">
 <?php

for($i = 0; $i < 10; $i++){
    include("post.php");
    ?>
  </br></br>
    <?php
  }
  ?>
</div>
  <?php
include("footer.php");
 ?>
