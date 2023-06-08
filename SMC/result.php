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
                    <p class="text-small">results of the odd semesters has been declared.</p>
                </div>
    
                
           </div>
        </section>
<center><p style="font-size:80px;">RESULT</p>

<table border="2" class="form-input" style="width:1200px;height:120px;">
  <tr>
    <td style="font-weight:bold;">name</td>
    <td style="font-weight:bold;">regno</td>
    <td style="font-weight:bold;">DC</td>
    <td style="font-weight:bold;">LAMP</td>
    <td style="font-weight:bold;">SE</td>
    <td style="font-weight:bold;">LINUX</td>
    <td style="font-weight:bold;">JAVA</td>
    <td style="font-weight:bold;">WEB</td>
    <td style="font-weight:bold;">JAVALAB</td>
    <td style="font-weight:bold;">WEBLAB</td>
    <td style="font-weight:bold;">TOTAL</td>
    <td style="font-weight:bold;">AVG</td>
  </tr>

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
    
}
$regno=$_POST["regno"];

//$records = mysqli_query("smc","select * from marks where regno=$regno"); // fetch data from database
$sql = "SELECT * from `smc`.`marks` where reg_no=$regno";
$result = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($result))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['reg_no']; ?></td>
    <td><?php echo $data['DC']; ?></td>
    <td><?php echo $data['LAMP']; ?></td>
    <td><?php echo $data['SE']; ?></td>
    <td><?php echo $data['LINUX']; ?></td>
    <td><?php echo $data['JAVA']; ?></td>
    <td><?php echo $data['WEB']; ?></td>
    <td><?php echo $data['JAVALAB']; ?></td>
    <td><?php echo $data['WEBLAB']; ?></td>
    <td><?php echo $data['TOTAL']; ?></td>
    <td><?php echo $data['AVG']; ?></td>
  </tr>
<?php
}
?>
</table></center>
<center><p style="color:red;font-weight:bold;font-size:20px;">NOTE:1)To enter the regno correctly or the result wont display<p>
<p style="color:red;font-weight:bold;font-size:20px;">NOTE:2)The marks that has been entered is temporary and there is still time for the actual declaration of the result.<p>
</center>

</body>
</html>
