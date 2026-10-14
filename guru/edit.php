<?php
include"koneksi.php";
include "../header.php";
$nip=$_GET['nip'];
$query=mysqli_query($koneksi,"select *from guru where nip ='$nip'");
$data=mysqli_fetch_array($query);
?>
<h1>Edit Data Guru</h1>
<form action="update.php" method="POST">
    <label>Nip</label>
    <input type="text" name="nip" value="<?php echo $data['nip'] ?>">

    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $data['nama'] ?>">

    <label>Alamat</label>
    <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">

    <button>Simpan</button>
</form>
<?php
include "../footer.php";
?>