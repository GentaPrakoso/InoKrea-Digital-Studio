<?php
$pageTitle = 'Kontak - InoKrea Digital Studio';
$metaDesc = 'Hubungi InoKrea untuk konsultasi gratis dan informasi lebih lanjut.';
$siteTitle = "Kontak Kami";
$siteTagline = "Yuk, mulai perjalanan digital bisnis Anda bersama kami.
            Hubungi tim kami sekarang dan dapatkan solusi yang sesuai dengan kebutuhan Anda.";
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
            <img src="assets/img/aa.png" alt="Digital Service">
        </div>

    </div>

</section>
<!-- Kontak -->
<section id="kontak" class="contact-section">
    <div class="container">

        <h2 class="section-title contact-fade">Hubungi Kami</h2>
        <p class="section-subtitle contact-fade delay-1">
            Diskusikan kebutuhan Anda, tim InoKrea siap membantu
        </p>

        <div class="contact-wrapper">

            <!-- Contact Info -->
            <div class="contact-info contact-fade delay-2">

                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>KP. Pasirwaru, Desa Mekarwangi, Haurwangi, Cianjur</p>
                    </div>
                </div>

                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Telepon</h4>
                        <p>+62 821 1327 189</p>
                    </div>
                </div>

                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>inokreastudio@gmail.com</p>
                    </div>
                </div>

                <a href="https://wa.me/628211327189?text=Halo%20InoKrea,%20saya%20ingin%20konsultasi"
                    class="whatsapp-contact">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>

                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps?q=-6.825368,107.285614&output=embed"
                        loading="lazy">
                    </iframe>
                </div>

            </div>


            <!-- Contact Form -->
            <div class="contact-form contact-fade delay-3">

                <form id="contactForm">

                    <div class="form-group">
                        <input type="text" placeholder="Nama Lengkap" required>
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Subjek">
                    </div>

                    <div class="form-group">
                        <textarea placeholder="Pesan Anda..." required></textarea>
                    </div>

                    <button type="submit" class="contact-btn">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>