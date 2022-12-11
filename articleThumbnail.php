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
                      <img src="<?= 'data:image/jpeg;base64,'.base64_encode($row['CoverPic']); ?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>

                  </div>
                </div>

                <!-- update --- load article title --- -->
              <a href="articlePage.php" style="font-size:40px;text-decoration:none;color:#6C452D;"><?= $row['ArticleTitle']??'' ?></a>
            </br>
            <!-- update --- load article datetime --- -->
              <span class="text-muted time"><?= (new DateTime($row['DatePosted']))->format("D, d M Y"); ?></span>
              </br>
              <!-- update --- set href to articleDetail --- -->
              <!-- update --- substring textContent to 250 chars -->
              <!-- update --- add query params on the url to article details, the id refers to article id -->
                <p><?php echo substr($row['TextContent']??'',0,250); ?><a href="articleDetail.php?id=<?= $row['ArticleID']?>"> Read More...</a></p>

                <div class="stats">
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-share icon"></i>12
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
