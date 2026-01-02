<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'La JMJ | Studio de Création & Zine Culture')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@800&family=Space+Grotesk:wght@300;700&family=Special+Elite&family=Rock+Salt&family=Cormorant+Garamond:ital,wght@1,700&display=swap" rel="stylesheet">
    <style>
        :root {
            --jmj-blue: #3967A4; 
            --jmj-gold: #D4AF37; 
            --jmj-white: #FFFFFF;
            --jmj-paper: #F0EFEA;
            --jmj-ink: #001220;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            color: var(--jmj-ink);
            background-color: var(--jmj-paper);
            background-image: url('https://www.transparenttextures.com/patterns/paper.png');
            margin: 0;
            overflow-x: hidden;
        }

        /* --- Typographies --- */
        h1, h2, h3 { font-family: 'Syne', sans-serif; text-transform: uppercase; line-height: 0.85; }
        .handwritten { font-family: 'Rock Salt', cursive; font-size: 0.8rem; color: var(--jmj-gold); }
        .typewriter { font-family: 'Special Elite', cursor; }
        .serif-italic { font-family: 'Cormorant Garamond', serif; font-style: italic; font-weight: 700; }

        /* --- Transitions --- */
        .page-content { display: none; padding-top: 120px; animation: tapeIn 0.5s ease-out forwards; }
        .page-active { display: block; }
        @keyframes tapeIn {
            from { opacity: 0; transform: rotate(-1deg) scale(0.95); }
            to { opacity: 1; transform: rotate(0deg) scale(1); }
        }

        /* --- Navigation "Scotchée" --- */
        .navbar {
            background: transparent;
            padding: 1.5rem 0;
            z-index: 1000;
        }

        .nav-container {
            background: var(--jmj-white);
            border: 2px solid var(--jmj-ink);
            box-shadow: 5px 5px 0px var(--jmj-ink);
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-brand {
            font-family: 'Rock Salt', cursive;
            font-weight: 800;
            font-size: 1.8rem;
            color: var(--jmj-blue) !important;
            letter-spacing: -2px;
            text-decoration: none;
            cursor: pointer;
        }

        .nav-link {
            font-weight: 700;
            text-transform: uppercase;
            color: var(--jmj-ink) !important;
            margin: 5px 0;
            font-size: 0.9rem;
            position: relative;
            text-decoration: none;
            display: block;
            padding: 8px 15px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: rgba(212, 175, 55, 0.2);
            transform: translateX(5px);
        }

        .nav-link.active {
            background: var(--jmj-gold);
            padding: 8px 15px;
            transform: rotate(-1deg);
        }

        /* Menu hamburger */
        .navbar-toggler {
            border: none;
            padding: 5px;
            background: transparent;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .hamburger {
            display: inline-block;
            width: 30px;
            height: 24px;
            position: relative;
        }

        .hamburger span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: var(--jmj-ink);
            border-radius: 3px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }

        .hamburger span:nth-child(1) {
            top: 0px;
        }

        .hamburger span:nth-child(2) {
            top: 10px;
        }

        .hamburger span:nth-child(3) {
            top: 20px;
        }

        .navbar-toggler[aria-expanded="true"] .hamburger span:nth-child(1) {
            top: 10px;
            transform: rotate(135deg);
        }

        .navbar-toggler[aria-expanded="true"] .hamburger span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }

        .navbar-toggler[aria-expanded="true"] .hamburger span:nth-child(3) {
            top: 10px;
            transform: rotate(-135deg);
        }

        /* Menu mobile */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            max-width: 300px;
            height: 100vh;
            background: var(--jmj-white);
            border-left: 2px solid var(--jmj-ink);
            box-shadow: -5px 0 15px rgba(0,0,0,0.1);
            transition: right 0.3s ease;
            z-index: 1050;
            padding-top: 80px;
            overflow-y: auto;
        }

        .mobile-menu.show {
            right: 0;
        }

        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1040;
            display: none;
        }

        .mobile-menu-overlay.show {
            display: block;
        }

        /* --- Effets "Journal Collé" --- */
        .paper-patch {
            background: white;
            padding: 30px;
            border: 1px solid #ddd;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.05);
            position: relative;
            margin-bottom: 30px;
        }

        .paper-patch::before {
            content: '';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 30px;
            background: rgba(212, 175, 55, 0.3); /* Scotch Or */
            backdrop-filter: blur(2px);
        }

        .img-cutout {
            border: 8px solid white;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.1);
            transform: rotate(1deg);
            transition: 0.3s;
        }

        .img-cutout:hover { transform: rotate(-1deg) scale(1.02); }

        /* --- Hero Section --- */
        .hero-title { font-size: clamp(3.5rem, 12vw, 9rem); margin-bottom: 0; }
        .hero-subtitle { font-size: 1.5rem; margin-top: -10px; }

        /* --- Manifeste / Story --- */
        .manifesto-text {
            font-size: 2.5rem;
            line-height: 1.1;
            font-weight: 800;
        }

        /* --- Grid Créative --- */
        .zine-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 20px;
        }

        .zine-item { grid-column: span 4; margin-bottom: 40px; }
        .zine-item.large { grid-column: span 8; }

        /* --- Footer --- */
        footer {
            background: var(--jmj-ink);
            color: var(--jmj-paper);
            padding: 80px 0 40px;
            margin-top: 100px;
        }

        .tape-label {
            background: var(--jmj-gold);
            color: var(--jmj-ink);
            padding: 5px 15px;
            font-weight: 800;
            display: inline-block;
            transform: rotate(2deg);
            margin-bottom: 15px;
        }

        /* --- Custom UI --- */
        .btn-ink {
            background: var(--jmj-ink);
            color: white;
            border: none;
            padding: 15px 30px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.3s;
            cursor: pointer;
        }

        .btn-ink:hover { background: var(--jmj-gold); transform: translate(-3px, -3px); box-shadow: 3px 3px 0px var(--jmj-ink); }

        /* --- Mobile Styles --- */
        @media (max-width: 991.98px) {
            .navbar {
                padding: 1rem 0;
            }
            
            .nav-container {
                padding: 10px 15px;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .page-content {
                padding-top: 100px;
            }
            
            .handwritten {
                font-size: 0.7rem;
            }
            
            .paper-patch {
                padding: 20px;
                margin-bottom: 20px;
            }
            
            .hero-title {
                font-size: clamp(2.5rem, 10vw, 5rem);
            }
            
            .manifesto-text {
                font-size: 1.8rem;
            }
            
            .zine-grid {
                grid-template-columns: repeat(1, 1fr);
                gap: 15px;
            }
            
            .zine-item, .zine-item.large {
                grid-column: span 1;
            }
            
            footer {
                padding: 40px 0 20px;
                margin-top: 60px;
            }
        }
        
        @media (max-width: 575.98px) {
            .navbar-brand {
                font-size: 1.3rem;
            }
            
            .page-content {
                padding-top: 90px;
            }
            
            .hero-title {
                font-size: clamp(2rem, 8vw, 3.5rem);
            }
            
            .manifesto-text {
                font-size: 1.5rem;
            }
            
            .paper-patch {
                padding: 15px;
            }
            
            .img-cutout {
                border-width: 5px;
            }
            
            .btn-ink {
                padding: 12px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Nav "Collée" -->
    <nav class="navbar fixed-top">
        <div class="container">
            <div class="nav-container w-100">
                <a href="/" class="navbar-brand">LA <span>JMJ</span></a>
                
                <!-- Menu Desktop -->
                <div class="d-none d-lg-flex">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Le Studio</a>
                    <a href="/vibe" class="nav-link {{ request()->is('vibe') ? 'active' : '' }}">Notre Vibe</a>
                    <a href="/objets" class="nav-link {{ request()->is('objets') ? 'active' : '' }}">Les Objets</a>
                    <a href="/pricing" class="nav-link {{ request()->is('pricing') ? 'active' : '' }}">Le Tarif</a>
                    <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Dis-nous tout</a>
                </div>
                
                <!-- Menu Mobile Toggle -->
                <button class="navbar-toggler d-lg-none" type="button" id="mobileMenuToggle">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                
                <div class="handwritten d-none d-md-block d-lg-none">Est. 2026</div>
            </div>
        </div>
    </nav>

    <!-- Menu Mobile -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="px-4">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Le Studio</a>
            <a href="/vibe" class="nav-link {{ request()->is('vibe') ? 'active' : '' }}">Notre Vibe</a>
            <a href="/objets" class="nav-link {{ request()->is('objets') ? 'active' : '' }}">Les Objets</a>
            <a href="/pricing" class="nav-link {{ request()->is('pricing') ? 'active' : '' }}">Le Tarif</a>
            <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Dis-nous tout</a>
            
            <div class="mt-4 pt-4 border-top border-dark">
                <div class="handwritten mb-3">Est. 2026 / Sublimation Lab</div>
                <div class="d-flex gap-3">
                    <a href="https://www.instagram.com/la_jmj_creation?igsh=aDFuOXkxcGc4c3Y1&utm_source=qr" class="text-dark text-decoration-none small typewriter">INSTAGRAM</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Overlay pour le menu mobile -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="navbar-brand text-white fs-1">LA <span>JMJ</span></h2>
                    <p class="typewriter opacity-50">Sublimation & Creative Zine Studio.<br>Tous droits réservés © 2026.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="handwritten mb-3" style="font-size: 1.2rem;">Merci d'être passé voir !</div>
                    <div class="d-flex justify-content-md-end gap-3">
                        <a href="https://www.instagram.com/la_jmj_creation?igsh=aDFuOXkxcGc4c3Y1&utm_source=qr" class="text-white text-decoration-none small typewriter">INSTAGRAM</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Gestion du menu mobile
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
            
            // Ouvrir/fermer le menu mobile
            mobileMenuToggle.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                
                if (isExpanded) {
                    closeMobileMenu();
                } else {
                    openMobileMenu();
                }
            });
            
            // Fermer le menu en cliquant sur l'overlay
            mobileMenuOverlay.addEventListener('click', closeMobileMenu);
            
            // Fermer le menu en cliquant sur un lien
            const mobileMenuLinks = mobileMenu.querySelectorAll('.nav-link');
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });
            
            function openMobileMenu() {
                mobileMenu.classList.add('show');
                mobileMenuOverlay.classList.add('show');
                mobileMenuToggle.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden'; // Empêcher le défilement du corps
            }
            
            function closeMobileMenu() {
                mobileMenu.classList.remove('show');
                mobileMenuOverlay.classList.remove('show');
                mobileMenuToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = ''; // Réactiver le défilement du corps
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>