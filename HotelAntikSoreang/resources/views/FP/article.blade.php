<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel | Hotel Antik Soreang</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Navbar -->
    <nav class="bg-white/80 backdrop-blur shadow-sm fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">Hotel Antik</h1>
            <ul class="hidden md:flex space-x-8 font-medium">
                <li><a href="/" class="hover:text-indigo-600">Home</a></li>
                <li><a href="#" class="text-indigo-600">Artikel</a></li>
                <li><a href="#" class="hover:text-indigo-600">Rooms</a></li>
                <li><a href="#" class="hover:text-indigo-600">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <section class="pt-32 pb-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Artikel & Berita Hotel</h2>
            <p class="text-lg opacity-90">Cerita, tips perjalanan, dan informasi menarik seputar Hotel Antik Soreang</p>
        </div>
    </section>

    <!-- Article List -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">

            <!-- Card -->
            <article class="bg-white rounded-3xl shadow hover:shadow-xl transition overflow-hidden">
                <img src="https://images.unsplash.com/photo-1501117716987-c8e1ecb210b0" class="h-56 w-full object-cover" alt="Hotel">
                <div class="p-6">
                    <span class="text-sm text-indigo-600 font-semibold">Hotel</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Mengapa Hotel Antik Soreang Menjadi Favorit Wisatawan</h3>
                    <p class="text-gray-600 mb-4">Hotel Antik Soreang menawarkan kenyamanan modern dengan sentuhan klasik yang elegan...</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </article>

            <article class="bg-white rounded-3xl shadow hover:shadow-xl transition overflow-hidden">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" class="h-56 w-full object-cover" alt="Room">
                <div class="p-6">
                    <span class="text-sm text-indigo-600 font-semibold">Tips</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Tips Memilih Kamar Hotel yang Nyaman untuk Keluarga</h3>
                    <p class="text-gray-600 mb-4">Liburan keluarga akan lebih menyenangkan jika memilih kamar hotel yang tepat...</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </article>

            <article class="bg-white rounded-3xl shadow hover:shadow-xl transition overflow-hidden">
                <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb" class="h-56 w-full object-cover" alt="Facility">
                <div class="p-6">
                    <span class="text-sm text-indigo-600 font-semibold">Fasilitas</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Fasilitas Premium yang Bisa Anda Nikmati di Hotel Antik</h3>
                    <p class="text-gray-600 mb-4">Dari kolam renang, restoran mewah, hingga ruang meeting eksklusif...</p>
                    <a href="#" class="text-indigo-600 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </article>

        </div>
    </section>

    <!-- CTA -->
    <section class="bg-indigo-600 py-16 text-white text-center">
        <h3 class="text-3xl font-bold mb-4">Siap Menginap di Hotel Antik Soreang?</h3>
        <p class="mb-6">Nikmati pengalaman menginap terbaik dengan pelayanan premium</p>
        <a href="#" class="bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Pesan Sekarang</a>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>© 2026 Hotel Antik Soreang. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
