<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];

    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    $upload_dir = "assets/admin/images/artikel/";

    // Pindahkan gambar ke direktori yang ditentukan
    move_uploaded_file($gambar_tmp, $upload_dir . $gambar);

    // Masukkan data ke dalam tabel artikel
    $query_insert_artikel = "INSERT INTO artikel (judul, penerbit, isi, tanggal, gambar, status) 
                    VALUES ('$judul', '$penerbit', '$isi', '$tanggal', '$gambar', '$status')";

    // Eksekusi query
    if (mysqli_query($conn, $query_insert_artikel)) {
        // Redirect ke halaman dengan Sweet Alert
        header("location:dataartikel.php?success=true");
        exit();
    } else {
        echo "Error: " . $query_insert_artikel . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
