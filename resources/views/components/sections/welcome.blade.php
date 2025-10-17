{{-- Welcome Section --}}
<section id="bienvenida" class="py-8 sm:py-12 md:py-16 lg:py-20 text-gray-800 overflow-hidden relative">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="/images/Mesa de trabajo 1.png"
             alt="Fondo Congreso"
             class="w-full h-full object-cover opacity-40">
        <div class="absolute inset-0 bg-white/70"></div>
    </div>

    {{-- Decorative elements with soft colors --}}
    <div class="absolute top-0 left-0 w-32 h-32 sm:w-48 sm:h-48 md:w-64 md:h-64 bg-accent/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 z-0"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 sm:w-64 sm:h-64 md:w-96 md:h-96 bg-primary/5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2 z-0"></div>
    <div class="absolute top-1/2 left-1/2 w-40 h-40 sm:w-56 sm:h-56 md:w-80 md:h-80 bg-secondary/3 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 z-0"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-7xl mx-auto">
            {{-- Animated Title with 3D Effect --}}
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-black text-center mb-6 sm:mb-8 md:mb-10 lg:mb-12 leading-tight"
                style="text-shadow:
                    1px 1px 0px rgba(221, 17, 143, 0.4),
                    2px 2px 0px rgba(102, 155, 187, 0.4),
                    3px 3px 0px rgba(102, 155, 187, 0.3),
                    4px 4px 0px rgba(102, 155, 187, 0.3),
                    5px 5px 0px rgba(102, 155, 187, 0.2),
                    6px 6px 0px rgba(102, 155, 187, 0.2),
                    7px 7px 10px rgba(0, 0, 0, 0.5)"
                data-aos="fade-down"
                data-aos-duration="1000">
                <span class="block sm:inline">Bienvenidos a</span>
                <span class="text-accent block sm:inline mt-2 sm:mt-0"
                      style="text-shadow:
                          1px 1px 0px hsla(318, 87%, 40%, 0.5),
                          2px 2px 0px rgba(177, 26, 26, 0.4),
                          3px 3px 0px rgba(177, 26, 26, 0.4),
                          4px 4px 0px rgba(177, 26, 26, 0.3),
                          5px 5px 0px rgba(177, 26, 26, 0.3),
                          6px 6px 0px rgba(177, 26, 26, 0.2),
                          7px 7px 0px rgba(177, 26, 26, 0.2),
                          8px 8px 15px rgba(0, 0, 0, 0.6),
                          0 0 20px rgba(192, 23, 178, 0.3)">
                    FACOADICCION 2026
                </span>
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 md:gap-10 lg:gap-12 items-center">
                {{-- Text Content with Carousel --}}
                <div class="order-2 lg:order-1">
                    {{-- Carousel Container --}}
                    <div class="relative overflow-hidden min-h-[350px] sm:min-h-[400px] md:min-h-[450px]">
                        {{-- Slide 1: Introducción --}}
                        <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out"
                             data-slide="0">
                            <div class="space-y-3 sm:space-y-4 md:space-y-6">
                                <div class="flex items-start gap-2 sm:gap-3 mb-3 sm:mb-4">
                                    <i class="fas fa-star text-accent text-lg sm:text-xl md:text-2xl mt-1 flex-shrink-0"></i>
                                    <div>
                                        <span class="text-accent font-bold text-xs sm:text-sm md:text-base uppercase tracking-wide">Primera Edición</span>
                                    </div>
                                </div>
                                <p class="text-sm sm:text-base md:text-lg leading-relaxed text-gray-800">
                                    Es la <strong class="text-primary font-bold">primera edición</strong> del congreso internacional organizado por la Clínica La Luz de Lima - Perú,
                                    que se realizará en un ambiente confortable y amigable con la finalidad de integrar los conocimientos,
                                    las experiencias de los expertos de todo el mundo y las tendencias de la innovación tecnológica de la
                                    industria oftalmológica.
                                </p>
                            </div>
                        </div>

                        {{-- Slide 2: Programa Académico --}}
                        <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out"
                             data-slide="1">
                            <div class="space-y-3 sm:space-y-4 md:space-y-6">
                                <div class="flex items-start gap-2 sm:gap-3 mb-3 sm:mb-4">
                                    <i class="fas fa-graduation-cap text-accent text-xl sm:text-2xl md:text-3xl mt-1 flex-shrink-0"></i>
                                    <div>
                                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-accent">Programa Académico</h3>
                                    </div>
                                </div>
                                <p class="text-sm sm:text-base md:text-lg leading-relaxed text-gray-800">
                                    Ofrecemos un <strong class="text-primary font-bold">programa académico, asistencial y científico</strong> en las subespecialidades oftalmológicas de
                                    Segmento Anterior, Córnea y Cirugía Refractiva, Glaucoma y Retina, que garantice en 3 días la
                                    actualización y fortalecimiento de nuestros conocimientos en beneficio de la capacitación continua
                                    del oftalmólogo peruano para mejorar la atención de nuestros pacientes.
                                </p>
                            </div>
                        </div>

                        {{-- Slide 3: Misión --}}
                        <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out"
                             data-slide="2">
                            <div class="space-y-3 sm:space-y-4 md:space-y-6">
                                <div class="flex items-start gap-2 sm:gap-3 mb-3 sm:mb-4">
                                    <i class="fas fa-heart text-primary text-xl sm:text-2xl md:text-3xl mt-1 animate-pulse flex-shrink-0"></i>
                                    <div>
                                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-primary">Nuestra Misión</h3>
                                    </div>
                                </div>
                                <p class="text-sm sm:text-base md:text-lg leading-relaxed text-gray-800">
                                    Facoadicción construirá una comunidad de seguidores o <strong class="text-primary font-bold">adictos al cuidado de la salud visual</strong>
                                    para disminuir la ceguera en el Perú, trabajando muy cerca y de manera preferente con los residentes
                                    y fellows de todo el país.
                                </p>
                            </div>
                        </div>

                        {{-- Slide 4: Presidente --}}
                        <div class="carousel-slide absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out"
                             data-slide="3">
                            <div class="space-y-3 sm:space-y-4 md:space-y-6">
                                <div class="flex items-start gap-3 sm:gap-4 mb-3 sm:mb-4">
                                    <i class="fas fa-user-md text-accent text-2xl sm:text-3xl md:text-4xl mt-1 flex-shrink-0"></i>
                                    <div>
                                        <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-secondary mb-1 sm:mb-2">Dr. Fermín Silva</h3>
                                        <p class="text-sm sm:text-base md:text-lg text-primary font-bold mb-2 sm:mb-3">Presidente del Congreso</p>
                                    </div>
                                </div>
                                <p class="text-sm sm:text-base md:text-lg text-gray-800 leading-relaxed">
                                    Reconocido oftalmólogo especializado en cirugía de catarata y segmento anterior,
                                    líder en la organización de este importante evento científico.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Navigation Dots Only --}}
                    <div class="flex justify-center gap-2 sm:gap-3 mt-4 sm:mt-6">
                        <button class="carousel-dot w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-gray-400 hover:bg-accent transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-opacity-50"
                                data-dot="0"
                                aria-label="Ir a slide 1"></button>
                        <button class="carousel-dot w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-gray-400 hover:bg-accent transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-opacity-50"
                                data-dot="1"
                                aria-label="Ir a slide 2"></button>
                        <button class="carousel-dot w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-gray-400 hover:bg-accent transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-opacity-50"
                                data-dot="2"
                                aria-label="Ir a slide 3"></button>
                        <button class="carousel-dot w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-gray-400 hover:bg-accent transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-accent focus:ring-opacity-50"
                                data-dot="3"
                                aria-label="Ir a slide 4"></button>
                    </div>
                </div>

                {{-- Image Carousel synchronized with text --}}
                <div class="flex justify-center order-1 lg:order-2 mb-6 lg:mb-0"
                     data-aos="fade-left"
                     data-aos-duration="1000">
                    <div class="relative group">
                        {{-- Glow effect --}}
                        <div class="absolute inset-0 bg-accent/30 rounded-lg blur-xl group-hover:bg-accent/50 transition-all duration-500"></div>

                        {{-- Image container with carousel --}}
                        <div class="relative w-48 h-48 sm:w-56 sm:h-56 md:w-72 md:h-72 lg:w-80 lg:h-80 xl:w-96 xl:h-96 overflow-hidden border-2 sm:border-4 md:border-6 lg:border-8 border-gray-200 shadow-2xl rounded-lg transform transition-all duration-500 hover:scale-105 hover:rotate-2">

                            {{-- Image Slide 1: Logo/Congreso --}}
                            <div class="carousel-image absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out" data-image="0">
                                <img src="/images/logo-facoadiccion.png"
                                     alt="Logo Facoadicción 2026"
                                     class="w-full h-full object-contain p-8 bg-gradient-to-br from-accent/10 to-primary/10 transition-transform duration-700 group-hover:scale-110"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center p-4 sm:p-6">
                                    <div class="text-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                        <p class="text-gray-800 font-bold text-sm sm:text-base lg:text-lg">Primera Edición</p>
                                        <p class="text-accent text-xs sm:text-sm">Facoadicción 2026</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Image Slide 2: Académico/Estudiantes --}}
                            <div class="carousel-image absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out" data-image="1">
                                <img src="/images/graduacion1.jpg"
                                     alt="Programa Académico"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center p-4 sm:p-6">
                                    <div class="text-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                        <p class="text-white font-bold text-sm sm:text-base lg:text-lg">Programa Académico</p>
                                        <p class="text-accent text-xs sm:text-sm">Excelencia Educativa</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Image Slide 3: Clínica/Misión --}}
                            <div class="carousel-image absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out" data-image="2">
                                <img src="/images/LOGO CLÍNICA LA LUZ.png"
                                     alt="Clínica La Luz"
                                     class="w-full h-full object-contain p-8 bg-white transition-transform duration-700 group-hover:scale-110"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center p-4 sm:p-6">
                                    <div class="text-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                        <p class="text-gray-800 font-bold text-sm sm:text-base lg:text-lg">Clínica La Luz</p>
                                        <p class="text-accent text-xs sm:text-sm">Nuestra Misión</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Image Slide 4: Dr. Fermín Silva --}}
                            <div class="carousel-image absolute inset-0 opacity-0 transition-all duration-1000 ease-in-out" data-image="3">
                                <img src="/images/ferminsilva.PNG"
                                     alt="Dr. Fermín Silva - Presidente del Congreso"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center p-4 sm:p-6">
                                    <div class="text-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                        <p class="text-white font-bold text-sm sm:text-base lg:text-lg">Dr. Fermín Silva</p>
                                        <p class="text-accent text-xs sm:text-sm">Presidente del Congreso</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Decorative corner elements - más cerca --}}
                        <div class="absolute top-0 right-0 w-10 h-10 sm:w-12 sm:h-12 md:w-16 md:h-16 border-t-2 border-r-2 sm:border-t-4 sm:border-r-4 border-accent rounded-tr-lg opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="absolute bottom-0 left-0 w-10 h-10 sm:w-12 sm:h-12 md:w-16 md:h-16 border-b-2 border-l-2 sm:border-b-4 sm:border-l-4 border-accent rounded-bl-lg opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    </div>
                </div>
            </div>

            {{-- Statistics or highlights with counting animation --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 md:gap-6 mt-8 sm:mt-10 md:mt-12 lg:mt-16">
                <div class="text-center p-3 sm:p-4 bg-gradient-to-br from-accent/10 to-accent/5 rounded-lg border border-accent/20 hover:shadow-lg hover:border-accent/40 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="100">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-accent mb-1 sm:mb-2">
                        <span class="counter" data-target="3">0</span>
                    </div>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 leading-tight">Días de Congreso</p>
                </div>

                <div class="text-center p-3 sm:p-4 bg-gradient-to-br from-primary/10 to-primary/5 rounded-lg border border-primary/20 hover:shadow-lg hover:border-primary/40 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="200">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-primary mb-1 sm:mb-2">
                        <span class="counter" data-target="50">0</span>+
                    </div>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 leading-tight">Expertos Internacionales</p>
                </div>

                <div class="text-center p-3 sm:p-4 bg-gradient-to-br from-secondary/10 to-secondary/5 rounded-lg border border-secondary/20 hover:shadow-lg hover:border-secondary/40 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="300">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-secondary mb-1 sm:mb-2">
                        <span class="counter" data-target="100">0</span>+
                    </div>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 leading-tight">Ponencias</p>
                </div>

                <div class="text-center p-3 sm:p-4 bg-gradient-to-br from-accent/10 to-accent/5 rounded-lg border border-accent/20 hover:shadow-lg hover:border-accent/40 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="400">
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-accent mb-1 sm:mb-2">
                        <span class="counter" data-target="500">0</span>+
                    </div>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 leading-tight">Asistentes Esperados</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Counter Animation Script --}}
@push('scripts')
<script>
    // Counter animation
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.counter');

        const animateCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            updateCounter();
        };

        // Trigger animation when section is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    if (!counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        animateCounter(counter);
                    }
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    });

    // Carousel functionality - Sincronizado (texto + imagen)
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-slide');
        const images = document.querySelectorAll('.carousel-image');
        const dots = document.querySelectorAll('.carousel-dot');

        let currentSlide = 0;
        let isPlaying = true;
        let autoplayTimeout;

        // Tiempo de lectura: 10 segundos por slide (ajustable)
        const slideTime = 10000; // 10 segundos

        // Mostrar slide específico (texto + imagen sincronizados)
        function showSlide(index) {
            // Ocultar todos los slides de texto
            slides.forEach(slide => {
                slide.style.opacity = '0';
                slide.style.transform = 'translateX(-20px)';
            });

            // Ocultar todas las imágenes
            images.forEach(image => {
                image.style.opacity = '0';
                image.style.transform = 'scale(0.95)';
            });

            // Detectar si es móvil
            const isMobile = window.innerWidth < 640; // sm breakpoint

            // Resetear dots
            dots.forEach(dot => {
                dot.classList.remove('bg-accent', 'w-8', 'sm:w-8', 'w-6', 'scale-125');
                dot.classList.add('bg-gray-400');
                if (isMobile) {
                    dot.classList.add('w-2.5');
                } else {
                    dot.classList.add('w-3');
                }
            });

            // Mostrar slide actual (texto + imagen)
            currentSlide = (index + slides.length) % slides.length;
            slides[currentSlide].style.opacity = '1';
            slides[currentSlide].style.transform = 'translateX(0)';

            images[currentSlide].style.opacity = '1';
            images[currentSlide].style.transform = 'scale(1)';

            // Activar dot correspondiente con animación
            const activeDot = dots[currentSlide];
            activeDot.classList.remove('bg-gray-400', 'w-2.5', 'w-3');
            activeDot.classList.add('bg-accent', 'scale-125');
            if (isMobile) {
                activeDot.classList.add('w-6');
            } else {
                activeDot.classList.add('w-8');
            }
        }

        // Siguiente slide
        function nextSlide() {
            showSlide(currentSlide + 1);
            if (isPlaying) {
                scheduleNextSlide();
            }
        }

        // Programar siguiente slide
        function scheduleNextSlide() {
            clearTimeout(autoplayTimeout);
            autoplayTimeout = setTimeout(nextSlide, slideTime);
        }

        // Pausar autoplay
        function pauseAutoplay() {
            isPlaying = false;
            clearTimeout(autoplayTimeout);
        }

        // Reanudar autoplay
        function resumeAutoplay() {
            if (!isPlaying) {
                isPlaying = true;
                scheduleNextSlide();
            }
        }

        // Click en dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                pauseAutoplay();
                // Reanudar después de 3 segundos
                setTimeout(resumeAutoplay, 3000);
            });
        });

        // Pausar al pasar el mouse sobre el carrusel
        const carouselContainer = document.querySelector('.carousel-slide').parentElement;
        carouselContainer.addEventListener('mouseenter', pauseAutoplay);
        carouselContainer.addEventListener('mouseleave', resumeAutoplay);

        // Inicializar
        showSlide(0);
        scheduleNextSlide();
    });
</script>
@endpush
