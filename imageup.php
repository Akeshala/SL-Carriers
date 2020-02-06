<?php
session_start();
//require_once ('server.php');
$db = mysqli_connect('localhost', 'root', '', 'registration');
//echo "<script>alert ('Choose a file less than 10MB')</script>";
$target_dir = "pictures/";
$username = mysqli_real_escape_string($db, $_POST['username']);
$aphoto = $target_dir.$username;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit_image_student"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
//if (file_exists($target_file)) {
  //  echo "Sorry, file already exists.";
   // $uploadOk = 0;
//}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $aphoto)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $query = "UPDATE usersall SET  image='" . $_SESSION['username'] . "' WHERE username='" . $_SESSION['username'] . "'";
        mysqli_query($db, $query);
        //echo "<script>window.open('image_upload.php','_self')</script>";
        header('location: index_student.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>