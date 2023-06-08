<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "database_name";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
$conn1 = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    
}
$Adminname=$_POST["AdminName"];
$Adminpass=$_POST["Adminpassword"]; 

$sql = "SELECT * from `database_name`.`table_name` where Admin_password=$Adminname";
$result = mysqli_query($conn, $sql);

while($data = mysqli_fetch_array($result))
{
 if($Admin==$data['Adminname'])
  {
?>
<form action="records.php" method="POST">
<center><h1 style="font-size:50px;">Welcome!<br><h2 style="font-size:40px;"><?php echo $data['name']; ?></h2></h1>
<input style="width:0%;height:0%;" type="text" name="usr" value="<?php echo $data['name'];?>">
<button type="submit" style="margin-top:50px;border-radius:5px;height:120px;width:170px;font-size:30px;font-weight:bold;">View records</button>
</center>
</form>
<?php
}
else{
  echo "Invalid username or password!!";
}}
?>