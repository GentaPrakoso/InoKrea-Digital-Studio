<?php
$pageTitle = 'InoKrea Digital Studio - Solusi Digital Profesional';
$metaDesc = 'InoKrea Digital Studio: Jasa pembuatan aplikasi website, sistem custom, dan desain grafis untuk perusahaan dan bisnis. Profesional, modern, dan terpercaya.';
$ogTitle = 'InoKrea Digital Studio';
$ogDesc = 'Solusi digital untuk perusahaan: website, sistem aplikasi, dan desain grafis.';
$videoSource = "assets/video/video.mp4";
$siteTitle = "InoKrea Digital Studio";
$siteTitle2 = "Where Creativity Meets Technology.";
$siteTagline = "Kami membantu bisnis Anda tampil profesional secara digital, dengan website yang cepat, responsif, dan dirancang untuk meningkatkan kepercayaan serta menghasilkan pertumbuhan nyata bagi bisnis Anda.";
include 'includes/header.php';
?>

<section class="hero-modern">

    <div class="container hero-grid fade-in">

        <div class="hero-text">
            <h1><?php echo $siteTitle; ?></h1>
            <h2><?php echo $siteTitle2; ?></h2>
            <p><?php echo $siteTagline; ?></p>

            <div class="hero-buttons">
                <a href="kontak.php #kontak" class="btn-primary">Hubungi Kami</a>
                <a href="#layanan" class="btn-outline">Layanan Kami</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="assets/img/vctr.png" alt="Digital Service">
        </div>

    </div>

</section>


<!-- Keunggulan Perusahaan -->
<section class="ino-hero">
    <div class="section-divider"></div>
    <br><br><br><br><br><br><br><br>
    <div class="hero-container">

        <div class="hero-left reveal-left">

            <p class="hero-label">WEBSITE • SYSTEM • GRAPHIC DESIGN</p>

            <h1>
                Solusi Website, Sistem Digital,
                dan Desain Kreatif untuk Bisnis Modern
            </h1>

            <p class="hero-description">
                InoKrea Digital Studio membantu bisnis, UMKM, dan organisasi
                membangun website profesional, sistem aplikasi yang terstruktur,
                serta desain visual yang kuat untuk memperkuat identitas brand.
                Kami menggabungkan teknologi dan kreativitas untuk menciptakan
                solusi digital yang efektif dan mudah dikembangkan.
            </p>

            <div class="hero-buttons">
                <a href="kontak.php #kontak" class="btn-primary">Diskusikan Proyek Anda</a>
                <a href="#portofolio" class="btn-outline">Lihat Portofolio</a>
            </div>

        </div>

        <div class="hero-right reveal-right">

            <div class="hero-stats">

                <div class="stat-item">
                    <h3>Website Development</h3>
                    <p>Website profesional untuk company profile, landing page, hingga e-commerce.</p>
                </div>

                <div class="stat-item">
                    <h3>Custom System</h3>
                    <p>Pembuatan aplikasi dan sistem digital yang disesuaikan dengan kebutuhan bisnis.</p>
                </div>

                <div class="stat-item">
                    <h3>Creative Design</h3>
                    <p>Desain grafis dan identitas visual untuk memperkuat brand bisnis Anda.</p>
                </div>

            </div>

        </div>

    </div>
    <br><br>


    <!-- Wave -->
    <div class="wave wave-1">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="rgba(255,255,255,0.15)"
                d="M0,160L80,176C160,192,320,224,480,218.7C640,213,800,171,960,144C1120,117,1280,107,1360,101.3L1440,96V320H0Z">
            </path>
        </svg>
    </div>

    <div class="wave wave-2">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff"
                d="M0,224L80,213.3C160,203,320,181,480,186.7C640,192,800,224,960,229.3C1120,235,1280,213,1360,202.7L1440,192V320H0Z">
            </path>
        </svg>
    </div>
</section>

<!-- Ringkasan Layanan -->
<section id="layanan" class="section layanan2">
    <div class="container fade-in">
        <h2 class="service-title">Layanan Kami</h2>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <h3>Pembuatan Website</h3>
                <p>Website profesional, cepat, dan responsif untuk bisnis Anda.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-desktop"></i>
                </div>
                <h3>Web Sistem Custom</h3>
                <p>Sistem berbasis web yang dirancang sesuai kebutuhan bisnis Anda.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-pen-nib"></i>
                </div>
                <h3>Desain Grafis</h3>
                <p>Desain kreatif untuk kebutuhan branding digital Anda.</p>
            </div>

        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="layanan.php #layanan" class="btn btn-primary">Lihat Semua Layanan</a>
        </div>
    </div>
</section>

<section class="layanan">
    <div class="container fade-in">
        <div class="pricing-header">
            <h2>Paket Layanan Profesional</h2>
            <p>Solusi digital terstruktur untuk website, sistem internal, dan desain visual brand.</p>
        </div>

        <!-- FILTER -->
        <div class="pricing-filter-wrapper">
            <div class="pricing-filter">
                <button id="btn-regular" class="active">Layanan Utama</button>
                <button id="btn-special">Special Bundle</button>
            </div>
        </div>

        <!-- CARDS -->
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

            <!-- SPECIAL BUNDLE (DEFAULT HIDDEN) -->
            <div class="pricing-card special hidden">
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

<section class="layanan">
    <div id="portofolio" class="container fade-in">
        <h2 class="section-title">Portofolio</h2>
        <p class="section-subtitle">Kategori utama proyek yang menjadi fokus pengembangan kami.</p>
        <div class="portfolio-preview-grid card">
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Website Company">
                <div class="portfolio-overlay">
                    <h4>Website</h4>
                    <p></p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Aplikasi Custom">
                <div class="portfolio-overlay">
                    <h4>Sistem Aplikasi</h4>
                    <p></p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Desain Grafis">
                <div class="portfolio-overlay">
                    <h4>Desain Grafis</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="portofolio.php #portofolio" class="btn btn-primary">Lihat Semua Portofolio</a>
        </div>
    </div>
</section>

<section class="layanan">
    <div class="container fade-in">
        <h2 class="section-title">Apa Kata Klien Kami</h2>
        <p class="section-subtitle">
            Kepercayaan klien adalah fondasi pertumbuhan kami
        </p>

        <div class="testimonials-grid">

            <div class="testimonial-card">
                <p class="testimonial-text">
                    ''Website PT KBM kini tampil lebih profesional dan rapi. Prosesnya cepat,
                    komunikatif, dan hasilnya sesuai harapan kami.''
                </p>
                <div class="testimonial-footer">
                    <h5>Idris Maulana</h5>
                    <span>Direktur • PT Karya Bihar Mandiri</span>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">
                    ''Tampilan website PT MAM sekarang jauh lebih modern dan kredibel.
                    Kami puas dengan hasil dan cara kerjanya yang responsif.''
                </p>
                <div class="testimonial-footer">
                    <h5>Imran Husain</h5>
                    <span>Direktur • PT Modern Aulia Mandiri</span>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">
                    “Desainnya rapi, jelas, dan terlihat profesional. Kami sangat puas dengan hasil akhirnya.”
                </p>
                <div class="testimonial-footer">
                    <h5>Muhammad Arrosyidu</h5>
                    <span>Wakil Biro • SADAYA</span>
                </div>
            </div>

        </div>
    </div>
    <br><br><br>
</section>
<!-- CTA Akhir -->
<section class="cta-section">
    <div class="container cta-flex">

        <!-- Left Content -->
        <div class="cta-left reveal-left">
            <h2>Siap Memulai Proyek Anda?</h2>
            <p>
                Konsultasikan kebutuhan digital Anda bersama tim InoKrea.
                Gratis, tanpa komitmen, dan langsung bersama developer.
            </p>
            <div class="cta-trust">
                <col> ✔ Fast Response</col>
                <col> ✔ Custom Development</col><br>
                <col> ✔ Clean and Modern Design</col>
                <col> ✔ Long-Term Support</col>
            </div>
        </div>

        <!-- Right Content -->
        <div class="cta-right reveal-right">
            <a href="kontak.php #kontak" class="cta-btn">Hubungi Kami Sekarang</a>
        </div>
    </div>

    <!-- Wave Layer 1 (Transparan) -->
    <div class="cta-wave wave-back">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="rgba(15,23,42,0.4)"
                d="M0,224L80,218.7C160,213,320,203,480,202.7C640,203,800,213,960,224C1120,235,1280,245,1360,250.7L1440,256V320H0Z">
            </path>
        </svg>
    </div>

    <!-- Wave Layer 2 (Footer Color) -->
    <div class="cta-wave wave-front">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#161a35"
                d="M0,256L80,245.3C160,235,320,213,480,202.7C640,192,800,192,960,202.7C1120,213,1280,235,1360,245.3L1440,256V320H0Z">
            </path>
        </svg>
    </div>
</section>

<script>
    const reveals = document.querySelectorAll('.reveal-left, .reveal-right');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    });

    reveals.forEach(el => observer.observe(el));
</script>

<script>
    const btnRegular = document.getElementById("btn-regular");
    const btnSpecial = document.getElementById("btn-special");

    const regularCards = document.querySelectorAll(".pricing-card.regular");
    const specialCards = document.querySelectorAll(".pricing-card.special");

    btnRegular.addEventListener("click", function() {

        btnRegular.classList.add("active");
        btnSpecial.classList.remove("active");

        regularCards.forEach(card => card.classList.remove("hidden"));
        specialCards.forEach(card => card.classList.add("hidden"));

    });

    btnSpecial.addEventListener("click", function() {

        btnSpecial.classList.add("active");
        btnRegular.classList.remove("active");

        regularCards.forEach(card => card.classList.add("hidden"));
        specialCards.forEach(card => card.classList.remove("hidden"));

    });
</script>

<?php include 'includes/footer.php'; ?>