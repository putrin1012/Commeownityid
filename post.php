



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
                        made a post.
                    </div>
                    <h6 class="text-muted time"><?php echo $row['dateTimeCreated']??'';?></h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  <?php echo $row['Type']??''; ?>
                </button>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?= 'data:image/jpeg;base64,'.base64_encode($row['mediaContent']); ?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= 'data:image/jpeg;base64,'.base64_encode($row['mediaContent2']); ?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>
                    <div class="carousel-item">
                      <img src="<?= 'data:image/jpeg;base64,'.base64_encode($row['mediaContent3']); ?>" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>
                  </div>
                  <!--button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button-->
              </br>
                <p><?php echo $row['textContent']??''; ?></p>
                <!--div-->
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;text-decoration:none;">Tag1</a>
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;text-decoration:none;">Tag2</a>
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;text-decoration:none;">Tag3</a>
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;text-decoration:none;">Tag4</a>
                <!--/div-->
                <div class="stats">
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-share icon"></i>12
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-bookmark icon"></i>
                    </a>
                </div>

            </div>
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"> <i class="fa fa-edit"></i></a>
                    </span>
                </div>
                <ul class="comments-list">
                    <li class="comment">
                        <a class="pull-left" href="#">
                            <img class="avatar" src="https://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                        </a>
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user">Gavino Free</h4>
                                <h5 class="time">5 minutes ago</h5>
                            </div>
                            <p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
