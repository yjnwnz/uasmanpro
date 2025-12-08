<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi & Teknologi</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <style>
        /* Styling Khusus Header agar menimpa default Bootstrap */
        .navbar {
            background-color: #ffffff;
            transition: all 0.3s ease-in-out;
        }
        
        /* Logo Size */
        .navbar-brand img {
            max-height: 50px; 
            width: auto;
        }

        /* Menu Links */
        .nav-link {
            font-size: 15px;
            font-weight: 600;
            color: #333 !important; /* Hitam agar kontras dengan putih */
            margin: 0 10px;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #2D9CDB !important; /* Biru saat dihover */
        }
        
        /* Dropdown Styling */
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 10px;
        }
        .dropdown-item:hover {
            background-color: #f0f8ff;
            color: #2D9CDB;
        }

        /* Tombol Daftar di Header */
        .btn-header-daftar {
            background-color: #FFC107;
            color: #fff !important;
            border-radius: 50px;
            padding: 8px 25px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(255, 193, 7, 0.3);
        }
        .btn-header-daftar:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-3">
    <div class="container">
        
        <a class="navbar-brand" href="index.php">
            <img src="siega.jpg" alt="Logo SIEGA">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUtama">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarUtama">
            <ul class="navbar-nav ms-auto align-items-center">
                
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Program Studi
                    </a>
                    <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="prodi.php?id=si">Sistem Informasi</a></li>
                        <li><a class="dropdown-item" href="prodi.php?id=ec">E-Commerce</a></li>
                        <li><a class="dropdown-item" href="prodi.php?id=gt">Game Technology</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="prodi.php?id=aksi">Akuntansi SI</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tentang_kami.php">Tentang Kami</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="akademik.php">Akademik & Karya</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="berita.php">Berita</a>
                </li>

                <li class="nav-item ms-lg-2">
                    <a class="nav-link btn-header-daftar" href="info_pendaftaran.php">Daftar Sekarang</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>