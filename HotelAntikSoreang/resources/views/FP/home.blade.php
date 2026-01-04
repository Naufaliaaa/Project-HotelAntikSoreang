<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxuryStay Hotel</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-800">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">LuxuryStay</h1>
            <ul class="hidden md:flex space-x-8 font-medium">
                <li><a href="#" class="hover:text-indigo-600">Home</a></li>
                <li><a href="#" class="hover:text-indigo-600">Rooms</a></li>
                <li><a href="#" class="hover:text-indigo-600">Facilities</a></li>
                <li><a href="#" class="hover:text-indigo-600">Contact</a></li>
            </ul>
            <a href="#" class="bg-indigo-600 text-white px-5 py-2 rounded-full hover:bg-indigo-700 transition">Book Now</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen bg-cover bg-center flex items-center" style="background-image: url('https://images.unsplash.com/photo-1501117716987-c8e1ecb210b0');">
        <div class="w-full h-full bg-black/50 flex items-center">
            <div class="max-w-7xl mx-auto px-6 text-white">
                <h2 class="text-4xl md:text-6xl font-bold mb-6">Experience Luxury & Comfort</h2>
                <p class="max-w-xl text-lg mb-8">Hotel modern dengan pelayanan premium, lokasi strategis, dan suasana elegan untuk liburan maupun bisnis Anda.</p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-indigo-600 px-8 py-3 rounded-full text-lg hover:bg-indigo-700 transition">Explore Rooms</a>
                    <a href="#" class="border border-white px-8 py-3 rounded-full text-lg hover:bg-white hover:text-black transition">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" class="rounded-3xl shadow-lg" alt="Hotel">
            <div>
                <h3 class="text-3xl font-bold mb-4">Tentang LuxuryStay</h3>
                <p class="text-gray-600 mb-6">LuxuryStay adalah hotel bintang lima dengan desain modern dan fasilitas lengkap yang mengutamakan kenyamanan dan pengalaman terbaik bagi setiap tamu.</p>
                <ul class="space-y-3">
                    <li class="flex items-center"><span class="text-indigo-600 mr-3">✓</span>Kamar elegan & modern</li>
                    <li class="flex items-center"><span class="text-indigo-600 mr-3">✓</span>Restoran & lounge premium</li>
                    <li class="flex items-center"><span class="text-indigo-600 mr-3">✓</span>Kolam renang & spa</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Rooms -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">Our Rooms</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card -->
                <div class="bg-white rounded-3xl shadow hover:shadow-xl transition overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511" class="h-56 w-full object-cover" alt="Room">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Deluxe Room</h4>
                        <p class="text-gray-600 mb-4">Kamar nyaman dengan pemandangan kota.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-600 font-bold">Rp 1.200.000 / night</span>
                            <a href="#" class="text-sm bg-indigo-600 text-white px-4 py-2 rounded-full">Book</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl shadow hover:shadow-xl transition overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa" class="h-56 w-full object-cover" alt="Room">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Executive Suite</h4>
                        <p class="text-gray-600 mb-4">Pilihan terbaik untuk perjalanan bisnis.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-600 font-bold">Rp 2.000.000 / night</span>
                            <a href="#" class="text-sm bg-indigo-600 text-white px-4 py-2 rounded-full">Book</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl shadow hover:shadow-xl transition overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb" class="h-56 w-full object-cover" alt="Room">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Presidential Suite</h4>
                        <p class="text-gray-600 mb-4">Kemewahan maksimal dengan fasilitas eksklusif.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-indigo-600 font-bold">Rp 3.500.000 / night</span>
                            <a href="#" class="text-sm bg-indigo-600 text-white px-4 py-2 rounded-full">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
            <div>
                <h4 class="text-xl font-bold text-white mb-4">LuxuryStay</h4>
                <p>Hotel modern dengan pelayanan terbaik untuk pengalaman menginap tak terlupakan.</p>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <li><a href="#" class="hover:text-white">Rooms</a></li>
                    <li><a href="#" class="hover:text-white">Facilities</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Contact</h4>
                <p>Bandung, Indonesia</p>
                <p>Email: info@luxurystay.com</p>
                <p>Phone: +62 812 3456 7890</p>
            </div>
        </div>
        <p class="text-center text-sm mt-10">© 2026 LuxuryStay Hotel. All rights reserved.</p>
    </footer>

</body>
</html>