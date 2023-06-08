<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "smc";

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
$DC = $_POST["DC"];
$LAMP = $_POST["LAMP"];
$SE = $_POST["SE"];
$LINUX = $_POST["LINUX"];
$JAVA = $_POST["JAVA"];
$WEB = $_POST["WEB"];
$JAVALAB = $_POST["JAVALAB"];
$WEBLAB = $_POST["WEBLAB"];
$regno= $_POST["reg_no"];
$name= $_POST["name"];
$TOTAL = $DC+$LAMP+$SE+$LINUX+$JAVA+$WEB+$JAVALAB+$WEBLAB;
$AVG=$TOTAL/8;
$author=$_POST["author"];
$sr=$_POST["sr"];
// Sql query to be executed

$sql = "UPDATE `marks` SET `name`='$name',`reg_no`='$regno',`DC`='$DC',`LAMP`='$LAMP',`SE`='$SE',`LINUX`='$LINUX',`JAVA`='$JAVA',`WEB`='$WEB',`JAVALAB`='$JAVALAB',`WEBLAB`='$WEBLAB',`TOTAL`='$TOTAL',`AVG`='$AVG' WHERE sr=$sr";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been updated successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

$sql1 = "INSERT INTO `smc`.`login`(`author`) VALUES ('$author')";
$result = mysqli_query($conn, $sql1);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

?>