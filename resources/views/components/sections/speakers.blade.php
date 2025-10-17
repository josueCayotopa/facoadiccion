{{-- Speakers Section --}}
<section class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-10 md:mb-16 text-gray-800">
                Profesores Invitados
            </h2>

            <div class="space-y-8 md:space-y-12">
                {{-- Profesores de La Luz --}}
                <div>
                    <h3 class="text-xl md:text-2xl font-bold text-primary mb-4 md:mb-6 text-center">Profesores de La Luz</h3>
                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 text-center">
                            @foreach([
                                'Dr. Fermín Silva', 'Dr. Alejandro Silva', 'Dr. Edgar Gonzales', 'Dra. Luisa Gonzales',
                                'Dr. Victor Viaña', 'Dr. Roberto Valvuena', 'Dr. Jorge Vega', 'Dra. Evelyn Eneque',
                                'Dra. Fabiola Custodio', 'Dr. Yoaner Martin', 'Dr. Sergio Sanchez', 'Dr. Ernesto Alimañy Rubio',
                                'Dr. Eduardo Zans', 'Dra. Marita Masedo'
                            ] as $speaker)
                                <div class="text-gray-700 text-sm md:text-base py-2">{{ $speaker }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Ex Fellows --}}
                <div>
                    <h3 class="text-xl md:text-2xl font-bold text-primary mb-4 md:mb-6 text-center">Profesores Ex-Fellows</h3>
                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 text-center">
                            @foreach([
                                'Dr. Raul Plasencia', 'Dra. Claudia Sotomayor', 'Dr. Carlos Ortega', 'Dr. Eduardo Tarazona',
                                'Dr. Klever Apolo', 'Dra. Zulema', 'Dr. Jose Luis', 'Dr. Juan Carlos Hanampa'
                            ] as $speaker)
                                <div class="text-gray-700 text-sm md:text-base py-2">{{ $speaker }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Profesores Nacionales --}}
                <div>
                    <h3 class="text-xl md:text-2xl font-bold text-primary mb-4 md:mb-6 text-center">Profesores Nacionales (Perú)</h3>
                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 text-center">
                            @foreach([
                                'Dr. Felipe Torres', 'Dr. Edmar Uribe', 'Dr. Cristian Beker', 'Dr. Jorge Velasco',
                                'Dr. Jorge Ruiz', 'Dra. Karina Arellano', 'Dr. Cesar Diaz', 'Dra. Daniela Roca',
                                'Dr. JC Corbera', 'Dr. Miguel Guzman', 'Dr. Antonio Roca', 'Dr. Carlos Wong Jr',
                                'Dra. Vanesa Pongo'
                            ] as $speaker)
                                <div class="text-gray-700 text-sm md:text-base py-2">{{ $speaker }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Profesores Internacionales --}}
                <div>
                    <h3 class="text-xl md:text-2xl font-bold text-primary mb-4 md:mb-6 text-center">Profesores Internacionales</h3>
                    <div class="bg-gray-50 rounded-lg p-4 md:p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4">
                            @foreach([
                                ['name' => 'Dr. David Flikier', 'country' => 'Costa Rica'],
                                ['name' => 'Dr. Jorge Pacheco', 'country' => 'México'],
                                ['name' => 'Dr. Antonio Sierra Acevedo', 'country' => 'México'],
                                ['name' => 'Dr. Luis Scaf', 'country' => 'Colombia'],
                                ['name' => 'Dr. Lyle Neywall', 'country' => 'Colombia'],
                                ['name' => 'Dr. Gerardo Valvecchia', 'country' => 'Argentina'],
                                ['name' => 'Dra. Bruna Ventura', 'country' => 'Brasil'],
                                ['name' => 'Dr. Carlos Arce', 'country' => 'Brasil'],
                                ['name' => 'Dr. Lusio Maranhao', 'country' => 'Brasil'],
                                ['name' => 'Dr. Pedro Bertino', 'country' => 'Brasil'],
                                ['name' => 'Dr. Fernando Soler', 'country' => 'España'],
                                ['name' => 'Dr. Agarwal', 'country' => 'India'],
                                ['name' => 'Dr. Ay Kamed', 'country' => 'Canadá'],
                                ['name' => 'Dr. Paolo Ferrara', 'country' => 'Brasil'],
                                ['name' => 'Dr. Ibrain Piloto', 'country' => 'Cuba'],
                                ['name' => 'Dr. Raul Hernandez', 'country' => 'Cuba']
                            ] as $speaker)
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold text-sm md:text-base">{{ $speaker['name'] }}</span>
                                    <span class="text-gray-600 text-xs md:text-sm">{{ $speaker['country'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
