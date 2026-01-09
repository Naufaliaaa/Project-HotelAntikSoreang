<x-layout>
    <style>
        @keyframes heroReveal {
            0% {
                opacity: 0;
                transform: scale(1.1);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes contentSlide {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-bg-contact {
            animation: heroReveal 1.5s ease-out;
        }

        .contact-hero-text {
            animation: contentSlide 1s ease-out 0.3s both;
        }

        .form-container {
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .form-container:hover {
            box-shadow: 0 30px 80px rgba(79, 70, 229, 0.15);
            transform: translateY(-5px);
        }

        .form-group {
            position: relative;
            margin-bottom: 24px;
        }

        .form-input {
            width: 100%;
            padding: 16px 16px 16px 56px;
            border: 2px solid #e5e7eb;
            border-radius: 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            transform: translateY(-2px);
        }

        .form-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            color: #9ca3af;
            pointer-events: none;
            z-index: 1;
        }

        .form-input:focus + .form-icon {
            color: #4f46e5;
        }

        textarea.form-input {
            padding-top: 20px;
            resize: none;
            min-height: 120px;
        }

        textarea.form-input + .form-icon {
            top: 24px;
            transform: translateY(0);
        }

        .submit-btn {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .submit-btn:hover::before {
            width: 400px;
            height: 400px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(79, 70, 229, 0.4);
        }

        .info-card {
            background: linear-gradient(135deg, #f9fafb 0%, #ede9fe 100%);
            border-radius: 24px;
            padding: 32px;
            transition: all 0.4s ease;
            border: 2px solid transparent;
        }

        .info-card:hover {
            border-color: #c084fc;
            transform: translateX(8px);
            box-shadow: 0 10px 30px rgba(124, 58, 237, 0.15);
        }

        .contact-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
            flex-shrink: 0;
        }

        .info-card:hover .contact-icon {
            transform: rotate(10deg) scale(1.1);
            box-shadow: 0 12px 30px rgba(79, 70, 229, 0.5);
        }

        .map-container {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            height: 500px;
            position: relative;
            transition: all 0.4s ease;
        }

        .map-container:hover {
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .map-container::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05));
            z-index: 1;
            pointer-events: none;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .section-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(79, 70, 229, 0.1);
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            color: #4f46e5;
            margin-bottom: 16px;
            letter-spacing: 1px;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.6;
            }
        }

        .status-badge {
            animation: pulse 2s ease-in-out infinite;
        }

        .social-link {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
        }

        .social-link:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 8px 25px rgba(79, 70, 229, 0.5);
        }

        .gradient-bg {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.02), rgba(124, 58, 237, 0.02));
        }
    </style>

    {{-- HERO SECTION --}}
    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <img
            src="{{ asset('img/contact-foto.jpg') }}"
            alt="Contact Hotel"
            class="hero-bg-contact absolute inset-0 w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-br from-black/75 via-black/65 to-black/75"></div>

        <div class="contact-hero-text relative z-10 text-center text-white px-6 max-w-4xl mx-auto">
            <span class="section-badge bg-white/20 text-white backdrop-blur-sm">
                GET IN TOUCH
            </span>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold mb-6 leading-tight">
                Hubungi
                <span class="block bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                    Kami
                </span>
            </h1>
            <p class="text-xl md:text-2xl max-w-2xl mx-auto opacity-95 font-light leading-relaxed">
                Kami siap membantu kebutuhan dan menjawab pertanyaan Anda 24/7
            </p>
        </div>
    </section>

    {{-- CONTACT CONTENT --}}
    <section class="py-32 gradient-bg">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                {{-- FORM SECTION --}}
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div class="mb-8">
                        <span class="section-badge">SEND MESSAGE</span>
                        <h2 class="text-3xl md:text-4xl font-display font-bold mb-4 text-gray-900">
                            Kirim Pesan Kepada Kami
                        </h2>
                        <p class="text-gray-600 text-lg">
                            Tim kami akan merespons dalam waktu 24 jam
                        </p>
                    </div>

                    <form class="form-container p-10">
                        <div class="form-group">
                            <input
                                type="text"
                                placeholder="Masukkan nama lengkap"
                                class="form-input"
                                required
                            >
                            <svg class="form-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>

                        <div class="form-group">
                            <input
                                type="email"
                                placeholder="email@example.com"
                                class="form-input"
                                required
                            >
                            <svg class="form-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>

                        <div class="form-group">
                            <input
                                type="tel"
                                placeholder="+62 xxxx xxxx xxxx"
                                class="form-input"
                                required
                            >
                            <svg class="form-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>

                        <div class="form-group">
                            <textarea
                                placeholder="Tuliskan pesan Anda di sini..."
                                class="form-input"
                                required
                            ></textarea>
                            <svg class="form-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                        </div>

                        <button
                            type="submit"
                            class="submit-btn relative w-full py-4 rounded-2xl text-white font-bold text-lg shadow-xl"
                        >
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Kirim Pesan
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </button>

                        <p class="text-center text-sm text-gray-500 mt-6">
                            Atau hubungi kami langsung melalui WhatsApp atau Email
                        </p>
                    </form>
                </div>

                {{-- INFO & MAP SECTION --}}
                <div data-aos="fade-left" data-aos-duration="1000" class="space-y-8">
                    
                    {{-- Contact Info Cards --}}
                    <div>
                        <span class="section-badge">CONTACT INFO</span>
                        <h3 class="text-3xl font-display font-bold mb-6 text-gray-900">
                            Informasi Kontak
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="info-card">
                                <div class="flex items-start gap-4">
                                    <div class="contact-icon">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 mb-1">Alamat</h4>
                                        <p class="text-gray-600">Hotel Antik Soreang<br>Bandung, West Java<br>Indonesia</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="flex items-start gap-4">
                                    <div class="contact-icon">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 mb-1">Telepon</h4>
                                        <a href="tel:+628123456789" class="text-indigo-600 hover:underline font-medium">+62 812 3456 7890</a>
                                        <p class="text-gray-500 text-sm mt-1">Available 24/7</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="flex items-start gap-4">
                                    <div class="contact-icon">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 mb-1">Email</h4>
                                        <a href="mailto:info@hotelantik.com" class="text-indigo-600 hover:underline font-medium">info@hotelantik.com</a>
                                        <p class="text-gray-500 text-sm mt-1">Response within 24 hours</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="flex items-start gap-4">
                                    <div class="contact-icon">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 mb-1">Jam Operasional</h4>
                                        <p class="text-gray-600">Buka 24 Jam</p>
                                        <div class="inline-flex items-center gap-2 mt-2 px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium status-badge">
                                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                            Online Now
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Social Media --}}
                        <div class="mt-8">
                            <h4 class="font-bold text-gray-900 mb-4">Follow Us</h4>
                            <div class="flex gap-3">
                                <a href="#" class="social-link" title="WhatsApp">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                    </svg>
                                </a>
                                <a href="#" class="social-link" title="Instagram">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1 .4 2.2.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1 .4-2.2.4-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1-.4-2.2-.1-1.3-.1-1.6-.1-4.8s0-3.6.1-4.8c.1-1.2.2-1.8.4-2.2.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.4-.2 1-.4 2.2-.4 1.2-.1 1.6-.1 4.8-.1M12 0C8.7 0 8.3 0 7.1.1 5.8.1 4.9.3 4.1.6c-.8.3-1.5.7-2.2 1.4C1.3 2.6.9 3.3.6 4.1.3 4.9.1 5.8.1 7.1 0 8.3 0 8.7 0 12s0 3.7.1 4.9c.1 1.3.3 2.1.6 2.9.3.8.7 1.5 1.4 2.2.7.7 1.4 1.1 2.2 1.4.8.3 1.7.5 2.9.6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.3-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.2-1.4.7-.7 1.1-1.4 1.4-2.2.3-.8.5-1.7.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.3-.3-2.1-.6-2.9-.3-.8-.7-1.5-1.4-2.2-.7-.7-1.4-1.1-2.2-1.4-.8-.3-1.7-.5-2.9-.6C15.7 0 15.3 0 12 0z"/>
                                        <path d="M12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zM18.4 4.2c-.8 0-1.4.6-1.4 1.4s.6 1.4 1.4 1.4 1.4-.6 1.4-1.4-.6-1.4-1.4-1.4z"/>
                                    </svg>
                                </a>
                                <a href="#" class="social-link" title="Facebook">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M22.7 0H1.3C.6 0 0 .6 0 1.3v21.4c0 .7.6 1.3 1.3 1.3h11.5v-9.3H9.7v-3.6h3.1V8.4c0-3.1 1.9-4.8 4.7-4.8 1.3 0 2.5.1 2.8.1v3.3h-1.9c-1.5 0-1.8.7-1.8 1.8v2.3h3.6l-.5 3.6h-3.1V24h6.1c.7 0 1.3-.6 1.3-1.3V1.3c0-.7-.6-1.3-1.3-1.3z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- GOOGLE MAPS FULL WIDTH --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="section-badge">FIND US</span>
                <h3 class="text-3xl md:text-4xl font-display font-bold text-gray-900">
                    Lokasi Kami
                </h3>
                <p class="text-gray-600 mt-4">
                    Kunjungi kami di Hotel Antik Soreang, Bandung
                </p>
            </div>
            <div class="map-container" data-aos="fade-up" data-aos-delay="200">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.898499618324!2d107.5193051823203!3d-7.021216050662453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68edd3402b05df%3A0x43d6c885e1a8a086!2sHotel%20Antik%20soreang!5e0!3m2!1sid!2sid!4v1767719653460!5m2!1sid!2sid"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</x-layout>