<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julianto Adi Prasetia - Immersive Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div id="loading-screen">
    <div class="loader-content">Welcome</div>
</div>
<nav class="side-nav">
        <ul>
            <li><a href="#hero" class="dot active" data-tooltip="Home"></a></li>
            <li><a href="#tentang" class="dot" data-tooltip="Tentang"></a></li>
            <li><a href="#skill" class="dot" data-tooltip="Skills"></a></li>
            <li><a href="#project" class="dot" data-tooltip="Project"></a></li>
            <li><a href="#playlist" class="dot" data-tooltip="Playlist"></a></li>
        </ul>
    </nav>

    <main>
        <section id="hero" class="full-screen-section">
            <div class="hero-content">
                <h1 class="animate-text">Hi Everyone, I'm Julian</h1>
                <p class="animate-fade-in">Success doesn't come from what you do occasionally, it comes from what you do consistently.</p>
                <a href="#proyek" class="tombol-modern animate-fade-in">Lihat Portofolio Saya</a>
            </div>
            <a href="#tentang" class="scroll-down-indicator">
                <div class="mouse"></div>
            </a>
        </section>

        <section id="tentang" class="content-section">
            <h2 class="section-title animate-on-scroll">About Me</h2>
            <div class="tentang-container">
                <div class="tentang-teks animate-on-scroll" data-animation="slide-in-right">
                    <h3>Self-Taught Developer & Problem Solver</h3>
                   <p>
                        Just a high school student from SMAN 5 Bekasi who's been obsessed with tech since I was in junior high. My journey started with turning a hobby into a hustle by running monetized game servers (Growtopia & SAMP), and from there I got hooked on building Telegram bots and exploring the world of ethical hacking. I'm always hungry for the next challenge and ready to collaborate on cool new things.
                    </p>
                </div>
                <div class="tentang-foto animate-on-scroll" data-animation="slide-in-left">
                    <img src="https://i.ibb.co/7tYf1GQP/Desain-tanpa-judul.png" alt="Foto J400x400">
                </div>
            </div>
        </section>

        <section id="skill" class="content-section bg-dark">
            <h2 class="section-title animate-on-scroll">Skills</h2>
            <div class="keahlian-grid">
                <div class="skill-item animate-on-scroll"><div class="skill-icon-wrapper"><i class="fa-solid fa-chess-pawn"></i></div><span>Pawno</span></div>
                <div class="skill-item animate-on-scroll"><div class="skill-icon-wrapper"><i class="fa-brands fa-js"></i></div><span>JavaScript</span></div>
                <div class="skill-item animate-on-scroll skill-item-center"><div class="skill-icon-wrapper"><i class="fa-solid fa-database"></i></div><span>SQL</span></div>
                <div class="skill-item animate-on-scroll"><div class="skill-icon-wrapper"><i class="fa-brands fa-python"></i></div><span>Python</span></div>
                <div class="skill-item animate-on-scroll"><div class="skill-icon-wrapper"><i class="fa-solid fa-user-secret"></i></div><span>Cyber Security</span></div>
            </div>
        </section>

        <section id="project" class="content-section">
            <h2 class="section-title animate-on-scroll">Best Project</h2>
            <div class="proyek-grid">
                <div class="proyek-item animate-on-scroll"><img src="https://i.ibb.co/TqmMcyNQ/Foto.png" alt="Gambar Proyek 1"><div class="proyek-overlay"><h3>Private Server Growtopia</h3><a href="#" class="tombol-modern tombol-kecil">Lihat Detail</a></div></div>
                <div class="proyek-item animate-on-scroll"><img src="https://i.ibb.co/TqmMcyNQ/Foto.png" alt="Gambar Proyek 2"><div class="proyek-overlay"><h3>Telegram Bot Automation</h3><a href="#" class="tombol-modern tombol-kecil">Lihat Detail</a></div></div>
                <div class="proyek-item animate-on-scroll"><img src="https://i.ibb.co/TqmMcyNQ/Foto.png" alt="Gambar Proyek 3"><div class="proyek-overlay"><h3>SAMP Server Development</h3><a href="#" class="tombol-modern tombol-kecil">Lihat Detail</a></div></div>
            </div>
        </section>

        <section id="playlist" class="content-section bg-dark">
            <h2 class="section-title animate-on-scroll">Soundtrack</h2>
            <p class="section-subtitle animate-on-scroll">The goal is not to be perfect by the end, the goal is to be better today.</p>
            <div class="spotify-embed animate-on-scroll">
                <iframe style="border-radius:12px;" src="https://open.spotify.com/embed/playlist/1EXR1I0En3bcbDjwbhnKM7?utm_source=generator%22" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="social-icons">
            <a href="https://github.com/0xBangors" aria-label="GitHub"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/chrvert_" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="copyright-text">© <?php echo date("Y"); ?> Julianto Adi Prasetia. All Rights Reserved.</p>
    </footer>

    <script src="assets/js/animations.js"></script>
</body>
</html>