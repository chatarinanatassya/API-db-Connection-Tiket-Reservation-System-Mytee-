<?php

include 'koneksi.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$querySignUp = "SELECT * FROM user WHERE fullname = '".$fullname."'";

$msql = mysqli_query($koneksi, $querySignUp);

$result = mysqli_num_rows($msql);

if (!empty($fullname) && !empty($email) && !empty($password)) {
    if ($result == 0) {
        $signup = "INSERT INTO user (fullname, email, password)
        VALUES ('$fullname', '$email', '$password')";

        $msqlsignup = mysqli_query($koneksi, $signup);

        echo "Pendaftaran Berhasil";
    } else {
        echo "username sudah terdaftar";
    }
} else {
    echo "semua harus di lengkapi";
}
?>
