<?php

include 'connection.php';


$id = $_POST['id'];
$name = $_POST['name'];
$position = $_POST['position'];
$department = $_POST['department'];
$hire_date = $_POST['hire_date'];

$update = mysqli_query($connect, "UPDATE employees SET name='$name', position='$position', department='$department', hire_date='$hire_date' WHERE id='$id' ");

if($update){
    header('location: list.php');
    exit();
}else{
    echo 'input data gagal';
}