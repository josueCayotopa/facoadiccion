{{-- Institutions Section --}}
<section class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-10 md:mb-16 text-gray-800">
                Instituciones Colaboradoras
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-12 items-center justify-items-center mb-12 md:mb-16">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-gray-50 p-6 md:p-8 rounded-lg shadow-md w-full h-24 md:h-32 flex items-center justify-center hover:shadow-lg transition-shadow">
                        <span class="text-lg md:text-2xl font-bold text-gray-400">Institución {{ $i }}</span>
                    </div>
                @endfor
            </div>
            
            <h3 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12 text-gray-800">
                Participación Internacional
            </h3>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 items-center justify-items-center">
                @foreach([
                    'Paraguay',
                    'India',
                    'Costa Rica',
                    'Estados Unidos'
                ] as $country)
                    <div class="flex flex-col items-center">
                        <div class="w-20 h-20 md:w-24 md:h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="{{ $country }}" 
                                 class="w-full h-full object-cover"
                                 loading="lazy">
                        </div>
                        <p class="text-center font-semibold text-gray-700 text-sm md:text-base">{{ $country }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
