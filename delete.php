<?php
include 'connect.php';

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];

    $sql = "DELETE from crud_table where id=$id";
    $result = mysqli_query($con, $sql);

    if($result){
        // echo "Deleted Succfully";
        header('location:display.php');
    }else{
        echo "Failed to Delete";
    }
}



?>