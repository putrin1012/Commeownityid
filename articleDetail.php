<?php
include("New_header.html");

// update --- add db, article class ---
include("Class/db.php");
include("Class/Article.php");

// update --- check login session ---
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: Login.php");
}

// update --- get articles by id (id from query params, using get method) from database ---
$article = new Article();
$article_id = $_GET['id'];
$article_detail = $article->getArticlesById($article_id);

?>

<div class="row">
  <div class="col-2">
    <?php include("Sidebar.php"); ?>
  </div>
  <div class="col-8">
    </br>
    </br></br>
    </br>
    <div class="container bootstrap snippets bootdey">
      <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">


          <div class="post-description">


            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">

              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <!-- update --- load blob image from database-->
                  <img src="<?= 'data:image/jpeg;base64,' . base64_encode($article_detail['CoverPic']); ?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                </div>

              </div>
            </div>

            <!-- update --- load article title --- -->
            <a href="articlePage.php" style="font-size:40px;text-decoration:none;color:#6C452D;"><?= $article_detail['ArticleTitle'] ?? '' ?></a>
            </br>
            <!-- update --- load article datetime --- -->
            <span class="text-muted time"><?= (new DateTime($article_detail['DatePosted']))->format("D, d M Y"); ?></span>
            </br></br>
            <!-- update --- load article text content --- -->
            <p><?= $article_detail['TextContent'] ?? '' ?>
            </p>



          </div>

        </div>

      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>