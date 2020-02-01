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
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    if (empty($typeuser)) {
      array_push($errors, "Usertype is required");
    }
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
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO usersall (username, email, password, typeuser) 
  			  VALUES('$username', '$email', '$password', '$typeuser')";
    mysqli_query($db, $query);
    //$_SESSION['email'] = $email;
    //$_SESSION['success'] = "You are now logged in";
    header('location: login.php');
  }
}


//login
if (isset($_POST['login_user'])) {
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
      $_SESSION['username'] = $row['username'];
      $_SESSION['typeuser'] = $row['typeuser'];
      $_SESSION['fullname'] = $row['fullname'];
      $_SESSION['apartmentnumber'] = $row['apartmentnumber'];
      $_SESSION['streetname'] = $row['streetname'];
      $_SESSION['cityname'] = $row['cityname'];
      $_SESSION['postalcode'] = $row['postalcode'];
      $_SESSION['gender'] = $row['gender'];
      $_SESSION['phone'] = $row['phone'];
      $_SESSION['position1'] = $row['position1'];
      $_SESSION['position2'] = $row['position2'];
      $_SESSION['position3'] = $row['position3'];
      $_SESSION['position4'] = $row['position4'];
      $_SESSION['salary'] = $row['salary'];
      $_SESSION['workexperience'] = $row['workexperience'];
      $_SESSION['aboutyou'] = $row['aboutyou'];
      $_SESSION['image'] = $row['image'];
      if ($row['typeuser'] == 'Student') {
        header('location: index.php');
      }
      if ($row['typeuser'] == 'Company') {
        header('location: indexCompany.php');
      }
    } else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


///student edit
if (isset($_POST['edit_profile'])) {
  //$username= mysqli_real_escape_string($db, $_POST['username1']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $apartmentnumber = mysqli_real_escape_string($db, $_POST['apartmentnumber']);
  $streetname = mysqli_real_escape_string($db, $_POST['streetname']);
  $cityname = mysqli_real_escape_string($db, $_POST['cityname']);
  $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $field = mysqli_real_escape_string($db, $_POST['field']);
  $position1 = mysqli_real_escape_string($db, $_POST['position1']);
  $position2 = mysqli_real_escape_string($db, $_POST['position2']);
  $position3 = mysqli_real_escape_string($db, $_POST['position3']);
  $position4 = mysqli_real_escape_string($db, $_POST['position4']);
  $salary = mysqli_real_escape_string($db, $_POST['salary']);
  $workexperience = mysqli_real_escape_string($db, $_POST['workexperience']);
  $content = mysqli_real_escape_string($db, $_POST['content']);

  $query = "UPDATE usersall SET fullname='$fullname', apartmentnumber='$apartmentnumber', streetname='$streetname', cityname='$cityname', postalcode='$postalcode', gender='$gender', phone='$phone', field = '$field', position1='$position1', position2='$position2', position3='$position3', position4='$position4', salary='$salary', workexperience='$workexperience', content = '$content' WHERE username='" . $_SESSION['username'] . "'";

  //$query = "INSERT INTO usersall (fullname, apartmentnumber, streetname, cityname,postalcode,gender,phone,position1,position2,position3,position4,salary,workexperience) 
  //VALUES('$fullname', '$apartmentnumber', '$streetname', '$cityname','$postalcode','$gender','$phone','$position1','$position2','$position3','$position4','$salary','$workexperience')";
  mysqli_query($db, $query);


  //$_SESSION['success'] = "You are now logged in";
  //$_SESSION['email'] = $email;
  //$_SESSION['username'] = $row['username'];
  //$_SESSION['typeuser'] = $row['typeuser'];
  $_SESSION['fullname'] = $fullname;
  $_SESSION['apartmentnumber'] =  $apartmentnumber;
  $_SESSION['streetname'] = $streetname;
  $_SESSION['cityname'] = $cityname;
  $_SESSION['postalcode'] = $postalcode;
  $_SESSION['gender'] = $gender;
  $_SESSION['phone'] = $phone;
  $_SESSION['field'] = $field;
  $_SESSION['position1'] = $position1;
  $_SESSION['position2'] = $position2;
  $_SESSION['position3'] = $position3;
  $_SESSION['position4'] = $position4;
  $_SESSION['salary'] = $salary;
  $_SESSION['workexperience'] = $workexperience;
  $_SESSION['content'] = $content;
  $_SESSION['aboutyou'] = $aboutyou;
  $_SESSION['image'] = $image;
  //$_SESSION['email'] = $email;
  //$_SESSION['success'] = "You are now logged in";
  header('location: index.php');
}
// -------------------------company form-----------------------------------------------
if (isset($_POST['edit_profile_company'])) {
    //$username= mysqli_real_escape_string($db, $_POST['username1']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $companyname = mysqli_real_escape_string($db, $_POST['companyname']);
    $designation = mysqli_real_escape_string($db, $_POST['designation']);
    $apartmentnumber = mysqli_real_escape_string($db, $_POST['apartmentnumber']);
    $streetname = mysqli_real_escape_string($db, $_POST['streetname']);
    $cityname = mysqli_real_escape_string($db, $_POST['cityname']);
    $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $field1 = mysqli_real_escape_string($db, $_POST['field1']);
    $field2 = mysqli_real_escape_string($db, $_POST['field2']);
    $field3 = mysqli_real_escape_string($db, $_POST['field3']);
    $field4 = mysqli_real_escape_string($db, $_POST['field4']);
    $workexperience = mysqli_real_escape_string($db, $_POST['workexperience']);
  
    $query = "UPDATE usersall SET fullname='$fullname', companyname = '$companyname', designation = '$designation', apartmentnumber='$apartmentnumber', streetname='$streetname', cityname='$cityname', postalcode='$postalcode', gender='$gender', phone='$phone', field1='$field1', field2='$field2', field3='$field3', field4='$field4',  workexperience='$workexperience' WHERE username='" . $_SESSION['username'] . "'";
  
    //$query = "INSERT INTO usersall (fullname, apartmentnumber, streetname, cityname,postalcode,gender,phone,position1,position2,position3,position4,salary,workexperience) 
    //VALUES('$fullname', '$apartmentnumber', '$streetname', '$cityname','$postalcode','$gender','$phone','$position1','$position2','$position3','$position4','$salary','$workexperience')";
    mysqli_query($db, $query);
  
  
    //$_SESSION['success'] = "You are now logged in";
    //$_SESSION['email'] = $email;
    //$_SESSION['username'] = $row['username'];
    //$_SESSION['typeuser'] = $row['typeuser'];
    $_SESSION['fullname'] = $fullname;
    $_SESSION['companyname'] = $companyname;
    $_SESSION['designation'] = $designation;
    $_SESSION['apartmentnumber'] =  $apartmentnumber;
    $_SESSION['streetname'] = $streetname;
    $_SESSION['cityname'] = $cityname;
    $_SESSION['postalcode'] = $postalcode;
    $_SESSION['gender'] = $gender;
    $_SESSION['phone'] = $phone;
    $_SESSION['field1'] = $field1;
    $_SESSION['field2'] = $field2;
    $_SESSION['field3'] = $field3;
    $_SESSION['field4'] = $field4;
    $_SESSION['workexperience'] = $workexperience;
    $_SESSION['image'] = $image;
    //$_SESSION['email'] = $email;
    //$_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }


//validation
if (isset($_POST['changeusername'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $query = "UPDATE usersall SET username='$username' WHERE email='" . $_SESSION['email'] . "'";
  mysqli_query($db, $query);
  $_SESSION['username'] = $username;
  header('location: index.php');
}

if (isset($_POST['changepassword'])) {
  $password1 = mysqli_real_escape_string($db, $_POST['password']);
  $password=md5($password1);
  $confirm_password1 = mysqli_real_escape_string($db, $_POST['confirm_password']);
  $confirm_password=md5($confirm_password1);
  if ($password == $confirm_password) {
    $query = "UPDATE usersall SET password='$password' WHERE username='" . $_SESSION['username'] . "'";
    mysqli_query($db, $query);
  } else {
  }
  header('location: index.php');
}

if (isset($_POST['submit_image'])) {
  //$filename=$_FILES['files']['name'];
  //echo $filename;
  move_uploaded_file($_FILES['files']['name'], "pictures/". $_FILES['files']['name']);
  $query = "UPDATE usersall SET image = '".$_FILES['file']['name']."' WHERE username = '" . $_SESSION['username'] . "'";
  mysqli_query($db, $query);
  header("location: index.php");
}

?>