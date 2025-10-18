{{-- Facoadicción Info Section --}}
<section id="info-facoadiccion" class="py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-stretch">
                <!-- Columna 1: título + texto introductorio -->
                <div class="flex flex-col justify-center">
                    <div class="mb-5 md:mb-6">
                        <h2 class="ifa-title text-4xl md:text-6xl font-black mb-2 md:mb-3 text-left">
                            <span class="text-primary">FACO</span><span class="text-gray-800">ADICCIÓN</span>
                        </h2>
                        <p class="ifa-subtitle text-xl md:text-2xl text-accent font-semibold text-left">
                            Construyendo una comunidad de adictos a la excelencia quirúrgica
                        </p>
                    </div>
                    <p class="ifa-intro text-base md:text-lg text-gray-700 leading-relaxed">
                        Facoadicción es más que un congreso, es una experiencia inmersiva en el mundo de la cirugía de catarata
                        y segmento anterior. Reunimos a los mejores especialistas internacionales para compartir conocimientos,
                        técnicas innovadoras y casos clínicos que desafían los límites de la oftalmología moderna.
                    </p>
                </div>

                <!-- Columna 2: tarjeta informativa con lista en carrusel vertical -->
                <div class="ifa-card bg-primary text-white rounded-2xl md:rounded-3xl p-6 md:p-10 shadow-2xl">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">¿Qué es Facoadicción?</h3>
                    <p class="text-base md:text-lg leading-relaxed mb-5 md:mb-6 opacity-95">
                        Un congreso internacional dedicado exclusivamente a la cirugía de facoemulsificación, técnicas avanzadas
                        de catarata, y las últimas innovaciones en segmento anterior. Durante tres días intensivos, los participantes
                        tendrán acceso a:
                    </p>

                    <!-- Carrusel vertical (ticker) -->
                    <div class="vt js-vt" data-speed="28" data-visible="3" aria-live="polite">
                        <ul class="vt__track">
                            <li class="vt__item">
                                <div class="vt__chip">
                                    <i class="fas fa-check-circle text-primary"></i>
                                    <span>Conferencias magistrales de expertos internacionales</span>
                                </div>
                            </li>
                            <li class="vt__item">
                                <div class="vt__chip">
                                    <i class="fas fa-check-circle text-primary"></i>
                                    <span>Cirugías en vivo con transmisión en alta definición</span>
                                </div>
                            </li>
                            <li class="vt__item">
                                <div class="vt__chip">
                                    <i class="fas fa-check-circle text-primary"></i>
                                    <span>Talleres prácticos con simuladores de última generación</span>
                                </div>
                            </li>
                            <li class="vt__item">
                                <div class="vt__chip">
                                    <i class="fas fa-check-circle text-primary"></i>
                                    <span>Presentación de casos clínicos complejos</span>
                                </div>
                            </li>
                            <li class="vt__item">
                                <div class="vt__chip">
                                    <i class="fas fa-check-circle text-primary"></i>
                                    <span>Networking con líderes de opinión en oftalmología</span>
                                </div>
                            </li>
                        </ul>
                        <!-- Fades superiores/inferiores -->
                        <div class="vt__fade vt__fade--top" aria-hidden="true"></div>
                        <div class="vt__fade vt__fade--bottom" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Ticker vertical elegante */
    .vt { position: relative; overflow: hidden; }
    .vt__track { display: flex; flex-direction: column; row-gap: .75rem; will-change: transform; }
    .vt__item { list-style: none; }
    .vt__chip {
        display: flex; align-items: center; gap: .625rem;
        background: linear-gradient(180deg, rgba(255,255,255,.96), rgba(255,255,255,.90));
        color: #0D3049; /* secondary */
        border-radius: .875rem; padding: .75rem .9rem;
        box-shadow: 0 6px 18px rgba(0,0,0,.12);
        font-size: .95rem; font-weight: 600;
    }
    .vt__chip i { font-size: 1rem; background:#fff; border-radius:9999px; padding:2px; }
    .vt__fade { position:absolute; left:0; right:0; height:2.25rem; pointer-events:none; }
    .vt__fade--top { top:0; background: linear-gradient(to bottom, rgba(255,255,255,0.15), rgba(255,255,255,0)); }
    .vt__fade--bottom { bottom:0; background: linear-gradient(to top, rgba(255,255,255,0.15), rgba(255,255,255,0)); }

    /* Mejoras visuales generales en la tarjeta */
    .bg-primary { background-image: linear-gradient(135deg, #B11A1A 0%, #8E1515 100%); }
    .bg-primary h3 { letter-spacing: .2px; }

    /* Estados iniciales para animaciones */
    #info-facoadiccion .ifa-title,
    #info-facoadiccion .ifa-subtitle,
    #info-facoadiccion .ifa-intro,
    #info-facoadiccion .ifa-card { opacity: 0; transform: translateY(24px); }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
  const reflow = (el) => el && el.getBoundingClientRect();

  const initVt = (root) => {
    const track = root.querySelector('.vt__track');
    if (!track) return;

    // Medir altura de paso (item + gap)
    const items = Array.from(track.children);
    if (items.length === 0) return;

    // Calcular stepHeight usando la distancia entre top del 1º y 2º (incluye gap). Si solo hay uno, usar su altura.
    let stepHeight;
    const r1 = items[0].getBoundingClientRect();
    let gap = 0;
    if (items[1]) {
      const r2 = items[1].getBoundingClientRect();
      stepHeight = r2.top - r1.top;
    } else {
      stepHeight = r1.height;
    }

    const visible = parseInt(root.dataset.visible || '3', 10);
    root.style.height = Math.max(1, visible) * stepHeight + 'px';

    // Clonar hasta cubrir 2x la altura visible
    let totalHeight = track.scrollHeight;
    const target = stepHeight * visible * 2;
    while (totalHeight < target) {
      for (const node of items) {
        const clone = node.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        track.appendChild(clone);
      }
      totalHeight = track.scrollHeight;
    }

    // Animación
    const speed = parseFloat(root.dataset.speed || '24'); // px/s
    let offset = 0;
    let paused = false;
    let last = performance.now();
    let raf;

    const loop = (ts) => {
      const dt = (ts - last) / 1000; last = ts;
      if (!paused) {
        offset -= speed * dt; // hacia arriba
        if (Math.abs(offset) >= stepHeight) {
          // Mover el primer hijo al final y ajustar offset
          const first = track.firstElementChild;
          if (first) {
            track.appendChild(first);
            offset += stepHeight;
            // Forzar reflow para evitar artefactos
            reflow(track);
          }
        }
        track.style.transform = `translateY(${offset}px)`;
      }
      raf = requestAnimationFrame(loop);
    };

    const onEnter = () => { paused = true; };
    const onLeave = () => { paused = false; last = performance.now(); };
    root.addEventListener('mouseenter', onEnter);
    root.addEventListener('mouseleave', onLeave);

    track.style.willChange = 'transform';
    requestAnimationFrame((t) => { last = t; loop(t); });
  };

  document.querySelectorAll('.js-vt').forEach(initVt);

    // Animaciones de entrada con GSAP (ya está cargado en el layout)
    if (window.gsap && window.ScrollTrigger) {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: '#info-facoadiccion',
                start: 'top 70%', // cuando la sección entra 30% en viewport
                toggleActions: 'play none none none'
            }
        });

        tl.to('#info-facoadiccion .ifa-title', { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' })
            .to('#info-facoadiccion .ifa-subtitle', { opacity: 1, y: 0, duration: 0.55, ease: 'power3.out' }, '-=0.35')
            .to('#info-facoadiccion .ifa-intro', { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' }, '-=0.25')
            .to('#info-facoadiccion .ifa-card', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.25');

        // Sutileza: parallax leve al hacer scroll para la tarjeta
        gsap.to('#info-facoadiccion .ifa-card', {
            y: -10,
            ease: 'none',
            scrollTrigger: {
                trigger: '#info-facoadiccion',
                start: 'top bottom',
                end: 'bottom top',
                scrub: 0.5
            }
        });
    }
});
</script>
@endpush
