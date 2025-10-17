{{-- Advisors Section --}}
<section class="py-12 md:py-20 bg-gray-100">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-4 text-gray-800">
                Comité de Asesores
            </h2>

            {{-- Asesores Nacionales --}}
            <div class="mb-12 md:mb-16">
                <h3 class="text-xl md:text-2xl font-bold text-center mb-6 md:mb-8 text-primary">Asesores Nacionales</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 md:gap-8 justify-items-center">
                    @foreach([
                        'Dr. Antonio Roca',
                        'Dr. Juan Carlos Corbera',
                        'Dr. Felipe Torres',
                        'Dr. Dino Nateri',
                        'Dr. Jose Maria Viaña Perez'
                    ] as $advisor)
                        <div class="flex flex-col items-center">
                            <div class="w-24 h-24 md:w-32 md:h-32 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-3">
                                <img src="/placeholder.svg?height=150&width=150"
                                     alt="{{ $advisor }}"
                                     class="w-full h-full object-cover bg-gray-400"
                                     loading="lazy">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-xs md:text-sm">{{ $advisor }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Asesores Internacionales --}}
            <div>
                <h3 class="text-xl md:text-2xl font-bold text-center mb-6 md:mb-8 text-primary">Asesores Internacionales</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4 md:gap-6 justify-items-center">
                    @foreach([
                        ['name' => 'Dr. Luis Scaf', 'country' => 'Colombia'],
                        ['name' => 'Dr. Gerardo Valvecchia', 'country' => 'Argentina'],
                        ['name' => 'Dr. Eduardo Chavez', 'country' => 'México'],
                        ['name' => 'Dr. Jorge Pacheco', 'country' => 'México'],
                        ['name' => 'Dr. Antonio Sierra', 'country' => 'México'],
                        ['name' => 'Dr. Lyle Neywall', 'country' => 'Colombia'],
                        ['name' => 'Dr. David Flikier', 'country' => 'Costa Rica']
                    ] as $advisor)
                        <div class="flex flex-col items-center">
                            <div class="w-20 h-20 md:w-28 md:h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130"
                                     alt="{{ $advisor['name'] }}"
                                     class="w-full h-full object-cover bg-gray-400"
                                     loading="lazy">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-xs md:text-sm">{{ $advisor['name'] }}</p>
                            <p class="text-center text-xs text-gray-600">{{ $advisor['country'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
