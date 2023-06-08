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
<table border="2" class="form-input" style="width:1200px;">
  <tr>
    <td style="font-weight:bold;">name</td>
    <td style="font-weight:bold;">email</td>
    <td style="font-weight:bold;">mobile</td>
    
    <td style="font-weight:bold;">press the below button to donate</td>
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

session_start();

$_SESSION["email"]=$_POST["email"];
$_SESSION["regno"]=$_POST["regno"];
/*$email=$_POST["email"];
$regno=$_POST["regno"];*/

setcookie("email_sign_in", $_SESSION["email"], time() + (86400 * 30), "/");

//$records = mysqli_query("smc","select * from marks where regno=$regno"); // fetch data from database
$regno=$_SESSION["regno"];
$sql = "SELECT * from `smc`.`alumni` where pswd=$regno";
$result = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($result))
{
 if($_SESSION["email"]==$data['e_mail'])
  {
?>
  <tr>
    <td name="name"><?php echo $data['name']; ?></td>
    <td name="email"><?php echo $data['e_mail']; ?></td>
    <td name="mobile"><?php echo $data['mobile']; ?></td>
    <td><!DOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>
    <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HqG5ZBg5GsJh8B" async> </script> </form>
  </body>
    </html>
    </td>
  </tr>

<center><h1 style="font-size:50px;">Welcome<br><h2 style="font-size:40px;"><?php echo $data['name']; ?></h2></h1>!</center>
<?php
}
else{
  echo "Invalid username or password!!";
}}
session_destroy();
?>
</table>


</body>
</html>
