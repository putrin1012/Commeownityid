
<!DOCTYPE HTML>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

#navbar {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 90px 10px;
   /* Sticky/fixed navbar */
  width: 100%;
  top: 0; /* At the top */

}
/* Modify the background color */

.navbar-custom {
    background-color: #6C452D;

}
/* Modify brand and text color */

.navbar-custom .navbar-nav .nav-link {
    color: white;
}

body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #555;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #555;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
    background-color: white;
    width: 1000px;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.panel-body {
    padding: 25px 20px;
}
.panel .timeline,
.panel .timeline-time {
    background-color: #fff
}

.panel .timeline-icon {
    box-shadow: 0 0 0 7px #fff
}

.panel .timeline-label {
    box-shadow: none;
    background-color: #f7f7f7;
    border: 1px solid #e3e3e3
}

.panel .timeline-label:before {
    border-right-color: #e3e3e3
}

.panel .timeline-label:after {
    border-right-color: #f7f7f7
}


  .panel-shadow {
      box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
  }
  .panel-white {
    border: 1px solid #dddddd;
  }
  .panel-white  .panel-heading {
    color: #333;
    background-color: #fff;
    border-color: #ddd;
  }
  .panel-white  .panel-footer {
    background-color: #fff;
    border-color: #ddd;
  }

  .post .post-heading {
    height: 95px;
    padding: 20px 15px;

  }
  .post .post-heading .avatar {
    width: 60px;
    height: 60px;
    display: block;
    margin-right: 15px;

  }
  .post .post-heading .meta .title {
    margin-bottom: 0;

  }
  .post .post-heading .meta .title a {
    color: black;
  }
  .post .post-heading .meta .title a:hover {
    color: #aaaaaa;
  }
  .post .post-heading .meta .time {
    margin-top: 8px;
    color: #999;
  }
  .post .post-image .image {
    width: 100%;
    height: auto;

  }
  .post .post-description {
    padding: 15px;

  }
  .post .post-description p {
    font-size: 14px;

  }
  .post .post-description .stats {
    margin-top: 20px;

  }
  .post .post-description .stats .stat-item {
    display: inline-block;
    margin-right: 15px;

  }
  .post .post-description .stats .stat-item .icon {
    margin-right: 8px;
  }
  .post .post-footer {
    border-top: 1px solid #ddd;
    padding: 15px;
  }
  .post .post-footer .input-group-addon a {
    color: #454545;
  }
  .post .post-footer .comments-list {
    padding: 0;
    margin-top: 20px;
    list-style-type: none;
  }
  .post .post-footer .comments-list .comment {
    display: block;
    width: 100%;
    margin: 20px 0;
  }
  .post .post-footer .comments-list .comment .avatar {
    width: 35px;
    height: 35px;
  }
  .post .post-footer .comments-list .comment .comment-heading {
    display: block;
    width: 100%;
  }
  .post .post-footer .comments-list .comment .comment-heading .user {
    font-size: 14px;
    font-weight: bold;
    display: inline;
    margin-top: 0;
    margin-right: 10px;
  }
  .post .post-footer .comments-list .comment .comment-heading .time {
    font-size: 12px;
    color: #;
    margin-top: 0;
    display: inline;
  }
  .post .post-footer .comments-list .comment .comment-body {
    margin-left: 50px;
  }
  .post .post-footer .comments-list .comment > .comments-list {
    margin-left: 50px;
  }
  .bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: white !important;
    background-color: #6C452D;
    padding: 0.2rem;
  }

  #searchTag { max-width: 100px;}
</style>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
/>
<link
  href="bootstrap-tagsinput.css"
  rel="stylesheet"
/>

</head>
<body style="background-color: #EDD3A8">




   <div class="row">
     <div class="col" style="position: fixed;z-index: 99;">

       <nav class="navbar navbar-expand-lg navbar-custom">
         <div class="container-fluid">
           <ul class="navbar-nav">
             <a class="navbar-brand" href="#">
               <img src="img/logo_light.png" alt="" width="124" height="24" class="d-inline-block align-text-top">
             </a>
             <div class="collapse" id="navbarToggleExternalContent">
                  <h5 class="text-white h4">Collapsed content</h5>
                  <span class="text-muted">Toggleable via the navbar brand.</span>
              </div>



             <li class="nav-item">
               <a class="nav-link" href="_index.php">Home</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="Articles.php">Articles</a>
             </li>
                <div class="form-group" role="search">
                  <input
                  class="form-control me-2"
                  type="search"
                  data-role="tagsinput"
                  placeholder="Search here"
                  aria-label="Search"
                  style="width:100px !important;"/>
                </div>
                <!--a class="nav-link" href="index.php"><i class="fa fa-filter add-tooltip"></i>  Filter </a-->
            </ul>
          </div>
      </nav>
    </div>
  </div>

</br></br>

<!--?php
  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: Login.php");
  }else{
    echo "<script>alert('Selamat datang! :3');</script>";
  }
?-->






   <div class="row">
     <div class="col-2">
       <div class="sidebar">
  </br>
  <img src="img/user.png" style=" width: 75px;margin-left: 55px;border: solid;border-radius:50%;">
</br></br>
  <p style="margin-left:55px;color:white;">Username</p>
  <a href="Profile.php">Profile</a>
  <a href="Bookmarks.php">Bookmarks</a>
  <a href="#news">About</a>
  <a href="Logout.php">Logout</a>
</div>
     </div>
    <div class="col-8">
    </br>

<div class="container bootstrap snippets bootdeys">
      <div class="col-md-7 col-md-offset-2">

          <div class="panel">
            <div class="panel-body">
              <form method="post">
              <div class="dropdown">
                <select class="btn btn-secondary dropdown-toggle" type="button" name="PostCategory" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Post Category">
                <option>Kategori Post</option>
                <option value="Open Adopt">Open Adopt</option>
                <option value="Need Adopter">Need Adopter</option>
                <option value="Miscellanous">Miscellanous</option>
                </select>
              </div>
            </br>
            		<textarea type="text" class="form-control" rows="2" placeholder="Write something here..."></textarea>
            		<div class="mar-top clearfix">
                </br>


    <div class="input-group">
      <input
        type="text"
        class="form-control p-4"
        data-role="tagsinput"
        placeholder="Put Tags Here!"
        style="resize: none;"
      />
    </div>
                </br>
                <input class="btn btn-sm btn-primary pull-right" style="background-color:#6C452D;border-color:#6C452D;width:100px;" type="submit"></input>

                  <label>
                    <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" data-original-title="Add Video" data-toggle="tooltip"></a>
                    <input type="file" name="myImage" accept="video/*" style="display:none;"/>
                  </label>
                  <label>
                    <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" data-original-title="Add Photo" data-toggle="tooltip"></a>
                    <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" style="display:none;"/>
                  </label>
          			<!--a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a-->
          		</div>
            </form>
          	</div>
          </div>
        </div>
      </div>
</br></br>



<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>




<div class="container bootstrap snippets bootdey">
    <div class="col-sm-8">
        <div class="panel panel-white post panel-shadow" style="background-color:white;width:1000px">
            <div class="post-heading post-white">
                <div class="pull-left image">
                    <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Username</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;">
                  Open Adopt
                </button>
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
                <p>Open adopt panda laut</p>
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
      </br>

      </div>
    </div>

</div>
</div>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="bootstrap-tagsinput.js"></script>
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    })
  });
</script>
<script>
  $(function () {
    $('input')
      .on('change', function (event) {
        var $element = $(event.target);
        var $container = $element.closest('.example');

        if (!$element.data('tagsinput')) return;

        var val = $element.val();
        if (val === null) val = 'null';
        var items = $element.tagsinput('items');

        $('code', $('pre.val', $container)).html(
          $.isArray(val)
            ? JSON.stringify(val)
            : '"' + val.replace('"', '\\"') + '"'
        );
        $('code', $('pre.items', $container)).html(
          JSON.stringify($element.tagsinput('items'))
        );
      })
      .trigger('change');
  });
</script>
</html>
