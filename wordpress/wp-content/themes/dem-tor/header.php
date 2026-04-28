<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased bg-[#E8E4DD] text-[#111111] overflow-x-hidden selection:bg-[#D4AF37] selection:text-[#111111]'); ?>>
<?php wp_body_open(); ?>

<!-- Global Noise Overlay -->
<div class="noise-overlay pointer-events-none">
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full h-full opacity-50" style="filter: contrast(150%) brightness(100%);">
        <filter id="noiseFilter">
            <feTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="3" stitchTiles="stitch"/>
        </filter>
        <rect width="100%" height="100%" filter="url(#noiseFilter)"/>
    </svg>
</div>

<!-- Navbar - "The Floating Island" -->
<header id="site-header" class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-[90%] max-w-5xl rounded-full transition-all duration-500 ease-out border border-transparent">
    <div class="flex items-center justify-between px-6 py-3">
        <!-- Logo Area -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 group hover-lift z-10 relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/demtor-logo-sm.png" alt="Dem-Tor Logo" class="h-10 w-auto object-contain brightness-0 invert transition-all duration-500" id="nav-logo" />
            <span class="font-display text-xl tracking-tight text-white transition-colors duration-500" id="nav-logotype">DEM-TOR</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8 absolute left-1/2 -translate-x-1/2">
            <a href="#kurumsal" class="text-white/80 hover:text-white transition-colors text-sm font-medium tracking-wide nav-link">Kurumsal</a>
            <a href="#markalar" class="text-white/80 hover:text-white transition-colors text-sm font-medium tracking-wide nav-link">Markalar</a>
            <a href="#operasyon" class="text-white/80 hover:text-white transition-colors text-sm font-medium tracking-wide nav-link">Operasyon</a>
            <a href="#iletisim" class="text-white/80 hover:text-white transition-colors text-sm font-medium tracking-wide nav-link">İletişim</a>
        </nav>

        <!-- CTA Button -->
        <div class="hidden md:block z-10 relative">
            <a href="#iletisim" class="inline-flex items-center justify-center px-6 py-2.5 rounded-full bg-white text-black font-semibold text-sm btn-magnetic transition-colors duration-500 hover:bg-[#D4AF37]" id="nav-cta">
                <span class="relative z-10">Hemen Bayi Olun</span>
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="md:hidden text-white z-10" id="mobile-menu-btn" aria-label="Toggle Menu">
            <?php echo get_lucide_icon('menu', 'w-6 h-6'); ?>
        </button>
    </div>
</header>
