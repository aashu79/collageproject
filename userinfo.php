<?php
$conn = mysqli_connect("localhost","root","","userdata");
if($conn){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $db_insert = "insert into user_info(name, email, message) values('$name','$email','$message');";
    $query = mysqli_query($conn, $db_insert);
    if($query){
        header('location:index.php');
    }
    
}

?>