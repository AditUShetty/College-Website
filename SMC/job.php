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
            $folder = "job/".$filename;
        
           
        
            $db = mysqli_connect("localhost", "root", "", "smc");
            $conn = mysqli_connect("localhost", "root", "", "smc");
            
                // Create a connection
                $conn = mysqli_connect($servername, $username, $password, $database);
                // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{
            echo "Connection was successful<br>";
        }
        
              //INSERT INTO `tbl_files` (`sr`, `filename`, `name`, `branch`, `position`, `salary`, `address`, `pincode`, `phone`, `date`) VALUES ('6', 'dasd', 'adssd', 'asdasd', 'sadad', '1332', 'sdad', '132123', '123213', current_timestamp());
                $name=$_POST["name"];
                $address=$_POST["address"];
                $pincode=$_POST["pincode"];
                $phone=$_POST["phone"];
                $branch=$_POST["branch"];
                $position=$_POST["position"];
                $salary=$_POST["salary"];
                $sql2 = "INSERT INTO `tbl_files` (`filename`, `name`, `branch`, `position`, `salary`, `address`, `pincode`, `phone`, `date`) VALUES ( '$filename', '$name', '$branch', '$position', '$salary', '$address', '$pincode', '$phone', current_timestamp());";
                $result2 = mysqli_query($conn, $sql2);
                if($result2){
                        echo "The record has been updated successfully successfully!<br>";
                    }
                    else{
                        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                    }
                   
                   // Execute query
               
                       mysqli_query($conn, $sql2);
               
                   // Now let's move the uploaded image into the folder: image
               
                       if (move_uploaded_file($tempname, $folder))  {
               
                           $msg = "Image uploaded successfully";
               
                       }else{
               
                           $msg = "Failed to upload image";
               
                     }
               
                 }
               