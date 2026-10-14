<?php
include "koneksi.php";
include "../header.php";
?>
<h1> Data Siswa </h1>
<a href="tambah.php"> Tambah Data </a>
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
<table border="1">
    <tr>
        <td>Nis</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    <?php
    $query=mysqli_query($koneksi,"select * from siswa");
    while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $data ['nis'] ?></td>
        <td><?php echo $data ['nama'] ?></td>
        <td><?php echo $data ['alamat'] ?></td>
        <td>
            <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
            <a href="edit.php?nis=<?php echo $data['nis'] ?>">Edit</a>
        </td>
    </tr>
    <?php

    }
    ?>
</table>
<?php
include "../footer.php";
?>