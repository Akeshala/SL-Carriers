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
  <title>Edit account settings</title>
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
          <!-- user login dropdown start-->
          <li class="dropdown">
            <?php if (isset($_SESSION['email'])) : ?>
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="profile-ava">
                  <img alt="" src="img/avatar1_small.jpg">
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
  </section>
  <!--sidebar end-->
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i><strong>Account Settings</strong></h3>
        </div>
      </div>
      <!-- Form validations -->

      <?php include('errors.php'); ?>
      <!--feedback-->
      <div class="row" hidden>
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Feedback to admin
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="Form_validation_new_company.php">
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="subject" name="subject" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit" name="sendfeedback">Save</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>

      <!--feedback-->
      <div class="row" hidden>
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Feedback to admin
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="Form_validation_new_company.php">
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cemail" type="email" name="email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control" id="subject" name="subject" minlength="5" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit" name="sendfeedback">Save</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>

      <!--username-->

      <div class="row" hidden>
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Change Your Username
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal " id="register_form" method="POST" action="Form_validation_new_company.php">
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" value='<?php echo $_SESSION['username']; ?>' type="text" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit" name="changeusernamecompany">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Change Your Username
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal " id="register_form" method="POST" action="Form_validation_new_company.php">
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" value='<?php echo $_SESSION['username']; ?>' type="text" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit" name="changeusernamecompany">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>


      <!--password-->

      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Change Your Password
            </header>
            <div class="panel-body">
              <div class="form">
                <form class="form-validate form-horizontal " id="register_form" method="POST" action="Form_validation_new_company.php">
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-primary" type="submit" name="changepasswordcompany">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>


      <!-- page end-->
    </section>
  </section>
  <!--main content end-->
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

</body>

</html>