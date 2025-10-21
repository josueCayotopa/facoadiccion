{{-- Institutions Section --}}
<section class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-10 md:mb-16 text-gray-800">
                Instituciones Colaboradoras
            </h2>

            @php
                $acadDir = public_path('images/Instituciones academicas');
                $oftDir  = public_path('images/Instituciones Oftalmologicas');
                $pattern = '/*.{png,jpg,jpeg,svg,webp}';
                $toUrl = function ($abs) {
                    $rel = str_replace(public_path(), '', $abs);
                    return asset(ltrim($rel, '\\/'));
                };
                $nice = function ($abs) {
                    $name = pathinfo($abs, PATHINFO_FILENAME);
                    $name = str_replace(['_', '-'], ' ', $name);
                    return ucwords(trim($name));
                };
                $acad = is_dir($acadDir) ? glob($acadDir . $pattern, GLOB_BRACE) : [];
                $oft  = is_dir($oftDir)  ? glob($oftDir  . $pattern, GLOB_BRACE) : [];
            @endphp

            {{-- Instituciones Académicas --}}
            <h3 class="text-2xl md:text-3xl font-bold text-center mb-6 md:mb-8 text-gray-900">Instituciones Académicas</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 md:gap-8 items-center justify-items-center mb-10 md:mb-14">
                @forelse ($acad as $logo)
                    <div class="w-full h-24 md:h-28 bg-gray-50 border border-gray-100 rounded-xl shadow-sm flex items-center justify-center p-4 hover:shadow-md transition">
                        <img src="{{ $toUrl($logo) }}" alt="Logo {{ $nice($logo) }}" class="max-h-full max-w-full object-contain transition" loading="lazy">
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500">No hay logos en “images/Instituciones academicas”.</p>
                @endforelse
            </div>

            {{-- Instituciones Oftalmológicas --}}
            <h3 class="text-2xl md:text-3xl font-bold text-center mb-6 md:mb-8 text-gray-900">Instituciones Oftalmológicas</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 md:gap-8 items-center justify-items-center">
                @forelse ($oft as $logo)
                    <div class="w-full h-24 md:h-28 bg-gray-50 border border-gray-100 rounded-xl shadow-sm flex items-center justify-center p-4 hover:shadow-md transition">
                        <img src="{{ $toUrl($logo) }}" alt="Logo {{ $nice($logo) }}" class="max-h-full max-w-full object-contain transition" loading="lazy">
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500">No hay logos en “images/Instituciones Oftalmologicas”.</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
