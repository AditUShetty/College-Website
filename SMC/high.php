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
            $folder = "high/".$filename;
               
                   // Now let's move the uploaded image into the folder: image
               
                       if (move_uploaded_file($tempname, $folder))  {
               
                           $msg = "Image uploaded successfully";
               
                       }else{
               
                           $msg = "Failed to upload image";
               
                     }
               echo "$msg";
                 }
                
               ?>

<?php


// Create a connection
                $conn = mysqli_connect($servername, $username, $password, $database);
                $conn1 = mysqli_connect($servername, $username, $password, $database);
                // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{
            echo "Connection was successful<br>";
        }
        
              //INSERT INTO `high_files` (`sr`, `name`, `address`, `pincode`, `phone`, `branch`, `course`, `filename`) VALUES ('1', 'sad', 'dsa', '231', '321', 'asdsa', 'sad', 'dad');
                $name=$_POST["name"];
                $address=$_POST["address"];
                $pincode=$_POST["pincode"];
                $phone=$_POST["phone"];
                $branch=$_POST["branch"];
                $course=$_POST["radio2"];
                $sql2 = "INSERT INTO `high_files` (`name`, `address`, `pincode`, `phone`, `branch`, `course`, `filename`) VALUES ('$name', '$address', '$pincode', '$phone', '$branch', '$course', '$filename');";
                $result2 = mysqli_query($conn, $sql2);
                if($result2){
                        echo "The record has been updated successfully successfully!<br>";
                    }
                    else{
                        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                    }
                   
                   // Execute query
               
                       mysqli_query($conn, $sql2);
                       ?>
                       