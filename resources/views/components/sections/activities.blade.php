{{-- Activities Section --}}
<section id="activities" class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-10 md:mb-16 text-gray-800">
                Actividades Académicas
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mb-12">
                @foreach ([
                    ['icon' => 'microscope', 'title' => 'Segmento Anterior', 'responsible' => 'Dr. Alejandro Silva'],
                    ['icon' => 'eye', 'title' => 'Córnea', 'responsible' => 'Dr. Fermín Silva'],
                    ['icon' => 'star', 'title' => 'Superficie Ocular', 'responsible' => 'Dra. Luisa Gonzalez'],
                    ['icon' => 'glasses', 'title' => 'Cirugía Refractiva', 'responsible' => 'Por confirmar'],
                    ['icon' => 'circle', 'title' => 'Glaucoma', 'responsible' => 'Dr. Yoaner Martins, Dr. Meiday Julio Blanco'],
                    ['icon' => 'eye-dropper', 'title' => 'Retina', 'responsible' => 'Dr. Eduardo, Dr. Sergio, Dr. Alemani']
                ] as $activity)
                    <div class="act-card bg-white rounded-lg shadow-lg p-6 md:p-8 hover:shadow-xl transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-{{ $activity['icon'] }} text-primary text-2xl md:text-3xl"></i>
                            <h3 class="text-xl md:text-2xl font-bold text-primary">{{ $activity['title'] }}</h3>
                        </div>
                        @php
                            $responsibles = array_map('trim', explode(',', $activity['responsible']));
                        @endphp
                        <div class="resp-list flex flex-wrap items-center gap-3">
                            @foreach ($responsibles as $resp)
                                <div
                                    class="resp-chip flex items-center gap-2 bg-gray-50 border border-gray-200 rounded-full pl-1 pr-3 py-1">
                                    <img src="/images/avatar.png" alt="{{ $resp }}"
                                        class="w-7 h-7 rounded-full ring-2 ring-primary/20 bg-white object-cover"
                                        loading="lazy">
                                    <span class="text-gray-700 text-sm md:text-base">{{ $resp }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <div
                    class="act-card bg-white rounded-lg shadow-lg p-6 md:p-8 md:col-span-2 hover:shadow-xl transition-shadow">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-robot text-primary text-2xl md:text-3xl"></i>
                        <h3 class="text-xl md:text-2xl font-bold text-primary">Inteligencia Artificial</h3>
                    </div>
                    <div class="resp-list flex flex-wrap items-center gap-3">
                        <div
                            class="resp-chip flex items-center gap-2 bg-gray-50 border border-gray-200 rounded-full pl-1 pr-3 py-1">
                            <img src="/images/avatar.png" alt="Dr. Edgar Gonzales"
                                class="w-7 h-7 rounded-full ring-2 ring-primary/20 bg-white object-cover"
                                loading="lazy">
                            <span class="text-gray-700 text-sm md:text-base">Dr. Edgar Gonzales</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
    <style>
        /* estado inicial para animaciones */
        #activities .act-card {
            opacity: 0;
            transform: translateY(20px);
        }

        /* micro-detalles chips */
        .resp-chip {
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .resp-chip:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, .08);
        }

        .resp-list {
            margin-top: .25rem;
        }

        @media (min-width: 768px) {
            .resp-list {
                margin-top: .375rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.gsap && window.ScrollTrigger) {
                const cards = gsap.utils.toArray('#activities .act-card');
                cards.forEach((card) => {
                    gsap.fromTo(card,
                        { opacity: 0, y: 20 },
                        {
                            opacity: 1,
                            y: 0,
                            duration: 0.55,
                            ease: 'power3.out',
                            scrollTrigger: {
                                trigger: card,
                                start: 'top 85%',
                                end: 'bottom 15%',
                                toggleActions: 'play reverse play reverse', // entra y sale
                                once: false
                            }
                        }
                    );
                });
            }
        });
    </script>
@endpush
