<style>
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .footer-animate {
        animation: fadeInUp 0.8s ease forwards;
    }

    .footer-link {
        position: relative;
        display: inline-block;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .footer-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 1px;
        background: linear-gradient(90deg, #818cf8, #c084fc);
        transition: width 0.3s ease;
    }

    .footer-link:hover::after {
        width: 100%;
    }

    .footer-link:hover {
        transform: translateX(4px);
        color: #c084fc;
    }

    .social-icon {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .social-icon:hover {
        transform: translateY(-4px) scale(1.1);
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    }

    .newsletter-input {
        transition: all 0.3s ease;
    }

    .newsletter-input:focus {
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .subscribe-btn {
        position: relative;
        overflow: hidden;
    }

    .subscribe-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .subscribe-btn:hover::before {
        width: 400px;
        height: 400px;
    }

    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .contact-item {
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        transform: translateX(6px);
        color: #c084fc;
    }

    .footer-divider {
        background: linear-gradient(90deg, transparent, rgba(129, 140, 248, 0.3), transparent);
        height: 1px;
    }
</style>

<footer class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-gray-300 mt-32 overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
    
    <div class="absolute top-20 right-0 w-96 h-96 bg-indigo-600/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-600/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Brand Column -->
            <div class="footer-animate lg:col-span-1">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-2xl">A</span>
                    </div>
                    <div class="flex flex-col -space-y-1">
                        <span class="text-2xl font-bold gradient-text">ANTIK</span>
                        <span class="text-[10px] tracking-[0.3em] text-gray-500 uppercase">Luxury Hotel</span>
                    </div>
                </div>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Menghadirkan pengalaman menginap terbaik dengan sentuhan kemewahan modern dan pelayanan kelas dunia yang tak terlupakan.
                </p>
                <!-- Social Icons -->
                <div class="flex space-x-4">
                    <a href="#" class="social-icon w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.6c-.9.4-1.8.7-2.8.8 1-.6 1.8-1.6 2.2-2.7-1 .6-2 1-3.1 1.2-.9-1-2.2-1.6-3.6-1.6-2.7 0-4.9 2.2-4.9 4.9 0 .4 0 .8.1 1.1C7.7 8.1 4.1 6.1 1.7 3.1c-.4.7-.6 1.6-.6 2.5 0 1.7.9 3.2 2.2 4.1-.8 0-1.6-.2-2.2-.6v.1c0 2.4 1.7 4.4 3.9 4.8-.4.1-.8.2-1.3.2-.3 0-.6 0-.9-.1.6 2 2.4 3.4 4.6 3.4-1.7 1.3-3.8 2.1-6.1 2.1-.4 0-.8 0-1.2-.1 2.2 1.4 4.8 2.2 7.5 2.2 9.1 0 14-7.5 14-14v-.6c1-.7 1.8-1.6 2.5-2.5z"/></svg>
                    </a>
                    <a href="#" class="social-icon w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .4-2.2.4-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1-.4-2.2-.1-1.3-.1-1.6-.1-4.8s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4 1.2-.1 1.6-.1 4.8-.1M12 0C8.7 0 8.3 0 7.1.1 5.8.1 4.9.3 4.1.6c-.8.3-1.5.7-2.2 1.4C1.3 2.6.9 3.3.6 4.1.3 4.9.1 5.8.1 7.1 0 8.3 0 8.7 0 12s0 3.7.1 4.9c.1 1.3.3 2.1.6 2.9.3.8.7 1.5 1.4 2.2.7.7 1.4 1.1 2.2 1.4.8.3 1.7.5 2.9.6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.3-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.2-1.4.7-.7 1.1-1.4 1.4-2.2.3-.8.5-1.7.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.3-.3-2.1-.6-2.9-.3-.8-.7-1.5-1.4-2.2-.7-.7-1.4-1.1-2.2-1.4-.8-.3-1.7-.5-2.9-.6C15.7 0 15.3 0 12 0z"/><path d="M12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zM18.4 4.2c-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4 1.4-.6 1.4-1.4-.6-1.4-1.4-1.4z"/></svg>
                    </a>
                    <a href="#" class="social-icon w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.7 0H1.3C.6 0 0 .6 0 1.3v21.4c0 .7.6 1.3 1.3 1.3h11.5v-9.3H9.7v-3.6h3.1V8.4c0-3.1 1.9-4.8 4.7-4.8 1.3 0 2.5.1 2.8.1v3.3h-1.9c-1.5 0-1.8.7-1.8 1.8v2.3h3.6l-.5 3.6h-3.1V24h6.1c.7 0 1.3-.6 1.3-1.3V1.3c0-.7-.6-1.3-1.3-1.3z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-animate" style="animation-delay: 0.1s">
                <h4 class="text-lg font-bold text-white mb-6 relative inline-block">
                    Quick Links
                    <span class="absolute bottom-0 left-0 w-12 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-500"></span>
                </h4>
                <ul class="space-y-3">
                    <li><a href="/home" class="footer-link">Home</a></li>
                    <li><a href="/rooms" class="footer-link">Rooms & Suites</a></li>
                    <li><a href="/facilities" class="footer-link">Facilities</a></li>
                    <li><a href="/contact" class="footer-link">Contact Us</a></li>
                    <li><a href="#" class="footer-link">About Us</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="footer-animate" style="animation-delay: 0.2s">
                <h4 class="text-lg font-bold text-white mb-6 relative inline-block">
                    Support
                    <span class="absolute bottom-0 left-0 w-12 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-500"></span>
                </h4>
                <ul class="space-y-3">
                    <li><a href="#" class="footer-link">FAQ</a></li>
                    <li><a href="#" class="footer-link">Privacy Policy</a></li>
                    <li><a href="#" class="footer-link">Terms & Conditions</a></li>
                    <li><a href="#" class="footer-link">Cancellation Policy</a></li>
                    <li><a href="#" class="footer-link">Sitemap</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-animate" style="animation-delay: 0.3s">
                <h4 class="text-lg font-bold text-white mb-6 relative inline-block">
                    Contact Info
                    <span class="absolute bottom-0 left-0 w-12 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-500"></span>
                </h4>
                <ul class="space-y-4">
                    <li class="contact-item flex items-start space-x-3">
                        <svg class="w-5 h-5 text-indigo-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-gray-400">Soreang, Bandung<br>West Java, Indonesia</span>
                    </li>
                    <li class="contact-item flex items-center space-x-3">
                        <svg class="w-5 h-5 text-indigo-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:info@hotelantik.com" class="text-gray-400 hover:text-purple-400">info@hotelantik.com</a>
                    </li>
                    <li class="contact-item flex items-center space-x-3">
                        <svg class="w-5 h-5 text-indigo-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+628123456789" class="text-gray-400 hover:text-purple-400">+62 812 3456 7890</a>
                    </li>
                    <li class="contact-item flex items-center space-x-3">
                        <svg class="w-5 h-5 text-indigo-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-gray-400">24/7 Available</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="footer-animate border-t border-gray-800 pt-12 mb-12" style="animation-delay: 0.4s">
            <div class="max-w-2xl mx-auto text-center">
                <h3 class="text-2xl font-bold text-white mb-3">Stay Updated</h3>
                <p class="text-gray-400 mb-6">Subscribe to our newsletter for exclusive offers and updates</p>
                <form class="flex flex-col sm:flex-row gap-3 justify-center">
                    <input 
                        type="email" 
                        placeholder="Enter your email address" 
                        class="newsletter-input flex-1 max-w-md px-6 py-3 rounded-full bg-gray-800/50 border border-gray-700 text-white placeholder-gray-500 focus:outline-none focus:border-indigo-500"
                    >
                    <button type="submit" class="subscribe-btn relative px-8 py-3 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold hover:shadow-lg hover:shadow-indigo-500/50 transition">
                        <span class="relative z-10">Subscribe</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-divider mb-8"></div>
        <div class="footer-animate flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-sm text-gray-500" style="animation-delay: 0.5s">
            <p>© {{ date('Y') }} Hotel Antik Soreang. All rights reserved.</p>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-purple-400 transition">Privacy</a>
                <a href="#" class="hover:text-purple-400 transition">Terms</a>
                <a href="#" class="hover:text-purple-400 transition">Cookies</a>
            </div>
        </div>
    </div>
</footer>