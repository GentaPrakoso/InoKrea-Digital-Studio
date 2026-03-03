<?php
$pageTitle = 'Layanan - InoKrea Digital Studio';
$metaDesc = 'Layanan pembuatan website, aplikasi custom, UI/UX design, dan desain grafis dari InoKrea.';
$siteTitle = "Layanan Kami";
$siteTagline = "Bangun, Kembangkan, dan Optimalkan Bisnis Anda Secara Digital.
            InoKrea Digital Studio siap membantu Anda menciptakan website profesional dan solusi digital yang mendorong pertumbuhan nyata.";
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
            <img src="assets/img/lyn.png" alt="Digital Service">
        </div>

    </div>

</section>

<!-- Layanan Detail -->
<section id="layanan" class="services-modern">
    <div class="container">

        <div class="section-head fade-service">
            <span class="section-tag">Our Services</span>
            <h2>Layanan Digital Berkualitas Tinggi</h2>
            <p>Kami membantu bisnis bertumbuh melalui solusi digital yang dirancang strategis.</p>
        </div>

        <div class="services-grid">

            <div class="service-card fade-service delay-1">
                <div class="icon-wrap">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Pembuatan Website</h3>
                <ul class="service-list">
                    <li>Company Profile & Landing Page</li>
                    <li>E-commerce & Portal Berita</li>
                    <li>Desain Responsif & SEO Friendly</li>
                    <li>Mudah Dikelola (CMS)</li>
                </ul>
            </div>

            <div class="service-card fade-service delay-2">
                <div class="icon-wrap">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Sistem Aplikasi Custom</h3>
                <ul class="service-list">
                    <li>Inventory & Manajemen Aset</li>
                    <li>CRM & HRIS</li>
                    <li>Dashboard Monitoring</li>
                    <li>Integrasi Sistem</li>
                </ul>
            </div>

            <div class="service-card fade-service delay-4">
                <div class="icon-wrap">
                    <i class="fas fa-palette"></i>
                </div>
                <h3>Desain Grafis</h3>
                <ul class="service-list">
                    <li>Logo & Brand Identity</li>
                    <li>Social Media Design</li>
                    <li>Banner & Brosur</li>
                    <li>Brand Guideline</li>
                </ul>
            </div>

        </div>
    </div>
</section>


<section class="pricing-umkm">
    <div class="container">

        <div class="section-head fade-service">
            <span class="section-tag">Paket Website UMKM</span>
            <h2>Pilih Paket Sesuai Kebutuhan Bisnis Anda</h2>
            <p>Solusi website profesional untuk membantu bisnis Anda tampil lebih terpercaya dan siap berkembang.</p>
        </div>

        <div class="pricing-grid">

            <!-- WEBSITE -->
            <div class="pricing-card regular fade-service delay-1">
                <h3>Website Company Profile</h3>
                <p class="price">Mulai dari <strong>Rp 1.500.000</strong></p>
                <p class="price-note">CMS / Manual menyesuaikan kebutuhan</p>
                <ul>
                    <li>Custom Design (No Template Massal)</li>
                    <li>Responsive All Device</li>
                    <li>SEO Basic Setup</li>
                    <li>Free Maintenance 1 Bulan</li>
                    <li>Hosting 1 Tahun</li>
                </ul>
                <a href="kontak.php" class="btn-pricing">Konsultasi Sekarang</a>
            </div>

            <!-- LANDING PAGE -->
            <div class="pricing-card regular fade-service delay-2">
                <h3>Landing Page / HPP</h3>
                <p class="price">Mulai dari <strong>Rp 800.000</strong></p>
                <p class="price-note">CMS / Manual menyesuaikan kebutuhan</p>
                <ul>
                    <li>Single Page Custom Design</li>
                    <li>Responsive Layout</li>
                    <li>Basic SEO Setup</li>
                    <li>Hosting 1 Tahun</li>
                    <li>Penambahan Section Rp 200.000</li>
                </ul>
                <a href="kontak.php" class="btn-pricing">Konsultasi Sekarang</a>
            </div>

            <!-- DESIGN -->
            <div class="pricing-card regular fade-service delay-3">
                <h3>Desain Grafis</h3>
                <p class="price">Mulai dari <strong>Rp 100.000</strong></p>
                <ul>
                    <li>Desain Banner / Promosi</li>
                    <li>Social Media Post</li>
                    <li>Revisi Minor Sesuai Brief</li>
                    <li>File Siap Cetak / Digital</li>
                </ul>
                <a href="kontak.php" class="btn-pricing">Konsultasi Sekarang
                </a>
            </div>

            <!-- Sistem -->
            <div class="pricing-card regular fade-service delay-3">
                <h3>Web Sistem Custom</h3>
                <p class="price">Mulai dari <strong>Rp 3.500.000</strong></p>
                <ul>
                    <li>Sistem Login & Hak Akses Dasar</li>
                    <li>Dashboard & Manajemen Data (CRUD)</li>
                    <li>Desain Responsive</li>
                    <li>Revisi Minor Sesuai Brief</li>
                    <li>Deploy ke Hosting</li>
                </ul>
                <a href="kontak.php" class="btn-pricing">Konsultasi Sekarang</a>
            </div>

        </div>

    </div>
</section>

<section class="pricing-umkm">
    <div class="container">

        <div class="section-head fade-service">
            <span class="section-tag">Exclusive Package</span>
            <h2>Bangun Brand & Website Sekaligus</h2>
            <p>Paket spesial untuk perusahaan yang ingin tampil profesional sejak awal dengan strategi branding dan website yang selaras.</p>
        </div>

        <div class="pricing-grid">

            <!-- WEBSITE -->
            <div class="pricing-card special">
                <span class="badge">Premium Package</span>
                <h3>Corporate Branding & Website Package</h3>
                <p class="price"><strong>Rp 5.899.000</strong></p>
                <p class="price-note">Solusi lengkap untuk membangun identitas dan kehadiran digital profesional</p>
                <ul>
                    <li>Website Company Profile Custom (Max 7 Halaman)</li>
                    <li>Desain Logo Profesional (3 Konsep + Revisi Terstruktur)</li>
                    <li>Mini Brand Guideline (Logo Usage, Color & Typography)</li>
                    <li>5x Desain Social Media / Banner Promosi</li>
                    <li>SEO Basic Setup</li>
                    <li>Free Maintenance 2 Bulan</li>
                </ul>
                <a href="kontak.php" class="btn-pricing primary">Diskusi Sekarang</a>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>