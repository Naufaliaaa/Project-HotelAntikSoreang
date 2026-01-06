<x-layout>
    {{-- HERO --}}
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1501117716987-c8e1ecb210b0');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-extrabold mb-4">Experience Ultimate Comfort</h1>
            <p class="text-lg md:text-2xl mb-8 max-w-2xl">Luxury hotel with elegant design and premium service for your unforgettable stay.</p>
            <a href="/rooms" class="bg-indigo-600 hover:bg-indigo-700 px-8 py-3 rounded-full text-lg font-semibold transition">
                Explore Rooms
            </a>
        </div>
    </section>

    {{-- ABOUT --}}
    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Hotel Interior" class="rounded-xl shadow-lg hover:scale-105 transition">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold mb-4">About Our Hotel</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">Welcome to Hotel Antik —  
                    a destination of comfort, elegance, and rich experiences.  
                    Enjoy our premium amenities, warm hospitality, and beautiful interiors designed for your rest.</p>
                <a href="/facilities" class="text-indigo-600 font-semibold hover:underline">Explore Facilities →</a>
            </div>
        </div>
    </section>

    {{-- ROOMS PREVIEW --}}
    <section class="py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 text-center mb-12">
            <h2 class="text-3xl font-bold mb-3" data-aos="fade-up">Our Rooms</h2>
            <p class="text-gray-600">Choose your comfort from our elegant rooms.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-6">
            @foreach ([
                ['title' => 'Deluxe Room', 'img' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511'],
                ['title' => 'Executive Suite', 'img' => 'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa'],
                ['title' => 'Presidential Suite', 'img' => 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb']
            ] as $i => $room)
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="{{ 100 * ($i+1) }}">
                <img src="{{ $room['img'] }}" alt="{{ $room['title'] }}" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $room['title'] }}</h3>
                    <p class="text-gray-600 mb-4">Elegant and cozy room to relax after a long day.</p>
                    <a href="/contact" class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
                        Book Now
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- FACILITIES HIGHLIGHT --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center mb-10">
            <h2 class="text-3xl font-bold" data-aos="fade-up">Hotel Facilities</h2>
            <p class="text-gray-600">Premium features designed for your comfort.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 px-6">
            @foreach ([
                ['icon' => '🌊', 'title' => 'Swimming Pool'],
                ['icon' => '🍽️', 'title' => 'Fine Dining'],
                ['icon' => '💆‍♀️', 'title' => 'Spa & Wellness'],
                ['icon' => '🏋️‍♂️', 'title' => 'Fitness Center']
            ] as $j => $feat)
            <div class="bg-gray-50 p-8 rounded-2xl text-center shadow-md hover:shadow-xl transition" data-aos="flip-left" data-aos-delay="{{ 150 * ($j + 1) }}">
                <div class="text-5xl mb-4">{{ $feat['icon'] }}</div>
                <h4 class="text-xl font-semibold">{{ $feat['title'] }}</h4>
            </div>
            @endforeach
        </div>
    </section>

    {{-- TESTIMONIAL --}}
    <section class="py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-3">Guest Reviews</h2>
            <p class="text-gray-600">What our guests say about Hotel Antik.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-6">
            @foreach ([
                ['name' => 'John Doe', 'review' => 'Amazing stay with excellent service!'],
                ['name' => 'Anna Smith', 'review' => 'Room was clean and very comfortable!'],
                ['name' => 'Michael Lee', 'review' => 'We loved the pool and spa!']
            ] as $k => $test)
            <div class="bg-white rounded-2xl p-6 shadow-lg text-center" data-aos="fade-up" data-aos-delay="{{ ($k+1)*100 }}">
                <p class="text-gray-700 mb-4">“{{ $test['review'] }}”</p>
                <h5 class="font-bold text-indigo-600">{{ $test['name'] }}</h5>
            </div>
            @endforeach
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="py-24 bg-indigo-600 text-white text-center" data-aos="fade-up">
        <h2 class="text-3xl font-bold mb-4">Ready For Your Stay?</h2>
        <p class="text-lg mb-6">Book your room today and enjoy premium service!</p>
        <a href="/contact" class="inline-block bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
            Contact Us
        </a>
    </section>
</x-layout>
