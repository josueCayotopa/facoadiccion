{{-- Welcome Section --}}
<section id="bienvenida" class="py-12 md:py-20 bg-primary text-white overflow-hidden relative">
    {{-- Decorative elements --}}
    <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="max-w-6xl mx-auto">
            {{-- Animated Title --}}
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-8 md:mb-12"
                data-aos="fade-down"
                data-aos-duration="1000">
                Bienvenidos a <span class="text-accent">Facoadicción 2026</span>
            </h2>

            <div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-center">
                {{-- Text Content with staggered animations --}}
                <div class="space-y-4 md:space-y-6 order-2 lg:order-1">
                    <p class="text-base md:text-lg leading-relaxed"
                       data-aos="fade-right"
                       data-aos-delay="100"
                       data-aos-duration="800">
                        Es la <strong class="text-accent">primera edición</strong> del congreso internacional organizado por la Clínica La Luz de Lima - Perú,
                        que se realizará en un ambiente confortable y amigable con la finalidad de integrar los conocimientos,
                        las experiencias de los expertos de todo el mundo y las tendencias de la innovación tecnológica de la
                        industria oftalmológica.
                    </p>

                    <p class="text-base md:text-lg leading-relaxed"
                       data-aos="fade-right"
                       data-aos-delay="200"
                       data-aos-duration="800">
                        Ofrecemos un <strong class="text-accent">programa académico, asistencial y científico</strong> en las subespecialidades oftalmológicas de
                        Segmento Anterior, Córnea y Cirugía Refractiva, Glaucoma y Retina, que garantice en 3 días la
                        actualización y fortalecimiento de nuestros conocimientos en beneficio de la capacitación continua
                        del oftalmólogo peruano para mejorar la atención de nuestros pacientes.
                    </p>

                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 md:p-6 border border-white/20"
                         data-aos="fade-right"
                         data-aos-delay="300"
                         data-aos-duration="800">
                        <p class="text-base md:text-lg leading-relaxed flex items-start gap-3">
                            <i class="fas fa-heart text-accent text-2xl mt-1 animate-pulse"></i>
                            <span>
                                Facoadicción construirá una comunidad de seguidores <strong class="text-accent">adictos al cuidado de la salud visual</strong>
                                para disminuir la ceguera en el Perú, trabajando muy cerca y de manera preferente con los residentes
                                de todo el país.
                            </span>
                        </p>
                    </div>

                    {{-- Signature with animation --}}
                    <div class="mt-6 md:mt-8 flex items-center gap-4"
                         data-aos="fade-right"
                         data-aos-delay="400"
                         data-aos-duration="800">
                        <div class="flex-1">
                            <p class="text-lg md:text-xl font-bold text-accent">Dr. Fermín Silva</p>
                            <p class="text-sm text-white/80">Presidente del Congreso</p>
                        </div>
                        <div class="hidden md:block w-20 h-1 bg-accent/50"></div>
                    </div>
                </div>

                {{-- Image with hover effects and animations --}}
                <div class="flex justify-center order-1 lg:order-2"
                     data-aos="fade-left"
                     data-aos-duration="1000">
                    <div class="relative group">
                        {{-- Glow effect --}}
                        <div class="absolute inset-0 bg-accent/30 rounded-lg blur-xl group-hover:bg-accent/50 transition-all duration-500"></div>

                        {{-- Image container --}}
                        <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 overflow-hidden border-4 md:border-8 border-white shadow-2xl rounded-lg transform transition-all duration-500 hover:scale-105 hover:rotate-2">
                            <img src="/images/ferminsilva.PNG"
                                 alt="Dr. Fermín Silva - Presidente del Congreso"
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                 loading="lazy">

                            {{-- Overlay on hover --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-primary via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end justify-center p-6">
                                <div class="text-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-500">
                                    <p class="text-white font-bold text-lg">Dr. Fermín Silva</p>
                                    <p class="text-accent text-sm">Presidente del Congreso</p>
                                </div>
                            </div>
                        </div>

                        {{-- Decorative corner elements --}}
                        <div class="absolute -top-2 -right-2 w-16 h-16 border-t-4 border-r-4 border-accent rounded-tr-lg opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        <div class="absolute -bottom-2 -left-2 w-16 h-16 border-b-4 border-l-4 border-accent rounded-bl-lg opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                    </div>
                </div>
            </div>

            {{-- Statistics or highlights with counting animation --}}
            {{-- <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mt-12 md:mt-16">
                <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="100">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">
                        <span class="counter" data-target="3">0</span>
                    </div>
                    <p class="text-xs md:text-sm text-white/80">Días de Congreso</p>
                </div>

                <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="200">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">
                        <span class="counter" data-target="30">0</span>+
                    </div>
                    <p class="text-xs md:text-sm text-white/80">Expertos Internacionales</p>
                </div>

                <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="300">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">
                        <span class="counter" data-target="100">0</span>+
                    </div>
                    <p class="text-xs md:text-sm text-white/80">Ponencias</p>
                </div>

                <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-300"
                     data-aos="zoom-in"
                     data-aos-delay="400">
                    <div class="text-3xl md:text-4xl font-bold text-accent mb-2">
                        <span class="counter" data-target="500">0</span>+
                    </div>
                    <p class="text-xs md:text-sm text-white/80">Asistentes Esperados</p>
                </div>
            </div> --}}
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
</script>
@endpush
