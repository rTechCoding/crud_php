<?php

include ("db/conn.php");

    if(isset($_POST['submit']))
  
    {
        $category_name = $_POST['category_name'];
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];


        // file upload start
      
       $image = $_FILES['image'] ['name'];

       $image_extnsion = pathinfo($image, PATHINFO_EXTENSION);

       $file_upload = time() . '.' . $image_extnsion;

        // file upload end


        $query = "INSERT INTO `product`(`category_id`, `product_name`, `price`, `quantity`, `description`, `image`) VALUES ('$category_name','$product_name','$price','$quantity','$description','$file_upload')";

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES['image'] ['tmp_name'], 'product_image/' . $file_upload);

            echo" <script>
        
            alert('Data Inserted');
            window.location.href='product_details.php';
            </script>";
            exit();
        }
        else
        {
            echo" <script>
        
            alert('Data Not Inserted');
            window.location.href='product_details.php';
            </script>";
            exit();
        }
    
    }

 
?>