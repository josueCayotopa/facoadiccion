{{-- Footer Component --}}
<footer class="bg-primary text-white py-8 md:py-12">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-6 md:mb-8">
                <h3 class="text-2xl md:text-3xl font-bold mb-3 md:mb-4">
                    <span class="text-white">FACO</span><span class="text-white/80">ADICCIÓN</span> 2026
                </h3>
                <p class="text-white/80 mb-2 text-sm md:text-base">
                    I Congreso Internacional de Cirugía de Catarata y Segmento Anterior
                </p>
                <p class="text-white/70 text-xs md:text-sm">
                    5 al 7 de Junio, 2026 • Westin Hotel, Lima - Perú
                </p>
            </div>

            {{-- Social Media Icons --}}
            <div class="flex justify-center gap-4 md:gap-6 mb-6 md:mb-8">
                <a href="#" class="w-10 h-10 md:w-12 md:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors" aria-label="Instagram">
                    <i class="fab fa-instagram text-lg md:text-xl"></i>
                </a>
                <a href="#" class="w-10 h-10 md:w-12 md:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors" aria-label="Facebook">
                    <i class="fab fa-facebook text-lg md:text-xl"></i>
                </a>
                <a href="#" class="w-10 h-10 md:w-12 md:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors" aria-label="TikTok">
                    <i class="fab fa-tiktok text-lg md:text-xl"></i>
                </a>
                <a href="#" class="w-10 h-10 md:w-12 md:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors" aria-label="YouTube">
                    <i class="fab fa-youtube text-lg md:text-xl"></i>
                </a>
            </div>

            {{-- Copyright --}}
            <div class="border-t border-white/20 pt-6 md:pt-8 text-center text-xs md:text-sm text-white/60">
                <p>&copy; {{ date('Y') }} Facoadicción. Todos los derechos reservados.</p>
                <p class="mt-2">Organizado por Clínica La Luz y La Luz Educa</p>
            </div>
        </div>
    </div>
</footer>
