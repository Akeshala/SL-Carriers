<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login - SLCAREERS</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="index.php" method="post">

      <!--Name of the site-->
      <div class="col-sm-8" style="margin-bottom:5">
        <h1>SLCAREERS</h1>
      </div>

      <!---->
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <?php include('errors.php'); ?>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
        </div>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login_user">Login</button>
        <p><br>Not a yet a member?</p>
        <button class="btn btn-info btn-lg btn-block" type="submit"><a href="register.php">Sign up></a></button>
      </div>
      <!---->

    </form>

  </div>
  <div class="btn-group" role="group" aria-label="Basic example">
    <br><br><br>
    <button type="button" class="btn btn-secondary"><a href="About_us.html">About Us</a></button>
    <button type="button" class="btn btn-secondary"><a href="contact.html">Contact</a></button>
  </div>


</body>

</html>