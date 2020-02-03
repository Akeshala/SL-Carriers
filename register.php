<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title><p>SLCAREERS</P> Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <!--<div style="background-image: img('bg-1.jpg');">-->
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title"><p>Register with <span style="color: red;">SL</span><span style="color: blue;">CAREERS</span><p></h2>
                    <form method="POST" action="register.php">
                        <?php include('errors.php'); ?>
                        <div class="input-group">
                            <input class="input--style-1" type="text" value="<?php echo $username; ?>" placeholder="User name" name="username">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="email" value="<?php echo $email; ?>" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="typeuser" id="typeuser">
                                            <option selected="selected" value="">User Type</option>
                                            <!--<option>Select</option>-->
                                            <option value="Company">Company</option>
                                            <option value="Student">Student</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Enter a strong password" name="password_1">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Confirm password" name="password_2">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="reg_user">Submit</button>
                        </div>
                        <p><br>
                            Already a member? <a href="index.php">Sign in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>

</html>
<!-- end document-->