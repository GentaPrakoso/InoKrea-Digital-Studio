<?php
$pageTitle = 'Portofolio - InoKrea Digital Studio';
$metaDesc = 'Lihat portofolio proyek website, aplikasi custom, dan desain grafis dari InoKrea.';
$siteTitle = "Portofolio Kami";
$siteTagline = "Setiap proyek yang kami kerjakan merupakan komitmen kami
        dalam menghadirkan solusi digital yang profesional, efektif,
        dan berdampak nyata bagi pertumbuhan bisnis klien.";
include 'includes/header.php';
?>
<section class="hero-modern">

    <div class="container hero-grid fade-in">

        <div class="hero-text">
            <h1><?php echo $siteTitle; ?></h1>
            <p><?php echo $siteTagline; ?></p>

            <div class="hero-buttons">
                <a href="kontak.php #kontak" class="btn-primary">Konsultasi Gratis</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="assets/img/prt.png" alt="Digital Service">
        </div>

    </div>

</section>
<!-- Portofolio -->
<section id="portofolio" class="section">
    <div class="container fade-in">
        <h2 class="section-title">Portofolio</h2>
        <p class="section-subtitle">Beberapa karya terbaik yang telah kami hasilkan</p>

        <!-- Filter Buttons -->
        <div class="filter-buttons" id="filterButtons">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="website">Website</button>
            <button class="filter-btn" data-filter="sistem">Sistem Aplikasi</button>
            <button class="filter-btn" data-filter="desain">Desain Grafis</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid" id="portfolioGrid">
            <div class="portfolio-card" data-category="website">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Website Perusahaan">
                <div class="portfolio-info">
                    <h4>Website PT Maju Jaya</h4>
                    <p>Company profile modern dengan animasi</p>
                    <button class="btn-detail" onclick="showDetail('Website PT Maju Jaya', 'Website company profile dengan desain modern, animasi halus, dan fitur manajemen konten. Dibangun dengan React dan Node.js.')">Lihat Detail</button>
                </div>
            </div>
            <div class="portfolio-card" data-category="sistem">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Sistem Inventory">
                <div class="portfolio-info">
                    <h4>Sistem Inventory CV Berkah</h4>
                    <p>Aplikasi manajemen stok dan penjualan</p>
                    <button class="btn-detail" onclick="showDetail('Sistem Inventory CV Berkah', 'Aplikasi berbasis web untuk manajemen stok, pembelian, penjualan, dan laporan. Menggunakan Laravel dan MySQL.')">Lihat Detail</button>
                </div>
            </div>
            <div class="portfolio-card" data-category="desain">
                <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Branding Kafe">
                <div class="portfolio-info">
                    <h4>Branding Kafe Kopi Nusantara</h4>
                    <p>Logo, menu, dan signage</p>
                    <button class="btn-detail" onclick="showDetail('Branding Kafe Kopi Nusantara', 'Pembuatan identitas visual: logo, desain menu, signage, dan seragam. Konsep modern dengan sentuhan tradisional.')">Lihat Detail</button>
                </div>
            </div>
            <div class="portfolio-card" data-category="website">
                <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="E-commerce">
                <div class="portfolio-info">
                    <h4>E-commerce Toko Online</h4>
                    <p>Website penjualan produk fashion</p>
                    <button class="btn-detail" onclick="showDetail('E-commerce Toko Online', 'Platform e-commerce dengan fitur keranjang belanja, pembayaran online, dan manajemen produk. Dibangun dengan Vue dan Django.')">Lihat Detail</button>
                </div>
            </div>
            <div class="portfolio-card" data-category="sistem">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1115&q=80" alt="CRM">
                <div class="portfolio-info">
                    <h4>CRM Perusahaan</h4>
                    <p>Sistem manajemen pelanggan</p>
                    <button class="btn-detail" onclick="showDetail('CRM Perusahaan', 'Sistem CRM untuk mengelola data pelanggan, interaksi, dan penjualan. Fitur laporan dan analitik.')">Lihat Detail</button>
                </div>
            </div>
            <div class="portfolio-card" data-category="desain">
                <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1171&q=80" alt="Desain Brosur">
                <div class="portfolio-info">
                    <h4>Brosur Promosi</h4>
                    <p>Desain brosur untuk properti</p>
                    <button class="btn-detail" onclick="showDetail('Brosur Promosi', 'Desain brosur lipat tiga untuk perusahaan properti, dengan visual menarik dan tata letak informatif.')">Lihat Detail</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Detail Project -->
<div id="detailModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3 id="modalTitle" style="color: var(--primary); margin-bottom: 1rem;">Detail Project</h3>
        <p id="modalDesc">Deskripsi lengkap project akan ditampilkan di sini.</p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>