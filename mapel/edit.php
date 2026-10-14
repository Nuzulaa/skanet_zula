<?php
include 'koneksi.php';
include '../header.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<h1>EDIT DATA MAPEL</h1>
<form method="post" action="update.php">
    <label>Id:</label>
    <input type="text" name="id" value="<?php echo $data['id']; ?>" readonly><br><br>
    <label>Kode mapel:</label>
    <input type="text" name="kode_mapel" value="<?php echo $data['kode_mapel']; ?>"><br><br>
    <label>Nama mapel:</label>
    <textarea name="nama_mapel"><?php echo $data['nama_mapel']; ?></textarea><br><br>
    <input type="submit" value="Update">
</form>
<?php
include '../footer.php';
?>