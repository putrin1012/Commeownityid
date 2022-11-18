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
                  style="width:100px;"/>
                </div>
                <!--a class="nav-link" href="index.php"><i class="fa fa-filter add-tooltip"></i>  Filter </a-->
            </ul>
          </div>
      </nav>
    </div>
  </div>

</br></br>
