<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dem-Tor Gıda Meşrubat. 1992'den beri İstanbul'da güvenilir ve profesyonel soğuk zincir lojistik ve dağıtım çözümleri.">
    <?php wp_head(); ?>
    <style>
        /* Global Typography Rendering Optimization */
        body {
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Swiper Linear Ticker (Infinite Scroll) */
        .swiper-ticker .swiper-wrapper {
            transition-timing-function: linear !important;
        }

        /* Progressive Enhancement: iOS Smooth Corners (Superellipse) */
        @supports (corner-shape: squircle) or (-webkit-corner-shape: squircle) {
            /* Enable squircle globally for everything that uses rounded corners */
            [class*="rounded-"]:not(.rounded-none), 
            .sleek-box,
            .stat-card,
            iframe {
                -webkit-corner-shape: squircle !important;
                corner-shape: squircle !important;
            }

            /* Proportional radius increase: Superellipse flattens the curve, so we need larger absolute radii to maintain the same visual softness */
            .rounded-xl { border-radius: 1.25rem !important; }
            .rounded-2xl { border-radius: 1.75rem !important; } /* Navbar & small boxes */
            .rounded-3xl { border-radius: 2.5rem !important; }  /* Map box */
            .rounded-\[2rem\] { border-radius: 3rem !important; } /* Gallery & Heritage */
            .rounded-\[2\.5rem\] { border-radius: 3.75rem !important; } /* Stat Cards */
            
            iframe { border-radius: 1.75rem !important; } /* Embedded Google Map */
        }
    </style>
</head>

<body <?php body_class('antialiased bg-[#E8E4DD] text-[#111111] overflow-x-hidden selection:bg-[#11C6DB] selection:text-[#111111]'); ?>>
<?php wp_body_open(); ?>

<!-- Navbar - "The Floating Island" -->
<header id="site-header" class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-full max-w-7xl rounded-2xl transition-all duration-200 ease-out border border-transparent">
    <div class="flex items-center justify-between px-6 py-5">
        <!-- Logo Area -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center group hover-lift z-10 relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/demtor-logo-sm.png" alt="Dem-Tor Logo" class="h-8 md:h-10 w-auto object-contain brightness-0 invert transition-all duration-500" id="nav-logo" />
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8 absolute left-1/2 -translate-x-1/2">
            <a href="#kurumsal" class="text-white/80 hover:text-white transition-colors duration-200 text-[15px] font-medium tracking-wide nav-link relative after:absolute after:-bottom-1 after:left-0 after:h-[1px] after:w-0 hover:after:w-full after:bg-current after:transition-all after:duration-300">Kurumsal</a>
            <a href="#operasyon" class="text-white/80 hover:text-white transition-colors duration-200 text-[15px] font-medium tracking-wide nav-link relative after:absolute after:-bottom-1 after:left-0 after:h-[1px] after:w-0 hover:after:w-full after:bg-current after:transition-all after:duration-300">Lojistik & Operasyon</a>
            <a href="#galeri" class="text-white/80 hover:text-white transition-colors duration-200 text-[15px] font-medium tracking-wide nav-link relative after:absolute after:-bottom-1 after:left-0 after:h-[1px] after:w-0 hover:after:w-full after:bg-current after:transition-all after:duration-300">Galeri</a>
            <a href="#iletisim" class="text-white/80 hover:text-white transition-colors duration-200 text-[15px] font-medium tracking-wide nav-link relative after:absolute after:-bottom-1 after:left-0 after:h-[1px] after:w-0 hover:after:w-full after:bg-current after:transition-all after:duration-300">İletişim</a>
        </nav>

        <!-- Right Text Info -->
        <div class="hidden md:block z-10 relative group">
            <span id="nav-cta-text" class="text-[17px] text-white/90 transition-colors duration-300 tracking-wide relative z-10" style="font-family: 'Playfair Display', serif; font-style: italic;">Efes Pilsen Dağıtıcı Bayii</span>
            <!-- Freehand Brush Stroke Underline (Pure SVG, No CSS Transforms) -->
            <svg class="absolute -bottom-3 left-[-5%] w-[110%] h-[12px] text-[#11C6DB] opacity-80 pointer-events-none" viewBox="0 0 100 20" preserveAspectRatio="none">
                <g transform="rotate(1 50 10)">
                    <!-- Main tapered brush swoosh (coordinates flipped natively) -->
                    <path d="M98,8 C 70,-2 30,2 2,14 C 30,6 70,4 98,8 Z" fill="currentColor" />
                    <!-- Secondary sketchy stroke -->
                    <path d="M90,2 Q 55,-4 15,6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" opacity="0.6"/>
                </g>
            </svg>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="md:hidden text-white z-10 p-2" id="mobile-menu-btn" aria-label="Toggle Menu">
            <?php echo get_lucide_icon('menu', 'w-8 h-8'); ?>
        </button>
    </div>
</header>

<!-- Cinematic Mobile Fullscreen Menu -->
<div id="mobile-menu-overlay" class="fixed inset-0 z-[100] bg-black/95 backdrop-blur-lg text-[#E8E4DD] flex flex-col justify-between items-center hidden" style="transform: translateY(-100%);">
    
    <!-- Background Texture -->
    <div class="absolute inset-0 opacity-10 pointer-events-none mix-blend-overlay z-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
            <filter id="noiseFilter"><feTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="3" stitchTiles="stitch"/></filter>
            <rect width="100%" height="100%" filter="url(#noiseFilter)"/>
        </svg>
    </div>

    <!-- Truck Background -->
    <div class="absolute inset-0 opacity-10 pointer-events-none z-0 flex items-center justify-center overflow-hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/truck.png" alt="Truck Background" class="w-full h-auto object-contain scale-25 translate-y-32" />
    </div>

    <!-- Close Button -->
    <button id="mobile-menu-close" class="absolute top-8 right-6 text-white p-2 z-[120] hover:rotate-90 transition-transform duration-500">
        <?php echo get_lucide_icon('x', 'w-10 h-10'); ?>
    </button>
    
    <!-- Empty Top Space -->
    <div class="w-full h-24 shrink-0 relative z-10"></div>

    <!-- Menu Links -->
    <div class="flex-1 flex flex-col justify-start w-full relative z-10 px-8 pt-12">
        <div class="w-full max-w-sm mx-auto flex flex-col items-start gap-12">
            <!-- Logo aligned with text (skipping the number and gap) -->
            <div class="inline-flex flex-col items-start ml-8 group">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/demtor-logo-sm.png" alt="Dem-Tor Logo" class="h-10 w-auto object-contain brightness-0 invert opacity-50 mb-4" />
                <div class="w-full h-1 bg-white/50"></div>
            </div>
            
            <nav class="flex flex-col gap-6 w-full">
                <a href="#kurumsal" class="mobile-nav-link group flex items-baseline gap-4 py-2 border-b border-white/5">
                    <span class="font-mono text-[10px] text-[#11C6DB] opacity-60">01</span>
                    <span class="font-display text-4xl text-white/80 group-hover:text-[#11C6DB] transition-all duration-300 tracking-tight">Kurumsal</span>
                </a>
                <a href="#operasyon" class="mobile-nav-link group flex items-baseline gap-4 py-2 border-b border-white/5">
                    <span class="font-mono text-[10px] text-[#11C6DB] opacity-60">02</span>
                    <span class="font-display text-4xl text-white/80 group-hover:text-[#11C6DB] transition-all duration-300 tracking-tight">Lojistik & Operasyon</span>
                </a>
                <a href="#galeri" class="mobile-nav-link group flex items-baseline gap-4 py-2 border-b border-white/5">
                    <span class="font-mono text-[10px] text-[#11C6DB] opacity-60">03</span>
                    <span class="font-display text-4xl text-white/80 group-hover:text-[#11C6DB] transition-all duration-300 tracking-tight">Galeri</span>
                </a>
                <a href="#iletisim" class="mobile-nav-link group flex items-baseline gap-4 py-2 border-b border-white/5">
                    <span class="font-mono text-[10px] text-[#11C6DB] opacity-60">04</span>
                    <span class="font-display text-4xl text-white/80 group-hover:text-[#11C6DB] transition-all duration-300 tracking-tight">İletişim</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- Menu Footer Info -->
    <div id="mobile-menu-footer" class="w-full text-center flex flex-col items-center opacity-0 relative z-10 pb-12 shrink-0 px-6">
        <div class="w-full border-t border-white/10 pt-8 flex flex-col gap-4">
            <a href="tel:+902122897317" class="font-sans text-sm text-white/50 hover:text-[#11C6DB] transition-colors tracking-widest font-medium">+90 212 289 73 17</a>
            <a href="mailto:info@dem-tor.com.tr" class="font-sans text-sm text-white/50 hover:text-[#11C6DB] transition-opacity tracking-widest font-medium">info@dem-tor.com.tr</a>
        </div>
    </div>
</div>

