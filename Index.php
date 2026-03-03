<?php
$pageTitle = 'InoKrea Digital Studio - Solusi Digital Profesional';
$metaDesc = 'InoKrea Digital Studio: Jasa pembuatan aplikasi website, sistem custom, dan desain grafis untuk perusahaan dan bisnis. Profesional, modern, dan terpercaya.';
$ogTitle = 'InoKrea Digital Studio';
$ogDesc = 'Solusi digital untuk perusahaan: website, sistem aplikasi, dan desain grafis.';
$videoSource = "assets/video/video.mp4";
$siteTitle = "InoKrea Digital Studio";
$siteTagline = "Kami membantu bisnis Anda tampil profesional secara digital.";
include 'includes/header.php';
?>

<section class="hero-modern">

    <div class="container hero-grid fade-in">

        <div class="hero-text">
            <h1><?php echo $siteTitle; ?></h1>
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
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>
                <h3>Sistem Aplikasi Custom</h3>
                <p>Perbaikan cepat dan terpercaya untuk berbagai jenis smartphone.</p>
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
                <p class="price">Mulai dari <strong>Rp 3.500.000</strong></p>
                <ul>
                    <li>Desain Custom (No Template Massal)</li>
                    <li>Responsive All Device</li>
                    <li>SEO Basic Setup</li>
                    <li>Free Maintenance 1 Bulan</li>
                </ul>
                <a href="kontak.php" class="btn-pricing">Konsultasi Proyek</a>
            </div>

            <!-- SISTEM -->
            <div class="pricing-card regular fade-service delay-2">
                <h3>Sistem / Aplikasi Internal</h3>
                <p class="price">Mulai dari <strong>Rp 7.000.000</strong></p>
                <ul>
                    <li>Custom Workflow System</li>
                    <li>Dashboard & Reporting</li>
                    <li>Multi User Access</li>
                    <li>Scalable Architecture</li>
                </ul>
                <a href="kontak.php" class="btn-pricing">Diskusi Kebutuhan</a>
            </div>

            <!-- DESIGN -->
            <div class="pricing-card regular fade-service delay-4">
                <h3>Desain Grafis Profesional</h3>
                <p class="price">Mulai dari <strong>Rp 1.000.000</strong></p>
                <ul>
                    <li>Branding Visual</li>
                    <li>Social Media Design</li>
                    <li>Marketing Materials</li>
                    <li>Revisi Terstruktur</li>
                </ul>
                <a href="kontak.php" class="btn-pricing">Mulai Proyek</a>
            </div>

            <!-- SPECIAL BUNDLE (DEFAULT HIDDEN) -->
            <div class="pricing-card special hidden">
                <span class="badge">Bundle Eksklusif</span>
                <h3>Website + Logo Branding</h3>
                <p class="price"><strong>Rp 4.500.000</strong></p>
                <ul>
                    <li>Website Company Profile</li>
                    <li>Desain Logo Profesional</li>
                    <li>Brand Color Guideline</li>
                    <li>Support 2 Bulan</li>
                </ul>
                <a href="kontak.php" class="btn-pricing primary">Ambil Paket Ini</a>
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
    <div class="container">
        <h2 class="section-title">Apa Kata Klien Kami</h2>
        <p class="section-subtitle">
            Kepercayaan klien adalah fondasi pertumbuhan kami
        </p>

        <div class="testimonials-grid">

            <div class="testimonial-card">
                <div class="quote-mark">“</div>
                <p class="testimonial-text">
                    Tim InoKrea sangat profesional dan responsif. Website perusahaan kami
                    selesai tepat waktu dan sesuai ekspektasi.
                </p>
                <div class="testimonial-footer">
                    <h5>Budi Santoso</h5>
                    <span>Direktur • PT Maju Jaya</span>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="quote-mark">“</div>
                <p class="testimonial-text">
                    Desain yang diberikan modern dan selaras dengan brand kami.
                    Proses revisi cepat dan komunikatif.
                </p>
                <div class="testimonial-footer">
                    <h5>Siti Aminah</h5>
                    <span>Owner • Kafe Kopi Nusantara</span>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="quote-mark">“</div>
                <p class="testimonial-text">
                    Aplikasi inventory custom yang dibuat sangat membantu operasional
                    kami. Fitur tepat guna dan dukungan teknisnya responsif.
                </p>
                <div class="testimonial-footer">
                    <h5>Agus Wijaya</h5>
                    <span>Manager • CV Berkah Abadi</span>
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