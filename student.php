<?php session_start();
$_SESSION['username'] = "Akeshala";
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

  <title>Profile - Name of the person </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

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
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
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
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
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


          <!-- logout start-->
          <li><a class="" href="login.html">
              <font size="2">Logout</font>
            </a></li>
          <!-- logout end -->

          <!-- report a problem start-->
          <li><a class="" href="login.html">
              <font size="2">Report a problem</font>
            </a></li>
          <!-- report a problem end-->

        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4>Jenifer Smith</h4>
                  <div class="follow-ava">
                    <img src="img/profile-widget-avatar.jpg" alt="">
                  </div>
                  <h6>Administrator</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <p>Hello I’m Jenifer Smith, a leading expert in interactive and creative design.</p>
                  <p>@jenifersmith</p>
                  <p><i class="fa fa-twitter">jenifertweet</i></p>
                  <h6>
                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                    <span><i class="icon_calendar"></i>25.10.13</span>
                    <span><i class="icon_pin_alt"></i>NY</span>
                  </h6>
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

                  <li class="">
                    <a data-toggle="tab" href="#profile">
                      <i class="icon-user"></i>
                      Profile
                    </a>
                  </li>
                  <li class="active">
                    <a data-toggle="tab" href="#edit-profile">
                      <i class="icon-envelope"></i>
                      Edit Profile
                    </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <!-- profile -->
                  <div id="profile" class="tab-pane">
                    <section class="panel">
                      <div class="bio-graph-heading">
                        Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                      </div>
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>: Jenifer </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Last Name </span>: Smith</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Birthday</span>: 27 August 1987</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Country </span>: United</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Occupation </span>: UI Designer</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>:jenifer@mailname.com</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Mobile </span>: (+6283) 456 789</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Phone </span>: (+021) 956 789123</p>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="f-name" placeholder=" ">
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="l-name" placeholder=" ">
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">About Me</label>
                            <div class="col-lg-10">
                              <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Country</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="c-name" placeholder=" ">
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Birthday</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="b-day" placeholder=" ">
                            </div>

                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Occupation</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="occupation" placeholder=" ">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="email" placeholder=" ">
                            </div>
                          </div>
                          <!--image upload-->
                          

                          <?php
                          if (isset($_POST['submit'])) {
                            move_uploaded_file($_FILES['file']['tmp_name'], "pictures/" . $_FILES['file']['name']);
                            $con = mysqli_connect("localhost", "root", "", "test search");
                            $q = mysqli_query($con, "UPDATE students SET image = '" . $_FILES['file']['name'] . "' WHERE username = '" . $_SESSION['username'] . "'");
                          }
                          ?>

                          <!DOCTYPE html>
                          <div class="form-group">
                            <form action="" method="post" enctype="multipart/form-data">
                              <input type="file" name="file">
                              <input type="submit" name="submit">
                            </form>
                          </div>

                          <?php
                          $con = mysqli_connect("localhost", "root", "", "test search");
                          $q = mysqli_query($con, "SELECT * FROM students");
                          while ($row = mysqli_fetch_assoc($q)) {
                            echo $row['username'];
                            if ($row['image'] == "") {
                              echo "<img width='100' height='100' src='pictures/default.jpg' alt='Default Profile Pic'>";
                            } else {
                              echo "<img width='100' height='100' src='pictures/" . $row['image'] . "' alt='Profile Pic'>";
                            }
                            echo "<br>";
                          }
                          ?>
                          <!--eng of image upload-->

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="mobile" placeholder=" ">
                            </div>

                            <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Upload CV</label>
                              <div class="col-lg-6">
                                <input type="location">


                              </div>
                            </div>
                        </form>
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
      <!-- jquery knob -->
      <script src="assets/jquery-knob/js/jquery.knob.js"></script>
      <!--custome script for all page-->
      <script src="js/scripts.js"></script>


      <script>
        //knob
        $(".knob").knob();
      </script>


</body>

</html>