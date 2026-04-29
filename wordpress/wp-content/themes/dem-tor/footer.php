<?php
/**
 * The template for displaying the footer
 */
?>
    <footer id="iletisim" class="bg-gradient-to-tr from-[#11C6DB] from-[-10%] to-[#e7e2d6] to-70% md:bg-none md:bg-[#DFDAD0] text-[#111111] pt-0 pb-8 md:pb-12 relative overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-0 md:px-6 relative z-10">
            <!-- Modern Light-Gradient Box on Beige Background (No Stroke) -->
            <div class="stat-card md:bg-gradient-to-tr md:from-[#11C6DB] md:from-[-10%] md:to-[#e7e2d6] md:to-70% rounded-none md:rounded-[3rem] pt-16 pb-0 px-6 md:p-14 mb-8 md:mb-12 shadow-none md:shadow-2xl md:shadow-[#11C6DB]/20 flex flex-col justify-end items-center md:items-start relative overflow-hidden group">
                
                <!-- Operational Waves (from Stats Section) -->
                <svg class="absolute inset-0 w-full h-full text-white/20 pointer-events-none z-0" preserveAspectRatio="none" viewBox="0 0 100 100">
                    <path fill="currentColor" class="transition-transform duration-1000 ease-out origin-bottom group-hover:scale-y-[1.10] group-hover:scale-x-105" d="M0,60 C30,30 50,80 100,40 L100,100 L0,100 Z" />
                    <path fill="currentColor" opacity="0.5" class="transition-transform duration-[1200ms] ease-out origin-bottom group-hover:scale-y-[1.05] group-hover:scale-x-102" d="M0,80 C40,50 70,90 100,60 L100,100 L0,100 Z" />
                </svg>

                <!-- Inner Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 relative z-10 w-full">
                    <!-- Left Side: Conversion & Branding -->
                    <div class="flex flex-col items-center md:items-start justify-center text-center md:text-left">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block group hover-lift mb-6 md:mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/demtor-logo-sm.png" alt="Dem-Tor Logo" class="h-14 md:h-10 w-auto object-contain transition-all duration-300" />
                        </a>
                        <h3 class="font-sans text-xl md:text-xl font-bold tracking-wide text-[#004562] mb-2">Dem-Tor Gıda Meşrubat Dağıtım Ltd.Şti.</h3>
                        <p class="font-mono text-[#004562]/60 text-xs md:text-sm uppercase tracking-widest mb-4 md:mb-10">1992'den Beri Güvenle.</p>
                        
                        <!-- Sophisticated Contact Design (Clean Version) -->
                        <div class="relative mt-4 md:mt-8 pl-0 md:pl-12 space-y-8 md:space-y-6 max-w-[320px] mx-auto md:mx-0 w-full text-center md:text-left">
                            
                            <!-- Address Item -->
                            <div class="relative flex flex-col md:flex-row items-center md:items-start group">
                                <div class="md:absolute md:-left-[64px] md:top-0.5 flex items-center justify-center w-10 h-10 bg-[#e7e2d6]/50 rounded-xl shadow-sm border border-[#111111]/5 text-[#004562] mb-3 md:mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#004562" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                </div>
                                <span class="text-[#004562] font-sans text-lg font-bold leading-relaxed text-center md:text-left">Mimar Sinan Mah. Cendere Yolu. No: 49 Eyüpsultan / İstanbul</span>
                            </div>
                            
                            <!-- Phone Item -->
                            <div class="relative flex flex-col md:flex-row items-center group">
                                <div class="md:absolute md:-left-[64px] md:top-1/2 md:-translate-y-1/2 flex items-center justify-center w-10 h-10 bg-[#e7e2d6]/50 rounded-xl shadow-sm border border-[#111111]/5 text-[#004562] mb-3 md:mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#004562" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                                <a href="tel:+902122897317" class="text-[#004562] font-sans text-lg font-bold hover:opacity-70 transition-opacity tracking-tight">+90 212 289 73 17</a>
                            </div>

                            <!-- Email Item -->
                            <div class="relative flex flex-col md:flex-row items-center group">
                                <div class="md:absolute md:-left-[64px] md:top-1/2 md:-translate-y-1/2 flex items-center justify-center w-10 h-10 bg-[#e7e2d6]/50 rounded-xl shadow-sm border border-[#111111]/5 text-[#004562] mb-3 md:mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#004562" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                </div>
                                <a href="mailto:info@dem-tor.com.tr" class="text-[#004562] font-sans text-lg font-bold hover:opacity-70 transition-opacity">info@dem-tor.com.tr</a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Google Map Box Component -->
                    <div class="h-[350px] md:h-[420px] w-screen relative left-1/2 -translate-x-1/2 md:w-full md:static md:translate-x-0 rounded-none md:rounded-[2rem] overflow-hidden p-0 md:p-1.5 group md:bg-white/20 border-y md:border md:border-white/30 md:shadow-inner md:backdrop-blur-sm mt-8 md:mt-0">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.8286940828277!2d28.940540076595568!3d41.07282671545624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab65d6a2f8c5f%3A0xc6cf6d4db7a9d20c!2sMimar%20Sinan%2C%20Cendere%20Yolu%20Cd.%20No%3A49%2C%2034075%20Ey%C3%BCpsultan%2F%C4%B0stanbul!5e0!3m2!1sen!2str!4v1709641151614!5m2!1sen!2str" 
                            width="100%" 
                            height="100%" 
                            style="border:0; filter: grayscale(100%) contrast(1.1) brightness(0.9);" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="relative z-0 w-full h-full object-cover transition-all duration-700 group-hover:filter-none md:rounded-[1.75rem]">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar: Minimalist & Very Faint Gray on Beige -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 px-6 font-mono text-[10px] md:text-xs text-[#111111]/40 md:text-[#111111]/20 uppercase tracking-[0.2em] text-center md:text-left">
                <p>&copy; <?php echo date('Y'); ?> Dem-Tor Logistics. All Rights Reserved.</p>
                <p>Designed with Precision.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>

    <!-- Interactions & Animations Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            gsap.registerPlugin(ScrollTrigger);

            // --- Initialize Lenis Smooth Scroll ---
            const lenis = new Lenis({
                duration: 1.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                direction: 'vertical',
                gestureDirection: 'vertical',
                smooth: true,
                mouseMultiplier: 1,
                smoothTouch: false,
                touchMultiplier: 2,
                infinite: false,
            });

            // Sync Lenis with GSAP ScrollTrigger
            lenis.on('scroll', ScrollTrigger.update);
            gsap.ticker.add((time) => {
                lenis.raf(time * 1000);
            });
            gsap.ticker.lagSmoothing(0);
            // --- Initialize Media Carousel (Swiper) ---
            if(typeof Swiper !== 'undefined') {
                new Swiper('.media-carousel', {
                    slidesPerView: 'auto',
                    spaceBetween: 12,
                    loop: true,
                    loopAdditionalSlides: 5,
                    loopedSlides: 10,
                    freeMode: true,
                    speed: 7000,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                    },
                    grabCursor: true,
                });
            }

            // --- Initialize GLightbox ---
            if(typeof GLightbox !== 'undefined') {
                const lightbox = GLightbox({
                    selector: '.glightbox',
                    touchNavigation: true,
                    loop: true,
                    autoplayVideos: true
                });
            }

            const ctx = gsap.context(() => {
                
                // --- 1. Navbar Morphing Logic ---
                const header = document.getElementById('site-header');
                const navLogo = document.getElementById('nav-logo');
                const navLinks = document.querySelectorAll('.nav-link');
                const navCtaText = document.getElementById('nav-cta-text');
                const mobileBtn = document.getElementById('mobile-menu-btn');

                ScrollTrigger.create({
                    start: "top -100",
                    end: 99999,
                    toggleClass: {className: "scrolled", targets: header},
                    onUpdate: (self) => {
                        if(self.progress > 0 && !header.classList.contains('bg-white/70')) {
                            // Apply new semi-transparent glass style
                            header.classList.add('bg-white/70', 'backdrop-blur-xl', 'shadow-2xl', 'border-white/20');
                            header.classList.remove('border-transparent');
                            
                            // Logo to original colors
                            if(navLogo) navLogo.classList.remove('brightness-0', 'invert');
                            
                            // Links to black
                            navLinks.forEach(l => {
                                l.classList.remove('text-white/80', 'hover:text-white');
                                l.classList.add('text-black/70', 'hover:text-black');
                            });

                            // Right text to black
                            if(navCtaText) {
                                navCtaText.classList.remove('text-[#11C6DB]', 'text-white/90');
                                navCtaText.classList.add('text-black');
                            }

                            mobileBtn.classList.remove('text-white');
                            mobileBtn.classList.add('text-black');
                        } else if(self.progress === 0) {
                            // Revert to original (Transparent, white text)
                            header.classList.remove('bg-white/70', 'backdrop-blur-xl', 'shadow-2xl', 'border-white/20');
                            header.classList.add('border-transparent');
                            
                            // Logo to white
                            if(navLogo) navLogo.classList.add('brightness-0', 'invert');
                            
                            // Links to white
                            navLinks.forEach(l => {
                                l.classList.add('text-white/80', 'hover:text-white');
                                l.classList.remove('text-black/70', 'hover:text-black');
                            });

                            // Right text to white
                            if(navCtaText) {
                                navCtaText.classList.add('text-white/90');
                                navCtaText.classList.remove('text-black');
                            }

                            mobileBtn.classList.add('text-white');
                            mobileBtn.classList.remove('text-black');
                        }
                    }
                });

                // --- 2. Global Fade Up Animations ---
                const fadeUpElements = gsap.utils.toArray('.gsap-fade-up');
                fadeUpElements.forEach((el, i) => {
                    gsap.fromTo(el, 
                        { y: 40, opacity: 0 },
                        {
                            y: 0,
                            opacity: 1,
                            duration: 1.2,
                            ease: "power3.out",
                            scrollTrigger: {
                                trigger: el,
                                start: "top 85%",
                                toggleActions: "play none none none"
                            }
                        }
                    );
                });

                // --- 3. Staggered Stat Cards ---
                gsap.fromTo('.stat-card', 
                    { y: 30, opacity: 0 },
                    {
                        y: 0,
                        opacity: 1,
                        stagger: 0.15,
                        duration: 1,
                        ease: "power3.out",
                        scrollTrigger: {
                            trigger: '#stats-container',
                            start: "top 80%",
                        }
                    }
                );

            }); // End Context

            // Tab Component Logic
            const tabs = document.querySelectorAll('.company-tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');
            const tabsWrapper = document.getElementById('tabs-wrapper');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const targetId = tab.getAttribute('data-target');
                    const newContent = document.getElementById(targetId);
                    
                    // Reset Active Tabs
                    tabs.forEach(t => t.classList.remove('tab-active', 'border-white/30'));
                    tabs.forEach(t => t.classList.add('border-transparent', 'hover:border-white/20'));
                    
                    tab.classList.add('tab-active', 'border-white/30');
                    tab.classList.remove('border-transparent', 'hover:border-white/20');

                    // Set dynamic height for wrapper
                    if (tabsWrapper && newContent) {
                        tabsWrapper.style.height = newContent.offsetHeight + 'px';
                    }

                    // Animation Logic
                    tabContents.forEach(content => {
                        if (content.id === targetId) {
                            content.style.zIndex = 20;
                            gsap.fromTo(content, 
                                { y: 20, autoAlpha: 0 }, 
                                { y: 0, autoAlpha: 1, duration: 0.5, delay: 0.15, ease: "power2.out", overwrite: "auto" }
                            );

                            // Trigger specific internal animations
                            if (targetId === 'tab-yonetim') {
                                gsap.fromTo(content.querySelectorAll('.sleek-box'),
                                    { y: 20, opacity: 0 },
                                    { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out", delay: 0.35, overwrite: "auto" }
                                );
                            }
                        } else {
                            // Only animate out if it is currently visible
                            if(gsap.getProperty(content, "visibility") !== "hidden" && gsap.getProperty(content, "opacity") > 0) {
                                content.style.zIndex = 10;
                                gsap.to(content, {
                                    y: -20, 
                                    autoAlpha: 0, 
                                    duration: 0.2, 
                                    ease: "power2.in",
                                    overwrite: "auto"
                                });
                            }
                        }
                    });
                });
            });

            // Initialize first tab
            if(tabs.length > 0) tabs[0].click();

            // Handle window resize for dynamic height
            window.addEventListener('resize', () => {
                const activeTab = document.querySelector('.company-tab-btn.tab-active');
                if (activeTab && tabsWrapper) {
                    const activeContent = document.getElementById(activeTab.getAttribute('data-target'));
                    if (activeContent) tabsWrapper.style.height = activeContent.offsetHeight + 'px';
                }
            });

            // --- Mobile Menu Logic (GSAP) ---
            const mobileOverlay = document.getElementById('mobile-menu-overlay');
            const mobileBtnOpen = document.getElementById('mobile-menu-btn');
            const mobileBtnClose = document.getElementById('mobile-menu-close');
            const mobileLinksMenu = document.querySelectorAll('.mobile-nav-link');
            const menuFooter = document.getElementById('mobile-menu-footer');

            if(mobileBtnOpen && mobileOverlay && mobileBtnClose) {
                // Initial sets for animation
                gsap.set(mobileLinksMenu, { y: 30, opacity: 0 });
                gsap.set(menuFooter, { y: 20, opacity: 0 });

                const tlMenu = gsap.timeline({ 
                    paused: true, 
                    onReverseComplete: () => mobileOverlay.classList.add('hidden') 
                });
                
                tlMenu.to(mobileOverlay, { y: "0%", duration: 0.7, ease: "power4.inOut" })
                      .to(mobileLinksMenu, { y: 0, opacity: 1, stagger: 0.1, duration: 0.5, ease: "power3.out" }, "-=0.3")
                      .to(menuFooter, { y: 0, opacity: 1, duration: 0.5, ease: "power3.out" }, "-=0.4");

                mobileBtnOpen.addEventListener('click', () => {
                    mobileOverlay.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    tlMenu.play();
                });

                const closeMenu = () => {
                    document.body.style.overflow = '';
                    tlMenu.reverse();
                };

                mobileBtnClose.addEventListener('click', closeMenu);

                mobileLinksMenu.forEach(link => {
                    link.addEventListener('click', closeMenu);
                });
            }

            return () => ctx.revert(); // Cleanup GSAP on unmount/reload
        });
    </script>
</body>
</html>
