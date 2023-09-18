<?php
require "conn.php";

$sql = "SELECT * FROM student";

$data = mysqli_query($conn, $sql);

$arr = mysqli_fetch_all($data, MYSQLI_NUM);

// echo $arr[0][1];

// <table border="1">
//         <tr>
//           <th>Serial Number</th>
//           <th>Name</th>
//           <th>Mobile Number</th>
//           <th>Password</th>
//         </tr>

//         <tr>
//           <th>1</th>
//           <th>Md. Ahanaf Hossain</th>
//           <th>01738673490</th>
//           <th>198181512!!</th>
//         </tr>
//       </table>

echo "<table border='1'>";

echo "<tr>
<th>Serial Number</th>
<th>Name</th>
<th>Mobile Number</th>
<th>Password</th>
<th>Encripted Password</th>
</tr>";

for($i = 0; $i < count($arr); $i++){
    $serial = $arr[$i][0];
    $name = $arr[$i][1];
    $mobile = $arr[$i][2];
    $pass = $arr[$i][3];
    $en_pass = md5($pass);
    echo "
    <tr>
        <td> $serial </td>
        <td> $name </td>
        <td> $mobile </td>
        <td> $pass </td>
        <td> $en_pass </td>
        
    </tr>
    ";
}


echo "</table>";


?>

