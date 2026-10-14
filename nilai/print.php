<?php
include "../koneksi.php";
session_start();
if($_SESSION['status'] <> "sukses"){
 header('location:../logout.php');
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT nilai.*, siswa.nama AS nama_siswa, mapel.nama_mapel AS nama_mapel, guru.nama AS nama_guru 
                                  FROM nilai 
                                  JOIN siswa ON nilai.nis = siswa.nis 
                                  JOIN mapel ON nilai.id_mapel = mapel.id
                                  JOIN guru ON nilai.nip = guru.nip
                                  WHERE nilai.id_nilai = '$id'");
$data = mysqli_fetch_array($query);

if(!$data){
    echo "Data tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Cetak Nilai - <?php echo $data['nama_siswa']; ?></title>
<style>
    body {
        font-family: 'Inter', Arial, sans-serif;
        padding: 40px;
        color: #12233F;
    }
    h1 {
        font-family: 'Fraunces', serif;
        color: #12233F;
        border-bottom: 2px solid #C9A15B;
        padding-bottom: 10px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 500px;
        margin-top: 20px;
    }
    td {
        padding: 10px;
        border: 1px solid #ccc;
    }
    td:first-child {
        font-weight: bold;
        width: 180px;
        background: #f5f5f5;
    }
</style>
</head>
<body>
    <h1>Data Nilai Siswa</h1>
    <table>
        <tr><td>Nama Siswa</td><td><?php echo $data['nama_siswa']; ?></td></tr>
        <tr><td>Mata Pelajaran</td><td><?php echo $data['nama_mapel']; ?></td></tr>
        <tr><td>Guru Pengajar</td><td><?php echo $data['nama_guru']; ?></td></tr>
        <tr><td>Nilai</td><td><?php echo $data['nilai']; ?></td></tr>
    </table>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>