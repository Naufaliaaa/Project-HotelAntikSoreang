<x-layout>
    <!-- HERO SECTION -->
    <section class="relative h-[90vh] flex items-center justify-center bg-black">
        <img
            src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
            alt="Hotel Antik"
            class="absolute inset-0 w-full h-full object-cover opacity-60"
        >

        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Hotel Antik
            </h1>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Pengalaman menginap modern, nyaman, dan elegan dengan sentuhan klasik.
            </p>
            <a href="/rooms"
               class="inline-block bg-indigo-600 hover:bg-indigo-700 transition px-8 py-3 rounded-full font-semibold shadow-lg">
                Lihat Kamar
            </a>
        </div>
    </section>

    <!-- ABOUT HOTEL -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    Tentang Hotel Antik
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Hotel Antik menghadirkan konsep modern klasik dengan fasilitas premium
                    untuk memastikan kenyamanan maksimal selama Anda menginap.
                    Cocok untuk liburan keluarga, perjalanan bisnis, maupun staycation.
                </p>
                <a href="/facilities"
                   class="inline-block text-indigo-600 font-semibold hover:underline">
                    Lihat Fasilitas →
                </a>
            </div>

            <div class="rounded-2xl overflow-hidden shadow-lg">
                <img
                    src="https://images.unsplash.com/photo-1501117716987-c8e1ecb210f0"
                    alt="Interior Hotel"
                    class="w-full h-full object-cover hover:scale-105 transition duration-500"
                >
            </div>
        </div>
    </section>

    <!-- ROOMS PREVIEW -->
    <section class="bg-gray-100 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">
                Pilihan Kamar
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ([
                    ['title' => 'Deluxe Room', 'img' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304'],
                    ['title' => 'Executive Room', 'img' => 'https://images.unsplash.com/photo-1611892440504-42a792e24d32'],
                    ['title' => 'Suite Room', 'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c'],
                ] as $room)
                <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">
                    <img src="{{ $room['img'] }}"
                         alt="{{ $room['title'] }}"
                         class="w-full h-56 object-cover">

                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            {{ $room['title'] }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Kamar nyaman dengan desain elegan dan fasilitas lengkap.
                        </p>
                        <a href="/rooms"
                           class="text-indigo-600 font-semibold hover:underline">
                            Detail Kamar →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FACILITIES -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-center mb-12">
            Fasilitas Unggulan
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach ([
                'WiFi Gratis',
                'Kolam Renang',
                'Restoran',
                'Gym & Spa',
                'Parkir Luas',
                'Room Service',
                'Resepsionis 24 Jam',
                'Laundry'
            ] as $facility)
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <p class="font-semibold text-gray-700">
                    {{ $facility }}
                </p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-indigo-600 py-20 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Siap Menginap di Hotel Antik?
        </h2>
        <p class="mb-8">
            Pesan kamar sekarang dan nikmati pengalaman menginap terbaik.
        </p>
        <a href="/contact"
           class="inline-block bg-white text-indigo-600 font-semibold px-8 py-3 rounded-full hover:bg-gray-100 transition">
            Hubungi Kami
        </a>
    </section>
</x-layout>
