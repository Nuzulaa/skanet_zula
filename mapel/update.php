<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode_mapel = $_POST['kode_mapel'];
$nama_mapel = $_POST['nama_mapel'];

$query = mysqli_query($koneksi, "UPDATE mapel SET kode_mapel='$kode_mapel', nama_mapel='$nama_mapel' WHERE id='$id'");

if($query){
    header("location:index.php");
} else {
    echo "Data gagal diupdate: " . mysqli_error($koneksi);
}
?>