<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'InoKrea Digital Studio'; ?></title>
    <meta name="description" content="<?php echo $pageDesc ?? 'Jasa pembuatan aplikasi website, sistem custom, dan desain grafis untuk perusahaan dan bisnis.'; ?>">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Sticky Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">InoKrea<span>.</span></a>
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="layanan.php">Layanan</a></li>
                <li><a href="portofolio.php">Portofolio</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>