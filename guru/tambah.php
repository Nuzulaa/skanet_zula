<?php
include "koneksi.php";
include "../header.php";
?>
<h1>Tambah Data Guru</h1>
<form action="simpan.php" method="POST">
    <label>Nip</label>
    <input type="text" name="nip">

    <label>Nama</label>
    <input type="text" name="nama">

    <label>Alamat</label>
    <input type="text" name="alamat">

    <button>Simpan</button>
</form>
<?php
include "../footer.php";
?>