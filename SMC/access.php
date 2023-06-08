<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
  <title>Display all records from Database</title>
</head>
<body>
<section class="firstSection" style="height:20%;">
            <div class="box-main">
                <div class="firstHalf">
                    <p class="text-big" style="text-shadow: 2px 2px rgb(128, 128, 248);">ST Mary's College,Shirva</p>
                    <p class="text-small" style="padding-left:20%;font-size:25px;">Alumni Association</p>
                </div>
    
                
           </div>
        </section>


<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "smc";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
$conn1 = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    
}
$email=$_POST["email"];
$regno=$_POST["regno"];

/*$records = mysqli_query("smc","select * from marks where regno=$regno"); // fetch data from database
*/

$sql = "SELECT * from `smc`.`access` where pswd=$regno";
$result = mysqli_query($conn, $sql);

while($data = mysqli_fetch_array($result))
{
 if($email==$data['name'])
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
</table>


</body>
</html>
