# 🏨 Hotel Antik Soreang

Website reservasi hotel modern berbasis Laravel & Tailwind CSS yang menghadirkan pengalaman pemesanan kamar hotel yang elegan dan responsif.

## 📝 Deskripsi

**Hotel Antik Soreang** adalah website hotel modern yang terletak di Soreang, Bandung, Jawa Barat. Website ini menyediakan sistem pemesanan kamar hotel secara online dengan tampilan yang mewah dan profesional. Dibangun menggunakan teknologi modern, website ini menawarkan pengalaman pengguna yang smooth dan elegan.

### Fitur Utama

- **Home Page** - Halaman utama dengan tampilan hero yang menawan, sekilas tentang hotel, preview kamar, fasilitas, dan testimonial tamu
- **Rooms** - Halaman komprehensif menampilkan semua tipe kamar yang tersedia dengan harga dan fasilitas lengkap
- **Facilities** - Halaman fasilitas hotel seperti kolam renang infinity, restoran fine dining, spa luxury, dan fitness center
- **Contact** - Halaman kontak dengan formulir pesan dan informasi lokasi hotel

## 🛏️ Tipe Kamar

| Kamar | Harga | Fasilitas |
|-------|-------|-----------|
| **Family Room** | Rp 850.000/malam | Twin/Single Bed, TV, Water Heater, Bath Tub, AC, Meja Rias |
| **Deluxe Room** | Rp 425.000/malam | Twin/Single Bed, TV, Water Heater, Bath Tub, AC |
| **Standard Room** | Rp 375.000/malam | Twin/Single Bed, TV, Water Heater, AC |
| **Budget Room** | Rp 325.000/malam | Twin/Single Bed, TV, Water Heater, AC |

> 💡 Semua kamar sudah termasuk sarapan pagi (breakfast)

## 🏊 Fasilitas Hotel

- **Infinity Swimming Pool** - Kolam renang infinity dengan pemandangan kota
- **Fine Dining Restaurant** - Restoran mewah dengan menu internasional
- **Luxury Spa & Wellness** - Spa dan perawatan tubuh premium
- **Modern Fitness Center** - Gym modern dengan peralatan terkini
- **Valet Parking** - Layanan valet gratis
- **Airport Transfer** - Layanan antar-jemput bandara
- **High-Speed WiFi** - Internet gratis di seluruh area hotel
- **Business Center** - Pusat bisnis 24/7
- **Kids Club** - Area bermain anak
- **Café & Lounge** - Bar kopi premium

## 🚀 Tech Stack

- **Laravel 12** - Framework PHP modern
- **PHP 8.4** - Versi PHP terbaru
- **Tailwind CSS** - Framework CSS utility-first
- **Vite** - Build tool modern
- **MySQL** - Database

## 📁 Struktur Folder

```
HotelAntikSoreang/
├── app/
│   ├── Http/Controllers/    # Controller untuk logika aplikasi
│   ├── Models/              # Model database
│   ├── Providers/           # Service providers
│   └── View/Components/     # Blade components
├── public/
│   └── img/                 # Gambar dan aset statis
├── resources/
│   ├── css/                 # File CSS (Tailwind)
│   ├── js/                  # File JavaScript
│   └── views/               # Blade templates
│       ├── FP/              # Halaman Front Page
│       │   ├── home.blade.php
│       │   ├── rooms.blade.php
│       │   ├── facilities.blade.php
│       │   └── contact.blade.php
│       └── components/      # Komponen reusable
├── routes/
│   └── web.php              # Definisi routes
└── storage/                 # File storage dan log
```

## ⚙️ Installation

```bash
# Clone repository
git clone https://github.com/username/hotel-antik-soreang.git
cd hotel-antik-soreang

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Setup database
php artisan migrate

# Running development server
npm run dev
php artisan serve
```

## 🔗 Routes

| Endpoint | Deskripsi |
|----------|-----------|
| `/` | Halaman utama (Welcome) |
| `/home` | Halaman beranda hotel |
| `/rooms` | Halaman pilihan kamar |
| `/facilities` | Halaman fasilitas hotel |
| `/contact` | Halaman kontak & reservasi |

## 📱 Fitur UI/UX

- ✅ Responsive design untuk semua device
- ✅ Animasi smooth dan transisi elegan
- ✅ Modern hero section dengan parallax effect
- ✅ Card design dengan hover effects
- ✅ Clean dan modern color scheme (Indigo/Purple gradient)
- ✅ Google Maps integration untuk lokasi hotel

## 📞 Kontak

- **Alamat**: Hotel Antik Soreang, Bandung, West Java, Indonesia
- **Telepon**: +62 812 3456 7890
- **Email**: info@hotelantik.com
- **Jam Operasional**: Buka 24 Jam

ini di buat oleh Team Media Cikalong
---

<p align="center">Made with ❤️ using Laravel & Tailwind CSS</p>

