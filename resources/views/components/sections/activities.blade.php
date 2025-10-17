{{-- Activities Section --}}
<section class="py-12 md:py-20 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-10 md:mb-16 text-gray-800">
                Actividades Académicas
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mb-12">
                @foreach([
                    ['icon' => 'microscope', 'title' => 'Segmento Anterior', 'responsible' => 'Dr. Alejandro Silva'],
                    ['icon' => 'eye', 'title' => 'Córnea', 'responsible' => 'Dr. Fermín Silva'],
                    ['icon' => 'star', 'title' => 'Superficie Ocular', 'responsible' => 'Dra. Luisa Gonzalez'],
                    ['icon' => 'glasses', 'title' => 'Cirugía Refractiva', 'responsible' => 'Por confirmar'],
                    ['icon' => 'circle', 'title' => 'Glaucoma', 'responsible' => 'Dr. Yoaner Martins, Dr. Meiday Julio Blanco'],
                    ['icon' => 'eye-dropper', 'title' => 'Retina', 'responsible' => 'Dr. Eduardo, Dr. Sergio, Dr. Alemani'],
                ] as $activity)
                    <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 hover:shadow-xl transition-shadow">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-{{ $activity['icon'] }} text-primary text-2xl md:text-3xl"></i>
                            <h3 class="text-xl md:text-2xl font-bold text-primary">{{ $activity['title'] }}</h3>
                        </div>
                        <p class="text-gray-700 text-sm md:text-base">Responsable: {{ $activity['responsible'] }}</p>
                    </div>
                @endforeach

                <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 md:col-span-2 hover:shadow-xl transition-shadow">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-robot text-primary text-2xl md:text-3xl"></i>
                        <h3 class="text-xl md:text-2xl font-bold text-primary">Inteligencia Artificial</h3>
                    </div>
                    <p class="text-gray-700 text-sm md:text-base">Responsable: Dr. Edgar Gonzales</p>
                </div>
            </div>
        </div>
    </div>
</section>
