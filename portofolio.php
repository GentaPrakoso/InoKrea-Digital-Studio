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
                <img src="assets/img/1.png">
                <div class="portfolio-info">
                    <h4>Website PT Karya Bihar Mandiri</h4>
                    <p></p>
                    <button class="btn-detail"
                        data-desc="Website company profile profesional dengan desain responsif untuk menampilkan profil perusahaan dan layanan secara jelas serta meningkatkan kredibilitas digital."
                        data-images="assets/img/1.png|assets/img/2.png|assets/img/3.png"
                        onclick="showDetail(this)">
                        Lihat Detail
                    </button>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="portfolio-card" data-category="website">
                <img src="assets/img/20.png">
                <div class="portfolio-info">
                    <h4>Website PT Modern Aulia Mandiri</h4>
                    <p></p>
                    <button class="btn-detail"
                        data-desc="Website perusahaan modern dan elegan yang dirancang untuk memperkuat branding serta menyajikan informasi layanan secara terstruktur dan terpercaya."
                        data-images="assets/img/20.png|assets/img/18.png|assets/img/19.png"
                        onclick="showDetail(this)">
                        Lihat Detail
                    </button>
                </div>
            </div>

                        <div class="portfolio-card" data-category="desain">
                <img src="assets/img/9.png">
                <div class="portfolio-info">
                    <h4>Logo</h4>
                    <p></p>
                    <button class="btn-detail"
                        data-desc=""
                        data-images="assets/img/9.png|assets/img/4.png|assets/img/5.png|assets/img/6.png|assets/img/7.png|assets/img/8.png"
                        onclick="showDetail(this)">
                        Lihat Detail
                    </button>
                </div>
            </div>

            <div class="portfolio-card" data-category="desain">
                <img src="assets/img/12.png">
                <div class="portfolio-info">
                    <h4>Banner</h4>
                    <p></p>
                    <button class="btn-detail"
                        data-desc=""
                        data-images="assets/img/12.png|assets/img/11.png|assets/img/13.png"
                        onclick="showDetail(this)">
                        Lihat Detail
                    </button>
                </div>
            </div>

            <div class="portfolio-card" data-category="desain">
                <img src="assets/img/16.png">
                <div class="portfolio-info">
                    <h4>Catalog</h4>
                    <p></p>
                    <button class="btn-detail"
                        data-desc=""
                        data-images="assets/img/16.png|assets/img/17.png"
                        onclick="showDetail(this)">
                        Lihat Detail
                    </button>
                </div>
            </div>

            <div class="portfolio-card" data-category="desain">
                <img src="assets/img/14.png">
                <div class="portfolio-info">
                    <h4>Catalog</h4>
                    <p></p>
                    <button class="btn-detail"
                        data-desc=""
                        data-images="assets/img/14.png|assets/img/15.png"
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

        <button class="modal-prev" onclick="prevImage()">‹</button>
        <button class="modal-next" onclick="nextImage()">›</button>

        <img id="modalImage" class="modal-image" src="">
        <h3 id="modalTitle"></h3>
        <p id="modalDesc"></p>
    </div>
</div>

<script>
let currentImages = [];
let currentIndex = 0;

function showDetail(button) {
    const card = button.closest(".portfolio-card");

    const title = card.querySelector("h4").innerText;
    const desc = button.getAttribute("data-desc");
    const images = button.getAttribute("data-images");

    currentImages = images.split("|");
    currentIndex = 0;

    document.getElementById("modalTitle").innerText = title;
    document.getElementById("modalDesc").innerText = desc;
    document.getElementById("modalImage").src = currentImages[currentIndex];

    document.getElementById("detailModal").style.display = "flex";
}

function nextImage() {
    currentIndex = (currentIndex + 1) % currentImages.length;
    document.getElementById("modalImage").src = currentImages[currentIndex];
}

function prevImage() {
    currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
    document.getElementById("modalImage").src = currentImages[currentIndex];
}

function closeModal() {
    document.getElementById("detailModal").style.display = "none";
}
</script>

<?php include 'includes/footer.php'; ?>