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
  }
  if (empty($typeuser)) {
    array_push($errors, "Usertype is required");
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
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    header('location: index.php');
    ///header moved up
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO usersall (username, email, password, typeuser, fullname, apartmentnumber, field, streetname, cityname, postalcode, gender, phone, position1, position2, position3, position4, salary, workexperience, image, cv, companyname, designation) 
          VALUES('$username', '$email', '$password','$typeuser', '[Update]','[Update]','[Update]','[Update]','[Update]','[Update]','[Update]','[Update]','[Update]','[Update]','[Update]','[Update]',0,'[Update]','[Update]','[Update]','[Update]','[Update]')";
    ///insert this text:- '[Update]',....................................................................
    mysqli_query($db, $query);
    //$_SESSION['email'] = $email;
    //$_SESSION['success'] = "You are now logged in";
    //moved from here
  }
}


//login
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
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
      $_SESSION['designation'] = $row['designation'];
      $_SESSION['companyname'] = $row['companyname'];
      $_SESSION['apartmentnumber'] = $row['apartmentnumber'];
      $_SESSION['streetname'] = $row['streetname'];
      $_SESSION['cityname'] = $row['cityname'];
      $_SESSION['postalcode'] = $row['postalcode'];
      $_SESSION['gender'] = $row['gender'];
      $_SESSION['phone'] = $row['phone'];
      $_SESSION['field'] = $row['field'];
      $_SESSION['position1'] = $row['position1'];
      $_SESSION['position2'] = $row['position2'];
      $_SESSION['position3'] = $row['position3'];
      $_SESSION['position4'] = $row['position4'];
      $_SESSION['salary'] = $row['salary'];
      $_SESSION['workexperience'] = $row['workexperience'];
      ///about you removed- remove about you from database!!!!!
      $_SESSION['image'] = $row['image'];

       ///moved up
       if ($row['typeuser'] == 'Student') {
        header('location: index_student.php');
      }
      if ($row['typeuser'] == 'Company') {
        header('location: index_company.php');
      }
      ///end moved up
    } else {
      array_push($errors, "Wrong username and password combination!");
    }
  }
}


///profile_edit_student
if (isset($_POST['edit_profile'])) {
  ///moved up
  header('location: index_student.php');
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

  $query = "UPDATE usersall SET fullname='$fullname', apartmentnumber='$apartmentnumber', streetname='$streetname', cityname='$cityname', postalcode='$postalcode', gender='$gender', phone='$phone',field = '$field', position1='$position1', position2='$position2', position3='$position3', position4='$position4', salary='$salary', workexperience='$workexperience' WHERE username='" . $_SESSION['username'] . "'";

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
  //$_SESSION['image'] = $image;
  // about you removed 
}


//validation_student
//change username
if (isset($_POST['changeusername'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $user_check_query = "SELECT * FROM usersall WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists !");
    }
  }

  if (count($errors) == 0) {
    ///moved up
    header('location: index_student.php');
    $query = "UPDATE usersall SET username='$username' WHERE email='" . $_SESSION['email'] . "'";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
  } else {
    //array_push($errors, "Plese a use different username");
  }
}
////change username ends

if (isset($_POST['changepassword'])) {

  $password1 = mysqli_real_escape_string($db, $_POST['password']);
  $password = md5($password1);
  $confirm_password1 = mysqli_real_escape_string($db, $_POST['confirm_password']);
  $confirm_password = md5($confirm_password1);
  if ($password === $confirm_password) {
    //moved up
    header('location: index_student.php');
    $query = "UPDATE usersall SET password='$password' WHERE username='" . $_SESSION['username'] . "'";
    mysqli_query($db, $query);
    //from here
  } else {
    array_push($errors, "Passwords do not match !");
  }

  if (count($errors) == 0) {
    //moved up
    header('location: index_student.php');
    $query = "UPDATE usersall SET username='$username' WHERE email='" . $_SESSION['email'] . "'";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    /// from here
  } else {
    array_push($errors, "Plese enter the same password for the confirmation");
  }
}

if (isset($_POST['submit_image'])) {
  //$filename=$_FILES['files']['name'];
  //echo $filename;
  move_uploaded_file($_FILES['files']['name'], "pictures/" . $_FILES['files']['name']);
  $query = "UPDATE usersall SET image = '" . $_FILES['file']['name'] . "' WHERE username = '" . $_SESSION['username'] . "'";
  mysqli_query($db, $query);
  header("location: index_student.php");
  ///not working
}



// -------------------------company form-----------------------------------------------//

if (isset($_POST['edit_profile_company'])) {
  //moved up
  header('location: index_company.php');
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
  $position1 = mysqli_real_escape_string($db, $_POST['position1']);
  $position2 = mysqli_real_escape_string($db, $_POST['position2']);
  $position3 = mysqli_real_escape_string($db, $_POST['position3']);
  $position4 = mysqli_real_escape_string($db, $_POST['position4']);
  $workexperience = mysqli_real_escape_string($db, $_POST['workexperience']);

  $query = "UPDATE usersall SET fullname='$fullname', companyname = '$companyname', designation = '$designation', apartmentnumber='$apartmentnumber', streetname='$streetname', cityname='$cityname', postalcode='$postalcode', gender='$gender', phone='$phone', position1='$position1', position2='$position2', position3='$position3', position4='$position4',  workexperience='$workexperience' WHERE username='" . $_SESSION['username'] . "'";

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
  $_SESSION['position1'] = $position1;
  $_SESSION['position2'] = $position2;
  $_SESSION['position3'] = $position3;
  $_SESSION['position4'] = $position4;
  $_SESSION['workexperience'] = $workexperience;
  //$_SESSION['image'] = $image;
  //$_SESSION['email'] = $email;
  //$_SESSION['success'] = "You are now logged in"; 
}


//validation_company
if (isset($_POST['changeusernamecompany'])) {
  //moved up
  //header('location: index_company.php');
  

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $user_check_query = "SELECT * FROM usersall WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists !");
    }
  }

  if (count($errors) == 0) {
    ///moved up
    header('location: index_company.php');
    $query = "UPDATE usersall SET username='$username' WHERE email='" . $_SESSION['email'] . "'";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
  } else {
    
  }

}

if (isset($_POST['changepasswordcompany'])) {
  $password1 = mysqli_real_escape_string($db, $_POST['password']);
  $password = md5($password1);
  $confirm_password1 = mysqli_real_escape_string($db, $_POST['confirm_password']);
  $confirm_password = md5($confirm_password1);
  if ($password == $confirm_password) {
    //header('location: index_company.php');
    $query = "UPDATE usersall SET password='$password' WHERE username='" . $_SESSION['username'] . "'";
    mysqli_query($db, $query);
  } else {
    array_push($errors, "Passwords do not match");
  }
  if (count($errors) == 0) {
    //moved up
    header('location: index_company.php');
    $query = "UPDATE usersall SET username='$username' WHERE email='" . $_SESSION['email'] . "'";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    /// from here
  } else {
    array_push($errors, "Plese enter the same password for the confirmation");
  }

}

if (isset($_POST['submit_image_campany'])) {
  //$filename=$_FILES['files']['name'];
  //echo $filename;
  move_uploaded_file($_FILES['files']['name'], "pictures/" . $_FILES['files']['name']);
  $query = "UPDATE usersall SET image = '" . $_FILES['file']['name'] . "' WHERE username = '" . $_SESSION['username'] . "'";
  mysqli_query($db, $query);
  header("location: index_company.php");
  //not working
}
