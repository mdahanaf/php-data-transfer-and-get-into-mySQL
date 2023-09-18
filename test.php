<?php
require "conn.php";

$sql = "SELECT (mobile) FROM student";

$query = mysqli_query($conn, $sql);

$mob = mysqli_fetch_all($query, MYSQLI_NUM);

print_r($mob);

echo "<br><br><br>";
$user = "237171";

function mob_index($arr, $user_mobile_number){
    $is_found = false;
    for($i = 0; $i < count($arr); $i++){
        if($user_mobile_number == $arr[$i][0]){
            echo "Index is: $i<br><br>";
            $is_found = true;
            break;
            
        }
    }
    if(!$is_found){
        echo "Mobile not found";
    }
}

mob_index($mob, $user);



?>



