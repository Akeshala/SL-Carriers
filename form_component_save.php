<?php
         // define variables and set to empty values
         $genderErr = $fullnameErr = $phoneErr = $salaryErr = "";
         $workexpErr = $addressErr = "";
         $post1Err = $post2Err = $post3Err = $post4Err = "";
         $postErr = $apartmentnoErr = $streetErr = $cityErr = "";
         $gender = $fullname = $phone = $salary = "";
         
         $post1 = $post2 = $post3 = $post4 = "";
         $post = $apartmentno = $street = $city = "";        
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fullname"])) {
               $fullnameErr = "Name is required";
            }else {
               $name = test_input($_POST["fullname"]);
            }
            
            if (empty($_POST["post"]) or (empty($_POST["apartmentno"])) or (empty($_POST["street"])) or (empty($_POST["city"])) ) {
               $addressErr = "address is required";
            }else {
               $apartmentno = test_input($_POST["apartmentno"]);
               $post = test_input($_POST["post"]);
               $street = test_input($_POST["street"]);
               $city = test_input($_POST["city"]);
               
               
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "No Gender Selected";
            }else {
               $gender = test_input($_POST["gender"]);
            }
            
            if (empty($_POST["phone"])) {
               $phoneErr = "Enter a phone number";
            }else {
               $phone = test_input($_POST["phone"]);
            }
            
            if (empty($_POST["salary"])) {
               $salaryErr = "Salary is required to fill";
            }else {
               $salary = test_input($_POST["salary"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
         
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO persons (fullname, phone, salary) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
if(mysqli_query(localhost, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error(localhost);
}
 
// Close connection
mysqli_close(localhost);
?>