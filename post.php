



<div class="container bootstrap snippets bootdey" >

    <div class="col-sm-8">
      <!--a href="postview.php?id=<!--?= //$row['PostID'];?>">
        <span style="position:absolute;width:100%;height:100%;top:0;left:0;z-index:1;"></span>
      </a-->
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
            <div class="pull-right meta">
            <div class="dropdown" style="background-color:white;box-shadow: :white;">
              <select onChange="window.location.href=this.value">
                <option selected disabled></option>
                <option value="delete.php?id=<?=$row['PostID'];?>">Delete</option>
                <option value="edit.php?id=<?=$row['PostID'];?>">Edit</option>

              </select>
            </div>

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

                    <a class="badge badge-primary" href="search.php?searchTag=<?= $tag[0];?>" style="background-color:#6C452D;text-decoration:none;"><?= $tag[0];?></a>
                  <!--/div-->
                <?php }?>
                  <div style="clear:both"></div>
                  <div class="stats">
                      <a href="likes.php?id=<?php echo $row['PostID'];?>" class="btn btn-default stat-item">
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
              <form method="post">
                <div class="input-group">
                    <input class="form-control" name="comment" placeholder="Add a comment" type="text">
                    <button class="btn btn-sm btn-primary pull-right" name="comment_post" value=<?= $row['PostID']?> style="background-color:#6C452D;border-color:#6C452D;width:100px;height:40px;top:10px;" type="submit"> Post</button>
                </div>
              </form>
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

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['comment_post'])){
  if(!empty($_POST['comment'])) {
    $commentNew = new comment();
    $userid = $_SESSION["ID"];
    $result = $commentNew->createComment($_POST['comment_post'],$userid);
    print_r($_POST);
    //header("Refresh:0");
    //echo "<script window.location.reload();</script>";
    if ($result == "") {
      helper::redirect($_SERVER['PHP_SELF'].'?'.microtime());
      die();
    }
  }
}
?>
