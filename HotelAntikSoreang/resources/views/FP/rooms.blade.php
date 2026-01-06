<!-- INI FILE roomms.blade.php -->

<x-layout>
    <style>
        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomFade {
            0% {
                opacity: 0;
                transform: scale(1.05);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .fade-up {
            animation: fadeUp 0.8s ease forwards;
        }

        .fade-delay-1 { animation-delay: .1s }
        .fade-delay-2 { animation-delay: .2s }
        .fade-delay-3 { animation-delay: .3s }
        .fade-delay-4 { animation-delay: .4s }
        .fade-delay-5 { animation-delay: .5s }
        .fade-delay-6 { animation-delay: .6s }

        .zoom-fade {
            animation: zoomFade 1s ease forwards;
        }

        .hover-zoom {
            transition: transform .5s ease;
        }

        .hover-zoom:hover {
            transform: scale(1.07);
        }
    </style>

    <!-- HERO ROOMS -->
    <section class="relative h-[65vh] flex items-center justify-center overflow-hidden">
        <img
            src="https://images.unsplash.com/photo-1618773928121-c32242e63f39"
            class="absolute inset-0 w-full h-full object-cover zoom-fade"
        >
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 text-center text-white px-6 fade-up">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Our Rooms
            </h1>
            <p class="text-lg max-w-2xl mx-auto opacity-90">
                Nikmati pengalaman menginap terbaik dengan kamar eksklusif dan fasilitas premium
            </p>
        </div>
    </section>

    <!-- ROOMS LIST -->
    <section class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            @foreach ([
                [
                    'title' => 'Deluxe Room',
                    'price' => 'Rp 1.200.000 / malam',
                    'img' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511',
                    'desc' => 'Kamar modern dengan desain elegan dan pemandangan kota.'
                ],
                [
                    'title' => 'Executive Room',
                    'price' => 'Rp 1.800.000 / malam',
                    'img' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa',
                    'desc' => 'Pilihan sempurna untuk tamu bisnis dengan fasilitas premium.'
                ],
                [
                    'title' => 'Suite Room',
                    'price' => 'Rp 2.500.000 / malam',
                    'img' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb',
                    'desc' => 'Kemewahan maksimal dengan ruang luas dan interior eksklusif.'
                ],
                [
                    'title' => 'Family Room',
                    'price' => 'Rp 2.000.000 / malam',
                    'img' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427',
                    'desc' => 'Nyaman untuk keluarga dengan ruang lebih luas.'
                ],
                [
                    'title' => 'Classic Room',
                    'price' => 'Rp 950.000 / malam',
                    'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c',
                    'desc' => 'Sentuhan klasik dengan kenyamanan modern.'
                ],
                [
                    'title' => 'Presidential Suite',
                    'price' => 'Rp 3.500.000 / malam',
                    'img' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2',
                    'desc' => 'Kamar paling eksklusif dengan fasilitas terbaik.'
                ],
            ] as $room)

            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition overflow-hidden fade-up fade-delay-{{ $loop->iteration }}">
                <div class="overflow-hidden">
                    <img
                        src="{{ $room['img'] }}"
                        class="w-full h-64 object-cover hover-zoom"
                    >
                </div>

                <div class="p-6 flex flex-col h-full">
                    <h3 class="text-xl font-bold mb-2">
                        {{ $room['title'] }}
                    </h3>

                    <p class="text-indigo-600 font-semibold mb-3">
                        {{ $room['price'] }}
                    </p>

                    <p class="text-gray-600 text-sm flex-grow">
                        {{ $room['desc'] }}
                    </p>

                    <div class="mt-6 flex items-center justify-between">
                        <a href="/contact"
                           class="text-indigo-600 font-semibold hover:underline">
                            Lihat Detail
                        </a>

                        <a href="/contact"
                           class="bg-indigo-600 text-white px-5 py-2 rounded-full text-sm hover:bg-indigo-700 transition">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-gradient-to-r from-indigo-600 to-blue-600 py-20 text-center text-white fade-up">
        <h2 class="text-3xl font-bold mb-4">
            Siap Menginap Bersama Kami?
        </h2>
        <p class="opacity-90 mb-8">
            Pesan kamar favorit Anda sekarang dan rasakan pengalaman terbaik.
        </p>
        <a href="/contact"
           class="inline-block bg-white text-indigo-600 font-semibold px-10 py-3 rounded-full hover:bg-gray-100 transition">
            Hubungi Kami
        </a>
    </section>
</x-layout>
