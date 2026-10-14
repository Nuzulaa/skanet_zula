<?php
include "koneksi.php";
include "../header.php";
?>
<h1>Tambah Data</h1>
<form action="simpan.php" method="POST">
    Kode Mapel : <input type="text" name="kode_mapel">
    <br>
    Nama Mapel : <input type="text" name="nama_mapel">
    <br>
    <button>Simpan</button>
</form>
<?php
include "../footer.php";
?>