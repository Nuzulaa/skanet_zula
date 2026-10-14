<?php
include "koneksi.php";
$kode_mapel=$_POST["kode_mapel"];
$nama_mapel=$_POST["nama_mapel"];
$query = mysqli_query($koneksi, "INSERT INTO mapel(kode_mapel, nama_mapel) VALUES('$kode_mapel', '$nama_mapel')");
header("location:index.php");
?>