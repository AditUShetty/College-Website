// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "smc";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    print("Sorry we failed to connect: ". mysqli_connect_error())
}
else{
    print("Connection was successful<br>")
}
$sql = "INSERT INTO `t`.`t` (`name`) VALUES("sairaj")";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    print("The record has been inserted successfully successfully!<br>")
}
else{
    print("The record was not inserted successfully because of this error ---> ", mysqli_error($conn))
}

$sql1 = "INSERT INTO `smc`.`login`(`author`) VALUES ('$author')";
$result = mysqli_query($conn, $sql1);

// Add a new trip to the Trip table in the database
if($result){
    print("The record has been inserted successfully successfully!<br>")
}
else{
    print(echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn))
}