<html>
    <head>
    <link rel="stylesheet" href="css/graph.css">
    </head>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "smc";

$msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "image/".$filename;

    $db = mysqli_connect("localhost", "root", "", "smc");
    $conn = mysqli_connect("localhost", "root", "", "smc");
    // Get all the submitted data from the form
          $name=$_POST["name"];
          $regno=$_POST["regno"];
          $phone=$_POST["phone"];
          $email=$_POST["email"];
          $gender=$_POST["radio1"];
          $course=$_POST["radio2"];
          $option=$_POST["radio3"];
        $regno=$_POST["regno"];
        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
        $sql2 = "INSERT INTO `student_progression` (`name`, `reg_no`, `phone`, `email`, `gender`, `course`, `option1`,`Filename`) VALUES ( '$name', '$regno', '$phone', '$email', '$gender','$course', '$option','$filename')";
        $result2 = mysqli_query($conn, $sql2);
 
$sql = "SELECT * from `smc`.`graph` where sr=1";
$result = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($result))
{
    $high=$data['higher_edu'];
    $job=$data['job'];
    $nothing=$data['nothing'];
    if($option=="HI_EDU")
    {
        $high=$high+1;
        
    }else if($option=="JOB")
    {
        $job=$job+1;
    }
    else{
        $nothing=$nothing+1;
    }
}



 if($result2){
     ?>
     <html>
        <head>
             <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
              <section class="firstSection" style="height:40%;border-radius:10px;border:5px solid black;background-color: rgb(211, 218, 248);">
                    <div class="box-main">
                        <div class="firstHalf">
                            <p class="text-big" style="text-shadow: 2px 2px rgb(128, 128, 248);">ST Mary's College,Shirva</p>
                        </div>
                   </div>
                </section>
     
        </body>
      </html>
     <?php
     $sql1 = "UPDATE `graph` SET `higher_edu`='$high',`job`='$job',`nothing`='$nothing' WHERE sr=1";
     $result1 = mysqli_query($conn, $sql1);
     // Add a new graph values to the graph table in the smc database
     if($result1){
         //echo "The record has been updated successfully successfully!<br>";
     }
     else{
         //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
     }
     //echo "The record has been inserted successfully successfully!<br>";
 }
 else{
     //echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
 }
    // Execute query

        mysqli_query($db, $sql2);

    // Now let's move the uploaded image into the folder: image

        if (move_uploaded_file($tempname, $folder))  {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

      }

  }
//there
?>
<?php
$total=$high+$job+$nothing;
$dataPoints = array(
array("y" => $high,"label" => "higher_education" ),
array("y" => $job,"label" => "JOB" ),
array("y" => $nothing,"label" => "Nothing" )

);

?>
<!DOCTYPE HTML>
<html>
    <head>
     <script>
     window.onload = function() {

     var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     title:{
     text: "TOTAL NO OF STUDENTS:<?php echo "$total";?>"
     },
     axisY: {
     title: "STUDENT CHOICES AFTER GRADUATION",
     includeZero: true,
     prefix: "",
     suffix:  ""
     },
     data: [{
     type: "bar",
     yValueFormatString: "#",
     indexLabel: "{y}",
     indexLabelPlacement: "inside",
     indexLabelFontWeight: "bolder",
     indexLabelFontColor: "white",
     dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
     });
     chart.render();

     }
     </script>
    </head>
    <body>
       <div id="chartContainer" style="height: 370px; width: 100%;"></div>
       <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    </body>
</html>
   <?php
      error_reporting(0);

   ?>
    <?php
      if($option=="HI_EDU")
      {
     ?>
     <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/responsive.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
          </head>
          <body>
            <section class="contact" id="contact" style="height: auto;">
                <h1 class="text-center">Higher_education_progress</h1>
                <div class="form">
                   
                    <form action="high.php" method="POST" enctype="multipart/form-data">
                    <input class="form-input" style="width:500px;" type="text" oninvalid="alert('you must enter your college_name in the form')" name="name" id="name" placeholder="Enter Your college/institute name" required><br>
                    <input class="form-input" style="width:500px;" type="text" oninvalid="alert('you must enter your college_branch in the form')" name="branch" id="branch" placeholder="Enter Your college's branch" required><br>
                    <div class="form-input">Select Course</div>
                <label for="male">MCA</label>
                <input style="padding: 12%;" type="radio" oninvalid="alert('plz slect a course in the form')" name="radio2" value="bca" required>
                <label for="female">MCOM</label>
                <input style="padding: 12%;" type="radio" name="radio2" value="bcom" required>
                <label for="female">MBA</label>
                <input style="padding: 12%;" type="radio" name="radio2" value="bba" required>
                <label for="female">MA</label>
                <input style="padding: 12%;" type="radio" name="radio2" value="ba" required>
                    <textarea class="form-input" style="width:500px;" oninvalid="alert('plz enter your college address in the form')" name="address" id="address" cols="30" rows="10" placeholder="Enter your college address" required></textarea><br>
                    <input class="form-input" style="width:500px;" type="number" oninvalid="alert('plz enter clg pincode in the form')" name="pincode" id="pincode" maxlength="6" placeholder="Enter college pincode" required><br>
                    <input class="form-input" style="width:500px;" type="number" oninvalid="alert('plz enter valid clg phone no in the form')" name="phone" min="6666666666" max="9999999999" id="phone" placeholder="Enter Your College phone number" size="10" required><br>
                    <label>UPLOAD THE DOC(ex:-fee_reciept,ID_card,etc):</label>
                    <input class="form-input" type="file" oninvalid="alert('plz upload a document in the form')" name="uploadfile" style="width:500px;" value="" required><br>
                    <button type="submit" class="btn btn-sm btn-dark" name="upload">Submit</button>
                    <button type="reset" class="btn btn-sm btn-dark">Reset</button>
                    </form>
                    </div>
            <footer class="background">
                <p class="text-footer">
                    Copyright &copy; 2027 - www.iEducate.com - All rights reserved
                </p>
            </footer>
          </body>
        </html>
        <?php
    
      }else if($option=="JOB")
      {  
          ?>
      
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/responsive.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
          </head>
          <body>
            <section class="contact" id="contact" style="height: auto;">
                <h1 class="text-center">Students_progress</h1>
                <div class="form">
                   
                    <form action="job.php" method="POST" enctype="multipart/form-data">
                    <input class="form-input" style="width:500px;" type="text" oninvalid="alert('you must enter your company_name in the form')" name="name" id="name" placeholder="Enter Your company name" required><br>
                    <input class="form-input" style="width:500px;" type="text" oninvalid="alert('you must enter your company_branch in the form')" name="branch" id="branch" placeholder="Enter Your company's branch" required><br>
                    <input class="form-input" style="width:500px;" type="text" oninvalid="alert('you must enter your position in the company')" name="position" id="position" placeholder="At what position are u working for the company" required><br>
                    <input class="form-input" style="width:500px;" type="number" oninvalid="alert('you must enter your salary in the form')" name="salary" id="salary" placeholder="Enter youe salary in terms of annum" required><br>
                    <textarea class="form-input" style="width:500px;" oninvalid="alert('you must enter your company_address in the form')" name="address" id="address" cols="30" rows="10" placeholder="Enter company address" required></textarea><br>
                    <input class="form-input" style="width:500px;" type="number" oninvalid="alert('you must enter your company_pincode in the form')" name="pincode" id="pincode" maxlength="6" placeholder="Enter company pincode" required><br>
                    <input class="form-input" style="width:500px;" type="number" oninvalid="alert('you must enter valid company_phone_no in the form')" name="phone" min="6666666666" max="9999999999" id="phone" placeholder="Enter Your Company phone number" size="10" required><br>
                    <label>UPLOAD THE APPOINTMENT LETTER:</label>
                    <input class="form-input" type="file" oninvalid="alert('upload the appointment letter from the company in the form')" name="uploadfile" value=""/ style="width:500px;" required><br>
                    <button type="submit" class="btn btn-sm btn-dark" name="upload">Submit</button>
                    <button type="reset" class="btn btn-sm btn-dark">Reset</button>
                    </form>
                    </div>
            </section>
            <footer class="background">
                <p class="text-footer">
                    Copyright &copy; 2027 - www.iEducate.com - All rights reserved
                </p>
            </footer>
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
             <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/responsive.css">
             <title>Document</title>
         </head>
         <body>
         <section class="contact" id="contact" style="height: auto;">
                <h1 class="text-center"></h1>
                <div class="form">
                   
                    <form action="no.php" method="POST" enctype="multipart/form-data">
                    <input class="form-input" style="width:500px;" type="text" oninvalid="alert('you must enter your name in the form')" name="name" id="name" value="<?php echo $name; ?>" placeholder="enter your name" required><br>
                    <input class="form-input" style="width:500px;" type="number" oninvalid="alert('you must enter your regno in the form')" name="regno" id="regno" value="<?php echo $regno; ?>" placeholder="enter your regno" required><br>
                    <textarea class="form-input" style="width:500px;" oninvalid="alert('you must enter your concern in the form')" name="address" id="address" cols="30" rows="10" placeholder="Ellaborate your concern" required></textarea>
                    <button type="submit" class="btn btn-sm btn-dark" name="upload">Submit</button>
                    <button type="reset" class="btn btn-sm btn-dark">Reset</button>
                    </form>
                </div>
            </section>
         </body>
         </html>
         <?php
      }
    ?>
   
</html>