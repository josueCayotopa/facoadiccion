<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Facoadicción 2026') }} - @yield('title', 'I Congreso Internacional')</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'I Congreso Internacional de Oftalmología - Facoadicción 2026. Lima, Perú. 5 al 7 de Junio, 2026.')">
    <meta name="keywords" content="oftalmología, congreso, facoadicción, Lima, Perú, catarata, cirugía refractiva">
    <meta name="author" content="Clínica La Luz">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Facoadicción 2026 - I Congreso Internacional')">
    <meta property="og:description" content="@yield('og_description', 'I Congreso Internacional de Oftalmología en Lima, Perú')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Facoadicción 2026')">
    <meta property="twitter:description" content="@yield('twitter_description', 'I Congreso Internacional de Oftalmología')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/og-image.jpg'))">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS - Animate On Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#B11A1A',
                            50: '#FDEAEA',
                            100: '#FBD5D5',
                            200: '#F7ABAB',
                            300: '#F38181',
                            400: '#EF5757',
                            500: '#B11A1A',
                            600: '#8E1515',
                            700: '#6B1010',
                            800: '#470B0B',
                            900: '#240505',
                        },
                        secondary: {
                            DEFAULT: '#0D3049',
                            50: '#E6EDF2',
                            100: '#CCDBE5',
                            200: '#99B7CB',
                            300: '#6693B1',
                            400: '#336F97',
                            500: '#0D3049',
                            600: '#0A263A',
                            700: '#081D2C',
                            800: '#05131D',
                            900: '#030A0F',
                        },
                        accent: {
                            DEFAULT: '#669BBB',
                            50: '#F0F5F8',
                            100: '#E1EBF1',
                            200: '#C3D7E3',
                            300: '#A5C3D5',
                            400: '#87AFC7',
                            500: '#669BBB',
                            600: '#527C96',
                            700: '#3D5D71',
                            800: '#293E4B',
                            900: '#141F26',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Custom Styles -->
    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Animaciones personalizadas */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }

        .animate-slide-in-left {
            animation: slideInLeft 0.6s ease-out;
        }

        .animate-slide-in-right {
            animation: slideInRight 0.6s ease-out;
        }

        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Scrollbar personalizado */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #B11A1A;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #8E1515;
        }

        /* Efectos de hover suaves */
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms;
        }

        /* Sombras personalizadas */
        .shadow-custom {
            box-shadow: 0 10px 40px rgba(177, 26, 26, 0.1);
        }

        .shadow-custom-hover:hover {
            box-shadow: 0 20px 60px rgba(177, 26, 26, 0.2);
        }
    </style>

    @stack('styles')
</head>

<body class="font-sans bg-white text-gray-900 antialiased">

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Scroll to Top Button -->
    <button id="scroll-top-btn"
            class="fixed bottom-8 right-8 bg-primary hover:bg-primary-600 text-white p-4 rounded-full shadow-2xl transition-all opacity-0 invisible z-40"
            aria-label="Volver arriba">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <!-- Scripts -->
    <script>
        // CSRF Token para peticiones AJAX
        window.csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                e.preventDefault();
                const target = document.querySelector(href);

                if (target) {
                    const offset = 80; // Altura del navbar
                    const targetPosition = target.offsetTop - offset;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });

                    // Cerrar menú móvil si está abierto
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Scroll to Top Button
        const scrollTopBtn = document.getElementById('scroll-top-btn');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.remove('opacity-0', 'invisible');
                scrollTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollTopBtn.classList.add('opacity-0', 'invisible');
                scrollTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Toast Notification System
        window.showToast = function(message, type = 'info', duration = 5000) {
            const toastContainer = document.getElementById('toast-container');
            const toast = document.createElement('div');

            const bgColors = {
                success: 'bg-green-500',
                error: 'bg-red-500',
                warning: 'bg-yellow-500',
                info: 'bg-blue-500'
            };

            const icons = {
                success: 'fa-check-circle',
                error: 'fa-exclamation-circle',
                warning: 'fa-exclamation-triangle',
                info: 'fa-info-circle'
            };

            toast.className = `${bgColors[type]} text-white px-6 py-4 rounded-lg shadow-2xl flex items-center gap-3 transform transition-all duration-300 translate-x-full`;
            toast.innerHTML = `
                <i class="fas ${icons[type]} text-xl"></i>
                <span class="flex-1">${message}</span>
                <button onclick="this.parentElement.remove()" class="text-white hover:text-gray-200">
                    <i class="fas fa-times"></i>
                </button>
            `;

            toastContainer.appendChild(toast);

            // Animación de entrada
            setTimeout(() => {
                toast.classList.remove('translate-x-full');
            }, 10);

            // Auto-remover
            setTimeout(() => {
                toast.classList.add('translate-x-full');
                setTimeout(() => toast.remove(), 300);
            }, duration);
        };

        // Lazy Loading Images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img.lazy').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');

                // Cambiar icono
                const icon = mobileMenuBtn.querySelector('i');
                if (icon) {
                    icon.classList.toggle('fa-bars');
                    icon.classList.toggle('fa-times');
                }

                // Prevenir scroll cuando el menú está abierto
                document.body.classList.toggle('overflow-hidden');
            });
        }

        // Animaciones al scroll (Intersection Observer)
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const animateOnScroll = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-animate').forEach(el => {
            animateOnScroll.observe(el);
        });
    </script>

    <!-- AOS - Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: false,
            mirror: true,
            offset: 100
        });
    </script>

    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    {{-- Zona para inyectar modales desde vistas --}}
    @stack('modals')

    {{-- Vite assets (solo JS para no duplicar Tailwind del CDN) --}}
    @vite('resources/js/app.js')

    @stack('scripts')
</body>

</html>