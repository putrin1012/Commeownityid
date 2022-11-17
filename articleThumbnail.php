<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">


            <div class="post-description">


                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/tesCarousel.jpg" class="d-block w-100" alt="..." style="width:640px;height:360px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/tesCarousel_2.jpg" class="d-block w-100" alt="..."style="width:640px;height:360px">
                    </div>
                    <div class="carousel-item">
                      <img src="img/tesCarousel_3.jpg" class="d-block w-100" alt="..."style="width:640px;height:360px">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </br>
                <p><?php echo $data['textContent']??''; ?></p>
                <div>
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;">Tag1</a>
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;">Tag2</a>
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;">Tag3</a>
                  <a class="badge badge-primary" href="#" style="background-color:#6C452D;">Tag4</a>
                </div>
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
