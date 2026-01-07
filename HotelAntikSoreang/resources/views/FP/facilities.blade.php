<x-layout>
    <style>
        @keyframes heroParallax {
            0% {
                transform: scale(1.15) translateY(0);
                opacity: 0;
            }
            100% {
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes contentFadeIn {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes iconFloat {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-15px) rotate(5deg);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }

        .hero-facilities {
            animation: heroParallax 1.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-text-facilities {
            animation: contentFadeIn 1s ease-out 0.4s both;
        }

        .facility-card-main {
            position: relative;
            background: white;
            border-radius: 30px;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .facility-card-main:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 30px 60px rgba(79, 70, 229, 0.2);
        }

        .facility-card-main::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.7s ease;
            z-index: 2;
        }

        .facility-card-main:hover::before {
            left: 100%;
        }

        .facility-image-container {
            position: relative;
            height: 350px;
            overflow: hidden;
        }

        .facility-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .facility-card-main:hover .facility-image {
            transform: scale(1.2) rotate(2deg);
        }

        .facility-gradient-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 1;
        }

        .facility-card-main:hover .facility-gradient-overlay {
            opacity: 1;
        }

        .facility-icon-badge {
            position: absolute;
            top: 24px;
            left: 24px;
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            z-index: 2;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .facility-card-main:hover .facility-icon-badge {
            transform: scale(1.15) rotate(10deg);
            animation: iconFloat 2s ease-in-out infinite;
        }

        .feature-list-item {
            position: relative;
            padding-left: 32px;
            transition: all 0.3s ease;
        }

        .feature-list-item::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 2px;
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .feature-list-item:hover {
            transform: translateX(8px);
            color: #4f46e5;
        }

        .feature-list-item:hover::before {
            transform: scale(1.2) rotate(360deg);
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.4);
        }

        .info-box {
            background: linear-gradient(135deg, #f9fafb 0%, #ede9fe 100%);
            border-radius: 24px;
            padding: 32px;
            transition: all 0.4s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .info-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(79, 70, 229, 0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.6s ease;
        }

        .info-box:hover {
            border-color: #c084fc;
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(124, 58, 237, 0.2);
        }

        .info-box:hover::before {
            left: 100%;
        }

        .stats-card {
            position: relative;
            background: white;
            border-radius: 24px;
            padding: 40px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05));
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .stats-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(79, 70, 229, 0.15);
        }

        .stats-card:hover::before {
            opacity: 1;
        }

        .stats-number {
            font-size: 48px;
            font-weight: 800;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all 0.4s ease;
        }

        .stats-card:hover .stats-number {
            transform: scale(1.15);
            filter: drop-shadow(0 4px 8px rgba(79, 70, 229, 0.3));
        }

        .amenity-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: white;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            color: #4f46e5;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .amenity-tag:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(79, 70, 229, 0.3);
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
        }

        .section-badge {
            display: inline-block;
            padding: 10px 24px;
            background: rgba(79, 70, 229, 0.1);
            border-radius: 30px;
            font-size: 14px;
            font-weight: 700;
            color: #4f46e5;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .cta-facilities {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #ec4899 100%);
        }

        .cta-facilities::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="1200" height="600" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .floating-decorative {
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%);
            animation: float 20s ease-in-out infinite;
        }

        .floating-decorative:nth-child(1) {
            top: -200px;
            left: -200px;
        }

        .floating-decorative:nth-child(2) {
            bottom: -200px;
            right: -200px;
            animation-delay: 5s;
        }

        .floating-decorative:nth-child(3) {
            top: 50%;
            left: 50%;
            animation-delay: 10s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -30px) scale(1.1);
            }
            66% {
                transform: translate(-30px, 30px) scale(0.9);
            }
        }

        .book-facility-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }

        .book-facility-btn::before {
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

        .book-facility-btn:hover::before {
            width: 400px;
            height: 400px;
        }

        .book-facility-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(79, 70, 229, 0.5);
        }

        .image-reveal {
            position: relative;
            overflow: hidden;
        }

        .image-reveal::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.6), transparent);
            transition: left 0.8s ease;
        }

        .image-reveal:hover::after {
            left: 100%;
        }
    </style>

    {{-- HERO SECTION --}}
    <section class="relative h-[70vh] flex items-center justify-center overflow-hidden">
        <img
            src="https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=2070"
            class="hero-facilities absolute inset-0 w-full h-full object-cover"
            alt="Hotel Facilities"
        >
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/90 via-purple-900/85 to-pink-900/90"></div>

        <div class="hero-text-facilities relative z-10 text-center text-white px-6 max-w-5xl mx-auto">
            <span class="section-badge bg-white/20 text-white backdrop-blur-sm">
                WORLD-CLASS AMENITIES
            </span>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight">
                Premium
                <span class="block bg-gradient-to-r from-yellow-300 via-pink-300 to-purple-300 bg-clip-text text-transparent">
                    Hotel Facilities
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-95 font-light leading-relaxed">
                Nikmati fasilitas kelas dunia yang dirancang untuk memberikan pengalaman tak terlupakan
            </p>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white to-transparent"></div>
    </section>

    {{-- MAIN FACILITIES GRID --}}
    <section class="py-32 bg-gradient-to-br from-gray-50 via-white to-purple-50/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="section-badge">EXPLORE OUR FACILITIES</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-gray-900">
                    Fasilitas Unggulan Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Setiap fasilitas dirancang dengan standar internasional untuk memastikan kenyamanan dan kepuasan maksimal
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-10">
                @foreach ([
                    [
                        'icon' => '🏊',
                        'title' => 'Infinity Swimming Pool',
                        'desc' => 'Kolam renang infinity dengan pemandangan kota yang spektakuler. Dilengkapi dengan area jacuzzi, pool bar, dan sun deck untuk relaksasi maksimal.',
                        'img' => 'https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?q=80&w=2070',
                        'features' => ['Infinity Edge Design', 'Heated Pool', 'Pool Bar & Lounge', 'Kids Pool Area', 'Cabana Service', 'Night Swimming'],
                        'hours' => '06:00 - 22:00'
                    ],
                    [
                        'icon' => '🍽️',
                        'title' => 'Fine Dining Restaurant',
                        'desc' => 'Restoran mewah dengan menu internasional dan lokal yang disiapkan oleh chef berpengalaman. Suasana elegan dengan live music setiap malam.',
                        'img' => 'https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?q=80&w=2070',
                        'features' => ['International Cuisine', 'Private Dining Room', 'Live Music', 'Wine Cellar', 'Al Fresco Dining', 'Chef\'s Table'],
                        'hours' => '07:00 - 23:00'
                    ],
                    [
                        'icon' => '💆',
                        'title' => 'Luxury Spa & Wellness',
                        'desc' => 'Spa mewah dengan terapis profesional menawarkan berbagai treatment tradisional dan modern. Nikmati pengalaman relaksasi total dalam suasana yang tenang.',
                        'img' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070',
                        'features' => ['Traditional Massage', 'Aromatherapy', 'Hot Stone Therapy', 'Facial Treatment', 'Sauna & Steam', 'Couples Treatment'],
                        'hours' => '09:00 - 21:00'
                    ],
                    [
                        'icon' => '🏋️',
                        'title' => 'Modern Fitness Center',
                        'desc' => 'Gym modern dengan peralatan terkini dari merek ternama. Dilengkapi personal trainer, kelas group, dan area yoga untuk kebugaran optimal.',
                        'img' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070',
                        'features' => ['Cardio Equipment', 'Weight Training', 'Personal Trainer', 'Group Classes', 'Yoga Studio', 'Locker Room'],
                        'hours' => '24 Hours'
                    ],
                ] as $index => $facility)
                <div class="facility-card-main" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="facility-image-container image-reveal">
                        <img
                            src="{{ $facility['img'] }}"
                            class="facility-image"
                            alt="{{ $facility['title'] }}"
                        >
                        <div class="facility-gradient-overlay"></div>
                        <div class="facility-icon-badge">
                            {{ $facility['icon'] }}
                        </div>
                    </div>

                    <div class="relative p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl md:text-3xl font-display font-bold text-gray-900">
                                {{ $facility['title'] }}
                            </h3>
                            <span class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-semibold whitespace-nowrap">
                                {{ $facility['hours'] }}
                            </span>
                        </div>

                        <p class="text-gray-600 mb-6 leading-relaxed">
                            {{ $facility['desc'] }}
                        </p>

                        <div class="mb-6">
                            <h4 class="text-sm font-bold text-gray-900 mb-3 uppercase tracking-wider">Available Features:</h4>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach($facility['features'] as $feature)
                                <div class="feature-list-item text-gray-700 text-sm">
                                    {{ $feature }}
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <a href="/contact" class="book-facility-btn relative inline-block px-8 py-3 rounded-full text-white font-bold shadow-xl">
                            <span class="relative z-10 flex items-center gap-2">
                                Book Now
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ADDITIONAL AMENITIES --}}
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="section-badge">MORE TO EXPLORE</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-gray-900">
                    Fasilitas Tambahan
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kami menyediakan berbagai fasilitas pendukung untuk kenyamanan Anda
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ([
                    ['icon' => '🅿️', 'title' => 'Valet Parking', 'desc' => 'Free valet service'],
                    ['icon' => '🚗', 'title' => 'Airport Transfer', 'desc' => 'Luxury car service'],
                    ['icon' => '📶', 'title' => 'High-Speed WiFi', 'desc' => 'Free throughout hotel'],
                    ['icon' => '🎯', 'title' => 'Business Center', 'desc' => '24/7 access'],
                    ['icon' => '👶', 'title' => 'Kids Club', 'desc' => 'Playground & activities'],
                    ['icon' => '☕', 'title' => 'Café & Lounge', 'desc' => 'Premium coffee bar'],
                    ['icon' => '🛍️', 'title' => 'Gift Shop', 'desc' => 'Souvenirs & essentials'],
                    ['icon' => '🔒', 'title' => 'Safe Deposit', 'desc' => 'Secure storage']
                ] as $i => $amenity)
                <div class="amenity-tag" data-aos="zoom-in" data-aos-delay="{{ $i * 50 }}">
                    <span class="text-2xl">{{ $amenity['icon'] }}</span>
                    <div class="text-left">
                        <div class="font-bold text-sm">{{ $amenity['title'] }}</div>
                        <div class="text-xs text-gray-500">{{ $amenity['desc'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- STATS SECTION --}}
    <section class="py-32 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="section-badge">OUR ACHIEVEMENTS</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-gray-900">
                    Hotel Antik in Numbers
                </h2>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ([
                    ['number' => '50+', 'label' => 'Luxury Rooms', 'icon' => '🏨'],
                    ['number' => '15K+', 'label' => 'Happy Guests', 'icon' => '😊'],
                    ['number' => '24/7', 'label' => 'Concierge Service', 'icon' => '🔔'],
                    ['number' => '5★', 'label' => 'Average Rating', 'icon' => '⭐']
                ] as $j => $stat)
                <div class="stats-card" data-aos="flip-up" data-aos-delay="{{ $j * 100 }}">
                    <div class="text-5xl mb-4">{{ $stat['icon'] }}</div>
                    <div class="stats-number relative">{{ $stat['number'] }}</div>
                    <p class="text-gray-600 font-semibold mt-2">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="cta-facilities relative py-32 text-center text-white overflow-hidden">
        <div class="floating-decorative"></div>
        <div class="floating-decorative"></div>
        <div class="floating-decorative"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6" data-aos="zoom-in">
            <span class="section-badge bg-white/20 text-white backdrop-blur-sm">
                BOOK YOUR EXPERIENCE
            </span>
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 leading-tight">
                Siap Menikmati Fasilitas Premium Kami?
            </h2>
            <p class="text-xl opacity-95 mb-10 leading-relaxed max-w-2xl mx-auto">
                Reservasi sekarang dan rasakan pengalaman menginap dengan fasilitas kelas dunia yang tak terlupakan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/rooms" class="book-facility-btn relative inline-block px-10 py-4 bg-white text-indigo-600 rounded-full font-bold text-lg shadow-2xl">
                    <span class="relative z-10">Explore Rooms</span>
                </a>
                <a href="/contact" class="inline-block px-10 py-4 rounded-full border-2 border-white font-semibold text-lg hover:bg-white hover:text-indigo-600 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
</x-layout>