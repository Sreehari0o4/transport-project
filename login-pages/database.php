<?php


 $db_server = "localhost";
 $db_user = "root";
 $db_pass = "password";
 $db_name = "transportmanagement";
 $conn = "";

 
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
   

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfully";

    


//mysqli_close($conn)
?>