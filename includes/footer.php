<?php
// includes/footer.php
?>
</main>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-about">
                <a href="index.php" class="logo" style="color: white;">InoKrea<span style="color: var(--secondary);">.</span></a>
                <p>Solusi digital terpercaya untuk perusahaan dan bisnis. Kami hadir untuk mewujudkan ide Anda menjadi produk digital berkualitas.</p>
                <div class="social-links">
                    <a href="https://www.instagram.com/inokrea_studio/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@inokrea.studio"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.linkedin.com/in/inokrea-studio-1107783b4/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Layanan</h4>
                <ul>
                    <li><a href="layanan.php">Pembuatan Website</a></li>
                    <li><a href="layanan.php">Sistem Aplikasi Custom</a></li>
                    <li><a href="layanan.php">Desain Grafis</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Tentang</h4>
                <ul>
                    <li><a href="tentang.php">Tentang Kami</a></li>
                    <li><a href="portofolio.php">Portofolio</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Kontak</h4>
                <ul>
                    <li>KP. Pasirwaru, Cianjur</li>
                    <li>+62 821 1327 189</li>
                    <li>inokreastudio@gmail.com</li>
                </ul>
            </div>
<button id="scrollTopBtn">
    <i class="fas fa-arrow-up"></i>
</button>
        </div>
        <div class="copyright">
            &copy; <?php echo date('Y'); ?> InoKrea Digital Studio. All rights reserved.
        </div>
    </div>
<a href="https://wa.me/628211327189?text=Halo%20InoKrea%20Digital%20Studio,%20saya%20ingin%20konsultasi" 
   class="whatsapp-float" 
   target="_blank">
   <i class="fab fa-whatsapp"></i>
</a>
</footer>

<!-- Custom JS -->
<script src="assets/js/script.js"></script>
<script>
const scrollBtn = document.getElementById("scrollTopBtn");

window.addEventListener("scroll", function(){
    if(window.scrollY > 300){
        scrollBtn.style.display = "block";
    } else {
        scrollBtn.style.display = "none";
    }
});

scrollBtn.addEventListener("click", function(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>
</body>

</html>