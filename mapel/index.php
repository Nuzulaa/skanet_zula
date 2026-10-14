<?php
include "koneksi.php";
session_start();
if($_SESSION['status'] <> "sukses"){
    header("location:../logout.php");
}
include "../header.php";
?>
<h1> Mata Pelajaran </h1>
<a href="tambah.php"> Tambah Data </a>
<input type="text" id="searchInput" placeholder="Cari mata pelajaran..." onkeyup="filterTable()" style="margin-bottom:16px;">

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
<table border="1">
    <tr>
        <td>Id</td>
        <td>Kode Mapel</td>
        <td>Nama Mapel</td>
        <td>Aksi</td>
    </tr>
    <?php
    $query=mysqli_query($koneksi,"select * from mapel");
    while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $data ['id'] ?></td>
        <td><?php echo $data ['kode_mapel'] ?></td>
        <td><?php echo $data ['nama_mapel'] ?></td>
        <td>
            <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
            <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a>
        </td>
    </tr>
    <?php

    }
    ?>
</table>
<?php
include "../footer.php";
?>