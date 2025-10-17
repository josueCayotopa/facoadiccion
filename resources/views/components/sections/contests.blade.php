{{-- Contests Section --}}
<section class="py-12 md:py-20 bg-primary text-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-4">
                Concursos para Residentes
            </h2>
            <p class="text-center text-white/80 text-base md:text-lg mb-10 md:mb-16">
                Especialmente diseñados para R1, R2 y R3 de todo el Perú
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                @foreach([
                    [
                        'icon' => 'video',
                        'title' => 'Concurso de Videos Quirúrgicos',
                        'description' => 'Videos de cirugías de catarata para R3 de todo el Perú. Demuestra tu técnica y habilidades quirúrgicas.',
                        'award' => 'Premios para los mejores videos'
                    ],
                    [
                        'icon' => 'file-alt',
                        'title' => 'Trabajos de Investigación',
                        'description' => 'Concurso de trabajos de investigación publicados para R3. Comparte tus hallazgos científicos.',
                        'award' => 'Reconocimiento a la investigación'
                    ],
                    [
                        'icon' => 'lightbulb',
                        'title' => 'Emprendimientos',
                        'description' => 'Concurso de emprendimientos de oftalmólogos jóvenes en prevención de ceguera en el Perú.',
                        'award' => 'Impulsa tu proyecto'
                    ],
                    [
                        'icon' => 'fab fa-tiktok',
                        'title' => 'Concurso de TikToks',
                        'description' => 'Contenido sobre comunicación de oftalmología para R1, R2 y R3. Educa de forma creativa.',
                        'award' => 'Mejor contenido educativo'
                    ]
                ] as $contest)
                    <div class="bg-white/10 rounded-lg p-6 md:p-8 backdrop-blur-sm border border-white/20 hover:bg-white/15 transition-all">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas {{ $contest['icon'] }} text-accent text-2xl md:text-3xl"></i>
                            <h3 class="text-xl md:text-2xl font-bold">{{ $contest['title'] }}</h3>
                        </div>
                        <p class="text-white/90 mb-4 text-sm md:text-base">
                            {{ $contest['description'] }}
                        </p>
                        <div class="flex items-center gap-2 text-accent">
                            <i class="fas fa-trophy"></i>
                            <span class="font-semibold text-sm md:text-base">{{ $contest['award'] }}</span>
                        </div>
                    </div>
                @endforeach

                <div class="bg-white/10 rounded-lg p-6 md:p-8 backdrop-blur-sm border border-white/20 md:col-span-2 hover:bg-white/15 transition-all">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-procedures text-accent text-2xl md:text-3xl"></i>
                        <h3 class="text-xl md:text-2xl font-bold">Cirugías en Vivo - Casos Complejos</h3>
                    </div>
                    <p class="text-white/90 text-sm md:text-base">
                        Cirugías en vivo de casos complejos de catarata, córnea, glaucoma y retina, donde se plantearán
                        los escenarios más adversos que puede enfrentar un experto.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
