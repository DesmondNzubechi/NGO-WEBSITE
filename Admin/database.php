<?php

$servername = 'Localhost';
$username = 'root';
$password = '';
$dbname = 'post'; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    # code...
    $err = mysqli_connect_error('Connection Failed', mysqli_error());
    die($conn);
}