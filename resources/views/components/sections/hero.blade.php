{{-- Hero Section --}}
<section class="relative min-h-screen flex items-center justify-center text-white pt-16 overflow-hidden">
    {{-- Background Image Responsive --}}
    <div class="absolute inset-0 z-0">
        <picture>
            <source media="(max-width: 640px)" srcset="/images/Mesa de trabajo 1.png" />
            <source media="(min-width: 641px)" srcset="/images/Mesa de trabajo 1.png" />
            <img src="/images/Mesa de trabajo 1.png"
                 alt="Background Facoadicción 2026"
                 class="w-full h-full object-cover"
                 loading="eager">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
    </div>

    <div class="container mx-auto px-4 lg:px-8 text-center py-12 md:py-20 relative z-10">
        <div class="max-w-6xl mx-auto">
            {{-- Logo Principal Responsive --}}
            <div class="mb-8 md:mb-12 animate-fade-in">
                <img src="/images/logo-facoadiccion.png"
                     alt="Facoadicción Logo"
                     class="mx-auto w-full max-w-xs md:max-w-2xl lg:max-w-3xl drop-shadow-2xl"
                     loading="eager">
            </div>

            {{-- Event Info Cards --}}
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-12 mb-10 md:mb-14">
                <div class="w-full md:w-auto flex items-center gap-3 md:gap-4 bg-white/10 backdrop-blur-md rounded-full px-6 md:px-8 py-3 md:py-4 border border-white/20 hover:bg-white/20 transition-all">
                    <i class="fas fa-calendar-alt text-accent text-2xl md:text-3xl"></i>
                    <div class="text-left">
                        <p class="text-xs text-white/70 uppercase tracking-wider">Fecha</p>
                        <p class="text-base md:text-xl font-bold text-white">5 al 7 de Junio, 2026</p>
                    </div>
                </div>
                <div class="w-full md:w-auto flex items-center gap-3 md:gap-4 bg-white/10 backdrop-blur-md rounded-full px-6 md:px-8 py-3 md:py-4 border border-white/20 hover:bg-white/20 transition-all">
                    <i class="fas fa-map-marker-alt text-accent text-2xl md:text-3xl"></i>
                    <div class="text-left">
                        <p class="text-xs text-white/70 uppercase tracking-wider">Ubicación</p>
                        <p class="text-base md:text-xl font-bold text-white">Westin Hotel, Lima - Perú</p>
                    </div>
                </div>
            </div>

            {{-- CTA Section --}}
            <div class="flex flex-col items-center gap-4 md:gap-5">
                <button id="registro-btn" class="group relative bg-primary hover:bg-primary/90 text-white px-8 md:px-16 py-4 md:py-6 rounded-full text-lg md:text-2xl font-bold shadow-2xl transition-all hover:scale-105 hover:shadow-primary/50 flex items-center gap-3 md:gap-4 border-2 border-primary hover:border-white/30 w-full md:w-auto justify-center">
                    <i class="fas fa-bell text-xl md:text-2xl group-hover:animate-pulse"></i>
                    <span class="text-center">Notificarme cuando abran inscripciones</span>
                </button>
                <p class="text-white/70 text-sm md:text-lg font-light text-center px-4">
                    Las inscripciones se abrirán próximamente • Mantente informado
                </p>
            </div>

            {{-- Features Icons --}}
            <div class="mt-8 md:mt-12 flex flex-wrap items-center justify-center gap-4 md:gap-8 text-white/60 px-4">
                <div class="flex items-center gap-2">
                    <i class="fas fa-users text-sm md:text-base"></i>
                    <span class="text-xs md:text-sm">Expertos Internacionales</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-microscope text-sm md:text-base"></i>
                    <span class="text-xs md:text-sm">Cirugías en Vivo</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-trophy text-sm md:text-base"></i>
                    <span class="text-xs md:text-sm">Concursos</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce z-10 hidden md:block">
        <div class="w-8 h-12 border-2 border-white/40 rounded-full flex items-start justify-center p-2">
            <div class="w-1.5 h-4 bg-white/60 rounded-full animate-pulse"></div>
        </div>
    </div>
</section>
