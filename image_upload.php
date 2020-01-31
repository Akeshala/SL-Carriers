
<!--image upload-->
<?php include 'server.php';?>

<!DOCTYPE html>
<div class="form-group">
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit">
  </form>
</div>
<!--eng of image upload-->
<?php
        if(isset($_POST['submit'])){
                move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
                $con = mysqli_connect("localhost","root","","test search");
                $q = mysqli_query($con,"UPDATE students SET image = '".$_FILES['file']['name']."' WHERE username = '".$_SESSION['username']."'");
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
               
               
                <?php
                        $con = mysqli_connect("localhost","root","","test search");
                        $q = mysqli_query($con,"SELECT * FROM students");
                        while($row = mysqli_fetch_assoc($q)){
                                echo $row['username'];
                                if($row['image'] == ""){
                                        echo "<img width='100' height='100' src='pictures/default.jpg' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='100' height='100' src='pictures/".$row['image']."' alt='Profile Pic'>";
                                }
                                echo "<br>";
                        }
                ?>
        </body>
</html>