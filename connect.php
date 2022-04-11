<?php

$con = mysqli_connect("localhost", "root", "", "crud");

if(!$con){
    echo "Failed to connect";
}

// #for checking connection purpose
// if($con){
//     echo "connected";
// }else{
//     echo "Not connected";
// }

?>