<?php
/**
 * config.php — InoKrea Digital Studio
 * -------------------------------------
 * File konfigurasi global.
 * Pastikan file ini di-require di awal setiap file yang membutuhkannya.
 */

/* =========================
   PATH FILE JSON PESAN MASUK
   Tempat menyimpan semua pesan dari form kontak.
   Folder 'data' akan dibuat otomatis oleh proses_kontak.php jika belum ada.
========================= */
define('MESSAGES_FILE', __DIR__ . '/data/pesan_kontak.json');

/* =========================
   KONFIGURASI EMAIL (SMTP Gmail)
   Gunakan App Password Gmail, BUKAN password akun biasa.
   Cara buat App Password:
   1. Buka https://myaccount.google.com/security
   2. Aktifkan 2-Step Verification
   3. Cari "App passwords" → buat baru → salin 16 karakter
========================= */
define('SMTP_HOST',     'smtp.gmail.com');
define('SMTP_PORT',     587);
define('SMTP_USER',     'inokreastudio@gmail.com');
define('SMTP_PASSWORD', 'teoraaqjkmlaqjus');   // ← ganti dengan App Password Gmail
define('SMTP_SECURE',   'tls');                    // tls = STARTTLS (port 587)

/* =========================
   INFORMASI WEBSITE
========================= */
define('SITE_NAME',   'InoKrea Digital Studio');
define('ADMIN_EMAIL', 'inokreastudio@gmail.com');  // email penerima notifikasi pesan