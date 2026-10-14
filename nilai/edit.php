<?php
include '../koneksi.php';
include '../header.php';

$id_nilai = $_GET['id_nilai'];

$query = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_nilai='$id_nilai'");
$data = mysqli_fetch_array($query);
?>
<h1>EDIT DATA NILAI</h1>
<form method="post" action="update.php">
    <label>Id Nilai:</label>
    <input type="text" name="id_nilai" value="<?php echo $data['id_nilai']; ?>" readonly><br><br>

    <label>Pilih Siswa:</label>
    <select name="nis" required>
        <?php
        $siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
        while($s = mysqli_fetch_array($siswa)){
            $selected = ($s['nis'] == $data['nis']) ? "selected" : "";
            echo "<option value='".$s['nis']."' $selected>".$s['nama']." (NIS: ".$s['nis'].")</option>";
        }
        ?>
    </select><br><br>

    <label>Pilih Mapel:</label>
    <select name="id_mapel" required>
        <?php
        $mapel = mysqli_query($koneksi, "SELECT * FROM mapel");
        while($m = mysqli_fetch_array($mapel)){
            $selected = ($m['id'] == $data['id_mapel']) ? "selected" : "";
            echo "<option value='".$m['id']."' $selected>".$m['nama_mapel']."</option>";
        }
        ?>
    </select><br><br>

    <label>Pilih Guru:</label>
    <select name="nip" required>
        <?php
        $guru = mysqli_query($koneksi, "SELECT * FROM guru");
        while($g = mysqli_fetch_array($guru)){
            $selected = ($g['nip'] == $data['nip']) ? "selected" : "";
            echo "<option value='".$g['nip']."' $selected>".$g['nama']." (NIP: ".$g['nip'].")</option>";
        }
        ?>
    </select><br><br>

    <label>Nilai:</label>
    <input type="number" name="nilai" value="<?php echo $data['nilai']; ?>"><br><br>

    <input type="submit" value="Update">
</form>

<?php
include '../footer.php';
?>