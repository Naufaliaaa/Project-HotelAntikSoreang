# 🏨✨ Hotel Antik Soreang - Premium Hotel Booking

[![Laravel](https://img.shields.io/badge/Laravel-12-ff4444?style=flat&logo=laravel)](https://laravel.com)
[![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.4-38bdf8?style=flat&logo=tailwindcss)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/Vite-5.0-646cf7?style=flat&logo=vite)](https://vitejs.dev)

Modern, responsive hotel reservation website built with Laravel 12, Tailwind CSS, and Vite. Elegant design with smooth animations and full booking features.

## 🚀 Quick Start

\`\`\`bash
git clone <repo>
cd HotelAntikSoreang
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
\`\`\`

Visit \`http://localhost:8000\`

## ✨ Key Features

- ✅ Responsive design (Mobile-first)
- 🛏️ Room gallery with pricing & features
- 🏊 Facilities showcase (pool, spa, gym)
- 📧 Contact form with email notifications
- 🎨 Modern UI with gradients & hover animations
- ⚡ Fast loading with Vite HMR

## 📱 Pages

| Page | URL | Description |
|------|-----|-------------|
| Home | /home | Hero banner + previews |
| Rooms | /rooms | 4 room types with details |
| Facilities | /facilities | Hotel amenities |
| Contact | /contact | Inquiry form + info |

## 🛏️ Rooms & Pricing

| Room Type | Price per Night | Key Features |
|-----------|-----------------|--------------|
| **Family Room** | Rp 850.000 | Twin beds, bathtub, AC |
| **Deluxe Room** | Rp 425.000 | King bed, TV, heater |
| **Standard Room** | Rp 375.000 | Comfort bed, AC |
| **Budget Room** | Rp 325.000 | Basic + clean |

*Breakfast included*

## 🏗️ Tech Stack

| Frontend | Backend | Tools |
|----------|---------|-------|
| Tailwind CSS | Laravel 12 | Vite 5 |
| Alpine.js | PHP 8.4 | MySQL |
| Heroicons | Eloquent ORM | Mail |

## 📸 Screenshots

![Main Home](HotelAntikSoreang/public/img/main-foto.png)

*(Add more screenshots here)*

## 🚀 Deployment

1. Upload to shared hosting/VPS
2. Set document root to \`public/\`
3. Configure .env (APP_URL, DB)
4. \`composer install --optimize-autoloader --no-dev\`
5. \`npm run build\`

## 🔗 Routes

```
GET / - Welcome
GET /home - Home
GET /rooms - Rooms
GET /facilities - Facilities
POST /contact - Send email
```

## 🤝 Contributing

1. Fork repository
2. Create feature branch
3. Submit PR

## 📞 Contact Info

**Hotel Antik Soreang**  
Soreang, Bandung, Jawa Barat  
📞 +62 812 3456 7890  
✉️ info@hotelantiksoreang.com  

---

<p align=\"center\">Updated with ❤️ using modern best practices | 2024</p>

