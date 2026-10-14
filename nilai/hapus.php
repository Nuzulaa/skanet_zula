<?php
include 'koneksi.php';
include '../header.php';

$id_nilai = $_GET['id_nilai'];

$query = mysqli_query($koneksi, "DELETE FROM nilai WHERE id_nilai='$id_nilai'");

if($query){
    echo "<p>Data berhasil dihapus</p>";
    echo "<a href='index.php'>Lihat Data</a>";
} else {
    echo "<p>Data gagal dihapus: " . mysqli_error($koneksi) . "</p>";
}

include '../footer.php';
?>