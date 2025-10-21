{{-- Videos Section --}}
<section id="videos" class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-10 md:mb-14 text-gray-800">
                Videos destacados
            </h2>

                        <!-- Video único a pantalla ancha (ocupa el espacio aproximado de 6 tarjetas) -->
                        <div class="video-hero bg-black rounded-2xl overflow-hidden shadow-2xl ring-1 ring-black/5">
                            <!-- Contenedor alto para soportar video vertical sin recortes -->
                            <div class="relative w-full min-h-[60vh] md:min-h-[70vh]">
                                <video
                                    src="https://fernandop142.sg-host.com/wp-content/uploads/2025/10/FACOADICCION_v2.mp4"
                                    class="absolute inset-0 w-full h-full object-contain bg-black"
                                    controls
                                    playsinline
                                    preload="metadata"
                                ></video>
                            </div>
                        </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Asegurar que el contenedor no exceda y evitar gaps heredados */
    #videos .video-hero { box-sizing: border-box; max-width: 100%; }
    /* Mejora en iOS para video inline */
    #videos video { display:block; background:#000; }
        /* Altura base ya controlada con min-h; se evita recortar videos verticales */
    </style>
@endpush
