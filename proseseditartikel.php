<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_artikel = $_POST["id_artikel"];
    $judul = $_POST["judul"];
    $penerbit = $_POST["penerbit"];
    $isi = $_POST["isi"];
    $tanggal = $_POST["tanggal"];
    $status = $_POST["status"];

    // Proses upload gambar
    $gambar = $_FILES["gambar"]["name"];
    $gambar_temp = $_FILES["gambar"]["tmp_name"];

    // Periksa apakah ada file gambar baru diunggah
    if (!empty($gambar)) {
        // Hapus gambar lama jika ada
        $old_gambar = mysqli_query($conn, "SELECT gambar FROM artikel WHERE id_artikel = $id_artikel");
        $old_gambar = mysqli_fetch_assoc($old_gambar);
        $old_gambar = $old_gambar["gambar"];
        if (!empty($old_gambar)) {
            unlink("assets/admin/images/artikel/{$old_gambar}");
        }

        // Pindahkan gambar baru ke folder
        move_uploaded_file($gambar_temp, "assets/admin/images/artikel/{$gambar}");
    } else {
        // Jika tidak ada file gambar baru diunggah, gunakan gambar lama
        $result = mysqli_query($conn, "SELECT gambar FROM artikel WHERE id_artikel = $id_artikel");
        $old_gambar = mysqli_fetch_assoc($result);
        $gambar = $old_gambar["gambar"];
    }

    // Update data artikel
    $query = "UPDATE artikel SET judul = '$judul', penerbit = '$penerbit', isi = '$isi', tanggal = '$tanggal', gambar = '$gambar', status = '$status' WHERE id_artikel = $id_artikel";

    if (mysqli_query($conn, $query)) {
        header("location:dataartikel.php?update=true");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}
