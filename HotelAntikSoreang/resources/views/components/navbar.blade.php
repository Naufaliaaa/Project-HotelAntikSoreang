<style>
    @keyframes slideDown {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .nav-appear {
        animation: slideDown 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .nav-link {
        position: relative;
        overflow: hidden;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, #4f46e5, #7c3aed);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(-50%);
    }

    .nav-link:hover::before {
        width: 100%;
    }

    .nav-logo {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .nav-logo:hover {
        transform: scale(1.05);
        filter: drop-shadow(0 4px 8px rgba(79, 70, 229, 0.3));
    }

    .book-btn {
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .book-btn::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .book-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .book-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 70, 229, 0.4);
    }

    .navbar-scroll {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.85);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .mobile-menu {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(100%);
        opacity: 0;
    }

    .mobile-menu.active {
        transform: translateX(0);
        opacity: 1;
    }

    .hamburger span {
        display: block;
        width: 26px;
        height: 2px;
        background: #1f2937;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 2px;
    }

    .hamburger.active span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .hamburger.active span:nth-child(2) {
        opacity: 0;
        transform: translateX(20px);
    }

    .hamburger.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }
</style>

<nav class="fixed top-0 w-full z-50 navbar-scroll nav-appear">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3 nav-logo">
                <div class="w-10 h-10 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-xl">A</span>
                </div>
                <div class="flex flex-col -space-y-1">
                    <span class="text-2xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">ANTIK</span>
                    <span class="text-[10px] tracking-[0.3em] text-gray-500 uppercase">Luxury Hotel</span>
                </div>
            </a>

            <!-- Menu Desktop -->
            <ul class="hidden lg:flex items-center space-x-12">
                <li>
                    <a href="/home" class="nav-link text-gray-700 hover:text-indigo-600 transition font-medium tracking-wide">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/rooms" class="nav-link text-gray-700 hover:text-indigo-600 transition font-medium tracking-wide">
                        Rooms
                    </a>
                </li>
                <li>
                    <a href="/facilities" class="nav-link text-gray-700 hover:text-indigo-600 transition font-medium tracking-wide">
                        Facilities
                    </a>
                </li>
                <li>
                    <a href="/contact" class="nav-link text-gray-700 hover:text-indigo-600 transition font-medium tracking-wide">
                        Contact
                    </a>
                </li>
            </ul>

            <!-- CTA Button -->
            <div class="hidden lg:block">
                <a href="/rooms" class="book-btn relative px-8 py-3 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold tracking-wide shadow-lg">
                    <span class="relative z-10">Book Now</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden hamburger focus:outline-none p-2">
                <span class="block mb-1"></span>
                <span class="block mb-1"></span>
                <span class="block"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu lg:hidden fixed top-0 right-0 h-screen w-full bg-white shadow-2xl">
        <div class="flex flex-col h-full">
            <div class="flex justify-between items-center px-6 h-20 border-b">
                <span class="text-xl font-bold text-indigo-600">Menu</span>
                <button id="close-menu-btn" class="hamburger active p-2">
                    <span class="block mb-1"></span>
                    <span class="block mb-1"></span>
                    <span class="block"></span>
                </button>
            </div>
            
            <ul class="flex-1 px-6 py-8 space-y-2">
                <li>
                    <a href="/home" class="block py-4 px-6 text-lg font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-xl transition">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/rooms" class="block py-4 px-6 text-lg font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-xl transition">
                        Rooms
                    </a>
                </li>
                <li>
                    <a href="/facilities" class="block py-4 px-6 text-lg font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-xl transition">
                        Facilities
                    </a>
                </li>
                <li>
                    <a href="/contact" class="block py-4 px-6 text-lg font-medium text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 rounded-xl transition">
                        Contact
                    </a>
                </li>
            </ul>

            <div class="px-6 pb-8">
                <a href="/rooms" class="block text-center px-8 py-4 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold shadow-lg">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeMenuBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            mobileMenuBtn.classList.add('active');
        });

        closeMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            mobileMenuBtn.classList.remove('active');
        });

        // Close menu when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.style.background = 'rgba(255, 255, 255, 0.95)';
                nav.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
            } else {
                nav.style.background = 'rgba(255, 255, 255, 0.85)';
                nav.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.08)';
            }
        });
    });
</script>