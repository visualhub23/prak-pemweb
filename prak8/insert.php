<?php

include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$position = $_POST['position'];
$department = $_POST['department'];
$hire_date = $_POST['hire_date'];

$insert = mysqli_query($connect, "INSERT INTO employees SET name='$name', position='$position', department='$department', hire_date='$hire_date' ");

if($insert){
    header('location: list.php');
}else{
    echo 'input data gagal';
}