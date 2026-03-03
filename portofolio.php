<?php
$pageTitle = 'Portofolio - InoKrea Digital Studio';
$metaDesc = 'Lihat portofolio proyek website, aplikasi custom, dan desain grafis dari InoKrea.';
$siteTitle = "Portofolio Kami";
$siteTagline = "Setiap proyek yang kami kerjakan merupakan komitmen kami
        dalam menghadirkan solusi digital yang profesional, efektif,
        dan berdampak nyata bagi pertumbuhan bisnis klien.";
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
            <img src="assets/img/prt.png" alt="Digital Service">
        </div>

    </div>

</section>
<!-- Portofolio -->
<section id="portofolio" class="section">
    <div class="container fade-in">
        <h2 class="section-title">Portofolio</h2>
        <p class="section-subtitle">Beberapa karya terbaik yang telah kami hasilkan</p>

        <div class="filter-buttons" id="filterButtons">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="website">Website</button>
            <button class="filter-btn" data-filter="sistem">Sistem Aplikasi</button>
            <button class="filter-btn" data-filter="desain">Desain Grafis</button>
        </div>

        <div class="portfolio-grid" id="portfolioGrid">

            <!-- CARD 1 -->
            <div class="portfolio-card" data-category="website">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1170&q=80">
                <div class="portfolio-info">
                    <h4>Website PT Maju Jaya</h4>
                    <p>Website company profile dengan desain modern dan animasi halus.</p>
                    <button class="btn-detail"
                        data-desc="Website company profile dengan desain modern, animasi halus, dan fitur manajemen konten. Dibangun dengan React dan Node.js."
                        onclick="showDetail(this)">
                        Lihat Detail
                    </button>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="portfolio-card" data-category="sistem">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=1074&q=80">
                <div class="portfolio-info">
                    <h4>Sistem Inventory CV Berkah</h4>
                    <p>Aplikasi manajemen stok dan penjualan berbasis web.</p>
                    <button class="btn-detail"
                        data-desc="Aplikasi berbasis web untuk manajemen stok, pembelian, penjualan, dan laporan. Menggunakan Laravel dan MySQL."
                        onclick="showDetail(this)">
                        Lihat Detail
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- MODAL -->
<div id="detailModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>

        <img id="modalImage" class="modal-image" src="">
        <h3 id="modalTitle"></h3>
        <p id="modalDesc"></p>
    </div>
</div>

<script>
    function showDetail(button) {
    const card = button.closest(".portfolio-card");

    const title = card.querySelector("h4").innerText;
    const image = card.querySelector("img").src;
    const desc = button.getAttribute("data-desc");

    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDesc").innerText = desc;
    document.getElementById("modalImage").src = image;

    document.getElementById("detailModal").style.display = "flex";
}

function closeModal() {
    document.getElementById("detailModal").style.display = "none";
}

/* Optional: klik area luar modal untuk close */
window.onclick = function(e) {
    const modal = document.getElementById("detailModal");
    if (e.target === modal) {
        modal.style.display = "none";
    }
};
</script>

<?php include 'includes/footer.php'; ?>