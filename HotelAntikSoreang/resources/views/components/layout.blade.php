<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Hotel Antik - Luxury Experience' }}</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts - Luxury Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'luxury-gold': '#D4AF37',
                        'luxury-dark': '#1a1a1a',
                    }
                },
            },
        }
    </script>
    
    <!-- Custom Global Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            overflow-x: hidden;
            background: #ffffff;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #4f46e5 0%, #7c3aed 100%);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #4338ca 0%, #6d28d9 100%);
        }

        /* Page Transition */
        @keyframes pageLoad {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        main {
            animation: pageLoad 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        /* Smooth Image Loading */
        img {
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
        }

        /* Loading Animation */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }

        .page-loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader-content {
            text-align: center;
            color: white;
        }

        .loader-spinner {
            width: 50px;
            height: 50px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Cursor Effect (Optional - Premium Touch) */
        @media (min-width: 1024px) {
            .cursor-dot {
                width: 8px;
                height: 8px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border-radius: 50%;
                position: fixed;
                pointer-events: none;
                z-index: 10000;
                transition: transform 0.2s ease;
                transform: translate(-50%, -50%);
            }

            .cursor-outline {
                width: 30px;
                height: 30px;
                border: 2px solid rgba(102, 126, 234, 0.5);
                border-radius: 50%;
                position: fixed;
                pointer-events: none;
                z-index: 9999;
                transition: all 0.15s ease-out;
                transform: translate(-50%, -50%);
            }

            body:hover .cursor-outline {
                width: 40px;
                height: 40px;
            }

            a:hover ~ .cursor-outline,
            button:hover ~ .cursor-outline {
                width: 50px;
                height: 50px;
                border-color: rgba(124, 58, 237, 0.8);
            }
        }

        /* Selection Color */
        ::selection {
            background: rgba(99, 102, 241, 0.3);
            color: #1f2937;
        }

        /* Parallax Effect Base */
        .parallax-element {
            will-change: transform;
            transition: transform 0.1s ease-out;
        }

        /* Fade In Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Glass Morphism */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Smooth Hover Transitions */
        a, button, .interactive {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Back to Top Button */
        #back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
            box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
        }

        #back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        #back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(102, 126, 234, 0.6);
        }

        /* Preload images for smooth experience */
        body::after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            overflow: hidden;
            z-index: -1;
        }
    </style>
</head>
<body class="font-sans text-gray-800 bg-white antialiased">
    
    <!-- Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-spinner"></div>
            <h2 class="text-2xl font-display font-bold">Hotel Antik</h2>
            <p class="text-sm opacity-80 mt-2">Loading luxury experience...</p>
        </div>
    </div>

    <!-- Custom Cursor (Desktop Only) -->
    <div class="cursor-dot hidden lg:block" id="cursorDot"></div>
    <div class="cursor-outline hidden lg:block" id="cursorOutline"></div>

    <!-- NAVBAR -->
    <x-navbar />

    <!-- PAGE CONTENT -->
    <main class="pt-20">
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <x-footer />

    <!-- Back to Top Button -->
    <div id="back-to-top" title="Back to top">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </div>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            // Page Loader
            const loader = document.getElementById('pageLoader');
            window.addEventListener('load', () => {
                setTimeout(() => {
                    loader.classList.add('hidden');
                }, 500);
            });

            // Initialize AOS
            AOS.init({
                duration: 1000,
                easing: 'ease-out-cubic',
                once: true,
                offset: 100,
                delay: 50,
            });

            // Custom Cursor (Desktop)
            if (window.innerWidth >= 1024) {
                const cursorDot = document.getElementById('cursorDot');
                const cursorOutline = document.getElementById('cursorOutline');

                document.addEventListener('mousemove', (e) => {
                    cursorDot.style.left = e.clientX + 'px';
                    cursorDot.style.top = e.clientY + 'px';
                    
                    cursorOutline.style.left = e.clientX + 'px';
                    cursorOutline.style.top = e.clientY + 'px';
                });

                // Hide cursor when leaving window
                document.addEventListener('mouseleave', () => {
                    cursorDot.style.opacity = '0';
                    cursorOutline.style.opacity = '0';
                });

                document.addEventListener('mouseenter', () => {
                    cursorDot.style.opacity = '1';
                    cursorOutline.style.opacity = '1';
                });
            }

            // Back to Top Button
            const backToTop = document.getElementById('back-to-top');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            });

            backToTop.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Parallax Effect on Scroll
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.parallax-element');
                
                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    element.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });

            // Lazy Loading Images Enhancement
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.style.opacity = '0';
                            img.style.transition = 'opacity 0.6s ease';
                            
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                            }
                            
                            img.onload = () => {
                                img.style.opacity = '1';
                            };
                            
                            observer.unobserve(img);
                        }
                    });
                });

                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }

            // Add stagger animation to elements
            const staggerElements = document.querySelectorAll('.stagger-item');
            staggerElements.forEach((el, index) => {
                el.style.animationDelay = `${index * 0.1}s`;
            });

            // Performance: Reduce animations on low-end devices
            if (navigator.hardwareConcurrency && navigator.hardwareConcurrency < 4) {
                document.body.classList.add('reduce-motion');
            }
        });

        // Prevent FOUC (Flash of Unstyled Content)
        document.documentElement.style.visibility = 'visible';
    </script>
</body>
</html>