<?php
include("session.php");
include("New_header.html");

// update --- add db, article class ---
include("Class/db.php");
include("Class/Article.php");
include("Class/User.php");

// update --- check login session ---
/*session_start();
if (!isset($_SESSION['login'])) {
  header("Location: Login.php");
}*/

// update --- get all articles from database ---
$article = new Article();
$articles = $article->getArticles();
?>

<div class="row">
  <div class="col-2">
    <?php include("Sidebar.php"); ?>
  </div>
  <div class="col-8">
    </br>
    </br></br>
    </br>
      <?php
      // update --- load all articles to view ---
          if($articles){
            foreach ($articles as $row) {
                include("articleThumbnail.php");
            }
          }
      ?>
    </br>
    <?php
    ?>

  </div>
</div>



<?php
include("footer.php");
?>
