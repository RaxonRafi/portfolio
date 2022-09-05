<?php
session_start();
if (!isset($_SESSION['login_status'])) {

    header('location: notallowed.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span><!-- input-group-btn -->
        </div><!-- input-group -->

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="dashboard.php" class="sl-menu-link <?= (isset($dashboard)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="experience.php" class="sl-menu-link <?= (isset($experince)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-20"></i>
                    <span class="menu-item-label">Experience</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="skill.php" class="sl-menu-link <?= (isset($skill)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-20"></i>
                    <span class="menu-item-label">skill</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="testimonial.php" class="sl-menu-link <?= (isset($testimonial)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-20"></i>
                    <span class="menu-item-label">testimonial</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="service.php" class="sl-menu-link <?= (isset($service)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-20"></i>
                    <span class="menu-item-label">service</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="news.php" class="sl-menu-link <?= (isset($news)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-20"></i>
                    <span class="menu-item-label">News</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="modal.php" class="sl-menu-link <?= (isset($modal)) ? 'active' : '' ?>">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-briefcase tx-20"></i>
                    <span class="menu-item-label">Modal</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
                    <span class="menu-item-label">Pages</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
                <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
                <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
                <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
            </ul>
        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name"><i class="icon ion-ios-person-outline"></i><?= $_SESSION['login_name'] ?></span>
                        <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>

                            <li><a href="../index.php"><i class="icon ion-ios-gear-outline"></i> Visit Website</a></li>

                            <li><a href="logout.php"><i class="icon ion-power"></i> log Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right -->
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->