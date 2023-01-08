



<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b><?php echo $row_user['userName']??'';?></b></a>

                    </div>
                    <h6 class="text-muted time"><?php echo $row['dateTimeCreated']??'';?></h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  <?php echo $row['postCategory']??''; ?>
                </button>

                <?php
                if(!empty($row['mediaContent']) || !empty($row['mediaContent2']) || !empty($row['mediaContent3'])){

                ?>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <?php if(!empty($row['mediaContent'])){

                     ?>
                    <div class="carousel-item active">
                      <img src="<?= 'data:image/jpeg;base64,'.$row['mediaContent'];?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>
                    <?php } ?>
                    <?php if(!empty($row['mediaContent2'])){

                     ?>
                    <div class="carousel-item">
                      <img src="<?= 'data:image/jpeg;base64,'.$row['mediaContent2']; ?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>
                    <?php } ?>
                    <?php if(!empty($row['mediaContent'])){

                     ?>
                    <div class="carousel-item">
                      <img src="<?= 'data:image/jpeg;base64,'.$row['mediaContent3']; ?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>
                    <?php } ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>



            </div>
          <?php }?>
            <div>    </br>
                  <p><?php echo $row['textContent']??''; ?></p>
                  <!--div-->
                  <?php $tags = tag::getTags($row['PostID']);
                        foreach($tags as $tag) {
                          //print_r($tag);
                  ?>

                    <a class="badge badge-primary" href="#" style="background-color:#6C452D;text-decoration:none;"><?= $tag[0];?></a>
                  <!--/div-->
                <?php }?>
                  <div style="clear:both"></div>
                  <div class="stats">
                      <a href="likes.php?id=<?php echo $row['PostID']?>" class="btn btn-default stat-item">
                          <i class="fa fa-thumbs-up icon"></i><?php echo $row['Likes']??''; ?>
                      </a>
                      <a href="#" class="btn btn-default stat-item">
                          <i class="fa fa-share icon"></i>
                      </a>
                      <a href="bookmarked.php?id=<?php echo $row['PostID']?>" class="btn btn-default stat-item">
                          <i style="<?= bookmark::isBookmarked($_SESSION['ID'],$row['PostID'])?'color:red':''?>" class="fa fa-bookmark icon"></i>

                      </a>
                  </div></div>
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"> <i class="fa fa-edit"></i></a>
                    </span>
                </div>
                <ul class="comments-list">
                  <?php
                  $comment = new comment();
                  $comments =  $comment->getComment($row['PostID']);
                  if($comments){
                    foreach($comments as $rowComment){
                      $commenter = new User();
                      $row_commenter = $commenter->getData($rowComment['userID']);
                      include("comments.php");

                  }}?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
