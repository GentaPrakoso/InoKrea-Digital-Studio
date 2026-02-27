<?php
$pageTitle = 'Kontak - InoKrea Digital Studio';
$metaDesc = 'Hubungi InoKrea untuk konsultasi gratis dan informasi lebih lanjut.';
include 'includes/header.php';
?>

<!-- Kontak -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Hubungi Kami</h2>
        <p class="section-subtitle">Diskusikan kebutuhan Anda, tim kami siap membantu</p>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>KP. Pasirwaru, Desa Mekarwangi, Rt 01/07, Kec. Haurwangi, Kab. Cianjur, Jawa Barat 43286</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Telepon</h4>
                        <p>+62 821 1327 189</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>inokreastudio@gmail.com</p>
                    </div>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20InoKrea,%20saya%20ingin%20konsultasi" class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> Chat via WhatsApp
                </a>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d294.4434022257076!2d107.28561430049807!3d-6.8253683003484555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68558643aab12f%3A0x42b9ff07508d2e48!2sJl.%20Raya%20Cipeuyeum%20Hegermanah%2C%20Mekarwangi%2C%20Kec.%20Haurwangi%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043282!5e0!3m2!1sen!2sid!4v1772196342695!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <form class="contact-form" id="contactForm">
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