<x-layout title="Welcome to Hotel Antik">
    <style>
        @keyframes heroWelcome {
            0% {
                opacity: 0;
                transform: scale(1.15);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: translateY(60px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .hero-welcome { animation: heroWelcome 1.8s ease-out; }
        .welcome-title { animation: textReveal 1s ease-out 0.4s both; }
        .welcome-subtitle { animation: textReveal 1s ease-out 0.7s both; }
        .welcome-cta { animation: textReveal 1s ease-out 1s both; }
        .feature-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(135deg, #f9fafb 0%, #ede9fe 100%);
        }
        .feature-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(79, 70, 229, 0.2);
        }
    </style>

    {{-- HERO --}}
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/20 via-purple-900/10 to-black/20"></div>
        <div class="absolute inset-0 bg-[url('{{ asset('img/main-foto.png') }}')] bg-cover bg-center hero-welcome"></div>

        <div class="relative z-20 text-center text-white px-6 max-w-4xl mx-auto">
            <h1 class="welcome-title text-5xl md:text-7xl lg:text-[5rem] font-display font-black mb-6 leading-tight drop-shadow-2xl">
                Welcome to
                <span class="block bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-500 bg-clip-text text-transparent drop-shadow-2xl">
                    Hotel Antik
                </span>
            </h1>
            <p class="welcome-subtitle text-xl md:text-2xl lg:text-3xl mb-12 max-w-3xl mx-auto opacity-95 font-light leading-relaxed drop-shadow-xl">
                Experience luxury redefined in the heart of Soreang
            </p>
            <div class="welcome-cta flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/home" class="px-12 py-6 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold text-xl rounded-full shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300">
                    Explore Now
                </a>
                <a href="/rooms" class="px-12 py-6 border-2 border-white text-white font-bold text-xl rounded-full hover:bg-white hover:text-indigo-600 transition-all duration-300">
                    View Rooms
                </a>
            </div>
        </div>
    </section>

    {{-- FEATURES PREVIEW --}}
    <section class="py-32 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-20">
                <span class="inline-block px-6 py-3 bg-indigo-100 text-indigo-700 rounded-full text-sm font-bold mb-6">PREVIEW</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6">Discover Luxury Awaits</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">A glimpse of what makes Hotel Antik extraordinary</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="feature-card p-10 rounded-3xl text-center group cursor-pointer">
                    <div class="w-24 h-24 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-3xl flex items-center justify-center mx-auto mb-6 text-3xl group-hover:scale-110 transition-transform">
                        🏨
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-indigo-600">50+ Luxury Rooms</h3>
                    <p class="text-gray-600">From Deluxe to Presidential Suites with premium amenities</p>
                </div>
                <div class="feature-card p-10 rounded-3xl text-center group cursor-pointer">
                    <div class="w-24 h-24 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-3xl flex items-center justify-center mx-auto mb-6 text-3xl group-hover:scale-110 transition-transform">
                        🍽️
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-emerald-600">Fine Dining</h3>
                    <p class="text-gray-600">World-class cuisine by award-winning chefs</p>
                </div>
                <div class="feature-card p-10 rounded-3xl text-center group cursor-pointer">
                    <div class="w-24 h-24 bg-gradient-to-br from-amber-500 to-orange-500 rounded-3xl flex items-center justify-center mx-auto mb-6 text-3xl group-hover:scale-110 transition-transform">
                        💆
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900 group-hover:text-amber-600">Spa & Wellness</h3>
                    <p class="text-gray-600">Ultimate relaxation with traditional & modern therapies</p>
                </div>
            </div>

            <div class="text-center mt-20">
                <a href="/home" class="inline-flex items-center gap-3 px-12 py-6 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white font-bold text-xl rounded-full shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300">
                    Enter Luxury World
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-layout>

