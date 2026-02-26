<?php
$pageTitle = "Kontak - InoKrea Digital Studio";
$pageDesc = "Hubungi InoKrea untuk konsultasi gratis dan informasi lebih lanjut.";
include 'includes/header.php';
?>

<!-- Kontak -->
<section class="section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Hubungi Kami</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Diskusikan kebutuhan Anda, tim kami siap membantu</p>
        <div class="contact-grid">
            <div class="contact-info" data-aos="fade-right">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>KP. Pasirwarru, Kec. Cibadak, Kab. Sukabumi, Jawa Barat 43351</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Telepon</h4>
                        <p>+62 812 3456 7890</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>info@inokrea.com</p>
                    </div>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20InoKrea,%20saya%20ingin%20konsultasi" class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> Chat via WhatsApp
                </a>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d106.72634114418016!3d-6.895034268680518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3e946c5f4b3%3A0x4039a3397a2e7b0!2sSukabumi%2C%20Kota%20Sukabumi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1710400000000!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <form class="contact-form" id="contactForm" data-aos="fade-left" data-aos-delay="200">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subjek">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Pesan" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>