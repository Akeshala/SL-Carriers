<<<<<<< Updated upstream
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$typeuser = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $typeuser = mysqli_real_escape_string($db, $_POST['typeuser']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");
  if (empty($typeuser)) { array_push($errors, "Usertype is required"); }
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM usersall WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO usersall (username, email, password, typeuser) 
  			  VALUES('$username', '$email', '$password', '$typeuser')";
  	mysqli_query($db, $query);
  	//$_SESSION['email'] = $email;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

if (isset($_POST['login_user'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM usersall WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          $_SESSION['username']= $row['username'];
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  if (isset($_POST['edit_profile'])) {
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $apartmentnumber = mysqli_real_escape_string($db, $_POST['apartmentnumber']);
    $streetname = mysqli_real_escape_string($db, $_POST['streetname']);
    $cityname = mysqli_real_escape_string($db, $_POST['cityname']);
    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $position1 = mysqli_real_escape_string($db, $_POST['position1']);
    $position2 = mysqli_real_escape_string($db, $_POST['position2']);
    $position3 = mysqli_real_escape_string($db, $_POST['position3']);
    $position4 = mysqli_real_escape_string($db, $_POST['position4']);
    $salary = mysqli_real_escape_string($db, $_POST['salary']);
    $workexperience = mysqli_real_escape_string($db, $_POST['workexperience']);

    $query = "INSERT INTO usersall (fullname, apartmentnumber, streetname, cityname,postalcode,gender,phone,position1,position2,position3,position4,salary,workexperience) 
  			  VALUES('$fullname', '$apartmentnumber', '$streetname', '$cityname','$postalcode','$gender','$phone','$position1','$position2','$position3','$position4','$salary','$workexperience')";
  	mysqli_query($db, $query);
  	//$_SESSION['email'] = $email;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
=======
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$typeuser = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $typeuser = mysqli_real_escape_string($db, $_POST['typeuser']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");
  if (empty($typeuser)) { array_push($errors, "Usertype is required"); }
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM usersall WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO usersall (username, email, password, typeuser) 
  			  VALUES('$username', '$email', '$password', '$typeuser')";
  	mysqli_query($db, $query);
  	//$_SESSION['email'] = $email;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

if (isset($_POST['login_user'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM usersall WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['success'] = "You are now logged in";
          $_SESSION['email'] = $email;
          $_SESSION['username']= $row['username'];
          $_SESSION['typeuser']= $row['typeuser'];
          $_SESSION['fullname']= $row['fullname'];
          $_SESSION['apartmentnumber']= $row['apartmentnumber'];
          $_SESSION['streetname']= $row['streetname'];
          $_SESSION['cityname']= $row['cityname'];
          $_SESSION['postalcode']= $row['postalcode'];
          $_SESSION['gender']= $row['gender'];
          $_SESSION['phone']= $row['phone'];
          $_SESSION['position1']= $row['position1'];
          $_SESSION['position2']= $row['position2'];
          $_SESSION['position3']= $row['position3'];
          $_SESSION['position4']= $row['position4'];
          $_SESSION['salary']= $row['salary'];
          $_SESSION['workexperience']= $row['workexperience'];
          $_SESSION['aboutyou']= $row['aboutyou'];
          $_SESSION['image']= $row['image'];
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  if (isset($_POST['edit_profile'])) {
    $username= mysqli_real_escape_string($db, $_POST['username1']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $apartmentnumber = mysqli_real_escape_string($db, $_POST['apartmentnumber']);
    $streetname = mysqli_real_escape_string($db, $_POST['streetname']);
    $cityname = mysqli_real_escape_string($db, $_POST['cityname']);
    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $position1 = mysqli_real_escape_string($db, $_POST['position1']);
    $position2 = mysqli_real_escape_string($db, $_POST['position2']);
    $position3 = mysqli_real_escape_string($db, $_POST['position3']);
    $position4 = mysqli_real_escape_string($db, $_POST['position4']);
    $salary = mysqli_real_escape_string($db, $_POST['salary']);
    $workexperience = mysqli_real_escape_string($db, $_POST['workexperience']);

    $query = "UPDATE usersall SET fullname='$fullname', apartmentnumber='$apartmentnumber', streetname='$streetname', cityname='$cityname', postalcode='$postalcode', gender='$gender', phone='$phone', position1='$position1', position2='$position2', position3='$position3', position4='$position4', salary='$salary', workexperience='$workexperience' WHERE username=$username";

    //$query = "INSERT INTO usersall (fullname, apartmentnumber, streetname, cityname,postalcode,gender,phone,position1,position2,position3,position4,salary,workexperience) 
  			  //VALUES('$fullname', '$apartmentnumber', '$streetname', '$cityname','$postalcode','$gender','$phone','$position1','$position2','$position3','$position4','$salary','$workexperience')";
  	mysqli_query($db, $query);
  	//$_SESSION['email'] = $email;
  	//$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
>>>>>>> Stashed changes
  ?>