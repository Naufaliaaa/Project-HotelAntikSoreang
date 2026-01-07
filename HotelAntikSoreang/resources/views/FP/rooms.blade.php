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
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            background: rgba(79, 70, 229, 0.08);
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            color: #4f46e5;
            transition: all 0.3s ease;
        }

        .feature-tag:hover {
            background: rgba(79, 70, 229, 0.15);
            transform: translateX(4px);
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
    </style>

    {{-- HERO SECTION --}}
    <section class="relative h-[75vh] flex items-center justify-center overflow-hidden">
        <img
            src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070"
            class="hero-image absolute inset-0 w-full h-full object-cover"
            alt="Luxury Rooms"
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
                Pilih dari koleksi kamar mewah kami, dirancang sempurna untuk kenyamanan dan ketenangan Anda
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
                    Setiap kamar dilengkapi dengan fasilitas modern dan desain interior yang memukau
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ([
                    [
                        'title' => 'Deluxe Room',
                        'price' => 'Rp 1.200.000',
                        'img' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511?q=80&w=2070',
                        'desc' => 'Kamar modern dengan desain elegan dan pemandangan kota yang menakjubkan.',
                        'features' => ['King Size Bed', 'City View', '35m²', 'Free WiFi', 'Smart TV', 'Mini Bar'],
                        'delay' => '0'
                    ],
                    [
                        'title' => 'Executive Room',
                        'price' => 'Rp 1.800.000',
                        'img' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=2070',
                        'desc' => 'Pilihan sempurna untuk tamu bisnis dengan fasilitas premium lengkap.',
                        'features' => ['Queen Bed', 'Work Desk', '45m²', 'Coffee Machine', 'Premium Toiletries', 'Bathtub'],
                        'delay' => '100'
                    ],
                    [
                        'title' => 'Suite Room',
                        'price' => 'Rp 2.500.000',
                        'img' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=2070',
                        'desc' => 'Kemewahan maksimal dengan ruang luas dan interior eksklusif yang memesona.',
                        'features' => ['Living Area', 'Dining Space', '65m²', 'Jacuzzi', 'Butler Service', 'Premium View'],
                        'delay' => '200'
                    ],
                    [
                        'title' => 'Family Room',
                        'price' => 'Rp 2.000.000',
                        'img' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2070',
                        'desc' => 'Ruang nyaman untuk keluarga dengan fasilitas lengkap dan area bermain.',
                        'features' => ['2 Queen Beds', 'Kids Area', '50m²', 'Family Bathroom', 'Game Console', 'Kitchen'],
                        'delay' => '0'
                    ],
                    [
                        'title' => 'Classic Room',
                        'price' => 'Rp 950.000',
                        'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070',
                        'desc' => 'Sentuhan klasik yang elegan berpadu dengan kenyamanan modern.',
                        'features' => ['Double Bed', 'Garden View', '30m²', 'Classic Decor', 'Rain Shower', 'Tea Set'],
                        'delay' => '100'
                    ],
                    [
                        'title' => 'Presidential Suite',
                        'price' => 'Rp 3.500.000',
                        'img' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=2070',
                        'desc' => 'Kamar paling eksklusif dengan fasilitas terbaik dan pemandangan spektakuler.',
                        'features' => ['Master Bedroom', 'Private Terrace', '100m²', 'Spa Bath', 'Wine Cellar', 'Piano'],
                        'delay' => '200'
                    ],
                ] as $room)

                <div class="room-card-luxury" data-aos="fade-up" data-aos-delay="{{ $room['delay'] }}">
                    <div class="room-img-container">
                        <img
                            src="{{ $room['img'] }}"
                            class="room-img"
                            alt="{{ $room['title'] }}"
                        >
                        <div class="room-overlay"></div>
                        <div class="price-badge">
                            <div class="text-xs text-gray-500 font-medium">Starting from</div>
                            <div class="text-indigo-600 font-bold text-lg">{{ $room['price'] }}</div>
                            <div class="text-xs text-gray-400">per night</div>
                        </div>
                    </div>

                    <div class="relative z-10 p-8">
                        <h3 class="text-2xl font-display font-bold mb-3 text-gray-900">
                            {{ $room['title'] }}
                        </h3>

                        <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                            {{ $room['desc'] }}
                        </p>

                        <div class="flex flex-wrap gap-2 mb-8">
                            @foreach(array_slice($room['features'], 0, 3) as $feature)
                            <span class="feature-tag">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                {{ $feature }}
                            </span>
                            @endforeach
                        </div>

                        <div class="flex items-center justify-between gap-4">
                            <a href="/contact" class="detail-btn text-indigo-600 font-semibold hover:underline">
                                View Details
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>

                            <a href="/contact" class="book-btn relative px-6 py-3 rounded-full text-white font-semibold text-sm shadow-lg">
                                <span class="relative z-10">Book Now</span>
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
                Pesan kamar favorit Anda sekarang dan dapatkan pengalaman menginap yang tak terlupakan dengan penawaran spesial
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="book-btn relative inline-block px-10 py-4 bg-white text-indigo-600 rounded-full font-bold text-lg shadow-2xl">
                    <span class="relative z-10">Reserve Your Room</span>
                </a>
                <a href="/facilities" class="inline-block px-10 py-4 rounded-full border-2 border-white font-semibold text-lg hover:bg-white hover:text-indigo-600 transition">
                    Explore Facilities
                </a>
            </div>
        </div>
    </section>
</x-layout>