<?php
require "conn.php";

$mobile_number = "017237877346";

$sql = "DELETE FROM password WHERE mobile = $mobile_number";

echo $sql;
echo $br;

$query = mysqli_query($conn, $sql);

if($query){
    echo "data deleted";
}else{
    echo "failed";
}

?>