<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "mytee";

$koneksi = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$koneksi){
    echo "koneksi gagal";
}
