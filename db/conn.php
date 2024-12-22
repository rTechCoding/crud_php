<?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $dbname = "adminpanel";


    $con = mysqli_connect($servername,$username,$password,$dbname);

    if(mysqli_connect_errno())
    {
        echo"<script>
        
        alert('Database Cannot be connected');
        
        </script>";
        exit();
    }
     else
    {
     
      //  echo"<script>
     
       // alert('Database to be connected');
        
       // </script>";
       // exit();
    } 




?>