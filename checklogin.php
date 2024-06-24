<?php
include "koneksi.php";

function checkLogin($conn, $username, $password)
{
    // Periksa apakah username diisi
    if (empty($username)) {
        return "Username harus diisi";
    }

    // Periksa apakah password diisi
    if (empty($password)) {
        return "Password harus diisi";
    }
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query untuk memeriksa apakah username dan password cocok di database
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Kredensial login valid
        return "success";
    } else {
        // Kredensial login tidak valid
        return "Username atau password tidak valid";
    }
}
