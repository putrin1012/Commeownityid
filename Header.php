<!DOCTYPE HTML>
<html>
<head>
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
    color: black;
}
</style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
