<?php
  $name=$_POST["usr"];
  if($name!=NULL)
  {
?>
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
                    <p class="text-small" style="padding-left:20%;font-size:25px;">student records</p>
                </div>
    
                
           </div>
        </section>
<table border="2" class="form-input">
  <tr>
  <td style="font-weight:bold;">sr.no</td>
    <td style="font-weight:bold;">name_of<br>students</td>
    <td style="font-weight:bold;">regno</td>
    <td style="font-weight:bold;">DC</td>
    <td style="font-weight:bold;">SE</td>
    <td style="font-weight:bold;">LAMP</td>
    <td style="font-weight:bold;">LINUX</td>
    <td style="font-weight:bold;">JAVA</td>
    <td style="font-weight:bold;">WEB</td>
    <td style="font-weight:bold;">JAVALAB</td>
    <td style="font-weight:bold;">WEBLAB</td>
    <td style="font-weight:bold;">TOTAL</td>
    <td style="font-weight:bold;">AVG</td>
   
    <td style="font-weight:bold;">press_the<br>button</td>
    
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

$name=$_POST["usr"];
$i=1;
//$records = mysqli_query("smc","select * from marks where regno=$regno"); // fetch data from database
for($i=1;$i<100;$i++)
{
$sql = "SELECT * from `smc`.`marks` where sr=$i";
$result = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($result))
{
 $sr=$data["sr"];
?>
  <tr>
  <td name="sr"><?php echo $data['sr']; ?></td>
  
  <div class="form">
        <form action="records1.php" method="POST">
        <td style=""><input class="form-input" type="text" name="name" id="name" style="width:125px;"  value="<?php echo $data['name']; ?>"></td>
        <td style="padding-left:10px;"><input class="form-input" type="number" style="width:140px;" name="reg_no" id="reg_no"   value="<?php echo $data['reg_no']; ?>"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="DC" id="DC" value="<?php echo $data['DC']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="SE" id="SE" value="<?php echo $data['SE']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="LAMP" id="LAMP"  value="<?php echo $data['LAMP']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="LINUX" id="LINUX"  value="<?php echo $data['LINUX']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="JAVA" id="JAVA" value="<?php echo $data['JAVA']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="WEB" id="WEB"  value="<?php echo $data['WEB']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="JAVALAB" id="JAVALAB"  value="<?php echo $data['JAVALAB']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><input class="form-input" type="number" style="width:45px;" name="WEBLAB" id="WEBLAB"  value="<?php echo $data['WEBLAB']; ?>" min="0" max="100"></td>
            <td style="padding-left:10px;"><?php echo $data['TOTAL']; ?></td>
            <td style="padding-left:10px;"><?php echo $data['AVG']; ?></td> 
            <td><input type="text" style="width:0px;height:0px;" name="author" value=<?php echo "$name" ?>><input type="text" style="width:0px;height:0px;" name="sr" value=<?php echo "$sr" ?>>
            <button class="btn btn-sm btn-dark" type="submit"> UPDATE</button></td>
            
        </form>
    </div>
    
  </tr>        
<?php
}//end of while loop
}//end of for loop
?>

<form action="marks.php" method="POST">
<input type="text" style="width:0px;height:0px;" value=<?php echo"$name"?> name="author">
<input type="text" style="width:0px;height:0px;" name="author" value=<?php echo "$name" ?>>
<button class="btn btn-sm btn-dark">ADD</button>
</form>

</table>


</body>
</html>
<?php
  }
  else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      <h1> go back to the <a href="access.html">access</a> page</h1>
    </body>
    </html>
    <?php
  }?>
