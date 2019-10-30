<?php include "../connection/index.php"; ?>
<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
<?php 
if (!isset($_SESSION['ssemail'])) {
        header("Location: ../index.php");
    }



if (isset($_POST['edit_alumni'])) {
        
        $connection = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);
        $fname=mysqli_real_escape_string($connection,$_POST['fname']);
        $lname=mysqli_real_escape_string($connection,$_POST['lname']);
        $dob=mysqli_real_escape_string($connection,$_POST['dob']);
        $contact=mysqli_real_escape_string($connection,$_POST['contact']);
        $address=mysqli_real_escape_string($connection,$_POST['address']);
        $id=$_POST['aid'];
        

        $query = "UPDATE alumni_data set first_name='".$fname."',last_name='".$lname."',date_of_birth='".$dob."',contact_no='".$contact."',address='".$address."' WHERE Alumni_alumni_id=".$id;
        if (!mysqli_query($connection,$query)) {
            
        }
        else{
            echo "<script>alert('Alumni Updated');</script>";
        }


}
else{
    $alumni_id = $_GET['id'];


$connect = mysqli_connect("localhost","root","",$_SESSION['ssuniversity']);

$query = "SELECT * FROM alumni,alumni_data WHERE alumni_id=".$alumni_id." AND alumni.alumni_id=alumni_data.Alumni_alumni_id ";

        $data  = mysqli_query($connect,$query);
        if (mysqli_query($connect,$query)) {
            
        }
        if (mysqli_num_rows($data) > 0 ) {
            while ($rowsdata = mysqli_fetch_assoc($data)) {
                
            
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Alumni</title>
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
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
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
        .footer-copyright-area{
            margin-top: 170px;
        }
    </style>
    <script type="text/javascript">
        window.addEventListener("load", function(){
            var load = document.getElementById("loading");
            document.body.removeChild(load);
        });
        window.onload = function() {
            document.getElementById("wName").focus();
        }
    </script>
</head>
<div id="loading">
        <div id="loader"><img src="../img/loader1.gif" /></div>
</div>
<body>
    <div class="demo"></div>
    
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
                                    <li><a title="Add Workshop" href="add-workshop.php"><span class="mini-sub-pro">Add
                                                Workshop</span></a></li>
                            
                                
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span>
                                    <span class="mini-click-non">Posts</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Posts" href="all-posts.php"><span class="mini-sub-pro">All
                                                Posts</span></a></li>
                                    <li><a title="Add Post" href="add-post.php"><span class="mini-sub-pro">Add
                                                Post</span></a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-students.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span>
                                    <span class="mini-click-non">Alumni</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Alumni" href="all-alumni.php"><span class="mini-sub-pro">All
                                    Alumni</span></a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-students.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span>
                                    <span class="mini-click-non">Requests</span></a>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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

                        <span style="background-color='black'">
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
                                                        
                                                        <span class="admin-name">
                                                            <?php echo substr($_SESSION['ssemail'],0,5); ?>
                                                        </span>
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
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.php">Dashboard v.1</a></li>
                                                <li><a href="index-1.php">Dashboard v.2</a></li>
                                                <li><a href="index-3.php">Dashboard v.3</a></li>
                                                <li><a href="analytics.php">Analytics</a></li>
                                                <li><a href="widgets.php">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.php">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.php">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.php">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.php">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.php">Static Table</a>
                                                </li>
                                                <li><a href="data-table.php">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Alumni</span>
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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Alumni</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="edit-alumni.php" method="POST" >
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" disabled="" name="aid" placeholder="Alumni ID" 
                                                                    <?php echo "value='".$rowsdata['alumni_id']."'"; ?> >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="fname" placeholder="First Name" <?php echo "value='".$rowsdata['first_name']."'"; ?>
                                                                    >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" <?php echo "value='".$rowsdata['last_name']."'"; ?>
                                                                    >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="date" class="form-control" name="dob" placeholder="DOB" <?php echo "value='".$rowsdata['date_of_birth']."'"; ?>>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="contact" placeholder="Phone Number" <?php echo "value='".$rowsdata['contact_no']."'";?>
                                                                    >
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" disabled="" name="password" placeholder="Password" <?php echo "value='".$rowsdata['password']."'"; ?> >
                                                                </div>
                                                               <div class="form-group">
                                                                    <input type="text" name="batch" disabled="" class="form-control" placeholder="Batch" <?php echo "value='".$rowsdata['batch']."'"; ?> >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="address" class="form-control" placeholder="Address" <?php echo "value='".$rowsdata['address']."'"; }}}?> >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button name="edit_alumni" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright � 2018. All rights reserved By Alumni Portal</p>
                        </div>
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
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>