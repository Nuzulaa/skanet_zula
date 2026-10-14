<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Akademik Sekolah</title>
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

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--paper);
            color: var(--ink);
            line-height: 1.5;
        }

        h1, h2, h3 {
            font-family: 'Fraunces', serif;
            font-weight: 500;
            color: var(--ink);
        }

        h1 {
            font-size: 26px;
            margin-bottom: 18px;
        }

        /* Navbar */

        .navbar {
            background: linear-gradient(160deg, var(--navy) 0%, var(--navy-deep) 100%);
            padding: 16px 32px;
            display: flex;
            align-items: center;
            gap: 28px;
            box-shadow: 0 4px 20px rgba(11,24,48,.18);
        }

        .navbar .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-right: 12px;
        }

        .navbar .brand .icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: linear-gradient(135deg, var(--gold-light), var(--gold));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--navy-deep);
            font-family: 'Fraunces', serif;
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 0;
        }

        .navbar .brand span {
            color: #E7E9EF;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: .02em;
            white-space: nowrap;
        }

        .navbar a {
            color: #C6CCDA;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            padding: 6px 2px;
            border-bottom: 2px solid transparent;
            transition: .2s;
        }

        .navbar a:hover {
            color: #fff;
        }

        .navbar a.logout {
            margin-left: auto;
            color: var(--gold-light);
        }

        .navbar a.logout:hover {
            color: var(--gold);
        }

        /* Container */

        .container {
            padding: 36px 40px;
            max-width: 1080px;
            margin: 0 auto;
        }

        /* Page header row (title + action button) */

        .page-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .page-head h1 {
            margin-bottom: 0;
        }

        /* Buttons */

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--navy);
            color: #fff !important;
            border: none;
            padding: 10px 18px;
            border-radius: 9px;
            font-size: 13.5px;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            text-decoration: none !important;
            transition: .2s ease;
        }

        .btn:hover {
            background: var(--navy-deep);
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(11,24,48,.25);
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #fff;
            color: var(--navy) !important;
            border: 1.5px solid var(--navy);
            padding: 10px 18px;
            border-radius: 9px;
            font-size: 13.5px;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            text-decoration: none !important;
            transition: .2s ease;
        }

        .btn-outline:hover {
            background: var(--paper);
            transform: translateY(-1px);
        }

        button, input[type="submit"] {
            background: var(--navy);
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: .2s ease;
        }

        button:hover, input[type="submit"]:hover {
            background: var(--navy-deep);
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(11,24,48,.25);
        }

        /* Table */

        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
            margin-top: 4px;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(18,35,63,.08);
        }

        table, th, td {
            border: 1px solid var(--line);
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: var(--navy);
            color: #fff;
            font-weight: 600;
            border-color: var(--navy);
        }

        tr:nth-child(even) td {
            background: #FBF9F4;
        }

        tr:hover td {
            background: #F3EEE0;
        }

        td a {
            font-size: 13px;
            font-weight: 600;
            margin-right: 10px;
        }

        /* Forms */

        form {
            background: #fff;
            max-width: 460px;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 14px 34px rgba(18,35,63,.10);
            border: 1px solid var(--line);
        }

        form label,
        form br + label {
            display: block;
            margin: 16px 0 6px;
            font-size: 13px;
            font-weight: 600;
            color: var(--ink);
        }

        input[type="text"], input[type="number"], select, textarea {
            width: 100%;
            padding: 12px 14px;
            margin: 4px 0;
            border: 1.5px solid var(--line);
            border-radius: 9px;
            background: #FCFBF8;
            color: var(--ink);
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            transition: .2s;
        }

        input[type="text"]:focus, input[type="number"]:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--gold);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(201,161,91,.16);
        }

        form button, form input[type="submit"] {
            margin-top: 18px;
            width: 100%;
        }

        a {
            color: #2A5DB0;
        }

        a:hover {
            color: var(--navy);
        }

        /* Print */

        @media print {
            .navbar, .no-print {
                display: none !important;
            }

            body {
                background: #fff;
            }

            .container {
                padding: 0;
                max-width: 100%;
            }

            table {
                box-shadow: none;
                border: 1px solid #999;
            }

            th {
                background: #eee !important;
                color: #000 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            tr:nth-child(even) td {
                background: #fff !important;
            }
        }
        /* Menu grid */

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 24px;
        }

        .menu-card {
            display: flex;
            flex-direction: column;
            gap: 14px;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 26px 24px;
            text-decoration: none !important;
            box-shadow: 0 10px 30px rgba(18,35,63,.06);
            transition: .2s ease;
        }

        .menu-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 34px rgba(18,35,63,.14);
            border-color: var(--gold);
        }

        .menu-card .menu-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--gold-light), var(--gold));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .menu-card .menu-title {
            font-family: 'Fraunces', serif;
            font-size: 18px;
            font-weight: 600;
            color: var(--ink);
        }

        .menu-card .menu-desc {
            font-size: 13px;
            color: var(--muted);
            font-family: 'Inter', sans-serif;
        }

        .menu-card.logout .menu-icon {
            background: linear-gradient(135deg, #E9A7A7, #D46A6A);
        }
        .navbar a.active {
            color: #fff;
            border-bottom: 2px solid var(--gold);
        }
    </style>
</head>
<body>
<?php $current = basename(dirname($_SERVER['SCRIPT_NAME'])); ?>
    <div class="navbar">
        <div class="brand">
            <div class="icon">A</div>
            <span>Sistem Akademik Sekolah</span>
        </div>
        <a href="/skanet_zula/index.php" class="<?php echo ($current=='skanet_zula')?'active':''; ?>">Menu Utama</a>
        <a href="/skanet_zula/siswa/" class="<?php echo ($current=='siswa')?'active':''; ?>">Siswa</a>
        <a href="/skanet_zula/guru/" class="<?php echo ($current=='guru')?'active':''; ?>">Guru</a>
        <a href="/skanet_zula/mapel/" class="<?php echo ($current=='mapel')?'active':''; ?>">Mata Pelajaran</a>
        <a href="/skanet_zula/nilai/" class="<?php echo ($current=='nilai')?'active':''; ?>">Nilai</a>
        <a href="/skanet_zula/logout.php" class="logout">Logout</a>
    </div>
    <div class="container">