<?php
// includes/header.php
// Menentukan halaman aktif untuk class active di menu
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'InoKrea Digital Studio'; ?></title>
    <meta name="description" content="<?php echo $metaDesc ?? 'Jasa pembuatan aplikasi website, sistem custom, dan desain grafis untuk perusahaan dan bisnis.'; ?>">
    <meta name="keywords" content="jasa pembuatan website, aplikasi custom, desain grafis, UI/UX, company profile, tender">
    <meta name="author" content="InoKrea Digital Studio">

    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="<?php echo $ogTitle ?? 'InoKrea Digital Studio'; ?>">
    <meta property="og:description" content="<?php echo $ogDesc ?? 'Solusi digital untuk perusahaan: website, sistem aplikasi, dan desain grafis.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.inokrea.com/<?php echo $current_page; ?>">
    <meta property="og:image" content="https://www.inokrea.com/assets/images/og-image.jpg">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">

    <link href="assets/img/logo_ck.png" rel="icon">
    <link href="assets/img/masonry-portfolio/logo-4.png" rel="apple-touch-icon">
</head>

<body>
    <!-- Sticky Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">InoKrea Digital Studio<span>.</span></a>
            <ul class="nav-menu" id="navMenu">
                <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Beranda</a></li>
                <li><a href="tentang.php" class="<?php echo ($current_page == 'tentang.php') ? 'active' : ''; ?>">Tentang</a></li>
                <li><a href="layanan.php" class="<?php echo ($current_page == 'layanan.php') ? 'active' : ''; ?>">Layanan</a></li>
                <li><a href="portofolio.php" class="<?php echo ($current_page == 'portofolio.php') ? 'active' : ''; ?>">Portofolio</a></li>
                <li><a href="kontak.php" class="<?php echo ($current_page == 'kontak.php') ? 'active' : ''; ?>">Kontak</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <script>
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 50);
});
</script>
<script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "PT. Modern Aulia Mandiri",
            "url": "https://modernauliamandiri.id",
            "logo": "https://modernauliamandiri.id/assets/img/masonry-portfolio/logo-4.png"
        }
    </script>
        </div>
    </nav>
    <main>