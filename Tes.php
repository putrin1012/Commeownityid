
<!DOCTYPE HTML>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
                <form class="d-flex" role="search">
                  <a class="nav-link" href="index.php">Search</a>
                  <input class="form-control me-2" type="search" placeholder="search here" aria-label="Search">
                </form>

            </ul>
          </div>
      </nav>
    </div>
  </div>

</br></br>

   <div class="row">
     <div class="col-2">
       <div class="sidebar">
  </br>
  <img src="img/Untitled271.jpg" style="width: 75px;margin-left: 55px;border: solid;border-radius:50%;">
  </br></br>
  <a href="Profile.php">Profile</a>
  <a href="Bookmarks.php">Bookmarks</a>
  <a href="#news">About</a>
  <a href="#about">Logout</a>
</div>
     </div>
    <div class="col-8">
    </br>






  <div class="container bootstrap snippets bootdeys">
      <div class="col-md-7 col-md-offset-2">

          <div class="panel">


            <div class="panel-body">




  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      Dropdown button
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Link 1</a></li>
      <li><a class="dropdown-item" href="#">Link 2</a></li>
      <li><a class="dropdown-item" href="#">Link 3</a></li>
    </ul>
  </div>
            </br>
            		<textarea class="form-control" rows="2" placeholder="Write something here..."></textarea>
            		<div class="mar-top clearfix">
                </br>

    <form>
    <div class="input-group">
      <input
        type="text"
        class="form-control p-4"
        data-role="tagsinput"
        placeholder="Put Tags Here!"
      />
    </div>
  </form>
                </br>

                  <label>
                    <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" data-original-title="Add Video" data-toggle="tooltip"></a>
                    <input type="file" name="myImage" accept="video/*" style="display:none;"/>
                  </label>
                  <label>
                    <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" data-original-title="Add Photo" data-toggle="tooltip"></a>
                    <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" style="display:none;"/>
                  </label>
          			<a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#" data-original-title="Add File" data-toggle="tooltip"></a>
          		</div>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div>

            <div class="post-description">

                <button class="btn" type="button" style="background-color:#6C452D; color:white;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Open Adopt
                </button>
              </br></br>
                <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
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
            <div class="post-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
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
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Ryan Haywood</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Relax my friend</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="#">
                                    <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>Ok, cool.</p>
                                </div>
                            </li>
                        </ul>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="bootstrap-tagsinput.js"></script>
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
