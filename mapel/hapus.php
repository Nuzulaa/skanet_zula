<?php
include 'koneksi.php';
include '../header.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM mapel WHERE id='$id'");

if($query){
    echo "<p>Data berhasil dihapus</p>";
    echo "<a href='index.php'>Lihat Data</a>";
} else {
    echo "<p>Data gagal dihapus</p>";
}

include '../footer.php';
?>