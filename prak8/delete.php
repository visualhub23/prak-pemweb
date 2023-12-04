<?php

include 'connection.php';

$id = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM employees WHERE id='$id' ");

if($delete){
    header('location: list.php');
}else{
    echo 'delete data gagal';
}
