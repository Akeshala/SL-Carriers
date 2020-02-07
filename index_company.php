<?php include('server.php') ?>
<?php
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>student_profile</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/daterangepicker.css" rel="stylesheet" />
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body>
    <form class="form-horizontal " method="post" action="form_component.php">
        <!-- container section start -->
        <section id="container" class="">
            <!--header start-->
            <header class="header dark-bg">
                <div class="toggle-nav">
                    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
                </div>
                <!--logo start-->
                <a href="index_company.html" class="logo">SL<span class="lite">Careers</span></a>
                <!--logo end-->
                <div class="top-nav notification-row">
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">
                        <!-- inbox notificatoin start-->
                        <li id="mail_notificatoin_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope-l"></i>
                                <span class="badge bg-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-blue"></div>
                                <li>
                                    <p class="blue">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" width="50" height="40" src="./img/avatar-mini.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Greg Martin</span>
                                            <span class="time">1 min</span>
                                        </span>
                                        <span class="message">
                                            I really like this admin panel.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" width="200" height="40" src="./img/avatar-mini2.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Bob Mckenzie</span>
                                            <span class="time">5 mins</span>
                                        </span>
                                        <span class="message">
                                            Hi, What is next project plan?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Phillip Park</span>
                                            <span class="time">2 hrs</span>
                                        </span>
                                        <span class="message">
                                            I am like to buy this Admin Template.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Ray Munoz</span>
                                            <span class="time">1 day</span>
                                        </span>
                                        <span class="message">
                                            Icon fonts are great.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox notificatoin end -->
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <?php if (isset($_SESSION['email'])) : ?>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="profile-ava">
                                        <img alt="" width="35" height="35" src="pictures/<?php echo $_SESSION['username']; ?>">
                                    </span>
                                    <span class="username"><?php echo $_SESSION['username']; ?></span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <div class="log-arrow-up"></div>
                                    <li>
                                        <a href="index_company.php?logout='1'"><i class="icon_key_alt"></i> Log Out</a>
                                    </li>

                                </ul>
                            <?php endif ?>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>
            <!--header end-->
            <!--sidebar start..........................................-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a class="" href="index_company.php">
                                <i class="icon_house_alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="active">
                            <a class="" href="form_component_company.php">
                                <i class="icon_document_alt"></i>
                                <span>Edit My Profile</span>
                            </a>
                        </li>
                        <li class="active">
                            <a class="" href="Form_validation_new_company.php">
                                <i class='icon_shield_alt'></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li class="active">
                            <a class="" href="image_upload_company.php">
                                <i class='icon_camera_alt'></i>
                                <span>Upload My Image</span>
                            </a>
                        </li>
                        <li class="active">
                            <a class="" href="search.php">
                                <i class='icon_search'></i>
                                <span>Search Applicants</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="icon_house_alt"></i><strong> Home</strong></h3>
                        </div>
                    </div>
                    <div class="row">
                        <!-- profile-widget -->
                        <div class="col-lg-12">
                            <div class="profile-widget profile-widget-info">
                                <div class="panel-body">
                                    <div class="col-lg-2 col-sm-2">
                                        <h4><strong><?php echo $_SESSION['username']; ?></strong></h4>
                                        <div class="follow-ava">
                                        <img alt="" width="200" height="200" src="pictures/<?php echo $_SESSION['username']; ?>">
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-sm-4 follow-info">
                                        <p>We are looking for experts !</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading tab-bg-info">
                                    <ul class="nav nav-tabs">

                                    </ul>
                                </header>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <!-- profile -->
                                        <div id="profile" class="tab-pane active">
                                            <section class="panel">
                                                <div class="panel-body bio-graph-info">
                                                    <div class="row">
                                                        <div class="bio-row">
                                                            <p><span>Full Name</span>: <?php echo $_SESSION['fullname']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Apartment No. </span>: <?php echo $_SESSION['apartmentnumber']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Company Name</span>: <?php echo $_SESSION['companyname']; ?></p>
                                                        </div>


                                                        <div class="bio-row">
                                                            <p><span>Street Name</span>: <?php echo $_SESSION['streetname']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Designation</span>: <?php echo $_SESSION['designation']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>City Name </span>: <?php echo $_SESSION['cityname']; ?></p>
                                                        </div>

                                                        <div class="bio-row">
                                                            <p><span>Gender </span>:<?php echo $_SESSION['gender']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Postal Code </span>: <?php echo $_SESSION['postalcode']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Tel No. </span>: <?php echo $_SESSION['phone']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Field 1 </span>: <?php echo $_SESSION['position1']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Field 2 </span>: <?php echo $_SESSION['position2']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Field 3 </span>: <?php echo $_SESSION['position3']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Field 4 </span>: <?php echo $_SESSION['position4']; ?></p>
                                                        </div>
                                                        <div class="bio-row">
                                                            <p><span>Work Experience Expecting </span>: <?php echo $_SESSION['workexperience']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- page end-->
                </section>







                <!-- javascripts -->
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <!-- nice scroll -->
                <script src="js/jquery.scrollTo.min.js"></script>
                <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

                <!-- jquery ui -->
                <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

                <!--custom checkbox & radio-->
                <script type="text/javascript" src="js/ga.js"></script>
                <!--custom switch-->
                <script src="js/bootstrap-switch.js"></script>
                <!--custom tagsinput-->
                <script src="js/jquery.tagsinput.js"></script>

                <!-- colorpicker -->

                <!-- bootstrap-wysiwyg -->
                <script src="js/jquery.hotkeys.js"></script>
                <script src="js/bootstrap-wysiwyg.js"></script>
                <script src="js/bootstrap-wysiwyg-custom.js"></script>
                <script src="js/moment.js"></script>
                <script src="js/bootstrap-colorpicker.js"></script>
                <script src="js/daterangepicker.js"></script>
                <script src="js/bootstrap-datepicker.js"></script>
                <!-- ck editor -->
                <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
                <!-- custom form component script for this page-->
                <script src="js/form-component.js"></script>
                <!-- custome script for all page -->
                <script src="js/scripts.js"></script>

                <p></P>
                <div class="row">.</div>
                <div class="row">.</div>
                <div class="row">.</div>
                <div class="row">.</div>
            </section>
        </section>
    </form>
</body>

</html>