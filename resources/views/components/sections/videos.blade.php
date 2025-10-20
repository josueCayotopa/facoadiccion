{{-- Videos Section --}}
<section id="videos" class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-10 md:mb-14 text-gray-800">
                Videos destacados
            </h2>

            @php
                // Reemplaza con tus enlaces reales
                $videos = [
                    ['title' => 'Bienvenida al Congreso', 'url' => 'https://www.youtube.com/watch?v=ysz5S6PUM-U'],
                    ['title' => 'Highlights 2025', 'url' => 'https://youtu.be/dQw4w9WgXcQ'],
                    ['title' => 'Casos de Catarata', 'url' => 'https://www.youtube.com/watch?v=jNQXAC9IVRw'],
                    ['title' => 'Técnicas Avanzadas', 'url' => 'https://vimeo.com/76979871'],
                    ['title' => 'Entrevista Especialistas', 'url' => 'https://www.youtube.com/watch?v=oHg5SJYRHA0'],
                    ['title' => 'Resumen Día 1', 'url' => 'https://youtu.be/aqz-KE-bpKQ'],
                ];

                function yt_id($url) {
                    // Extrae ID de YouTube desde distintos formatos de URL
                    if (preg_match('~youtu\.be/([\w-]{11})~', $url, $m)) return $m[1];
                    if (preg_match('~v=([\w-]{11})~', $url, $m)) return $m[1];
                    if (preg_match('~/embed/([\w-]{11})~', $url, $m)) return $m[1];
                    return null;
                }

                function is_youtube($url) { return strpos($url, 'youtu') !== false; }
                function is_vimeo($url) { return strpos($url, 'vimeo') !== false; }
                function embed_src($url) {
                    if (is_youtube($url)) {
                        $id = yt_id($url);
                        return $id ? "https://www.youtube.com/embed/$id?autoplay=1&rel=0&modestbranding=1" : $url;
                    }
                    if (is_vimeo($url)) {
                        // Extrae ID de Vimeo
                        if (preg_match('~vimeo\.com/(\d+)~', $url, $m)) {
                            return "https://player.vimeo.com/video/{$m[1]}?autoplay=1&title=0&byline=0&portrait=0";
                        }
                    }
                    return $url;
                }
                function thumb_src($url) {
                    if (is_youtube($url)) {
                        $id = yt_id($url);
                        if ($id) return "https://img.youtube.com/vi/$id/hqdefault.jpg";
                    }
                    // Fallback a imagen local genérica
                    return asset('images/portada youtube.png');
                }
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($videos as $video)
                    @php
                        $thumb = thumb_src($video['url']);
                        $embed = embed_src($video['url']);
                    @endphp
                    <article class="video-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
                        <div class="video-media relative">
                            <div class="video-aspect relative w-full pt-[56.25%] bg-gray-100">
                                <div class="video-inner absolute inset-0 flex items-center justify-center bg-black/5">
                                    <img src="{{ $thumb }}" alt="{{ $video['title'] }}" class="w-full h-full object-cover" loading="lazy">
                                    <button class="video-play absolute inset-0 grid place-content-center group" aria-label="Reproducir {{ $video['title'] }}" data-embed="{{ $embed }}">
                                        <span class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-white/90 group-hover:bg-white shadow-xl grid place-content-center transition">
                                            <i class="fas fa-play text-primary text-xl md:text-2xl ml-1"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <button class="video-close hidden absolute top-2 right-2 z-10 bg-white/90 hover:bg-white text-gray-700 rounded-full p-2 shadow" aria-label="Cerrar video">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="p-4 md:p-5">
                            <h3 class="text-lg md:text-xl font-semibold text-gray-900 line-clamp-2">{{ $video['title'] }}</h3>
                            <p class="text-xs text-gray-500 mt-1">Haz clic para reproducir</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
  #videos .video-card { transform-origin: center; }
    #videos .video-card.is-playing { transform: scale(1.02); z-index: 5; }
  /* opcional: cuando está reproduciendo que ocupe más columnas en desktop */
  @media (min-width: 1024px) {
        #videos .video-card.is-playing { grid-column: span 2 / span 2; }
  }
  /* clamp de título sin plugin */
  .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    /* Prevenir pequeñas fugas de 0.5px por escalado */
    #videos .container, #videos .grid { box-sizing: border-box; max-width: 100%; }
    #videos .video-aspect { overflow: hidden; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
  // Reproducir inline con un solo activo
  let current = null;

  const makeIframe = (src) => {
    const iframe = document.createElement('iframe');
    iframe.src = src;
    iframe.title = 'Video player';
    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
    iframe.allowFullscreen = true;
    iframe.className = 'w-full h-full';
    return iframe;
  };

  const stopCard = (card) => {
    if (!card) return;
    const inner = card.querySelector('.video-inner');
    const closeBtn = card.querySelector('.video-close');
    const playBtn = card.querySelector('.video-play');
    const oldFrame = card.querySelector('iframe');
    if (oldFrame) oldFrame.remove();
    // restaurar thumbnail
    if (inner && inner.querySelector('img')) inner.querySelector('img').classList.remove('hidden');
    if (playBtn) playBtn.classList.remove('hidden');
    if (closeBtn) closeBtn.classList.add('hidden');
    card.classList.remove('is-playing');
  };

  document.querySelectorAll('#videos .video-card').forEach((card) => {
    const playBtn = card.querySelector('.video-play');
    const closeBtn = card.querySelector('.video-close');
    const inner = card.querySelector('.video-inner');

    const play = () => {
      // detener el actual
      if (current && current !== card) stopCard(current);
      const embed = playBtn?.getAttribute('data-embed');
      if (!embed || !inner) return;
      const img = inner.querySelector('img');
      if (img) img.classList.add('hidden');
      playBtn.classList.add('hidden');
      const frame = makeIframe(embed);
      inner.appendChild(frame);
      card.classList.add('is-playing');
      closeBtn.classList.remove('hidden');
      current = card;
    };

    const close = () => {
      stopCard(card);
      if (current === card) current = null;
    };

    playBtn?.addEventListener('click', (e) => { e.preventDefault(); play(); });
    closeBtn?.addEventListener('click', (e) => { e.preventDefault(); close(); });
  });

  // Animación on-scroll de tarjetas de video
  if (window.gsap && window.ScrollTrigger) {
    gsap.fromTo('#videos .video-card', { opacity: 0, y: 20 }, {
      opacity: 1, y: 0, duration: 0.55, ease: 'power3.out',
      stagger: { amount: 0.5, grid: 'auto', from: 'start' },
      scrollTrigger: { trigger: '#videos', start: 'top 80%', toggleActions: 'play none none none' }
    });
  }
});
</script>
@endpush
