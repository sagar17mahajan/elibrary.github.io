<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "deployment";
$conn = mysqli_connect($server,$username,$password,$db);

// if($conn){ 
//     echo "success"
// }
if(!$conn){
 die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>