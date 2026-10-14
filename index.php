<?php
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status'] != "sukses"){
    header('location:logout.php');
}
include "header.php";
?>
<h1>Menu Utama</h1>

<div class="menu-grid">
    <a href="siswa" class="menu-card">
        <div class="menu-icon">🎓</div>
        <div class="menu-title">Siswa</div>
        <div class="menu-desc">Kelola data siswa terdaftar</div>
    </a>

    <a href="guru" class="menu-card">
        <div class="menu-icon">🧑‍🏫</div>
        <div class="menu-title">Guru</div>
        <div class="menu-desc">Kelola data pengajar</div>
    </a>

    <a href="mapel" class="menu-card">
        <div class="menu-icon">📚</div>
        <div class="menu-title">Mata Pelajaran</div>
        <div class="menu-desc">Kelola daftar mata pelajaran</div>
    </a>

    <a href="nilai" class="menu-card">
        <div class="menu-icon">📝</div>
        <div class="menu-title">Nilai</div>
        <div class="menu-desc">Input dan lihat nilai siswa</div>
    </a>

    <a href="logout.php" class="menu-card logout">
        <div class="menu-icon">🚪</div>
        <div class="menu-title">Logout</div>
        <div class="menu-desc">Keluar dari sistem</div>
    </a>
</div>

<?php
include "footer.php";
?>