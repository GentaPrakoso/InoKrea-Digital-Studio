// ========== HAMBURGER MENU ==========
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }

    // Tutup menu saat link diklik
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
        });
    });

    // Highlight active menu berdasarkan halaman saat ini
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.nav-menu a').forEach(link => {
        const linkPage = link.getAttribute('href');
        if (linkPage === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });

    // ========== ANIMASI SCROLL (AOS) ==========
    function initAOS() {
        const aosElements = document.querySelectorAll('[data-aos]');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aos-animate');
                    observer.unobserve(entry.target); // animasi hanya sekali
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        aosElements.forEach(el => observer.observe(el));
    }

    initAOS();

    // Form handler
    document.getElementById('contactForm')?.addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Terima kasih! Pesan Anda telah terkirim. (Demo)');
        this.reset();
    });

    // Filter portofolio
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filterValue = btn.getAttribute('data-filter');
            portfolioItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Modal
    function showDetail(title, desc) {
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('modalDesc').innerText = desc;
        document.getElementById('detailModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('detailModal').style.display = 'none';
    }
    window.onclick = function (event) {
        const modal = document.getElementById('detailModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});