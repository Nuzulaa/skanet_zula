<?php
include "koneksi.php";
include "../header.php";
?>
<h1>Tambah Data</h1>
<form action="simpan.php" method="POST">
    Nis : <input type="text" name="nis">
    <br>
    Nama : <input type="text" name="nama">
    <br>
    Alamat : <input type="text" name="alamat">
    <br>
    <button>Simpan</button>
</form>
<?php
include "../footer.php";
?>