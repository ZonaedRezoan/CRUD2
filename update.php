<?php
include 'connect.php';

$id = $_GET['update_id'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "UPDATE crud_table SET name='$name', email= '$email', phone='$phone', address='$address' WHERE id=$id";

    //   var_dump($sql);
    $result = mysqli_query($con, $sql);
    // var_dump($result);
  
    if($result){
        // echo "Updated succussfully";
        header('location:display.php');
    }else{
        echo "Failed to Update";
        // die(mysqli_error($con));
    }
}

$sql="SELECT * from crud_table where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD</title>
</head>

<body>
    <div class="container my-5">

        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>">
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>">
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $row['address'];?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>