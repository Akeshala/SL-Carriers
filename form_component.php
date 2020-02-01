<?php include('server.php') ?>
<?php

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
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

  <title>Form Component</title>

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
        <a href="index.php" class="logo">SL<span class="lite">Careers</span></a>
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
                                    <span class="from">Greg  Martin</span>
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
                                    <span class="from">Bob   Mckenzie</span>
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
                                    <span class="from">Phillip   Park</span>
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
                                    <span class="from">Ray   Munoz</span>
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
            <?php if (isset($_SESSION['email'])) : ?>
            <li class="dropdown">
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
              <a href="index.php?logout='1'"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
            </li>
            <?php endif ?>
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
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="form_component.php">
                          <i class="icon_document_alt"></i>
                          <span>Edit My Profile</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="form_validation_new.php">
              <i class='icon_shield_alt'></i>
                <span>Security Settings</span>
            </a>
          </li>
          <li class="active">
          <a class="" href="image_upload.php">
            <i class='icon_camera_alt'></i>
            <span>Upload My Image</span>
          </a>
          </li>
        </ul>
      </div>
    </aside>
    <!--sidebar end..........................................-->
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i><strong>Edit My Profile</strong></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form                                                
              </header>
              <!------Student Form start........................................................-->
              <div class="panel-body">
                  <!----Full name.................................................-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Full Name</label>
                    
                    <div class="col-sm-10">
                      <input name="fullname" type="text" class="form-control input-lg m-bot15" placeholder="Enter Your Full Name">
                    </div>
                  </div>
                  <!--Address..................................................-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Home address</label>
                    <div class="col-sm-10">
                      <input class="form-control input-lg m-bot15" name="apartmentnumber" type="text" placeholder="Apartment Number">
                      <input class="form-control input-lg m-bot15" name="streetname" type="text" placeholder="Street Name">
                      <input class="form-control input-lg m-bot15" name="cityname" type="text" placeholder="City Name">
                      <input class="form-control input-lg m-bot15" name="postalcode" type="text" placeholder="Postal Code">
                    </div>
                  </div>
                  <!--Gender.................................-->
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="gender">Gender</label>
                    <div class="col-lg-10">
                      <select class="form-control m-bot15" name="gender">
                       <option>Male</option>
                       <option>Female</option>
                       <option>Other</option>                    
                      </select>                    
                    </div>
                  </div>

                  <!--telephone number.........-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                      <input class="form-control input-lg m-bot15" name = "phone" type="tel" placeholder="Type Your Telephone Number" >
                    </div>
                  </div>
                  <!--positions......................................-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Positions you are applying for</label>
                    <div class="col-sm-10">
                      <input class="form-control input-lg m-bot15" name="position1"  type="text" placeholder="Position 1">
                      <input class="form-control input-lg m-bot15" name="position2" type="text" placeholder="Position 2">
                      <input class="form-control input-lg m-bot15" name="position3" type="text" placeholder="Position 3">
                      <input class="form-control input-lg m-bot15" name="position4" type="text" placeholder="Position 4">
                    </div>
                  </div>
                  <!--Salary..............................................-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Salary Requirement</label>
                    <div class="col-sm-10">
                      <input class="form-control input-lg m-bot15" name="salary" type="number" placeholder="Type Expected Salary - Rs/=">
                    </div>
                  </div>                            
              </div>
            </section>
            <section class="panel">
              <div class="panel-body">
                <!--Experience.........................-->
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="WorkExp">Work Experience</label>
                    <div class="col-lg-10">
                      <div class="checkbox">
                        <label>
                          <input type="radio" value="Less than a year/Newbie" name="workexperience">
                             Less than a year / Newbie
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="radio" value="1-3 years" name="workexperience">
                            1&mdash;3 years
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="radio" value="More than 3 years" name="workexperience">
                              More than 3 years
                        </label>
                      </div>
                    </div>
                  </div>
                <!--end of student form...........................-->
              </div>
            </section>
          </div>
        </div>
      </section>
    

                 
 
    
    <div class="col-lg-12">
      <section class="panel">
        <!--Text editor..............................................................-->
        <header class="panel-heading">
          Write Something About You
        </header>
        <div class="panel-body">
          <div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
          </div>
        </div>
          <!--End Text editor........................................................-->
        <!--Check box................................................-->
      </section>
    </div>
    
    <div class="row">
      <div class="col-lg-6">
      <section class="panel">                     
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <div class="checkbox">
              <label>
                <input type="checkbox"> I agree that above details are true
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-danger" name="edit_profile">Save</button>
          </div>
        </div>
        </section>
      </section>
    </div>
  </div> 
  </section>
  <!-- page end-->
  <!-- container section end -->
</form>







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
</body>

</html>
