<?php
/**
 * proses_kontak.php — InoKrea Digital Studio
 * -------------------------------------------
 * Logika pemrosesan form kontak.
 *
 * Alur:
 *  1. Cek method POST
 *  2. Ambil & validasi input
 *  3. Sanitasi input
 *  4. Simpan ke file JSON
 *  5. Kirim email via PHPMailer (SMTP Gmail)
 *  6. Redirect ke kontak.php dengan query string status
 */

require_once 'config.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Semua konfigurasi (ADMIN_EMAIL, SMTP_*, SITE_NAME, MESSAGES_FILE)
// sudah di-define di config.php yang di-require di atas.

/* ==========================================================
   1. CEK METHOD
========================================================== */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: kontak.php');
    exit;
}

/* ==========================================================
   2. AMBIL INPUT
========================================================== */

$nama  = trim($_POST['nama']  ?? '');
$email = trim($_POST['email'] ?? '');
$pesan = trim($_POST['pesan'] ?? '');

/* ==========================================================
   3. VALIDASI
========================================================== */

$errors = [];

if (strlen($nama) < 3) {
    $errors[] = 'Nama minimal 3 karakter.';
} elseif (strlen($nama) > 100) {
    $errors[] = 'Nama maksimal 100 karakter.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email tidak valid.';
} elseif (strlen($email) > 150) {
    $errors[] = 'Email terlalu panjang.';
}

if (strlen($pesan) < 10) {
    $errors[] = 'Pesan minimal 10 karakter.';
} elseif (strlen($pesan) > 2000) {
    $errors[] = 'Pesan maksimal 2000 karakter.';
}

if (!empty($errors)) {
    $msg = implode('|', $errors);
    header('Location: kontak.php?status=error&msg=' . urlencode($msg));
    exit;
}

/* ==========================================================
   4. SANITASI
========================================================== */

$namaSanitized  = htmlspecialchars($nama,  ENT_QUOTES, 'UTF-8');
$emailSanitized = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$pesanSanitized = htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8');

/* ==========================================================
   5. SIMPAN KE JSON
   Konstanta MESSAGES_FILE didefinisikan di config.php
   Contoh: define('MESSAGES_FILE', __DIR__ . '/data/pesan_kontak.json');
========================================================== */

$newMessage = [
    'nama'  => $namaSanitized,
    'email' => $emailSanitized,
    'pesan' => $pesanSanitized,
    'waktu' => date('Y-m-d H:i:s'),
];

$data = [];

if (file_exists(MESSAGES_FILE)) {
    $json = file_get_contents(MESSAGES_FILE);
    $data = json_decode($json, true) ?: [];
}

$data[] = $newMessage;

if (!is_dir(dirname(MESSAGES_FILE))) {
    mkdir(dirname(MESSAGES_FILE), 0755, true);
}

file_put_contents(
    MESSAGES_FILE,
    json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

/* ==========================================================
   6. KIRIM EMAIL via PHPMailer (SMTP Gmail)
========================================================== */

$mail = new PHPMailer(true);

try {
    /* -- Konfigurasi SMTP -- */
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';

    /* -- Pengirim -- */
    $mail->setFrom(SMTP_USER, SITE_NAME);

    /* -- Penerima -- */
    $mail->addAddress(ADMIN_EMAIL);

    /* -- Reply-To ke email pengirim pesan -- */
    $mail->addReplyTo($email, $nama);

    /* -- Format & Konten Email -- */
    $mail->isHTML(true);
    $mail->Subject = '[' . SITE_NAME . '] Pesan Baru dari ' . $nama;

    $mail->Body = "
        <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;padding:24px;color:#333;'>
            <h2 style='color:#4f46e5;'>📩 Pesan Baru – {$namaSanitized}</h2>
            <table style='width:100%;border-collapse:collapse;'>
                <tr>
                    <td style='padding:8px 12px;background:#f3f4f6;width:100px;font-weight:bold;'>Nama</td>
                    <td style='padding:8px 12px;border-bottom:1px solid #e5e7eb;'>{$namaSanitized}</td>
                </tr>
                <tr>
                    <td style='padding:8px 12px;background:#f3f4f6;font-weight:bold;'>Email</td>
                    <td style='padding:8px 12px;border-bottom:1px solid #e5e7eb;'>
                        <a href='mailto:{$emailSanitized}' style='color:#4f46e5;'>{$emailSanitized}</a>
                    </td>
                </tr>
                <tr>
                    <td style='padding:8px 12px;background:#f3f4f6;font-weight:bold;'>Waktu</td>
                    <td style='padding:8px 12px;border-bottom:1px solid #e5e7eb;'>" . date('d-m-Y H:i:s') . "</td>
                </tr>
                <tr>
                    <td style='padding:8px 12px;background:#f3f4f6;font-weight:bold;vertical-align:top;'>Pesan</td>
                    <td style='padding:8px 12px;'>" . nl2br($pesanSanitized) . "</td>
                </tr>
            </table>
            <hr style='margin:24px 0;border:none;border-top:1px solid #e5e7eb;'>
            <p style='font-size:.8rem;color:#9ca3af;'>
                Dikirim otomatis oleh sistem kontak <strong>" . SITE_NAME . "</strong>.
                Balas langsung ke email pengirim di atas.
            </p>
        </div>
    ";

    $mail->AltBody =
        "Pesan Baru dari Website " . SITE_NAME . "\n\n" .
        "Nama  : {$nama}\n"  .
        "Email : {$email}\n" .
        "Waktu : " . date('d-m-Y H:i:s') . "\n\n" .
        "Pesan:\n{$pesan}";

    $mail->send();

    header('Location: kontak.php?status=success');
    exit;

} catch (Exception $e) {
    // Log error SMTP tanpa expose ke user
    error_log('[InoKrea Kontak] PHPMailer Error: ' . $mail->ErrorInfo);

    // Pesan sudah tersimpan di JSON, beri tahu user lewat redirect
    header('Location: kontak.php?status=saved');
    exit;
}