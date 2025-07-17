<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitayas Y Pitahayas - Huitziltepec</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> <!-- esta en la carpeta public/css/estilos.css -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    .image img {
      -webkit-mask-image: linear-gradient(to right, transparent, black 20%),
                      linear-gradient(to top, transparent, black 20%);
  -webkit-mask-composite: destination-in;
  mask-image: linear-gradient(to right, transparent, black 20%),
              linear-gradient(to top, transparent, black 20%);
  mask-composite: intersect;
}
</style>
</head>
<body>

    <!-- Barra superior fija -->
    <div class="top-bar">
        <div class="social-icons">
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100054928470603" aria-label="Facebook"><i class="fab fa-square-facebook"></i></a>
        </div>

        <div class="branding">
            <img src="{{ asset('images/logoFREEZERPOPS.PNG') }}" alt="Logo" class="brand-logo">
            <div>
                <p class="brand-text" style="margin: 0;">Freezer</p>
                <p class="brand-text" style="margin: 0;">Pops</p>
            </div>
        </div>

        <nav class="navbar">
            <button class="menu-btn" id="menuButton">☰</button>
            <div class="dropdown-menu" id="dropdownMenu">
                <a href="#" id="toggleDarkMode">
                    Modo <span class="icon">🌙</span>
                </a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <!--  <a href="{{ route('login') }}">Log in</a>-->
                        @if (Route::has('register'))
                           <!--   <a href="{{ route('register') }}">Register</a>-->
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
    </div>

    <!-- Sección de video (fija, ocupa toda la pantalla inicial) -->
    <div class="video-hero">
        <div class="video-container">
            <video autoplay muted loop id="bg-video">
                <source src="{{ asset('videos/video_home2.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="hero-content">
            <h1 class="main-slogan">Natural, nutritious and ice-cold</h1>
            <p class="main-origin">just the way a freezer pop should be</p>
        </div>
        
    </div>

    <!-- Sección de contenido (aparece al hacer scroll) -->
    <div class="content-wrapper">
        <section class="content-section">

            <!--actualizacion de cosecha-->
            <div class="card">
                <img src="images/mascota_1.png" alt="Pitaya">
                <div class="card-content">
                    <div class="card-title">
                        <i class="fas fa-calendar-check"></i> Fresh Drop Alert
                    </div>
                    <div class="card-subtitle">Next batch available: July 25, 2025</div>
                    <div class="alert">Now in stock! ❄️</div>
                </div>
            </div>

            <!-- ¿Qué son las pitayas y pitahayas de Huitziltepec? -->
            <div class="section-identidad">
                <h1>What are Freezer Pops?</h1>
                <p>Freezer Pops are healthy frozen smoothies packed in small plastic bags, perfect for cooling off and staying nourished. 
                    They're made with real fruits, oats, and a touch of plant-based protein — with no added sugar. Just natural flavor, 
                    frozen and ready to enjoy!</p>
                <a href="{{ url('/sabermas') }}" class="btn-saber-mas">Learn more</a>
            </div>

            <!-- Carrusel de imágenes -->
            <div class="galeria-section">
                <h2></h2>
                <div class="carrusel">
                    <div class="carrusel-pista" id="carrusel-pista">
                        <img src="images/Mockup_1.png" alt="Pitaya 1">
                        <img src="images/Mockup_4.png" alt="Pitahaya 2">
                        <img src="images/Mockup_3.png" alt="Huerto">
                        <img src="images/Mockup_1.png" alt="Fruta Fresca">
                    </div>
                </div>
                <div class="indicadores" id="indicadores"></div>
            </div>

            
            <div style="text-align: center;">
                <h2>You’ll find...</h2>
            </div>

            <!-- pitayas tipos -->
            <section class="section">
                <div class="text">
                    <h2>Freezer Pops</h2>
                    <p>LHealthy blended smoothies served in plastic 
                        pouches and frozen for a refreshing, guilt-free treat. 
                        Made with real fruit, oats, and no added sugar. 
                        Perfect for hot days or a light, nourishing snack.</p>
                </div>
                <div class="image">
                    <img src="images/freezerpops.png" alt="frezezer pops">
                </div>
            </section>

            <section class="section">
                <div class="text">
                    <h2>Smoothies</h2>
                    <p>Creamy, nutritious drinks made fresh with real fruits, 
                        oats, and plant-based protein. No added sugar, 
                        no dairy — just natural goodness in every sip.</p>
                </div>
                <div class="image">
                    <img src="images/smoothies.png" alt="smoothies">
                </div>
            </section>

            <section class="section">
                <div class="text">
                    <h2>Fresh Waters</h2>
                    <p>Light and refreshing waters infused with natural fruits, 
                        herbs, or seeds. Hydrating and free of artificial sweeteners — 
                        a simple, delicious way to stay refreshed all day.</p>
                </div>
                <div class="image">
                    <img src="images/freshwater.png" alt="freshwater">
                </div>
            </section>
        </section>

        <!-- Footer -->
        <footer class="footer">

            <!-- Texto legal -->
            <p class="footer-text">
                © 2025 Freezer Pops
            </p>
            <p class="footer-subtext">
                All rights reserved to Freezer Pops
            </p>

            <!-- Línea divisora -->
            <hr class="footer-divider">

            <!-- Iconos de redes -->
            <div class="footer-icons">
                <a href="#" class="footer-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a>
                <a href="tel:+528684028447" class="footer-icon"><i class="fas fa-phone-alt"></i></a>
            </div>
        </footer>
        
    </div>

    <script>
        // Control del menú desplegable
        const menuButton = document.getElementById('menuButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const toggleDarkModeBtn = document.getElementById('toggleDarkMode');
        const iconSpan = toggleDarkModeBtn.querySelector('.icon');
        const contentWrapper = document.querySelector('.content-wrapper');
        const pista = document.getElementById('carrusel-pista');
        const total = pista.children.length;
        const indicadores = document.getElementById('indicadores');

        let activo = 0;

        menuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownMenu.classList.toggle('show');
        });

        document.addEventListener('click', () => {
            dropdownMenu.classList.remove('show');
        });

        dropdownMenu.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        toggleDarkModeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            contentWrapper.classList.toggle('dark-mode');
            toggleDarkModeBtn.classList.toggle('active');

            // Cambiar el ícono con animación
            iconSpan.style.opacity = 0;

            setTimeout(() => {
                iconSpan.textContent = contentWrapper.classList.contains('dark-mode') ? '☀️' : '🌙';
                iconSpan.style.opacity = 1;
            }, 200); // coincide con la mitad de la transición
        });

        for (let i = 0; i < total; i++) {
            const punto = document.createElement('div');
            punto.classList.add('indicador');
            if (i === 0) punto.classList.add('activo');
            indicadores.appendChild(punto);
        }

        function actualizarCarrusel() {
            pista.style.transform = `translateX(-${activo * 100}%)`;
            [...indicadores.children].forEach((p, i) => {
                p.classList.toggle('activo', i === activo);
            });
        }

        setInterval(() => {
            activo = (activo + 1) % total;
            actualizarCarrusel();
        }, 4000);

        // Swipe manual
        let startX = 0;
        pista.addEventListener('touchstart', e => {
            startX = e.touches[0].clientX;
        });

        pista.addEventListener('touchend', e => {
            const endX = e.changedTouches[0].clientX;
            if (startX - endX > 50) activo = (activo + 1) % total;
            if (endX - startX > 50) activo = (activo - 1 + total) % total;
            actualizarCarrusel();
        });

        document.querySelector('.scroll-down').addEventListener('click', () => {
    document.querySelector('.content-wrapper').scrollIntoView({
        behavior: 'smooth'
    });
});

    </script>

</body>
</html>
