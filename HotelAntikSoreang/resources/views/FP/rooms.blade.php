<x-layout>
    <style>
        @keyframes heroZoom {
            0% {
                transform: scale(1.2);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(60px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-image {
            animation: heroZoom 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-content {
            animation: slideUp 1s ease-out 0.3s both;
        }

        .room-card-luxury {
            position: relative;
            background: white;
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .room-card-luxury:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(79, 70, 229, 0.15);
        }

        .room-card-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
            pointer-events: none;
        }

        .room-card-luxury:hover::before {
            opacity: 1;
        }

        .room-img-container {
            position: relative;
            height: 320px;
            overflow: hidden;
        }

        .room-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .room-card-luxury:hover .room-img {
            transform: scale(1.15);
        }

        .room-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 50%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 2;
        }

        .room-card-luxury:hover .room-overlay {
            opacity: 1;
        }

        .price-badge {
            position: absolute;
            top: 24px;
            right: 24px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 12px 20px;
            border-radius: 50px;
            z-index: 3;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .room-card-luxury:hover .price-badge {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 1);
        }

        .feature-tag {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            background: rgba(79, 70, 229, 0.08);
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            color: #4f46e5;
            transition: all 0.3s ease;
        }

        .feature-tag:hover {
            background: rgba(79, 70, 229, 0.15);
            transform: translateX(4px);
        }

        .feature-icon {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        .book-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }

        .book-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.25);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .book-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .book-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(79, 70, 229, 0.4);
        }

        .detail-btn {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .detail-btn:hover {
            gap: 12px;
            color: #7c3aed;
        }

        .cta-section {
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.95) 0%, rgba(124, 58, 237, 0.95) 100%);
            z-index: 1;
        }

        .floating-shapes {
            position: absolute;
            inset: 0;
            opacity: 0.1;
            z-index: 0;
        }

        .floating-shapes div {
            position: absolute;
            background: white;
            border-radius: 50%;
            animation: float 20s infinite ease-in-out;
        }

        .floating-shapes div:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .floating-shapes div:nth-child(2) {
            width: 200px;
            height: 200px;
            bottom: -50px;
            right: 10%;
            animation-delay: 3s;
        }

        .floating-shapes div:nth-child(3) {
            width: 150px;
            height: 150px;
            top: 20%;
            right: -50px;
            animation-delay: 6s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-30px) rotate(180deg);
            }
        }

        .section-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(79, 70, 229, 0.1);
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            color: #4f46e5;
            margin-bottom: 16px;
            letter-spacing: 1px;
        }

        .breakfast-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 16px;
        }
    </style>

    {{-- HERO SECTION --}}
    <section class="relative h-[75vh] flex items-center justify-center overflow-hidden">
        <img
            src="{{ asset('img/room.jpg') }}"
            class="hero-image absolute inset-0 w-full h-full object-cover"
            alt="Hotel Rooms"
        >
        <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-black/70"></div>

        <div class="hero-content relative z-10 text-center text-white px-6 max-w-4xl mx-auto">
            <div class="section-badge bg-white/20 text-white backdrop-blur-sm">
                LUXURY ACCOMMODATION
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight">
                Our Exclusive
                <span class="block bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                    Rooms & Suites
                </span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-90 font-light leading-relaxed">
                Pilih dari koleksi kamar kami yang dirancang untuk kenyamanan dan ketenangan Anda
            </p>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    {{-- ROOMS LIST --}}
    <section class="py-32 bg-gradient-to-br from-gray-50 via-white to-indigo-50/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="section-badge">PREMIUM COLLECTION</span>
                <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 text-gray-900">
                    Temukan Kamar Ideal Anda
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Setiap kamar dilengkapi dengan fasilitas lengkap untuk kenyamanan maksimal
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @foreach ([
                    [
                        'title' => 'Family Room',
                        'price' => 'Rp 850.000',
                        'img' => 'familyroom.jpg',
                        'desc' => 'Kamar luas yang sempurna untuk keluarga dengan fasilitas lengkap dan kenyamanan maksimal.',
                        'breakfast' => 'Breakfast untuk 4 Orang',
                        'features' => [
                            ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'text' => 'Twin/Single Bed'],
                            ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'text' => 'Televisi'],
                            ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'text' => 'Water Heater'],
                            ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'text' => 'Bath Tub'],
                            ['icon' => 'M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12', 'text' => 'Air Conditioner'],
                            ['icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z', 'text' => 'Meja Rias']
                        ],
                        'delay' => '0'
                    ],
                    [
                        'title' => 'Deluxe Room',
                        'price' => 'Rp 425.000',
                        'img' => 'deluxeroom.jpg',
                        'desc' => 'Kamar deluxe dengan desain elegan dilengkapi fasilitas modern untuk pengalaman menginap terbaik.',
                        'breakfast' => 'Breakfast untuk 2 Orang',
                        'features' => [
                            ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'text' => 'Twin/Single Bed'],
                            ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'text' => 'Televisi'],
                            ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'text' => 'Water Heater'],
                            ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'text' => 'Bath Tub'],
                            ['icon' => 'M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12', 'text' => 'Air Conditioner']
                        ],
                        'delay' => '100'
                    ],
                    [
                        'title' => 'Standard Room',
                        'price' => 'Rp 375.000',
                        'img' => 'standar-room.jpg',
                        'desc' => 'Kamar standar dengan fasilitas lengkap yang nyaman dan cocok untuk perjalanan bisnis maupun liburan.',
                        'breakfast' => 'Breakfast untuk 2 Orang',
                        'features' => [
                            ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'text' => 'Twin/Single Bed'],
                            ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'text' => 'Televisi'],
                            ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'text' => 'Water Heater'],
                            ['icon' => 'M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12', 'text' => 'Air Conditioner']
                        ],
                        'delay' => '200'
                    ],
                    [
                        'title' => 'Budget Room',
                        'price' => 'Rp 325.000',
                        'img' => 'budgetroom.jpg',
                        'desc' => 'Pilihan ekonomis dengan fasilitas lengkap yang tetap memberikan kenyamanan untuk menginap Anda.',
                        'breakfast' => 'Breakfast untuk 2 Orang',
                        'features' => [
                            ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'text' => 'Twin/Single Bed'],
                            ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'text' => 'Televisi'],
                            ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'text' => 'Water Heater'],
                            ['icon' => 'M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12', 'text' => 'Air Conditioner']
                        ],
                        'delay' => '300'
                    ],
                ] as $room)

                <div class="room-card-luxury" data-aos="fade-up" data-aos-delay="{{ $room['delay'] }}">
                    <div class="room-img-container">
                        <img
                            src="{{ asset('img/' . $room['img']) }}"
                            class="room-img"
                            alt="{{ $room['title'] }}"
                        >
                        <div class="room-overlay"></div>
                        <div class="price-badge">
                            <div class="text-xs text-gray-500 font-medium">Mulai dari</div>
                            <div class="text-indigo-600 font-bold text-lg">{{ $room['price'] }}</div>
                            <div class="text-xs text-gray-400">per malam</div>
                        </div>
                    </div>

                    <div class="relative z-10 p-8">
                        <h3 class="text-2xl md:text-3xl font-display font-bold mb-2 text-gray-900">
                            {{ $room['title'] }}
                        </h3>

                        <div class="breakfast-badge">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $room['breakfast'] }}
                        </div>

                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            {{ $room['desc'] }}
                        </p>

                        <div class="mb-6">
                            <h4 class="text-xs font-bold text-gray-500 mb-3 uppercase tracking-wider">Fasilitas Kamar:</h4>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($room['features'] as $feature)
                                <div class="feature-tag">
                                    <svg class="feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"/>
                                    </svg>
                                    <span class="text-xs">{{ $feature['text'] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <a href="/contact" class="detail-btn text-indigo-600 font-semibold hover:underline text-sm">
                                Lihat Detail
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>

                            <a href="/contact" class="book-btn relative px-6 py-3 rounded-full text-white font-semibold text-sm shadow-lg">
                                <span class="relative z-10">Pesan Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="cta-section relative py-32 text-center text-white">
        <div class="floating-shapes">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-6" data-aos="zoom-in">
            <span class="section-badge bg-white/20 text-white backdrop-blur-sm">
                SPECIAL OFFER
            </span>
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6 leading-tight">
                Siap Menginap Bersama Kami?
            </h2>
            <p class="text-xl opacity-95 mb-10 leading-relaxed max-w-2xl mx-auto">
                Pesan kamar favorit Anda sekarang dan dapatkan pengalaman menginap yang tak terlupakan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="book-btn relative inline-block px-10 py-4 bg-white text-indigo-600 rounded-full font-bold text-lg shadow-2xl">
                    <span class="relative z-10">Reservasi Sekarang</span>
                </a>
                <a href="/facilities" class="inline-block px-10 py-4 rounded-full border-2 border-white font-semibold text-lg hover:bg-white hover:text-indigo-600 transition">
                    Lihat Fasilitas
                </a>
            </div>
        </div>
    </section>
</x-layout>