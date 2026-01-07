<x-layout>
    <style>
        @keyframes heroFadeIn {
            0% {
                opacity: 0;
                transform: scale(1.1);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .hero-bg {
            animation: heroFadeIn 2s ease-out;
        }

        .hero-text {
            animation: textReveal 1s ease-out 0.3s both;
        }

        .hero-text-2 {
            animation: textReveal 1s ease-out 0.6s both;
        }

        .hero-cta {
            animation: textReveal 1s ease-out 0.9s both;
        }

        .room-card {
            position: relative;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .room-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .room-card:hover::before {
            opacity: 1;
        }

        .room-image {
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .room-card:hover .room-image {
            transform: scale(1.1);
        }

        .facility-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .facility-card:hover {
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.2);
        }

        .facility-icon {
            transition: all 0.4s ease;
            filter: grayscale(0.3);
        }

        .facility-card:hover .facility-icon {
            transform: rotate(10deg) scale(1.2);
            filter: grayscale(0);
        }

        .testimonial-card {
            transition: all 0.4s ease;
            background: linear-gradient(135deg, #ffffff 0%, #f9fafb 100%);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, #ffffff 0%, #ede9fe 100%);
        }

        .cta-button {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .cta-button::before {
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

        .cta-button:hover::before {
            width: 400px;
            height: 400px;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(79, 70, 229, 0.4);
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }

        .scroll-indicator {
            animation: float 2s ease-in-out infinite;
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .room-card:hover .image-overlay {
            opacity: 1;
        }

        .gradient-overlay {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.9) 0%, rgba(124, 58, 237, 0.9) 100%);
        }
    </style>

    {{-- HERO SECTION --}}
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <img
            src="{{ asset('img/main-foto.png') }}"
            class="absolute inset-0 w-full h-full object-cover hero-bg"
            alt="Hotel Antik Luxury"
        >
        <div class="absolute inset-0 gradient-overlay"></div>

        <div class="relative z-10 text-center text-white px-6 max-w-5xl mx-auto">
            <h1 class="hero-text text-5xl md:text-7xl font-display font-bold mb-6 leading-tight">
                Experience Ultimate
                <span class="block gradient-text-light">Luxury & Comfort</span>
            </h1>
            <p class="hero-text-2 text-lg md:text-2xl mb-12 max-w-3xl mx-auto opacity-95 font-light leading-relaxed">
                Nikmati kemewahan modern dengan sentuhan klasik yang elegan. Setiap momen adalah kenangan berharga.
            </p>
            <div class="hero-cta flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/rooms" class="cta-button relative px-10 py-4 rounded-full bg-white text-indigo-600 font-bold text-lg shadow-2xl hover:bg-opacity-95">
                    <span class="relative z-10">Explore Rooms</span>
                </a>
                <a href="/contact" class="px-10 py-4 rounded-full border-2 border-white text-white font-semibold text-lg hover:bg-white hover:text-indigo-600 transition">
                    Contact Us
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 scroll-indicator">
            <svg class="w-6 h-6 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    {{-- ABOUT SECTION --}}
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div class="relative">
                        <img
                            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070"
                            alt="Hotel Interior"
                            class="rounded-3xl shadow-2xl w-full"
                        >
                        <div class="absolute -bottom-8 -right-8 w-72 h-72 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-3xl -z-10"></div>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="section-title text-4xl md:text-5xl font-display font-bold mb-8 text-gray-900">
                        Tentang Hotel Kami
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-6">
                        Hotel Antik bukan sekadar tempat menginap, melainkan destinasi kemewahan yang memadukan keanggunan modern dengan kehangatan tradisional. Setiap sudut dirancang untuk memberikan pengalaman tak terlupakan.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Dengan fasilitas premium, pelayanan kelas dunia, dan interior eksklusif, kami berkomitmen menjadikan setiap kunjungan Anda istimewa.
                    </p>
                    <a href="/facilities" class="inline-flex items-center text-indigo-600 font-semibold text-lg hover:gap-3 gap-2 transition-all">
                        Explore Facilities
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ROOMS PREVIEW --}}
    <section class="py-32 bg-gradient-to-br from-gray-50 to-indigo-50/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title text-4xl md:text-5xl font-display font-bold mb-6 text-gray-900">
                    Pilihan Kamar Eksklusif
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Setiap kamar dirancang dengan perhatian detail untuk kenyamanan maksimal Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ([
                    [
                        'title' => 'Deluxe Room',
                        'price' => 'Rp 1.200.000',
                        'img' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511?q=80&w=2070',
                        'features' => ['King Bed', 'City View', '35m²']
                    ],
                    [
                        'title' => 'Executive Suite',
                        'price' => 'Rp 1.800.000',
                        'img' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=2070',
                        'features' => ['Living Room', 'Premium View', '55m²']
                    ],
                    [
                        'title' => 'Presidential Suite',
                        'price' => 'Rp 3.500.000',
                        'img' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=2070',
                        'features' => ['Private Terrace', 'Butler Service', '100m²']
                    ],
                ] as $i => $room)
                <div class="room-card bg-white rounded-3xl overflow-hidden shadow-xl" data-aos="fade-up" data-aos-delay="{{ 100 * $i }}">
                    <div class="relative overflow-hidden h-72">
                        <img
                            src="{{ $room['img'] }}"
                            alt="{{ $room['title'] }}"
                            class="room-image w-full h-full object-cover"
                        >
                        <div class="image-overlay"></div>
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full">
                            <span class="text-indigo-600 font-bold text-sm">{{ $room['price'] }}/malam</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <h3 class="text-2xl font-display font-bold mb-4 text-gray-900">
                            {{ $room['title'] }}
                        </h3>

                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach($room['features'] as $feature)
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-full text-sm font-medium">
                                {{ $feature }}
                            </span>
                            @endforeach
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="/rooms" class="text-indigo-600 font-semibold hover:gap-2 gap-1 inline-flex items-center transition-all">
                                View Details
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                            <a href="/contact" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full font-semibold hover:shadow-lg transition">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12" data-aos="fade-up">
                <a href="/rooms" class="cta-button relative inline-block px-10 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full font-bold text-lg shadow-xl">
                    <span class="relative z-10">View All Rooms</span>
                </a>
            </div>
        </div>
    </section>

    {{-- FACILITIES HIGHLIGHT --}}
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title text-4xl md:text-5xl font-display font-bold mb-6 text-gray-900">
                    Fasilitas Premium
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Dilengkapi dengan fasilitas terbaik untuk kenyamanan Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ([
                    ['icon' => '🏊', 'title' => 'Infinity Pool', 'desc' => 'Kolam renang dengan pemandangan kota'],
                    ['icon' => '🍽️', 'title' => 'Fine Dining', 'desc' => 'Restoran dengan chef bintang 5'],
                    ['icon' => '💆', 'title' => 'Luxury Spa', 'desc' => 'Spa & wellness center premium'],
                    ['icon' => '🏋️', 'title' => 'Fitness Center', 'desc' => 'Gym dengan peralatan modern']
                ] as $j => $feat)
                <div class="facility-card bg-gradient-to-br from-gray-50 to-indigo-50/50 p-8 rounded-3xl text-center shadow-lg hover:shadow-2xl" data-aos="flip-left" data-aos-delay="{{ 100 * $j }}">
                    <div class="facility-icon text-6xl mb-6">{{ $feat['icon'] }}</div>
                    <h4 class="text-xl font-bold mb-3 text-gray-900">{{ $feat['title'] }}</h4>
                    <p class="text-gray-600">{{ $feat['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- TESTIMONIALS --}}
    <section class="py-32 bg-gradient-to-br from-indigo-50 to-purple-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="section-title text-4xl md:text-5xl font-display font-bold mb-6 text-gray-900">
                    Guest Reviews
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Apa kata tamu kami tentang pengalaman menginap di Hotel Antik
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ([
                    ['name' => 'Sarah Johnson', 'role' => 'Business Traveler', 'review' => 'Pengalaman menginap terbaik! Pelayanan luar biasa dan kamar yang sangat nyaman. Highly recommended!', 'rating' => 5],
                    ['name' => 'Michael Chen', 'role' => 'Honeymoon Guest', 'review' => 'Perfect untuk honeymoon kami. Suasana romantis, fasilitas lengkap, dan staf yang sangat membantu.', 'rating' => 5],
                    ['name' => 'Amanda Wilson', 'role' => 'Leisure Traveler', 'review' => 'Hotel yang sangat indah dengan desain interior yang memukau. Spa-nya amazing!', 'rating' => 5]
                ] as $k => $test)
                <div class="testimonial-card rounded-3xl p-8 shadow-lg" data-aos="fade-up" data-aos-delay="{{ 100 * $k }}">
                    <div class="flex mb-4">
                        @for($i = 0; $i < $test['rating']; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">"{{ $test['review'] }}"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            {{ substr($test['name'], 0, 1) }}
                        </div>
                        <div>
                            <h5 class="font-bold text-gray-900">{{ $test['name'] }}</h5>
                            <p class="text-sm text-gray-500">{{ $test['role'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="py-32 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-6" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
                Siap Memulai Pengalaman Mewah Anda?
            </h2>
            <p class="text-xl mb-10 opacity-95 leading-relaxed">
                Pesan kamar favorit Anda sekarang dan rasakan kemewahan yang tak terlupakan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/rooms" class="cta-button relative px-10 py-4 bg-white text-indigo-600 rounded-full font-bold text-lg shadow-2xl">
                    <span class="relative z-10">Book Your Stay</span>
                </a>
                <a href="/contact" class="px-10 py-4 border-2 border-white rounded-full font-semibold text-lg hover:bg-white hover:text-indigo-600 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
</x-layout>