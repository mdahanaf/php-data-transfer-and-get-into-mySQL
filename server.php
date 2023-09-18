<?php
require "conn.php";

$name = $_REQUEST["name"];
$mobile = $_REQUEST["mobile"];
$mobile = (string)$mobile;
$password = $_REQUEST["password"];

$encripted_password = md5($password);

$query1 = "INSERT INTO student (name, mobile, password) VALUES ('$name', '$mobile', '$password')";

$query2 = "INSERT INTO password (mobile, password) VALUES ('$mobile', '$password')";

$data1 = mysqli_query($conn, $query1);
$data2 = mysqli_query($conn, $query2);


// from show.php

$br = "<br><br>";

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

$arr = mysqli_fetch_all($result, MYSQLI_NUM);


echo "<strong>This is serial.</strong>".$br;
for($i = 0; $i<count($arr) ;$i++){
    echo $arr[$i][0] . $br;
}


echo "<strong>This is name.</strong>".$br;
for($i = 0; $i<count($arr) ;$i++){
    echo $arr[$i][1] . $br;
}

echo "<strong>This is mobile.</strong>".$br;
for($i = 0; $i<count($arr) ;$i++){
    echo $arr[$i][2] . $br;
}

echo "<strong>This is password.</strong>".$br;
for($i = 0; $i<count($arr) ;$i++){
    echo $arr[$i][3] . $br;
}

// showing all data together
echo "<h1>Showing all data together</h1>".$br.$br;
$line = "<strong>    |||    </strong>";
for($i=0; $i<count($arr); $i++){
    for($j=0; $j<4; $j++){
        echo $arr[$i][$j] . $line;
    
    }
    echo $br.$br;
}




?>