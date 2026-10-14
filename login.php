<?php
ob_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistem Akademik Sekolah</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

:root{
    --navy:#12233F;
    --navy-deep:#0B1830;
    --gold:#C9A15B;
    --gold-light:#E4C888;
    --paper:#F6F3EC;
    --ink:#1F2937;
    --muted:#6B7280;
    --line:#E4DECC;
}

body{
    font-family:'Inter',sans-serif;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:var(--paper);
    background-image:
        radial-gradient(circle at 15% 15%, rgba(201,161,91,.10) 0%, transparent 45%),
        radial-gradient(circle at 85% 85%, rgba(18,35,63,.06) 0%, transparent 45%);
    padding:24px;
}

/* Shell */

.login-shell{
    width:100%;
    max-width:840px;
    min-height:520px;
    display:flex;
    background:#fff;
    border-radius:24px;
    overflow:hidden;
    box-shadow:0 30px 70px rgba(11,24,48,.18);
}

/* Left brand panel */

.brand-panel{
    flex:1;
    background:
        radial-gradient(circle at 30% 15%, rgba(228,200,136,.16) 0%, transparent 55%),
        linear-gradient(160deg,var(--navy) 0%,var(--navy-deep) 100%);
    color:#fff;
    padding:48px 40px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    position:relative;
}

.brand-mark{
    display:flex;
    align-items:center;
    gap:12px;
}

.brand-mark .icon{
    width:42px;
    height:42px;
    border-radius:11px;
    background:linear-gradient(135deg,var(--gold-light),var(--gold));
    display:flex;
    align-items:center;
    justify-content:center;
    color:var(--navy-deep);
    font-family:'Fraunces',serif;
    font-weight:600;
    font-size:19px;
}

.brand-mark .name{
    font-size:14px;
    font-weight:600;
    letter-spacing:.03em;
    color:#E7E9EF;
}

.brand-copy{
    margin-top:auto;
}

.brand-copy .eyebrow{
    font-size:12px;
    letter-spacing:.14em;
    text-transform:uppercase;
    color:var(--gold-light);
    margin-bottom:14px;
}

.brand-copy h2{
    font-family:'Fraunces',serif;
    font-weight:500;
    font-size:30px;
    line-height:1.3;
    max-width:22ch;
    color:#fff;
}

.brand-copy p{
    margin-top:14px;
    color:#B7BFCE;
    font-size:14px;
    line-height:1.6;
    max-width:30ch;
}

/* Right form panel */

.form-panel{
    flex:1;
    padding:56px 48px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.form-panel h1{
    font-family:'Fraunces',serif;
    font-weight:500;
    font-size:28px;
    color:var(--ink);
    margin-bottom:6px;
}

.form-panel .subtitle{
    color:var(--muted);
    font-size:14px;
    margin-bottom:32px;
}

label{
    display:block;
    margin-bottom:8px;
    color:var(--ink);
    font-weight:500;
    font-size:13px;
}

.field{
    margin-bottom:20px;
}

input{
    width:100%;
    padding:13px 16px;
    border-radius:10px;
    border:1.5px solid var(--line);
    background:#FCFBF8;
    color:var(--ink);
    font-size:14px;
    font-family:'Inter',sans-serif;
    transition:.2s;
}

input::placeholder{
    color:#B4AC96;
}

input:focus{
    outline:none;
    border-color:var(--gold);
    background:#fff;
    box-shadow:0 0 0 4px rgba(201,161,91,.16);
}

button{
    width:100%;
    margin-top:12px;
    padding:14px;
    border:none;
    border-radius:10px;
    background:var(--navy);
    color:#fff;
    font-size:14.5px;
    font-weight:600;
    font-family:'Inter',sans-serif;
    cursor:pointer;
    transition:.2s ease;
}

button:hover{
    background:var(--navy-deep);
    transform:translateY(-1px);
    box-shadow:0 10px 24px rgba(11,24,48,.28);
}

@media (max-width:720px){
    .login-shell{ flex-direction:column; min-height:0; }
    .brand-panel{ padding:32px; }
    .brand-copy h2{ font-size:22px; }
    .form-panel{ padding:36px 32px; }
}
    </style>
</head>
<body>
    <div class="login-shell">
        <div class="brand-panel">
            <div class="brand-mark">
                <div class="icon">A</div>
                <div class="name">Sistem Akademik Sekolah</div>
            </div>
            <div class="brand-copy">
                <div class="eyebrow">Portal Siswa &amp; Guru</div>
                <h2>Satu pintu untuk semua urusan akademik.</h2>
                <p>Nilai, jadwal, dan presensi dalam satu tempat yang mudah diakses.</p>
            </div>
        </div>
        <div class="form-panel">
            <h1>Selamat datang kembali</h1>
            <p class="subtitle">Masuk dengan akun sekolah Anda untuk melanjutkan.</p>
            <form action="" method="POST">
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan username">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password">
                </div>
                <button name="login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
    $cek=mysqli_num_rows($query);

    if($cek > 0){
        session_start();
        $_SESSION['status']="sukses";
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        header('location:index.php');
    }
}
?>