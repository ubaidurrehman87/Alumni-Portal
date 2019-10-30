<?php include "../connection/index.php"; ?>
<?php include "../classes.php" ?>
<?php session_start(); ?>

<?php 
    
    if (!isset($_SESSION['ssemail'])) {
        header("Location: ../index.php");
    }
    

?>

<?php
function myGET() {
  $aGet = array();

  if(isset($_GET['query'])) {
    $aGet = explode('/', $_GET['query']);
  }

  return $aGet;
}
?>

<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if ($_SESSION['ssrole']== 'representative') {echo "Representative";}
        elseif ($_SESSION['ssrole']== 'Admin') {echo "Administrator";}
        else{echo "Alumnus";} ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">

    <!-- FONT AWESOME CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <!-- Preloader CSS
            
		============================================ -->
    <link rel="stylesheet" href="css/preloader/preloader-style.css">
    <script>
        window.addEventListener("load", function(){
            var load = document.getElementById("loading");
            document.body.removeChild(load);
        });
    </script>
    <style>
        #loading{
            background:#fff;
            opacity: 1;
            position: fixed;
            z-index: 10;
            top:0;
            width: 100%;
            height:1600px;
        }
        #loader{
            color:#fff;
            width:250px;
            height:250px;
            margin:300px auto;
            margin-left: 700px;
        }
    </style>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<div id="loading">
        <div id="loader"><img src="../img/loader1.gif" /></div>
    </div>
<body style="color='white'">


    <!--LOADER JS -->

    <div class="demo">
 
    </div>




    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
            <nav id="sidebar" class="" style="background: #2b3031">
                <div class="sidebar-header" style=" height: 60px; padding-top:5px;">
                    <a href="index"><i style="font-size: 30px;color: white;" class="fas fa-graduation-cap"></i></a>
                    
                    <div id="header-name">
                        <a style="font-size: 22px;color: white;" href="index.php"><b>Alumni</b> Portal</a>
                    </div>
                </div>
    
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro ">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a title="Landing Page" aria-expanded="false" href="index.php">
                                    <!-- <span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> -->
                                    <span class="mini-click-non"></span>
                                </a>
                            </li>
                            <li class="active">
                                <a title="Your Profile" aria-expanded="false" href="index.php">
                                    <span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span>
                                    <span class="mini-click-non">Profile</span>
                                </a>
                            </li>
                            <li class="active">
                                <a title="All data" aria-expanded="false" href="information.php">
                                    <span class="educate-icon educate-info icon-wrap" aria-hidden="true"></span>
                                    <span class="mini-click-non">Information</span>
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg"></span>
                                    <span class="mini-click-non">Workshops</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Workshops" href="all-workshops.php"><span class="mini-sub-pro">All
                                                Workshops</span></a></li>
                                    <li <?php if ($_SESSION['ssrole']== 'Alumni'){ echo "style='visibility:hidden;'";} ?> ><a title="Add Workshop" href="add-workshop.php"><span class="mini-sub-pro">Add
                                                Workshop</span></a></li>
                            
                                
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span>
                                    <span class="mini-click-non">Posts</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Posts" href="all-posts.php"><span class="mini-sub-pro">All
                                                Posts</span></a></li>
                                    <li ><a title="Add Post" href="add-post.php"><span class="mini-sub-pro">Add
                                                Post</span></a></li>
                                    
                                </ul>
                            </li>
                            <?php if ($_SESSION['ssrole']== 'representative') {
                                echo '<li>
                                <a href="add-admin.php" aria-expanded="true"><span class="educate-icon educate-student icon-wrap"></span>
                                    <span class="mini-click-non">Add Admin</span></a>
                                
                            </li>';
                            } ?>
                            <li>
                                <a class="has-arrow" href="all-students.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span>
                                    <span class="mini-click-non">Alumni</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Alumni" href="all-alumni.php"><span class="mini-sub-pro">All
                                    Alumni</span></a></li>
                                    
                                </ul>
                            </li>
                            <li <?php if ($_SESSION['ssrole']== 'Alumni'){ echo "style='visibility:hidden;'";} ?>>
                                <a class="has-arrow" href="all-students.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span>
                                    <span class="mini-click-non">Requests <span class="req"><?php $req = new alumni(); $req->requests();?></span></span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Requests" href="requests.php"><span class="mini-sub-pro">All
                                    Requests</span></a></li>
                                    
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid" style="background:#2b3031;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro" style="background:#2b3031;">
                        <div class="sidebar-header" style=" height: 60px;">
                    <a href="index.php"><i style="font-size: 30px;color: white;" class="fas fa-graduation-cap"></i></a>
                    
                    <div id="header-name">
                        <a style="font-size: 22px;color: white;" href="index.php"><b>Alumni</b> Portal </a>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">

                       
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro"
                                                            aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell"
                                                            aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle">
                                                        
                                                        <span class="admin-name"><?php echo ucfirst(substr($_SESSION['ssemail'],0,5)); ?></span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Edit My Account</a>
                                                        </li>
                                                        <li><a href="index"><span class="edu-icon edu-user-rounded author-log-ic"></span>My
                                                                Profile</a>
                                                        </li>
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log
                                                                Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open">
                                                    <a style="color:blue;" href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="educate-icon educate-menu"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="events.php">Event</a></li>
                                        <li><a href="events.php">Jobs</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.php">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.php">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.php">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.php">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.php">All Students</a>
                                                </li>
                                                <li><a href="add-student.php">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.php">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.php">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.php">All Courses</a>
                                                </li>
                                                <li><a href="add-course.php">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.php">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.php">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.php">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.php">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.php">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.php">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.php">Departments List</a>
                                                </li>
                                                <li><a href="add-department.php">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.php">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.php">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.php">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.php">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.php">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.php">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.php">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.php">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.php">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.php">Tree View</a>
                                                </li>
                                                <li><a href="preloader.php">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.php">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.php">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.php">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.php">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.php">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.php">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.php">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.php">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.php">Static Table</a>
                                                </li>
                                                <li><a href="data-table.php">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.php">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.php">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.php">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.php">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.php">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.php">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                                                <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.php">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.php">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.php">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.php">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.php">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.php">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.php">Login</a>
                                                </li>
                                                <li><a href="register.php">Register</a>
                                                </li>
                                                <li><a href="lock.php">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.php">Password Recovery</a>
                                                </li>
                                                <li><a href="404.php">404 Page</a></li>
                                                <li><a href="500.php">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="library-book-area mg-t-30" style="float: left;">
            <div class="container-fluid">
                <div class="row">
                    <div style="width: 60%;" class="col-lg-4">
                        <div class="single-cards-item">
                            <div class="single-product-image">
                                <a href="#"><img src="img/portal_logo.png" width="400px" height="400px" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <img <?php if ($_SESSION['ssrole']== 'representative') {
                                    echo "src='img/product/3.jpg'";
                                }
                                elseif ($_SESSION['ssrole']== 'Admin') {

                                    // $mysqli = new mysqli("localhost","root","",$_SESSION['ssuniversity']);
                                    // $query = "SELECT * FROM admin_data where Admin_admin_id=1";
                                    // $data = mysqli_query($mysqli,$query);
                                    // if (mysqli_num_rows($data) > 0) {
                                    //     while ($result = mysqli_fetch_assoc($data)) {
                                    //         echo $result['photo'];
                                    //     }
                                    // }



                                     echo "src='img/product/pro4.jpg'";
                                 }
                                 else{
                                    echo "src='img/contact/2.jpg'";
                                 } ?> alt="">
                                <h4><a class="cards-hd-dn" <?php echo "href='mailto:".$_SESSION['ssemail']."'"; ?>><?php echo $_SESSION['ssemail']; ?></a></h4>
                                <h5><?php if ($_SESSION['ssrole']== 'representative') {
                                    echo "Representative";
                                }
                                elseif ($_SESSION['ssrole']== 'Admin') {
                                     echo "Administrator";
                                 }
                                 else{
                                    echo "Alumnus";
                                 } ?></h5>
                                <p class="ctn-cards"></p>
                                <a class="follow-cards" href="#"></a>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
      
        
   
        <div class=" col-md-9 col-lg-9"> 
          <table class="table table-user-information">
            <tbody>
            <?php

            $connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);

            if ($_SESSION['ssrole']== 'Alumni') {

            $query = "SELECT * FROM alumni,alumni_data WHERE alumni.alumni_id=alumni_data.Alumni_alumni_id AND email_address='".$_SESSION['ssemail']."'";
            
            $data  = mysqli_query($connect,$query);

            if (mysqli_num_rows($data) > 0 ) {

            
                while($rowdata = mysqli_fetch_assoc($data)){
                    echo '<tr>
                            <td>First Name : </td>
                            <td>'.$rowdata['first_name'].'</td>
                        </tr>
                        <tr>
                            <td>Last Name : </td>
                            <td>'.$rowdata['last_name'].'</td>
                        </tr>
                        <tr>
                            <td>Date of Birth : </td>
                            <td>'.$rowdata['date_of_birth'].'</td>
                        </tr>                   
                        <tr>
                            <td>Contact Number : </td>
                            <td>'.$rowdata['contact_no'].'</td>
                        </tr>
                        <tr>
                            <td>Residential Address : </td>
                            <td>'.$rowdata['address'].'</td>
                        </tr>';
                        if ($_SESSION['ssrole']=='Alumni') {
                            echo "<tr>
                            <td>Batch : </td>
                            <td>".$rowdata['batch']."</td>
                            </tr>';";
                        }
                }
            }
        }
        else if ($_SESSION['ssrole']== 'Admin') {

            $query = "SELECT * FROM admin,admin_data WHERE admin.admin_id=admin_data.Admin_admin_id AND email_address='".$_SESSION['ssemail']."'";
           
            $data  = mysqli_query($connect,$query);

            if (mysqli_num_rows($data) > 0 ) {

            
                while($rowdata = mysqli_fetch_assoc($data)){
                    echo '<tr>
                            <td>First Name : </td>
                            <td>'.$rowdata['first_name'].'</td>
                        </tr>
                        <tr>
                            <td>Last Name : </td>
                            <td>'.$rowdata['last_name'].'</td>
                        </tr>
                        <tr>
                            <td>Date of Birth : </td>
                            <td>'.$rowdata['date_of_birth'].'</td>
                        </tr>                   
                        <tr>
                            <td>Contact Number : </td>
                            <td>'.$rowdata['contact_no'].'</td>
                        </tr>
                        <tr>
                            <td>Residential Address : </td>
                            <td>'.$rowdata['address'].'</td>
                        </tr>';
                        if ($_SESSION['ssrole']=='Alumni') {
                            echo "<tr>
                            <td>Batch : </td>
                            <td>".$rowdata['batch']."</td>
                            </tr>';";
                        }
                }
            }
        }
        else{
            $query = "SELECT * FROM representative where email_address='".$_SESSION['ssemail']."'";
            $data  = mysqli_query($connect,$query);

            if (mysqli_num_rows($data) > 0 ) {

            
                while($rowdata = mysqli_fetch_assoc($data)){
                    echo '<tr>
                            <td>First Name : </td>
                            <td>'.$rowdata['user_name'].'</td>
                        </tr>
                        <tr>
                            <td>Last Name : </td>
                            <td>'.$rowdata['email_address'].'</td>
                        </tr>
                        <tr>
                            <td>Date of Birth : </td>
                            <td>Not Available</td>
                        </tr>                   
                        <tr>
                            <td>Contact Number : </td>
                            <td>Not Available</td>
                        </tr>
                        <tr>
                            <td>Residential Address : </td>
                            <td>Not Available</td>
                        </tr>';
                        if ($_SESSION['ssrole']=='Alumni') {
                            echo "<tr>
                            <td>Batch : </td>
                            <td>".$rowdata['batch']."</td>
                            </tr>';";
                        }
                }
            }
        }
            ?>
            <tr>
                <td>Email Address : </td>
                <td><a <?php echo "href='mailto:".$_SESSION['ssemail']."'"; ?>><?php echo $_SESSION['ssemail']; ?></a></td>
            </tr>
            </tbody>
          </table>
        </div>


        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                       
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->
</body>

</html>