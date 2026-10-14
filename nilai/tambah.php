<?php 
include "../koneksi.php"; 
include "../header.php"; 
?>

<h1>Tambah Nilai Siswa</h1>

<form action="simpan.php" method="POST">
    Pilih Siswa : 
    <select name="nis" required>
        <option value="">-- Pilih Siswa --</option>
        <?php
        $siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
        while($s = mysqli_fetch_array($siswa)){
            echo "<option value='".$s['nis']."'>".$s['nama']." (NIS: ".$s['nis'].")</option>";
        }
        ?>
    </select>
    <br>

    Pilih Mapel : 
    <select name="id_mapel" required>
        <option value="">-- Pilih Mapel --</option>
        <?php
        $mapel = mysqli_query($koneksi, "SELECT * FROM mapel");
        while($m = mysqli_fetch_array($mapel)){
            echo "<option value='".$m['id']."'>".$m['nama_mapel']."</option>";
        }
        ?>
    </select>
    <br>

    Pilih Guru : 
    <select name="nip" required>
        <option value="">-- Pilih Guru --</option>
        <?php
        $guru = mysqli_query($koneksi, "SELECT * FROM guru");
        while($g = mysqli_fetch_array($guru)){
            echo "<option value='".$g['nip']."'>".$g['nama']." (NIP: ".$g['nip'].")</option>";
        }
        ?>
    </select>
    <br>

    Masukkan Nilai : <input type="number" name="nilai" required>
    <br><br>
    
    <button type="submit">Simpan Data</button>
</form>

<br>
<ul class="menu-nav">
    <li><a href="index.php">Kembali ke Daftar Nilai</a></li>
</ul>

<?php 
include "../footer.php"; 
?>