<?php


$connect = mysqli_connect('localhost', 'root', '', 'dev_hr');

if (!$connect){
    exit('Gagal koneksi database');
}
