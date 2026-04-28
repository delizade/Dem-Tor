<?php
/**
 * The template for displaying the footer
 */
?>
    <footer id="iletisim" class="bg-[#111111] text-[#E8E4DD] pt-24 pb-12 relative overflow-hidden border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-16">
                <!-- Left Side: Conversion & Branding -->
                <div class="flex flex-col items-start justify-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-4 group hover-lift mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/demtor-logo-sm.png" alt="Dem-Tor Logo" class="h-14 w-auto object-contain brightness-0 invert" />
                        <span class="font-display text-3xl tracking-tight text-white">DEM-TOR</span>
                    </a>
                    <h3 class="font-sans text-2xl font-light tracking-wide text-white/90 mb-2">DEM-TOR Gıda Meşrubat</h3>
                    <p class="font-mono text-[#D4AF37] text-sm uppercase tracking-widest mb-8">1992'den beri güvenle.</p>
                    
                    <div class="space-y-4 text-white/70 font-sans font-light">
                        <p class="flex items-start gap-3">
                            <span class="mt-1 text-[#D4AF37]"><?php echo get_lucide_icon('info', 'w-5 h-5'); ?></span>
                            <span>Mimar Sinan Mah. Cendere Yolu.<br/>No: 49 Eyüpsultan / İstanbul Türkiye</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <span class="text-[#D4AF37]"><?php echo get_lucide_icon('info', 'w-5 h-5'); ?></span>
                            <span>+90 212 289 73 17 (18-19)</span>
                        </p>
                        <p class="flex items-center gap-3">
                            <span class="text-[#D4AF37]"><?php echo get_lucide_icon('info', 'w-5 h-5'); ?></span>
                            <span>info@dem-tor.com.tr</span>
                        </p>
                    </div>
                </div>

                <!-- Right Side: Google Map Box Component -->
                <div class="h-[400px] sleek-box rounded-3xl overflow-hidden p-2 relative group border border-white/10 bg-white/5">
                    <div class="absolute inset-0 bg-[#002366]/20 mix-blend-overlay z-10 pointer-events-none transition-opacity group-hover:opacity-0"></div>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.8286940828277!2d28.940540076595568!3d41.07282671545624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab65d6a2f8c5f%3A0xc6cf6d4db7a9d20c!2sMimar%20Sinan%2C%20Cendere%20Yolu%20Cd.%20No%3A49%2C%2034075%20Ey%C3%BCpsultan%2F%C4%B0stanbul!5e0!3m2!1sen!2str!4v1709641151614!5m2!1sen!2str" 
                        width="100%" 
                        height="100%" 
                        style="border:0; border-radius: 1.25rem; filter: grayscale(100%) contrast(1.2) brightness(0.8);" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="relative z-0">
                    </iframe>
                </div>
            </div>

            <!-- Bottom -->
            <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4 font-mono text-xs text-white/40 uppercase tracking-widest">
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

            const ctx = gsap.context(() => {
                
                // --- 1. Navbar Morphing Logic ---
                const header = document.getElementById('site-header');
                const navLogoWrapper = document.getElementById('nav-logo');
                const navLogotype = document.getElementById('nav-logotype');
                const navLinks = document.querySelectorAll('.nav-link');
                const navCta = document.getElementById('nav-cta');
                const mobileBtn = document.getElementById('mobile-menu-btn');

                ScrollTrigger.create({
                    start: "top -100",
                    end: 99999,
                    toggleClass: {className: "scrolled", targets: header},
                    onUpdate: (self) => {
                        if(self.progress > 0 && !header.classList.contains('bg-[#002366]/60')) {
                            // Apply morphed state
                            header.classList.add('bg-[#002366]/60', 'backdrop-blur-xl', 'border-white/20', 'shadow-2xl');
                            
                            // Text Colors
                            navLogotype.classList.remove('text-white');
                            navLogotype.classList.add('text-[#D4AF37]');
                            
                            navLinks.forEach(l => {
                                l.classList.remove('text-white/80', 'hover:text-white');
                                l.classList.add('text-white/70', 'hover:text-[#D4AF37]');
                            });

                            navCta.classList.remove('bg-white', 'text-black');
                            navCta.classList.add('bg-[#D4AF37]', 'text-black');
                            
                            mobileBtn.classList.remove('text-white');
                            mobileBtn.classList.add('text-[#D4AF37]');
                        } else if(self.progress === 0) {
                            // Revert to original
                            header.classList.remove('bg-[#002366]/60', 'backdrop-blur-xl', 'border-white/20', 'shadow-2xl');
                            
                            navLogotype.classList.add('text-white');
                            navLogotype.classList.remove('text-[#D4AF37]');

                            navLinks.forEach(l => {
                                l.classList.add('text-white/80', 'hover:text-white');
                                l.classList.remove('text-white/70', 'hover:text-[#D4AF37]');
                            });

                            navCta.classList.add('bg-white', 'text-black');
                            navCta.classList.remove('bg-[#D4AF37]', 'text-black');

                            mobileBtn.classList.add('text-white');
                            mobileBtn.classList.remove('text-[#D4AF37]');
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

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const targetId = tab.getAttribute('data-target');
                    
                    // Reset Active Tabs
                    tabs.forEach(t => t.classList.remove('tab-active', 'border-white/30'));
                    tabs.forEach(t => t.classList.add('border-transparent', 'hover:border-white/20'));
                    
                    tab.classList.add('tab-active', 'border-white/30');
                    tab.classList.remove('border-transparent', 'hover:border-white/20');

                    // Animation Logic
                    tabContents.forEach(content => {
                        if (content.id === targetId) {
                            content.classList.remove('hidden');
                            gsap.fromTo(content, 
                                { y: 20, opacity: 0 }, 
                                { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
                            );

                            // Trigger specific internal animations
                            if (targetId === 'tab-yonetim') {
                                gsap.fromTo(content.querySelectorAll('.sleek-box'),
                                    { y: 20, opacity: 0 },
                                    { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out", delay: 0.2 }
                                );
                            }
                        } else {
                            if(!content.classList.contains('hidden')) {
                                gsap.to(content, {
                                    y: 20, 
                                    opacity: 0, 
                                    duration: 0.4, 
                                    ease: "power2.in",
                                    onComplete: () => content.classList.add('hidden')
                                });
                            }
                        }
                    });
                });
            });

            // Initialize first tab
            if(tabs.length > 0) tabs[0].click();

            return () => ctx.revert(); // Cleanup GSAP on unmount/reload
        });
    </script>
</body>
</html>
