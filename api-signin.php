<?php

include 'koneksi.php';

$email = $_GET['email'];
$password = $_GET['password'];

$cek = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$msql = mysqli_query($koneksi, $cek);
if ($msql) {
    $result = mysqli_num_rows($msql);
    if(!empty($email) && !empty($password)){
        if($result == 0) {
            echo "0";
        } else {
            echo "login berhasil";
        }
    } else {
        echo "tidak boleh kosong";
    }
} else {
    echo "Query error: " . mysqli_error($koneksi);
}
