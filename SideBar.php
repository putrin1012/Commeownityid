<?php
  $userSidebar = new User();
  $userprofile = $userSidebar->getData($_SESSION['ID']);
?>

<div class="sidebar">
  </br></br></br></br>
  <img src="img/oren.png" style=" width: 75px;margin-left: 55px;border: solid;border-radius:50%;">
</br>
  <p style="margin-left:20px;color:white;"><?php echo $userprofile['userName']??''; ?></p>   
  <a href="Profile.php">Profile</a>
  <a href="Bookmarks.php">Bookmarks</a>
  <!--a href="#news">About</a-->
  <a href="Logout.php">Logout</a>
</div>
