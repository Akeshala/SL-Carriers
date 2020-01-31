<?php include 'server.php';?>
<?php
        if(isset($_POST['submit'])){
                move_uploaded_file($_FILES['file']['tmp_name'],"cv/".$_FILES['file']['name']);
                $con = mysqli_connect("localhost","root","","registration");
                $q = mysqli_query($con,"UPDATE usersall SET cv = '".$_FILES['file']['name']."' WHERE username = '".$_SESSION['username']."'");
        }
?>
 
<!DOCTYPE html>
<html>
        <head>
       
        </head>
        <body>
                <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <input type="submit" name="submit">
                </form>
               
               
                
        </body>
</html>