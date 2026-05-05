<?php
$pageTitle = 'Kontak - InoKrea Digital Studio';
$metaDesc = 'Hubungi InoKrea untuk konsultasi gratis dan informasi lebih lanjut.';
$siteTitle = "Kontak Kami";
$siteTagline = "Yuk, mulai perjalanan digital bisnis Anda bersama kami.
            Hubungi tim kami sekarang dan dapatkan solusi yang sesuai dengan kebutuhan Anda.";
include 'includes/header.php';

/* =========================
   BACA STATUS DARI QUERY STRING
   Di-set oleh proses_kontak.php via redirect
   ?status=success | error | saved
   ?msg=... (pesan error validasi, pipe-separated)
========================= */
$status = $_GET['status'] ?? null;
$msg    = $_GET['msg']    ?? '';

switch ($status) {
    case 'success':
        $alertType = 'success';
        $alertMsg  = 'Terima kasih! Pesan Anda telah terkirim. Tim kami akan membalas segera.';
        break;
    case 'saved':
        $alertType = 'error';
        $alertMsg  = 'Pesan Anda tercatat, namun terjadi kendala pengiriman email. '
            . 'Untuk respons lebih cepat, silakan hubungi kami via WhatsApp.';
        break;
    case 'error':
        $alertType = 'error';
        // Ubah pemisah pipe menjadi spasi antar kalimat
        $alertMsg  = implode(' ', array_map('trim', explode('|', htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'))));
        break;
    default:
        $alertType = null;
        $alertMsg  = null;
}
?>

<section class="hero-modern">
    <div class="container hero-grid fade-in">
        <div class="hero-text">
            <h1><?php echo $siteTitle; ?></h1>
            <p><?php echo $siteTagline; ?></p>
            <div class="hero-buttons">
                <a href="kontak.php#kontak" class="btn-primary">Konsultasi Gratis</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="assets/img/ktk.png" alt="Digital Service">
        </div>
    </div>
</section>

<!-- Kontak -->
<!-- Kontak -->
<section id="kontak" class="contact-section">
    <div class="container">

        <h2 class="section-title contact-fade">Hubungi Kami</h2>
        <p class="section-subtitle contact-fade delay-1">
            Diskusikan kebutuhan Anda, tim InoKrea siap membantu
        </p>

        <!-- Baris atas: Info + Form berdampingan -->
        <div class="contact-top-wrapper">

            <!-- KIRI: Info kontak + Map -->
            <div class="contact-left-col">

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
                </div>

                <!-- Map langsung di bawah info kontak -->
                <div class="contact-map contact-fade delay-3">
                    <iframe
                        src="https://www.google.com/maps?q=-6.825368,107.285614&output=embed"
                        loading="lazy">
                    </iframe>
                </div>

            </div><!-- /contact-left-col -->

            <!-- KANAN: Form -->
            <div class="contact-form-wrapper contact-fade delay-3">
                <h3 class="form-title">Kirim Pesan</h3>
                <p class="form-subtitle">Isi formulir di bawah, kami akan membalas dalam 1×24 jam.</p>

                <?php if ($alertType === 'success'): ?>
                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-check-circle"></i>
                        <?php echo $alertMsg; ?>
                    </div>
                <?php elseif ($alertType === 'error'): ?>
                    <div class="alert alert-error" role="alert">
                        <i class="fas fa-exclamation-circle"></i>
                        <?php echo $alertMsg; ?>
                    </div>
                <?php endif; ?>

                <form action="proses_kontak.php" method="POST" class="contact-form" novalidate>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" id="nama" name="nama"
                            placeholder="Masukkan nama lengkap Anda"
                            required maxlength="100" autocomplete="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email"
                            placeholder="contoh@email.com"
                            required maxlength="150" autocomplete="email">
                    </div>

                    <div class="form-group">
                        <label for="pesan">Isi Pesan <span class="required">*</span></label>
                        <textarea id="pesan" name="pesan" rows="6"
                            placeholder="Ceritakan kebutuhan atau pertanyaan Anda..."
                            required maxlength="2000"></textarea>
                        <span class="char-counter"><span id="charCount">0</span>/2000</span>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div><!-- /contact-form-wrapper -->

        </div><!-- /contact-top-wrapper -->

    </div>
</section>

<?php include 'includes/footer.php'; ?>