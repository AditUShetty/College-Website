<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="https://rzp.io/l/4Z6hhfhZ">plz click the link for payment</a>
</body>
</html>
<?php
$password1=$_POST["password1"];
$password2=$_POST["password2"];
if($password1==$password2){

?>


<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "smc";

session_start();

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name=$_POST["name"];
$regno=$_POST["regno"];
$email=$_POST["email"];
$jdate=$_POST["jdate"];
$ldate=$_POST["ldate"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$password1=$_POST["password1"];

setcookie("email_sign_up", $email, time() + (86400 * 30), "/");

// Sql query to be executed
$sql = "INSERT INTO `smc`.`alumni` (`name`, `regno`, `e_mail`, `date_of_joining`, `date_of_leaving`, `mobile`, `address`, `pswd`) VALUES ('$name', '$regno', '$email', '$jdate', '$ldate', '$mobile', '$address', '$password1')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}}
else{
    echo "password doesn't match..";
}
?>

