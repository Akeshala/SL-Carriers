<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title> Profile - Name of the company </title>

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
            <h3 class="page-header"><i class="fa fa-user-md"></i> Comapany </h3>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4>Company name</h4>
                  <div class="follow-ava">
                    <img src="img/profile-widget-avatar.jpg" alt="">
                  </div>
                  <h6>Employee</h6>
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
        <?php
        include 'DBController.php';
        $db_handle = new DBController();
        $countryResult = $db_handle->runQuery("SELECT DISTINCT field FROM students ORDER BY field ASC");
        ?>

          
          <h2>Search for Applicants</h2>
          <form method="POST" name="search" action="company.php">
            <div id="demo-grid">
              <div class="search-box">
                <select id="Place" name="field[]">
                  <option value="0" selected="selected">Select Field</option>
                  <?php
                  if (!empty($countryResult)) {
                    foreach ($countryResult as $key => $value) {
                      echo '<option value="' . $countryResult[$key]['field'] . '">' . $countryResult[$key]['field'] . '</option>';
                    }
                  }
                  ?>
                </select><br> <br>
                <button id="Filter">Search</button>
              </div>

              <?php
              if (!empty($_POST['field'])) {
              ?>
                <table cellpadding="10" cellspacing="1">

                  <thead>
                    <tr>
                      <th><strong>username</strong></th>
                      <th><strong>id</strong></th>
                      <th><strong>email</strong></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = 'SELECT * from students';
                    $i = 0;
                    $selectedOptionCount = count($_POST['field']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                      $selectedOption = $selectedOption . "'" . $_POST['field'][$i] . "'";
                      if ($i < $selectedOptionCount - 1) {
                        $selectedOption = $selectedOption . ", ";
                      }

                      $i++;
                    }
                    $query = $query . " WHERE field in (" . $selectedOption . ")";

                    $result = $db_handle->runQuery($query);
                  }
                  if (!empty($result)) {
                    foreach ($result as $key => $value) {
                    ?>
                      <tr>
                        <td>
                          <div class="col" id="user_data_1"><?php echo $result[$key]['username']; ?></div>
                        </td>
                        <td>
                          <div class="col" id="user_data_2"><?php echo $result[$key]['id']; ?> </div>
                        </td>
                        <td>
                          <div class="col" id="user_data_3"><?php echo $result[$key]['email']; ?> </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>

                  </tbody>
                </table>
              <?php
                  }
              ?>
            </div>
          </form>


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
      <!-- ck editor -->
      <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

      <script>
        //knob
        $(".knob").knob();
      </script>


</body>

</html>