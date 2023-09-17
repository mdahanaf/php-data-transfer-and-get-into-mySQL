<?php
    require 'conn.php';
    // echo $hello;
    $br = "<br><br>";

    $roll = $_REQUEST["roll"];
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $password = $_REQUEST["password"];
    $gender = $_REQUEST["gender"];

    $query = "INSERT INTO Student VALUES ('$roll', '$fname', '$lname', '$password', '$gender')";
    
    $data = mysqli_query($conn, $query);

    if($data){
        echo "Data stored into database successfully. CONGRATULATIONS!!";
    }else{
        echo "Failed. Try again";
    }
    
    

    

?>
