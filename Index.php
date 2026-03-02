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

<!-- Hero Section -->
<section class="hero-landing">

    <video autoplay muted loop playsinline class="hero-landing__video">
        <source src="assets/video/pee.mp4" type="video/mp4">
    </video>

    <div class="hero-landing__overlay"></div>

    <div class="hero-landing__content">
        <h1><?php echo $siteTitle; ?></h1>
        <p><?php echo $siteTagline; ?></p>
        <a href="#layanan" class="hero-landing__btn">Lihat Layanan</a>
    </div>

</section>

<!-- Ringkasan Layanan -->
<section class="section layanan fade-in">
    <div class="container">

        <h2 class="section-title">Layanan Utama Kami</h2>
        <p class="section-subtitle">
            Solusi digital terpadu untuk kebutuhan bisnis Anda
        </p>

        <div class="services-grid">

            <div class="service-card">
                <div class="service-shape">WEB</div>
                <h3>Pembuatan Website</h3>
                <ul class="service-list">
                    <li>Company Profile Website</li>
                    <li>Landing Page Bisnis</li>
                    <li>Website E-Commerce</li>
                    <li>Desain Responsive (Mobile Friendly)</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-shape">APP</div>
                <h3>Sistem Aplikasi Custom</h3>
                <ul class="service-list">
                    <li>Sistem Inventory</li>
                    <li>CRM (Customer Management)</li>
                    <li>Sistem Manajemen Data</li>
                    <li>Dashboard Admin & Reporting</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-shape">UI</div>
                <h3>UI/UX Design</h3>
                <ul class="service-list">
                    <li>Desain Website Modern</li>
                    <li>Prototype & Wireframe</li>
                    <li>Mobile App Interface</li>
                    <li>User Experience Optimization</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-shape">DSGN</div>
                <h3>Desain Grafis</h3>
                <ul class="service-list">
                    <li>Logo & Branding</li>
                    <li>Banner & Poster</li>
                    <li>Desain Social Media</li>
                    <li>Brosur & Materi Promosi</li>
                </ul>
            </div>

        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="layanan.php" class="btn btn-primary">Lihat Semua Layanan</a>
        </div>

    </div>
</section>

<!-- Keunggulan Perusahaan -->
<section class="ino-hero">
    <div class="hero-container">

        <div class="hero-left reveal-left">
            <p class="hero-label">INO KREA • DIGITAL SOLUTIONS</p>

            <h1>
                Solusi Website & Sistem Digital
                yang Dibangun Sesuai Kebutuhan Bisnis Anda
            </h1>

            <p class="hero-description">
                Kami membantu perusahaan dan UMKM membangun website, aplikasi,
                dan sistem internal yang terstruktur, cepat, dan mudah dikembangkan.
                Bukan sekadar tampilan menarik — tapi sistem yang benar-benar bekerja.
            </p>

            <div class="hero-buttons">
                <a href="kontak.php" class="btn-primary">Diskusi Proyek</a>
                <a href="portofolio.php" class="btn-outline">Lihat Hasil Kerja Kami</a>
            </div>
        </div>

        <div class="hero-right reveal-right">
            <div class="hero-stats">
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>Proyek Diselesaikan</p>
                </div>
                <div class="stat-item">
                    <h3>Custom</h3>
                    <p>Tanpa Template Massal</p>
                </div>
                <div class="stat-item">
                    <h3>Support</h3>
                    <p>After Project Assistance</p>
                </div>
            </div>
        </div>

    </div>

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

<!-- Preview Portofolio -->
<section class="section backgroundd fade-in">
    <div class="container">
        <h2 class="section-title">Portofolio Terbaru</h2>
        <p class="section-subtitle">Beberapa proyek yang telah kami kerjakan</p>
        <div class="portfolio-preview-grid card">
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Website Company">
                <div class="portfolio-overlay">
                    <h4>Website Perusahaan</h4>
                    <p>PT Maju Jaya</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Aplikasi Custom">
                <div class="portfolio-overlay">
                    <h4>Sistem Inventory</h4>
                    <p>CV Berkah Abadi</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Desain Grafis">
                <div class="portfolio-overlay">
                    <h4>Branding & Logo</h4>
                    <p>Kafe Kopi Nusantara</p>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="portofolio.php" class="btn btn-primary">Lihat Semua Portofolio</a>
        </div>
    </div>
</section>

<!-- Testimoni (Dummy) -->
<section class="section backgroundd fade-in">
    <div class="container">
        <h2 class="section-title">Apa Kata Klien Kami</h2>
        <p class="section-subtitle">Mereka telah merasakan manfaat bekerja sama dengan InoKrea</p>
        <div class="testimonials-grid">
            <div class="testimonial-card card">
                <p>"Tim InoKrea sangat profesional dan responsif. Website perusahaan kami selesai tepat waktu dan sesuai keinginan. Terima kasih!"</p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                    <div class="author-info">
                        <h5>Budi Santoso</h5>
                        <span>Direktur PT Maju Jaya</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card card">
                <p>"Desain yang diberikan sangat modern dan sesuai dengan brand kami. Proses revisi cepat dan hasilnya memuaskan. Recommended!"</p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                    <div class="author-info">
                        <h5>Siti Aminah</h5>
                        <span>Owner Kafe Kopi Nusantara</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card card">
                <p>"Aplikasi inventory custom dari InoKrea sangat membantu operasional kami. Fitur sesuai kebutuhan dan dukungan teknisnya cepat."</p>
                <div class="testimonial-author">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User">
                    <div class="author-info">
                        <h5>Agus Wijaya</h5>
                        <span>Manager CV Berkah Abadi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <col> ✔ Respon cepat</col>
                <col> ✔ Custom Development</col>
                <col> ✔ Support After Launch</col>
            </div>
        </div>

        <!-- Right Content -->
        <div class="cta-right reveal-right">
            <a href="kontak.php" class="cta-btn">Hubungi Kami Sekarang</a>


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

<?php include 'includes/footer.php'; ?>