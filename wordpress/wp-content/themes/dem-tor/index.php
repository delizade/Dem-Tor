<?php
/**
 * Main template file (Landing Page)
 */
get_header(); ?>

<!-- 1. HERO SECTION -->
<section id="hero" class="relative w-full h-[100dvh] bg-[#111111] overflow-hidden flex flex-col justify-end">
    <!-- Background Image -->
    <div class="absolute inset-0 w-full h-full">
        <!-- Will generate hero_fleet_sunset.jpg -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/hero_fleet_sunset.jpg" alt="Dem-Tor Fleet at Sunset" class="w-full h-full object-cover opacity-60 mix-blend-luminosity scale-105" />
        <div class="absolute inset-0 bg-gradient-to-t from-[#111111] via-[#111111]/60 to-transparent"></div>
    </div>

    <!-- Content: Bottom-left third -->
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 pb-24 md:pb-32">
        <div class="max-w-2xl gsap-fade-up">
            <h1 class="font-display text-5xl md:text-7xl lg:text-8xl text-[#F5F3EE] leading-tight mb-6 tracking-tight">
                Istanbul’s <br/>
                <span class="text-[#D4AF37] italic font-serif">Logistics Powerhouse.</span>
            </h1>
            <p class="font-sans text-xl md:text-2xl text-[#E8E4DD]/80 font-light tracking-wide mb-10 max-w-lg">
                Reliable distribution since 1992.
            </p>
            <a href="#iletisim" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-white text-black font-semibold text-lg btn-magnetic transition-colors hover:bg-[#D4AF37]">
                <span class="relative z-10">Bize Ulaşın</span>
                <?php echo get_lucide_icon('store', 'w-5 h-5 relative z-10'); ?>
            </a>
        </div>
    </div>
</section>

<!-- 2. THE HERITAGE -->
<section id="kurumsal" class="py-24 md:py-32 bg-[#E8E4DD] text-[#111111] relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="gsap-fade-up order-2 lg:order-1">
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl text-[#002366] leading-tight mb-8">
                    30 Yıllık Güven, <br/>
                    <span class="italic text-[#111111]">Profesyonel Dağıtım</span>
                </h2>
                <div class="font-sans text-lg md:text-xl text-[#111111]/80 font-light leading-relaxed space-y-6">
                    <p>Dem-Tor Gıda Meşrubat olarak, Eyüp merkezli tesislerimizde operasyonel mükemmelliği hedefliyoruz.</p>
                    <p>İdari yönetim, gelişmiş soğuk hava depolama ve hızlı sevkiyat birimlerimizle ticaretin kesintisiz akmasını sağlıyoruz.</p>
                </div>
            </div>
            <!-- Heritage Image -->
            <div class="gsap-fade-up order-1 lg:order-2 h-[500px] rounded-[2rem] overflow-hidden border border-[#002366]/10 shadow-2xl relative group">
                <div class="absolute inset-0 bg-[#D4AF37]/10 mix-blend-overlay z-10"></div>
                <!-- Will generate heritage_office.jpg -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/heritage_office.jpg" alt="Dem-Tor Office" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
            </div>
        </div>
    </div>
</section>

<!-- 3. OPERATIONAL STATS -->
<section class="py-16 bg-[#002366] text-[#F5F3EE] relative z-10">
    <div class="max-w-7xl mx-auto px-6">
        <div id="stats-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat Card 1 -->
            <div class="stat-card sleek-box p-8 border-[#F5F3EE]/10 flex flex-col items-start bg-white/5">
                <div class="text-[#D4AF37] mb-6 p-4 rounded-full bg-white/5 inline-flex">
                    <?php echo get_lucide_icon('truck', 'w-8 h-8'); ?>
                </div>
                <h3 class="font-display text-5xl mb-2 text-white">30+</h3>
                <p class="font-sans text-sm tracking-wide text-white/60 uppercase">Modern Araç Filosu</p>
            </div>
            
            <!-- Stat Card 2 -->
            <div class="stat-card sleek-box p-8 border-[#F5F3EE]/10 flex flex-col items-start bg-white/5">
                <div class="text-[#D4AF37] mb-6 p-4 rounded-full bg-white/5 inline-flex">
                    <?php echo get_lucide_icon('store', 'w-8 h-8'); ?>
                </div>
                <h3 class="font-display text-5xl mb-2 text-white">1000+</h3>
                <p class="font-sans text-sm tracking-wide text-white/60 uppercase">Aktif Satış Noktası</p>
            </div>

            <!-- Stat Card 3 -->
            <div class="stat-card sleek-box p-8 border-[#F5F3EE]/10 flex flex-col items-start bg-white/5">
                <div class="text-[#D4AF37] mb-6 p-4 rounded-full bg-white/5 inline-flex">
                    <?php echo get_lucide_icon('award', 'w-8 h-8'); ?>
                </div>
                <h3 class="font-display text-5xl mb-2 text-white">32</h3>
                <p class="font-sans text-sm tracking-wide text-white/60 uppercase">Yıllık Sektör Tecrübesi</p>
            </div>

            <!-- Stat Card 4 -->
            <div class="stat-card sleek-box p-8 border-[#F5F3EE]/10 flex flex-col items-start bg-white/5">
                <div class="text-[#D4AF37] mb-6 p-4 rounded-full bg-white/5 inline-flex">
                    <?php echo get_lucide_icon('badge-check', 'w-8 h-8'); ?>
                </div>
                <h3 class="font-display text-5xl mb-2 text-white">41</h3>
                <p class="font-sans text-sm tracking-wide text-white/60 uppercase">Sertifikalı Uzman Personel</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. GALLERY -->
<section id="operasyon" class="py-24 bg-[#E8E4DD] relative z-10">
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
                    <?php echo get_lucide_icon('shield', 'w-12 h-12 text-[#D4AF37] mb-4'); ?>
                    <h4 class="font-display text-2xl text-center mb-2">Soğuk Zincir</h4>
                    <p class="font-sans text-sm text-center text-white/70">Maksimum Kalite, Kesintisiz Akış.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. COMPANY INFO TABS -->
<section id="markalar" class="py-32 bg-[#111111] text-[#E8E4DD] relative z-10 border-t border-white/5">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="font-display text-4xl md:text-5xl text-center text-white mb-16 gsap-fade-up">Şirket Bilgileri</h2>
        
        <!-- Tab Controls -->
        <div class="flex flex-wrap md:flex-nowrap gap-3 mb-12 justify-center gsap-fade-up">
            <button class="company-tab-btn flex-1 py-4 px-6 rounded-xl border border-transparent bg-white/5 backdrop-blur hover:bg-white/10 hover:border-white/20 transition-all font-sans text-sm font-medium flex items-center justify-center gap-3 active:scale-95" data-target="tab-genel">
                <?php echo get_lucide_icon('info', 'w-5 h-5'); ?> Genel Bilgiler
            </button>
            <button class="company-tab-btn flex-1 py-4 px-6 rounded-xl border border-transparent bg-white/5 backdrop-blur hover:bg-white/10 hover:border-white/20 transition-all font-sans text-sm font-medium flex items-center justify-center gap-3 active:scale-95" data-target="tab-yonetim">
                <?php echo get_lucide_icon('users', 'w-5 h-5'); ?> Yönetim Kurulu
            </button>
            <button class="company-tab-btn flex-1 py-4 px-6 rounded-xl border border-transparent bg-white/5 backdrop-blur hover:bg-white/10 hover:border-white/20 transition-all font-sans text-sm font-medium flex items-center justify-center gap-3 active:scale-95" data-target="tab-denetci">
                <?php echo get_lucide_icon('shield', 'w-5 h-5'); ?> Denetçi
            </button>
            <button class="company-tab-btn flex-1 py-4 px-6 rounded-xl border border-transparent bg-white/5 backdrop-blur hover:bg-white/10 hover:border-white/20 transition-all font-sans text-sm font-medium flex items-center justify-center gap-3 active:scale-95" data-target="tab-belge">
                <?php echo get_lucide_icon('file-text', 'w-5 h-5'); ?> Belge Görüntüleme
            </button>
        </div>

        <!-- Tab Contents Container -->
        <div id="tabs-wrapper" class="relative border border-white/10 rounded-3xl bg-white/[0.02] overflow-hidden" style="transition: height 0.5s cubic-bezier(0.4, 0, 0.2, 1);">
            
            <!-- Tab 01: Genel Bilgiler -->
            <div id="tab-genel" class="tab-content w-full absolute top-0 left-0 p-8 md:p-12 opacity-0 invisible z-10">
                <h3 class="font-display text-3xl text-white mb-8 border-b border-white/10 pb-4">Şirket Künyesi</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 font-sans text-white/80">
                    <div><span class="text-white/40 block text-xs uppercase tracking-widest mb-1">Ticaret Ünvanı</span>Dem-Tor Gıda Meşrubat Pazarlama ve Dağıtım Ticaret Limited Şirketi</div>
                    <div><span class="text-white/40 block text-xs uppercase tracking-widest mb-1">Merkez Adresi</span>Mimar Sinan Mah. Cendere Yolu No: 49 Eyüpsultan / İstanbul</div>
                    <div><span class="text-white/40 block text-xs uppercase tracking-widest mb-1">Mersis Numarası</span>0274002326400010</div>
                    <div><span class="text-white/40 block text-xs uppercase tracking-widest mb-1">Ticaret Sicil Numarası</span>287680 (İstanbul Ticaret Sicili)</div>
                    <div><span class="text-white/40 block text-xs uppercase tracking-widest mb-1">Vergi Dairesi & Numarası</span>Gaziosmanpaşa - 2740023264</div>
                    <div><span class="text-white/40 block text-xs uppercase tracking-widest mb-1">Ödenmiş Sermaye</span>5.000.000 TL</div>
                </div>
            </div>

            <!-- Tab 02: Yönetim Kurulu -->
            <div id="tab-yonetim" class="tab-content w-full absolute top-0 left-0 p-8 md:p-12 opacity-0 invisible z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Member 1 -->
                    <div class="sleek-box aspect-[3/4] relative group">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Ahmet Torun" class="w-full h-full object-cover filter grayscale contrast-125" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6 text-left">
                            <h4 class="font-display text-2xl text-white mb-1 group-hover:text-white transition-colors">Ahmet Torun</h4>
                            <p class="font-mono text-xs uppercase tracking-widest text-[#D4AF37] opacity-80 group-hover:opacity-100 transition-opacity">Şirket Müdürü / Kurucu Ortak</p>
                        </div>
                    </div>
                    <!-- Member 2 -->
                    <div class="sleek-box aspect-[3/4] relative group">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="Metin Torun" class="w-full h-full object-cover filter grayscale contrast-125" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6 text-left">
                            <h4 class="font-display text-2xl text-white mb-1">Metin Torun</h4>
                            <p class="font-mono text-xs uppercase tracking-widest text-white/60 group-hover:text-[#D4AF37] transition-colors">Şirket Müdürü / Kurucu Ortak</p>
                        </div>
                    </div>
                    <!-- Member 3 -->
                    <div class="sleek-box aspect-[3/4] relative group">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" alt="Sedat Demirhan" class="w-full h-full object-cover filter grayscale contrast-125" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6 text-left">
                            <h4 class="font-display text-2xl text-white mb-1">Sedat Demirhan</h4>
                            <p class="font-mono text-xs uppercase tracking-widest text-white/60 group-hover:text-[#D4AF37] transition-colors">Kurucu Ortak</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 03: Denetçi -->
            <div id="tab-denetci" class="tab-content w-full absolute top-0 left-0 p-8 md:p-12 opacity-0 invisible z-10">
                <h3 class="font-display text-3xl text-white mb-6 border-b border-white/10 pb-4">Denetim Statüsü</h3>
                <p class="font-sans text-lg text-white/70 leading-relaxed max-w-2xl">
                    Şeffaflık ve hesap verilebilirlik ilkelerimiz doğrultusunda, tüm denetim süreçlerimiz uluslararası bağımsız denetim kriterleri çerçevesinde yürütülmekte olup; yasal denetçi bilgilerimize MKK e-ŞİRKET portalı üzerinden kesintisiz erişilebilmektedir.
                </p>
            </div>

            <!-- Tab 04: Belge Görüntüleme -->
            <div id="tab-belge" class="tab-content w-full absolute top-0 left-0 p-8 md:p-12 opacity-0 invisible z-10">
                <h3 class="font-display text-3xl text-white mb-8 border-b border-white/10 pb-4">Dijital Arşiv</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <a href="#" class="sleek-box p-6 bg-white/5 hover:bg-white/10 transition-colors border-white/10 group flex flex-col items-center text-center">
                        <span class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform"><?php echo get_lucide_icon('file-text', 'w-10 h-10'); ?></span>
                        <h4 class="font-display text-xl text-white mb-2">Mali Tablolar</h4>
                        <p class="text-xs text-white/50 uppercase tracking-wide">İncele</p>
                    </a>
                    <a href="#" class="sleek-box p-6 bg-white/5 hover:bg-white/10 transition-colors border-white/10 group flex flex-col items-center text-center">
                        <span class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform"><?php echo get_lucide_icon('file-text', 'w-10 h-10'); ?></span>
                        <h4 class="font-display text-xl text-white mb-2">Genel Kurul İlanları</h4>
                        <p class="text-xs text-white/50 uppercase tracking-wide">İncele</p>
                    </a>
                    <a href="#" class="sleek-box p-6 bg-white/5 hover:bg-white/10 transition-colors border-white/10 group flex flex-col items-center text-center">
                        <span class="text-[#D4AF37] mb-4 group-hover:scale-110 transition-transform"><?php echo get_lucide_icon('file-text', 'w-10 h-10'); ?></span>
                        <h4 class="font-display text-xl text-white mb-2">Ana Sözleşme</h4>
                        <p class="text-xs text-white/50 uppercase tracking-wide">İncele</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 6. CONTACT FORM -->
<section class="py-24 bg-[#E8E4DD] text-[#111111] relative z-10 border-t border-[#111111]/10">
    <div class="max-w-3xl mx-auto px-6 gsap-fade-up">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl md:text-5xl text-[#002366] mb-4">İletişime Geçin</h2>
            <p class="font-sans text-lg text-[#111111]/60">Her türlü soru, görüş ve iş ortaklığı talebiniz için formu doldurabilirsiniz.</p>
        </div>
        
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block font-mono text-xs uppercase tracking-widest text-[#111111]/60 mb-2">İsim Soyisim</label>
                    <input type="text" class="w-full bg-transparent border-b border-[#111111]/20 pb-2 focus:outline-none focus:border-[#D4AF37] transition-colors font-sans text-lg text-[#111111] placeholder-[#111111]/30" placeholder="Adınız" />
                </div>
                <div>
                    <label class="block font-mono text-xs uppercase tracking-widest text-[#111111]/60 mb-2">Firma Adı</label>
                    <input type="text" class="w-full bg-transparent border-b border-[#111111]/20 pb-2 focus:outline-none focus:border-[#D4AF37] transition-colors font-sans text-lg text-[#111111] placeholder-[#111111]/30" placeholder="Firma Ünvanı" />
                </div>
            </div>
            <div>
                <label class="block font-mono text-xs uppercase tracking-widest text-[#111111]/60 mb-2">Mesajınız</label>
                <textarea rows="4" class="w-full bg-transparent border-b border-[#111111]/20 pb-2 focus:outline-none focus:border-[#D4AF37] transition-colors font-sans text-lg text-[#111111] placeholder-[#111111]/30 resize-none" placeholder="Size nasıl yardımcı olabiliriz?"></textarea>
            </div>
            <div class="text-center pt-8">
                <button type="button" class="inline-flex items-center justify-center px-10 py-4 rounded-full bg-[#002366] text-white font-semibold text-lg btn-magnetic transition-colors hover:bg-[#D4AF37] hover:text-black w-full md:w-auto">
                    <span class="relative z-10">Gönder</span>
                </button>
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>
