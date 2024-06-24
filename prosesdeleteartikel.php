<?php
include "koneksi.php";

if (isset($_GET['id_artikel'])) {
    $id = $_GET['id_artikel'];

    $query = "DELETE FROM artikel WHERE id_artikel = '$id'";

    if (mysqli_query($conn, $query)) {
        echo "Artikel berhasil dihapus.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    header("location:dataartikel.php");
    mysqli_close($conn);
} else {
    echo "ID artikel tidak valid.";
}
