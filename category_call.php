<?php

include ("db/conn.php");

    if(isset($_POST['submit']))
  
    {
        
        $usename = $_POST['name'];


        // file upload start
      
       $image = $_FILES['image'] ['name'];

       $image_extnsion = pathinfo($image, PATHINFO_EXTENSION);

       $file_upload = time() . '.' . $image_extnsion;

        // file upload end


        $query = "INSERT INTO `category`(`name`, `image`) VALUES ('$usename','$file_upload')";

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['image'] ['tmp_name'], 'image/' . $file_upload);

            echo" <script>
        
            alert('Data Inserted');
            window.location.href='category.php';
            </script>";
            exit();
        }
        else
        {
            echo" <script>
        
            alert('Data Not Inserted');
            window.location.href='category.php';
            </script>";
            exit();
        }
    
    }

 
?>