<?php
$conn = mysqli_connect("localhost","root","","userdata");
if($conn){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $db_insert = "insert into bookig(fromm, too, date, name, number) values('$from','$to','$date','$name','$number');";
    $query = mysqli_query($conn, $db_insert);
    if($query){
        header('location:index.php');
    }
    
}

?>