<?php
include "koneksi.php";
include "../header.php";
?>
<div class="page-head">
    <h1>Data Guru</h1>
    <a href="tambah.php" class="btn">+ Tambah Data</a>
</div>
<table>
    <tr>
        <th>Nip</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $query=mysqli_query($koneksi,"select * from guru");
    while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $data ['nip'] ?></td>
        <td><?php echo $data ['nama'] ?></td>
        <td><?php echo $data ['alamat'] ?></td>
        <td>
            <a href="edit.php?nip=<?php echo $data['nip'] ?>">Edit</a>
            <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php

    }
    ?>
</table>
<?php
include "../footer.php";
?>