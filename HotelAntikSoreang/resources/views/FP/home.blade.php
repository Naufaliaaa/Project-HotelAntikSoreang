<x-layout>
        <style>
        /* classic (minimal) overlay */
        .hero-overlay {
            background: linear-gradient(90deg, rgba(26, 20, 14, 0.80) 0%, rgba(212, 175, 55, 0.18) 45%, rgba(26, 20, 14, 0.70) 100%);
        }
    </style>

    {{-- HERO (simple) --}}
    <section class="relative h-[70vh] min-h-[520px] flex items-center justify-center overflow-hidden">
        <img
            src="{{ asset('img/main-foto.png') }}"
            class="absolute inset-0 w-full h-full object-cover"
            alt="Hotel Antik Luxury"
        >
        <div class="absolute inset-0 hero-overlay"></div>

        <div class="relative z-10 text-center text-white px-6 max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
                Experience Luxury & Comfort
            </h1>
            <p class="text-base md:text-lg opacity-95 mb-8">
                Nikmati kemewahan modern dengan sentuhan klasik. Setiap momen adalah kenangan berharga.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/rooms" class="px-8 py-3 bg-white text-indigo-700 font-semibold rounded-full hover:bg-indigo-50 transition">
                    Explore Rooms
                </a>
                <a href="/contact" class="px-8 py-3 border border-white/70 text-white font-semibold rounded-full hover:bg-white hover:text-indigo-700 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    {{-- ABOUT SINGKAT --}}
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070"
                        alt="Hotel Interior"
                        class="rounded-2xl w-full h-[340px] object-cover"
                    >
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang Hotel Kami</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Hotel Antik menghadirkan suasana nyaman dengan desain elegan dan pelayanan yang ramah.
                    </p>
                    <a href="/facilities" class="inline-flex items-center text-indigo-700 font-semibold hover:text-indigo-800 transition">
                        Lihat Fasilitas
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ROOMS PREVIEW (simple cards) --}}
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">Pilihan Kamar</h2>
                <p class="text-gray-600 mt-2">Beberapa pilihan kamar unggulan untuk Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ([
                    ['title' => 'Deluxe Room', 'price' => 'Rp 1.200.000', 'img' => asset('img/deluxeroom.jpg')],
                    ['title' => 'Family Room', 'price' => 'Rp 1.600.000', 'img' => asset('img/familyroom.jpg')],
                    ['title' => 'Standard Room', 'price' => 'Rp 900.000', 'img' => asset('img/standar-room.jpg')],
                ] as $room)
                    <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100">
                        <div class="h-44 overflow-hidden">
                            <img src="{{ $room['img'] }}" alt="{{ $room['title'] }}" class="w-full h-full object-cover"/>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-900">{{ $room['title'] }}</h3>
                            <p class="text-indigo-700 font-semibold mt-1">{{ $room['price'] }} / malam</p>
                            <div class="mt-4 flex gap-3">
                                <a href="/rooms" class="text-indigo-700 font-semibold hover:text-indigo-800 transition">Lihat</a>
                                <span class="text-gray-300">|</span>
                                <a href="/contact" class="text-gray-700 font-semibold hover:text-gray-900 transition">Pesan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-8">
                <a href="/rooms" class="inline-block px-8 py-3 bg-indigo-600 text-white font-semibold rounded-full hover:bg-indigo-700 transition">
                    View All Rooms
                </a>
            </div>
        </div>
    </section>

    {{-- CTA simple --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Siap menginap di Hotel Antik?</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Pilih kamar terbaik dan pesan sekarang.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/rooms" class="px-8 py-3 bg-indigo-600 text-white font-semibold rounded-full hover:bg-indigo-700 transition">
                    Book Now
                </a>
                <a href="/contact" class="px-8 py-3 border border-gray-300 text-gray-800 font-semibold rounded-full hover:bg-gray-50 transition">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
</x-layout>

