<!DOCTYPE html>
<?php
  $userSidebar = new User();
  $userprofile = $userSidebar->getData($_SESSION['ID']);
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="row align-items-center">

                                <div class="media align-items-end profile-header">
                                    <div class="profile mr-3"><img src="img/oren.png" style="display:block; margin:auto;" width="140" class="rounded-circle img-thumbnail"></div>
                                    <a href="#" class="btn btn-dark btn-sm btn-block">Edit profile</a>
                                </div>
                                    <ul class="list-unstyled mb-1-9">
                                    <h3 font face="Courier New" color="dark" size="3">John mark Doe Kyzer</h3>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa fa-facebook fa-1x"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa fa-pinterest fa-1x"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa fa-instagram fa-1x"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="fa fa-twitter fa-1x"></i>
                                        </button>
                                    </div>
                                    <strong>HoomanCAT</strong>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Username:</span><?php echo $userprofile['userName']??''; ?></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Lokasi:</span><?php echo $userprofile['Location']??''; ?></li>
                                        <!-- <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> edith@mail.com</li> -->
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Kontak:</span> <a style="font-color='black';"> Whatsapp (Kyo)</span></li>
                                        <!-- <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li> -->
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Kontak:</span> <a  style="font-color='black';"> Whatsapp (Kyo)</span></li>
                                        <!-- <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
