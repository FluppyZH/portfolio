document.addEventListener("DOMContentLoaded", function() {

    // ==== SKRIP UNTUK PRELOADER ====
    const body = document.body;
    const loadingScreen = document.getElementById('loading-screen');

    body.classList.add('loading');

    window.addEventListener('load', () => {
        if (loadingScreen) {
            loadingScreen.classList.add('loaded');
            body.classList.remove('loading');
        }
    });
    // ==== AKHIR SKRIP PRELOADER ====


    // ==== Skrip untuk Animasi On Scroll Umum ====
    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        scrollObserver.observe(el);
    });

    
    // ==== Skrip untuk Navigasi Titik Samping (Side-Dot) ====
    const sections = document.querySelectorAll('section[id]');
    const navDots = document.querySelectorAll('.side-nav .dot');

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navDots.forEach(dot => dot.classList.remove('active'));
                const currentSectionId = entry.target.id;
                const activeDot = document.querySelector(`.side-nav a[href="#${currentSectionId}"]`);
                if (activeDot) {
                    activeDot.classList.add('active');
                }
            }
        });
    }, { 
        rootMargin: '-50% 0px -50% 0px' 
    });

    sections.forEach(section => {
        sectionObserver.observe(section);
    });

});