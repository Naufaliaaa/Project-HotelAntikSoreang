<x-layout>
    <!-- HERO CONTACT -->
    <section class="relative h-[50vh] flex items-center justify-center bg-black">
        <img
            src="https://images.unsplash.com/photo-1521782462922-9318be1cfd04"
            alt="Contact Hotel"
            class="absolute inset-0 w-full h-full object-cover opacity-60"
        >

        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl font-bold mb-3">
                Hubungi Kami
            </h1>
            <p class="text-lg max-w-xl mx-auto">
                Kami siap membantu kebutuhan dan pertanyaan Anda
            </p>
        </div>
    </section>

    <!-- CONTACT CONTENT -->
    <section class="max-w-7xl mx-auto px-6 py-20 grid grid-cols-1 lg:grid-cols-2 gap-14">

        <!-- FORM -->
        <div>
            <h2 class="text-2xl font-bold mb-6">
                Kirim Pesan
            </h2>

            <form class="space-y-6 bg-white p-8 rounded-2xl shadow-lg">
                <div>
                    <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                    <input type="text"
                           placeholder="Masukkan nama"
                           class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-indigo-200 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email"
                           placeholder="email@example.com"
                           class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-indigo-200 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Nomor Telepon</label>
                    <input type="text"
                           placeholder="+62 xxxx xxxx"
                           class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-indigo-200 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Pesan</label>
                    <textarea rows="4"
                              placeholder="Tuliskan pesan Anda..."
                              class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-indigo-200 outline-none"></textarea>
                </div>

                <button type="submit"
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <!-- INFO & MAP -->
        <div class="space-y-8">
            <div>
                <h2 class="text-2xl font-bold mb-4">
                    Informasi Kontak
                </h2>

                <div class="space-y-4 text-gray-700">
                    <p><strong>Alamat:</strong> Hotel Antik Soreang, Bandung</p>
                    <p><strong>Telepon:</strong> +62 812 3456 7890</p>
                    <p><strong>Email:</strong> info@hotelantik.com</p>
                    <p><strong>Jam Operasional:</strong> 24 Jam</p>
                </div>
            </div>

            <!-- GOOGLE MAPS -->
            <div class="rounded-2xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.898499618324!2d107.5193051823203!3d-7.021216050662453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68edd3402b05df%3A0x43d6c885e1a8a086!2sHotel%20Antik%20soreang!5e0!3m2!1sid!2sid!4v1767719653460!5m2!1sid!2sid"
                    class="w-full h-[350px] border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</x-layout>
