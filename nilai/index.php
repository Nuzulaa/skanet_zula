<?php
include "../koneksi.php";
session_start();
if($_SESSION['status'] <> "sukses"){
 header('location:../logout.php');
}
include "../header.php";
?>
<div class="page-head no-print">
    <h1>Data Nilai Siswa</h1>
    <div style="display:flex; gap:10px;">
        <a href="tambah.php" class="btn">+ Tambah Nilai</a>
    </div>
</div>
<p class="no-print" style="margin:-8px 0 18px;"><a href="../index.php">← Kembali ke Menu</a></p>

<input type="text" id="searchInput" placeholder="Cari nama siswa..." onkeyup="filterTable()" style="margin-bottom:16px;">

<script>
function filterTable() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let rows = document.querySelectorAll("table tbody tr, table tr:not(:first-child)");
    rows.forEach(row => {
        let text = row.textContent.toLowerCase();
        row.style.display = text.includes(input) ? "" : "none";
    });
}
</script>
<table>
 <tr>
     <th>No</th>
     <th>Nama Siswa</th>
     <th>Mata Pelajaran</th>
     <th>Guru Pengajar</th>
     <th>Nilai</th>
     <th class="no-print">Aksi</th>
 </tr>
 <?php
 $query = mysqli_query($koneksi, "SELECT nilai.*, siswa.nama AS nama_siswa, mapel.nama_mapel AS nama_mapel, guru.nama AS nama_guru 
                                  FROM nilai 
                                  JOIN siswa ON nilai.nis = siswa.nis 
                                  JOIN mapel ON nilai.id_mapel = mapel.id
                                  JOIN guru ON nilai.nip = guru.nip");
 $no = 1;
 while($data = mysqli_fetch_array($query)){
 ?>
 <tr>
     <td><?php echo $no++; ?></td>
     <td><?php echo $data['nama_siswa']; ?></td>
     <td><?php echo $data['nama_mapel']; ?></td>
     <td><?php echo $data['nama_guru']; ?></td>
     <td><?php echo $data['nilai']; ?></td>
     <td class="no-print">
         <a href="edit.php?id_nilai=<?php echo $data['id_nilai']; ?>">Edit</a>
         <a href="hapus.php?id=<?php echo $data['id_nilai']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
         <a href="print.php?id=<?php echo $data['id_nilai']; ?>" target="_blank" title="Print / Simpan PDF">🖨</a>
     </td>
 </tr>
 <?php } ?>
</table>
<?php
include "../footer.php";
?>