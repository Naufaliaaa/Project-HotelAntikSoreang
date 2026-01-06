<nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <span class="text-2xl font-extrabold text-indigo-600">Hotel</span>
                <span class="text-2xl font-light text-gray-800">Antik</span>
            </a>

            <!-- Menu Desktop -->
            <ul class="hidden md:flex items-center space-x-10 font-medium">
                <li>
                    <a href="/" class="hover:text-indigo-600 transition">Home</a>
                </li>
                <li>
                    <a href="/rooms" class="hover:text-indigo-600 transition">Rooms</a>
                </li>
                <li>
                    <a href="/facilities" class="hover:text-indigo-600 transition">Facilities</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-indigo-600 transition">Contact</a>
                </li>
            </ul>

            <!-- CTA -->
            <div class="hidden md:block">
                <a href="/rooms"
                   class="px-6 py-2 rounded-full bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition shadow">
                    Book Now
                </a>
            </div>

            <!-- Mobile Menu Icon (next upgrade) -->
            <button class="md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

        </div>
    </div>
</nav>
