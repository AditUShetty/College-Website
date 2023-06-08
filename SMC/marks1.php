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
$TOTAL = $DC+$LAMP+$SE+$LINUX+$JAVA+$WEB+$JAVALAB+$WEBLAB;
$AVG=$TOTAL/8;
$name=$_POST["name"];
$regno=$_POST["regno"];
$author=$_POST["author"];
// Sql query to be executed
$sql = "INSERT INTO `smc`.`marks` (`name`, `reg_no`, `DC`, `LAMP`, `SE`, `LINUX`, `JAVA`, `WEB`, `JAVALAB`, `WEBLAB`, `TOTAL`, `AVG`) VALUES ('$name', '$regno', '$DC', '$LAMP', '$SE', '$LINUX', '$JAVA', '$WEB', '$JAVALAB', '$WEBLAB', '$TOTAL', '$AVG')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
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