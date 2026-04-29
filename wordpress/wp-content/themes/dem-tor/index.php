<?php
/**
 * Main template file (Landing Page)
 */
get_header(); ?>

<main id="content">

<!-- 1. HERO SECTION -->
<section id="hero" class="relative w-full h-[100dvh] bg-[#111111] overflow-hidden flex flex-col justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 w-full h-full">
        <!-- Will generate hero_fleet_sunset.jpg -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hero_fleet_sunset.jpg" alt="Dem-Tor Fleet at Sunset" class="w-full h-full object-cover opacity-60 mix-blend-luminosity scale-105" />
        <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-[#111111]/60 to-transparent"></div>
    </div>

    <!-- Content: Centered -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6">
        <div class="max-w-4xl gsap-fade-up">
            <h1 class="font-extrabold text-5xl md:text-[6em] text-[#F5F3EE] leading-[1.05] mb-8 tracking-wide" style="font-family: 'Roboto Slab', serif;">
                Lojistik ve <br/>
                dağıtım <br/>
                <span class="text-[#11C6DB]">çözümleri.</span>
            </h1>
            <p class="font-medium text-lg md:text-xl text-[#E8E4DD]/80 tracking-normal mb-10 max-w-full whitespace-nowrap" style="font-family: 'Roboto Slab', serif;">
                Otuz yılı aşkın güvenilir dağıtım tecrübesi.
            </p>
            <a href="#iletisim" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-white text-black font-semibold text-lg btn-magnetic transition-colors hover:bg-[#11C6DB]">
                <span class="relative z-10">Bize Ulaşın</span>
                <?php echo get_lucide_icon('arrow-right', 'w-5 h-5 relative z-10'); ?>
            </a>
        </div>
    </div>
</section>

<!-- 2. THE HERITAGE -->
<section id="kurumsal" class="py-24 md:py-32 bg-[#E8E4DD] text-[#111111] relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-fade-up order-2 lg:order-1">
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl text-[#002366] mb-8">
                    30 Yıllık Güven, <br/>
                    Profesyonel Dağıtım
                </h2>
                <div class="font-sans text-lg md:text-xl text-[#111111]/80 font-light leading-relaxed space-y-6">
                    <p>Dem-Tor Gıda Meşrubat olarak, Eyüp merkezli tesislerimizde operasyonel mükemmelliği hedefliyoruz.</p>
                    <p>İdari yönetim, gelişmiş soğuk hava depolama ve hızlı sevkiyat birimlerimizle ticaretin kesintisiz akmasını sağlıyoruz.</p>
                </div>
            </div>
            <!-- Heritage Image -->
            <div class="gsap-fade-up order-1 lg:order-2 h-[500px] rounded-[2rem] overflow-hidden border border-[#002366]/10 shadow-2xl relative group">
                <div class="absolute inset-0 bg-[#11C6DB]/10 mix-blend-overlay z-10"></div>
                <!-- Will generate heritage_office.jpg -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heritage_office.jpg" alt="Dem-Tor Office" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
            </div>
        </div>
    </div>
</section>

<!-- 3. OPERATIONAL STATS -->
<section class="py-24 md:py-32 bg-[#D8D3C8] relative z-10 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16 max-w-3xl mx-auto gsap-fade-up">
            <h2 class="text-4xl md:text-5xl text-[#002366] mb-6 tracking-tight">Gücümüz Rakamlarda</h2>
            <p class="font-sans text-xl text-[#002366]/80 leading-relaxed font-medium">
                İstanbul'un her noktasına ulaşan geniş araç filomuz ve deneyimli kadromuzla,<br class="hidden md:block"/>
                tedarik zincirinizin en güçlü halkası olmaya devam ediyoruz.
            </p>
        </div>

        <div id="stats-container" class="grid grid-cols-2 lg:grid-cols-4 gap-3">
            <!-- Stat Card 1 -->
            <div class="stat-card bg-gradient-to-tr from-[#11C6DB] from-30% to-[#e7e2d6] rounded-[2rem] md:rounded-[2.5rem] p-5 sm:p-8 shadow-2xl shadow-[#11C6DB]/20 flex flex-col justify-end items-start relative overflow-hidden group hover:-translate-y-2 transition-transform duration-500 min-h-[200px] sm:min-h-[250px] lg:min-h-[300px]">
                    <!-- Smooth Hover Background -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#11C6DB] from-30% to-[#20D5EB] opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out pointer-events-none z-0"></div>
                    <svg class="absolute inset-0 w-full h-full text-white/20 pointer-events-none z-0" preserveAspectRatio="none" viewBox="0 0 100 100">
                        <path fill="currentColor" class="transition-transform duration-1000 ease-out origin-bottom group-hover:scale-y-[1.20] group-hover:scale-x-110" d="M0,60 C30,30 50,80 100,40 L100,100 L0,100 Z" />
                        <path fill="currentColor" opacity="0.5" class="transition-transform duration-[1200ms] ease-out origin-bottom group-hover:scale-y-[1.15] group-hover:scale-x-105" d="M0,80 C40,50 70,90 100,60 L100,100 L0,100 Z" />
                    </svg>
                    <div class="relative z-10 flex flex-col gap-1 lg:gap-2 w-full">
                        <h4 class="font-sans text-sm sm:text-xl lg:text-[1.5rem] font-bold text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 ease-out leading-snug">Modern araç<br/>filosu</h4>
                        <div class="font-display font-bold text-4xl sm:text-5xl lg:text-[4.5rem] text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 delay-100 ease-out leading-none tracking-tight relative z-0">30+</div>
                    </div>
            </div>
            
            <!-- Stat Card 2 -->
            <div class="stat-card bg-gradient-to-tr from-[#11C6DB] from-30% to-[#e7e2d6] rounded-[2rem] md:rounded-[2.5rem] p-5 sm:p-8 shadow-2xl shadow-[#11C6DB]/20 flex flex-col justify-end items-start relative overflow-hidden group hover:-translate-y-2 transition-transform duration-500 min-h-[200px] sm:min-h-[250px] lg:min-h-[300px]">
                    <!-- Smooth Hover Background -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#11C6DB] from-30% to-[#20D5EB] opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out pointer-events-none z-0"></div>
                    <svg class="absolute inset-0 w-full h-full text-white/20 pointer-events-none z-0" preserveAspectRatio="none" viewBox="0 0 100 100">
                        <path fill="currentColor" class="transition-transform duration-1000 ease-out origin-bottom group-hover:scale-y-[1.20] group-hover:scale-x-110" d="M0,40 Q25,10 50,50 T100,30 L100,100 L0,100 Z" />
                        <path fill="currentColor" opacity="0.5" class="transition-transform duration-[1200ms] ease-out origin-bottom group-hover:scale-y-[1.15] group-hover:scale-x-105" d="M0,60 Q30,40 60,70 T100,50 L100,100 L0,100 Z" />
                    </svg>
                    <div class="relative z-10 flex flex-col gap-1 lg:gap-2 w-full">
                        <h4 class="font-sans text-sm sm:text-xl lg:text-[1.5rem] font-bold text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 ease-out leading-snug">Aktif satış<br/>noktası</h4>
                        <div class="font-display font-bold text-4xl sm:text-5xl lg:text-[4.5rem] text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 delay-100 ease-out leading-none tracking-tight relative z-0">1000+</div>
                    </div>
            </div>

            <!-- Stat Card 3 -->
            <div class="stat-card bg-gradient-to-tr from-[#11C6DB] from-30% to-[#e7e2d6] rounded-[2rem] md:rounded-[2.5rem] p-5 sm:p-8 shadow-2xl shadow-[#11C6DB]/20 flex flex-col justify-end items-start relative overflow-hidden group hover:-translate-y-2 transition-transform duration-500 min-h-[200px] sm:min-h-[250px] lg:min-h-[300px]">
                    <!-- Smooth Hover Background -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#11C6DB] from-30% to-[#20D5EB] opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out pointer-events-none z-0"></div>
                    <svg class="absolute inset-0 w-full h-full text-white/20 pointer-events-none z-0" preserveAspectRatio="none" viewBox="0 0 100 100">
                        <path fill="currentColor" class="transition-transform duration-1000 ease-out origin-bottom group-hover:scale-y-[1.20] group-hover:scale-x-110" d="M0,70 Q40,0 80,50 T100,20 L100,100 L0,100 Z" />
                        <path fill="currentColor" opacity="0.5" class="transition-transform duration-[1200ms] ease-out origin-bottom group-hover:scale-y-[1.15] group-hover:scale-x-105" d="M0,100 Q50,40 100,80 L100,100 L0,100 Z" />
                    </svg>
                    <div class="relative z-10 flex flex-col gap-1 lg:gap-2 w-full">
                        <h4 class="font-sans text-sm sm:text-xl lg:text-[1.5rem] font-bold text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 ease-out leading-snug">Yıllık sektör<br/>tecrübesi</h4>
                        <div class="font-display font-bold text-4xl sm:text-5xl lg:text-[4.5rem] text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 delay-100 ease-out leading-none tracking-tight relative z-0">32</div>
                    </div>
            </div>

            <!-- Stat Card 4 -->
            <div class="stat-card bg-gradient-to-tr from-[#11C6DB] from-30% to-[#e7e2d6] rounded-[2rem] md:rounded-[2.5rem] p-5 sm:p-8 shadow-2xl shadow-[#11C6DB]/20 flex flex-col justify-end items-start relative overflow-hidden group hover:-translate-y-2 transition-transform duration-500 min-h-[200px] sm:min-h-[250px] lg:min-h-[300px]">
                    <!-- Smooth Hover Background -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#11C6DB] from-30% to-[#20D5EB] opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-in-out pointer-events-none z-0"></div>
                    <svg class="absolute inset-0 w-full h-full text-white/20 pointer-events-none z-0" preserveAspectRatio="none" viewBox="0 0 100 100">
                        <path fill="currentColor" class="transition-transform duration-1000 ease-out origin-bottom group-hover:scale-y-[1.20] group-hover:scale-x-110" d="M0,30 C40,80 60,10 100,50 L100,100 L0,100 Z" />
                        <path fill="currentColor" opacity="0.5" class="transition-transform duration-[1200ms] ease-out origin-bottom group-hover:scale-y-[1.15] group-hover:scale-x-105" d="M0,50 C50,100 70,30 100,70 L100,100 L0,100 Z" />
                    </svg>
                    <div class="relative z-10 flex flex-col gap-1 lg:gap-2 w-full">
                        <h4 class="font-sans text-sm sm:text-xl lg:text-[1.5rem] font-bold text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 ease-out leading-snug">Uzman<br/>personel</h4>
                        <div class="font-display font-bold text-4xl sm:text-5xl lg:text-[4.5rem] text-[#004562] group-hover:text-[#E4F7FF] transition-colors duration-500 delay-100 ease-out leading-none tracking-tight relative z-0">41</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. GALLERY -->
<section id="operasyon" class="py-24 md:py-32 bg-[#E8E4DD] relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="font-display text-4xl md:text-5xl text-center text-[#111111] mb-16 gsap-fade-up">Operasyon Ağı</h2>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-auto md:h-[600px]">
            <!-- Gallery images will be generated -->
            <div class="md:col-span-8 h-[300px] md:h-full rounded-[2rem] overflow-hidden sleek-box border border-black/10 group gsap-fade-up">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/gallery_warehouse.jpg" alt="Warehouse Operation" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />
            </div>
            <div class="md:col-span-4 flex flex-col gap-6 h-full">
                <div class="h-[250px] md:h-[calc(50%-0.75rem)] rounded-[2rem] overflow-hidden sleek-box border border-black/10 group gsap-fade-up" style="transition-delay: 100ms;">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8ed7c80a30?q=80&w=2070&auto=format&fit=crop" alt="Truck Loading" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />
                </div>
                <div class="h-[250px] md:h-[calc(50%-0.75rem)] rounded-[2rem] overflow-hidden sleek-box border border-black/10 group bg-[#002366] flex flex-col items-center justify-center text-white p-8 gsap-fade-up" style="transition-delay: 200ms;">
                    <?php echo get_lucide_icon('shield', 'w-12 h-12 text-[#11C6DB] mb-4'); ?>
                    <h4 class="font-display text-2xl text-center mb-2">Soğuk Zincir</h4>
                    <p class="font-sans text-sm text-center text-white/70">Maksimum Kalite, Kesintisiz Akış.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4.5. INFINITE MEDIA CAROUSEL (BENTO GRID ARCHITECTURE) -->
<section class="pt-0 pb-12 md:pb-16 bg-[#E8E4DD] relative z-10 cursor-grab active:cursor-grabbing block">
    
    <!-- Swiper Container -->
    <div class="swiper swiper-ticker media-carousel w-full overflow-visible relative z-10">
        <div class="swiper-wrapper flex items-center">
            
            <?php 
            for($i=0; $i<3; $i++): 
            ?>
            
            <!-- Bento Block 1: Left Tall, Right Two Squares -->
            <div class="swiper-slide !w-[450px] md:!w-[700px] !h-[320px] md:!h-[480px] flex-shrink-0">
                <div class="w-full h-full grid grid-cols-2 grid-rows-2 gap-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/album/01.jpg" class="glightbox row-span-2 col-span-1 block w-full h-full rounded-[2rem] overflow-hidden group relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/album/01.jpg" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Gallery Image 1" />
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/album/02.jpg" class="glightbox row-span-1 col-span-1 block w-full h-full rounded-[2rem] overflow-hidden group relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/album/02.jpg" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Gallery Image 2" />
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/album/03.jpg" class="glightbox row-span-1 col-span-1 block w-full h-full rounded-[2rem] overflow-hidden group relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/album/03.jpg" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Gallery Image 3" />
                    </a>
                </div>
            </div>

            <!-- Bento Block 2: Top Wide, Bottom Two Squares -->
            <div class="swiper-slide !w-[450px] md:!w-[700px] !h-[320px] md:!h-[480px] flex-shrink-0">
                <div class="w-full h-full grid grid-cols-2 grid-rows-2 gap-3">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/album/04.jpg" class="glightbox row-span-1 col-span-2 block w-full h-full rounded-[2rem] overflow-hidden group relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/album/04.jpg" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Gallery Image 4" />
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/album/05.jpg" class="glightbox row-span-1 col-span-1 block w-full h-full rounded-[2rem] overflow-hidden group relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/album/05.jpg" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Gallery Image 5" />
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/album/06.jpg" class="glightbox row-span-1 col-span-1 block w-full h-full rounded-[2rem] overflow-hidden group relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/album/06.jpg" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Gallery Image 6" />
                    </a>
                </div>
            </div>

            <!-- Bento Block 3: Large Single Square -->
            <div class="swiper-slide !w-[320px] md:!w-[480px] !h-[320px] md:!h-[480px] flex-shrink-0">
                <div class="w-full h-full">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/album/07.jpg" class="glightbox block w-full h-full rounded-[2rem] overflow-hidden group relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/album/07.jpg" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Gallery Image 7" />
                    </a>
                </div>
            </div>

            <?php endfor; ?>

        </div>
    </div>
</section>
<!-- 5. COMPANY INFO TABS -->
<section id="markalar" class="py-24 md:py-32 bg-[#08131F] text-[#E8E4DD] relative z-10 overflow-hidden">
    <!-- Abstract Logistics SVG Background -->
    <div class="absolute inset-0 z-0 pointer-events-none opacity-20 flex items-center justify-center">
        <svg width="100%" height="100%" viewBox="0 0 1440 800" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" class="w-full h-full object-cover">
            <g stroke="#11C6DB" stroke-width="0.5" fill="none">
                <!-- Global Logistics Network Lines -->
                <path d="M-200,400 C200,200 400,600 700,400 S1100,200 1600,400" />
                <path d="M-200,600 C100,800 500,200 900,500 S1200,700 1600,600" />
                <path d="M100,100 C300,300 200,700 500,600 S800,100 1100,300" />
                
                <!-- Hubs / Nodes -->
                <circle cx="240" cy="350" r="3.5" fill="#11C6DB" />
                <circle cx="700" cy="400" r="5" fill="none" stroke-width="1.5"/>
                <circle cx="700" cy="400" r="2" fill="#11C6DB" />
                <circle cx="900" cy="500" r="3.5" fill="#11C6DB" />
                <circle cx="460" cy="610" r="2.5" fill="#11C6DB" />
                <circle cx="1040" cy="310" r="3" fill="#11C6DB" />
                
                <!-- Connecting dotted routes between hubs -->
                <line x1="240" y1="350" x2="700" y2="400" stroke-dasharray="3 6" />
                <line x1="700" y1="400" x2="900" y2="500" stroke-dasharray="3 6" />
                <line x1="240" y1="350" x2="460" y2="610" stroke-dasharray="3 6" />
                <line x1="700" y1="400" x2="1040" y2="310" stroke-dasharray="3 6" />
                
                <!-- Circular radar/sonar rings at the main hub -->
                <circle cx="700" cy="400" r="40" stroke-dasharray="1 10" opacity="0.5"/>
                <circle cx="700" cy="400" r="80" stroke-dasharray="2 15" opacity="0.3"/>
                <circle cx="700" cy="400" r="140" stroke-dasharray="4 20" opacity="0.1"/>
            </g>
        </svg>
    </div>

    <div class="max-w-5xl mx-auto px-6 relative z-10">
        <h2 class="font-display text-4xl md:text-5xl text-center text-white mb-16 gsap-fade-up">Şirket Bilgileri</h2>
        
        <!-- Tab Controls (Minimalist Typographic) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-8 gap-y-12 mb-20 justify-center gsap-fade-up relative z-20">
            <!-- 01 -->
            <button class="company-tab-btn group flex flex-col text-left pt-6 border-t-[3px] border-white/10 hover:border-[#11C6DB]/40 transition-all duration-500" data-target="tab-genel">
                <span class="tab-number font-mono text-xs md:text-sm tracking-[0.3em] text-white/30 group-hover:text-[#11C6DB] transition-colors duration-500 mb-4 block">01</span>
                <span class="tab-title font-display text-base md:text-lg uppercase tracking-wider text-white/50 group-hover:text-white transition-colors duration-500">Genel Bilgiler</span>
            </button>
            
            <!-- 02 -->
            <button class="company-tab-btn group flex flex-col text-left pt-6 border-t-[3px] border-white/10 hover:border-[#11C6DB]/40 transition-all duration-500" data-target="tab-yonetim">
                <span class="tab-number font-mono text-xs md:text-sm tracking-[0.3em] text-white/30 group-hover:text-[#11C6DB] transition-colors duration-500 mb-4 block">02</span>
                <span class="tab-title font-display text-base md:text-lg uppercase tracking-wider text-white/50 group-hover:text-white transition-colors duration-500">Yönetim Kurulu</span>
            </button>
            
            <!-- 03 -->
            <button class="company-tab-btn group flex flex-col text-left pt-6 border-t-[3px] border-white/10 hover:border-[#11C6DB]/40 transition-all duration-500" data-target="tab-denetci">
                <span class="tab-number font-mono text-xs md:text-sm tracking-[0.3em] text-white/30 group-hover:text-[#11C6DB] transition-colors duration-500 mb-4 block">03</span>
                <span class="tab-title font-display text-base md:text-lg uppercase tracking-wider text-white/50 group-hover:text-white transition-colors duration-500">Denetçi</span>
            </button>
            
            <!-- 04 -->
            <button class="company-tab-btn group flex flex-col text-left pt-6 border-t-[3px] border-white/10 hover:border-[#11C6DB]/40 transition-all duration-500" data-target="tab-belge">
                <span class="tab-number font-mono text-xs md:text-sm tracking-[0.3em] text-white/30 group-hover:text-[#11C6DB] transition-colors duration-500 mb-4 block">04</span>
                <span class="tab-title font-display text-base md:text-lg uppercase tracking-wider text-white/50 group-hover:text-white transition-colors duration-500">Belge Arşivi</span>
            </button>
        </div>

        <!-- Tab Contents Container -->
        <div id="tabs-wrapper" class="relative overflow-hidden" style="transition: height 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
            
            <!-- Tab 01: Genel Bilgiler -->
            <div id="tab-genel" class="tab-content w-full absolute top-0 left-0 opacity-0 invisible z-10">
                <h3 class="font-display text-4xl text-[#11C6DB] mb-10 border-b border-[#11C6DB]/20 pb-6">Şirket Künyesi</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-10 font-sans text-white/90">
                    <div class="pl-5 border-l-2 border-[#11C6DB]/20"><span class="text-[#11C6DB]/70 block text-xs uppercase tracking-[0.2em] mb-2 font-mono font-semibold">Ticaret Ünvanı</span><span class="text-xl font-light leading-relaxed">Dem-Tor Gıda Meşrubat Pazarlama ve Dağıtım Ticaret Limited Şirketi</span></div>
                    <div class="pl-5 border-l-2 border-[#11C6DB]/20"><span class="text-[#11C6DB]/70 block text-xs uppercase tracking-[0.2em] mb-2 font-mono font-semibold">Merkez Adresi</span><span class="text-xl font-light leading-relaxed">Mimar Sinan Mah. Cendere Yolu No: 49 Eyüpsultan / İstanbul</span></div>
                    <div class="pl-5 border-l-2 border-[#11C6DB]/20"><span class="text-[#11C6DB]/70 block text-xs uppercase tracking-[0.2em] mb-2 font-mono font-semibold">Mersis Numarası</span><span class="text-xl font-light leading-relaxed">0274002326400010</span></div>
                    <div class="pl-5 border-l-2 border-[#11C6DB]/20"><span class="text-[#11C6DB]/70 block text-xs uppercase tracking-[0.2em] mb-2 font-mono font-semibold">Ticaret Sicil Numarası</span><span class="text-xl font-light leading-relaxed">287680 (İstanbul Ticaret Sicili)</span></div>
                    <div class="pl-5 border-l-2 border-[#11C6DB]/20"><span class="text-[#11C6DB]/70 block text-xs uppercase tracking-[0.2em] mb-2 font-mono font-semibold">Vergi Dairesi & Numarası</span><span class="text-xl font-light leading-relaxed">Gaziosmanpaşa - 2740023264</span></div>
                    <div class="pl-5 border-l-2 border-[#11C6DB]/20"><span class="text-[#11C6DB]/70 block text-xs uppercase tracking-[0.2em] mb-2 font-mono font-semibold">Ödenmiş Sermaye</span><span class="text-xl font-light leading-relaxed">5.000.000 TL</span></div>
                </div>
            </div>

            <!-- Tab 02: Yönetim Kurulu -->
            <div id="tab-yonetim" class="tab-content w-full absolute top-0 left-0 opacity-0 invisible z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Member 1 -->
                    <div class="sleek-box aspect-[3/4] relative group">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Ahmet Torun" class="w-full h-full object-cover filter grayscale contrast-125" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6 text-left">
                            <h4 class="font-display text-2xl text-white mb-1 group-hover:text-white transition-colors">Ahmet Torun</h4>
                            <p class="font-mono text-xs uppercase tracking-widest text-[#11C6DB] opacity-80 group-hover:opacity-100 transition-opacity">Şirket Müdürü / Kurucu Ortak</p>
                        </div>
                    </div>
                    <!-- Member 2 -->
                    <div class="sleek-box aspect-[3/4] relative group">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="Metin Torun" class="w-full h-full object-cover filter grayscale contrast-125" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6 text-left">
                            <h4 class="font-display text-2xl text-white mb-1">Metin Torun</h4>
                            <p class="font-mono text-xs uppercase tracking-widest text-white/60 group-hover:text-[#11C6DB] transition-colors">Şirket Müdürü / Kurucu Ortak</p>
                        </div>
                    </div>
                    <!-- Member 3 -->
                    <div class="sleek-box aspect-[3/4] relative group">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" alt="Sedat Demirhan" class="w-full h-full object-cover filter grayscale contrast-125" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6 text-left">
                            <h4 class="font-display text-2xl text-white mb-1">Sedat Demirhan</h4>
                            <p class="font-mono text-xs uppercase tracking-widest text-white/60 group-hover:text-[#11C6DB] transition-colors">Kurucu Ortak</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 03: Denetçi -->
            <div id="tab-denetci" class="tab-content w-full absolute top-0 left-0 opacity-0 invisible z-10">
                <h3 class="font-display text-4xl text-[#11C6DB] mb-10 border-b border-[#11C6DB]/20 pb-6">Denetim Statüsü</h3>
                <p class="font-sans text-xl text-white/80 font-light leading-relaxed max-w-3xl">
                    Şeffaflık ve hesap verilebilirlik ilkelerimiz doğrultusunda, tüm denetim süreçlerimiz uluslararası bağımsız denetim kriterleri çerçevesinde yürütülmekte olup; yasal denetçi bilgilerimize MKK e-ŞİRKET portalı üzerinden kesintisiz erişilebilmektedir.
                </p>
            </div>

            <!-- Tab 04: Belge Görüntüleme -->
            <div id="tab-belge" class="tab-content w-full absolute top-0 left-0 opacity-0 invisible z-10">
                <h3 class="font-display text-4xl text-[#11C6DB] mb-10 border-b border-[#11C6DB]/20 pb-6">Dijital Arşiv</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <a href="#" class="sleek-box p-6 bg-white/5 hover:bg-white/10 transition-colors border-white/10 group flex flex-col items-center text-center">
                        <span class="text-[#11C6DB] mb-4 group-hover:scale-110 transition-transform"><?php echo get_lucide_icon('file-text', 'w-10 h-10'); ?></span>
                        <h4 class="font-display text-xl text-white mb-2">Mali Tablolar</h4>
                        <p class="text-xs text-white/50 uppercase tracking-wide">İncele</p>
                    </a>
                    <a href="#" class="sleek-box p-6 bg-white/5 hover:bg-white/10 transition-colors border-white/10 group flex flex-col items-center text-center">
                        <span class="text-[#11C6DB] mb-4 group-hover:scale-110 transition-transform"><?php echo get_lucide_icon('file-text', 'w-10 h-10'); ?></span>
                        <h4 class="font-display text-xl text-white mb-2">Genel Kurul İlanları</h4>
                        <p class="text-xs text-white/50 uppercase tracking-wide">İncele</p>
                    </a>
                    <a href="#" class="sleek-box p-6 bg-white/5 hover:bg-white/10 transition-colors border-white/10 group flex flex-col items-center text-center">
                        <span class="text-[#11C6DB] mb-4 group-hover:scale-110 transition-transform"><?php echo get_lucide_icon('file-text', 'w-10 h-10'); ?></span>
                        <h4 class="font-display text-xl text-white mb-2">Ana Sözleşme</h4>
                        <p class="text-xs text-white/50 uppercase tracking-wide">İncele</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 6. CONTACT FORM -->
<section class="pt-24 md:pt-32 pb-16 md:pb-20 bg-[#DFDAD0] text-[#111111] relative z-10">
    <div class="max-w-4xl mx-auto px-6 gsap-fade-up">
        <div class="bg-[#FCFBF9] border border-[#111111]/10 rounded-[3rem] p-10 md:p-16 sleek-box shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
            <div class="text-center mb-20 md:mb-24">
                <h2 class="font-display text-4xl md:text-5xl text-[#002366] mb-4">İletişime Geçin</h2>
                <p class="font-sans text-lg text-[#111111]/60">Her türlü soru, görüş ve iş ortaklığı talebiniz için formu doldurabilirsiniz.</p>
            </div>
            
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block font-mono text-xs uppercase tracking-widest text-[#111111]/60 mb-2">İsim Soyisim</label>
                        <input type="text" class="w-full bg-transparent border-b border-[#111111]/20 pb-2 focus:outline-none focus:border-[#11C6DB] transition-colors font-sans text-lg text-[#111111] placeholder-[#111111]/30" placeholder="Adınız" />
                    </div>
                    <div>
                        <label class="block font-mono text-xs uppercase tracking-widest text-[#111111]/60 mb-2">Firma Adı</label>
                        <input type="text" class="w-full bg-transparent border-b border-[#111111]/20 pb-2 focus:outline-none focus:border-[#11C6DB] transition-colors font-sans text-lg text-[#111111] placeholder-[#111111]/30" placeholder="Firma Ünvanı" />
                    </div>
                </div>
                <div>
                    <label class="block font-mono text-xs uppercase tracking-widest text-[#111111]/60 mb-2">Mesajınız</label>
                    <textarea rows="4" class="w-full bg-transparent border-b border-[#111111]/20 pb-2 focus:outline-none focus:border-[#11C6DB] transition-colors font-sans text-lg text-[#111111] placeholder-[#111111]/30 resize-none" placeholder="Size nasıl yardımcı olabiliriz?"></textarea>
                </div>
                <div class="text-center pt-8">
                    <button type="button" class="inline-flex items-center justify-center px-10 py-4 rounded-full bg-[#002366] text-white font-semibold text-lg btn-magnetic transition-colors hover:bg-[#11C6DB] hover:text-black w-full md:w-auto">
                        <span class="relative z-10">Gönder</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
