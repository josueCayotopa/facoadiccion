{{-- Advisors Section --}}
<section class="py-12 md:py-20 bg-gray-100">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-5xl font-bold text-center mb-4 gradient-title">
                Comité de Asesores
            </h2>

            {{-- Asesores Nacionales --}}
            <div class="mb-12 md:mb-16">
                <h3 class="text-xl md:text-2xl font-bold text-center mb-6 md:mb-8 gradient-title">Asesores Nacionales</h3>
                <div class="marquee marquee--bleed js-marquee py-6" data-direction="left" data-speed="30" aria-label="Carrusel de asesores nacionales">
                    <div class="marquee__track">
                        <div class="marquee__group flex items-stretch gap-6 md:gap-8">
                            @foreach([
                                'Dr. Antonio Roca',
                                'Dr. Juan Carlos Corbera',
                                'Dr. Felipe Torres',
                                'Dr. Dino Nateri',
                                'Dr. Jose Maria Viaña Perez'
                            ] as $advisor)
                                <div class="flex flex-col items-center avatar-card">
                                    <div class="w-24 h-24 md:w-28 md:h-28 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-3 bg-white avatar-ring">
                                        <img src="/images/avatar.png"
                                            alt="{{ $advisor }}"
                                            class="w-full h-full object-cover avatar-img"
                                            loading="lazy">
                                    </div>
                                    <p class="text-center font-semibold text-gray-800 text-xs md:text-sm">{{ $advisor }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Asesores Internacionales --}}
            <div>
                <h3 class="text-xl md:text-2xl font-bold text-center mb-6 md:mb-8 gradient-title">Asesores Internacionales</h3>
                <div class="marquee marquee--bleed js-marquee marquee--right py-6" data-direction="right" data-speed="32" aria-label="Carrusel de asesores internacionales">
                    <div class="marquee__track">
                        <div class="marquee__group flex items-stretch gap-6 md:gap-8">
                            @foreach([
                                ['name' => 'Dr. Luis Scaf', 'country' => 'Colombia'],
                                ['name' => 'Dr. Gerardo Valvecchia', 'country' => 'Argentina'],
                                ['name' => 'Dr. Eduardo Chavez', 'country' => 'México'],
                                ['name' => 'Dr. Jorge Pacheco', 'country' => 'México'],
                                ['name' => 'Dr. Antonio Sierra', 'country' => 'México'],
                                ['name' => 'Dr. Lyle Neywall', 'country' => 'Colombia'],
                                ['name' => 'Dr. David Flikier', 'country' => 'Costa Rica']
                            ] as $advisor)
                                <div class="flex flex-col items-center avatar-card">
                                    <div class="w-20 h-20 md:w-24 md:h-24 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3 bg-white avatar-ring">
                                        <img src="/images/avatar.png"
                                            alt="{{ $advisor['name'] }}"
                                            class="w-full h-full object-cover avatar-img"
                                            loading="lazy">
                                    </div>
                                    <p class="text-center font-semibold text-gray-800 text-xs md:text-sm">{{ $advisor['name'] }}</p>
                                    <p class="text-center text-[10px] md:text-xs text-gray-600">{{ $advisor['country'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .marquee {
        position: relative;
        overflow: hidden;
        min-height: 140px; /* evitar corte al hacer zoom */
    }
    /* Full-bleed: usa dvw para no incluir el ancho de la barra de scroll y evitar overflow */
    .marquee--bleed {
        margin-left: calc(50% - 50dvw);
        margin-right: calc(50% - 50dvw);
        padding-left: calc(50dvw - 50%);
        padding-right: calc(50dvw - 50%);
        width: 100dvw;
    }
    .marquee__track { display: flex; width: max-content; }
    .marquee__group { display: inline-flex; }
        .marquee__group { gap: 2rem; }
        .avatar-card { min-width: 9rem; /* espacio consistente aunque el nombre sea corto */ }
    .marquee:hover .marquee__track { }


            /* Hover avatar effect */
        .avatar-card .avatar-img {
            transition: transform 300ms ease, filter 300ms ease;
            will-change: transform;
        }
        .avatar-card:hover .avatar-img {
                transform: scale(1.02);
            filter: none;
        }
        .avatar-card .avatar-ring {
            transition: box-shadow 300ms ease;
        }
        .avatar-card:hover .avatar-ring {
            box-shadow: 0 10px 30px rgba(0,0,0,0.15), 0 0 0 4px rgba(177, 26, 26, 0.15) inset;
        }

            /* Elastic scale of entire card */
            .avatar-card { transform: translateZ(0); will-change: transform; }
                .avatar-card.hovered { transform: scale(1.06); }
            .avatar-card.elastic-in { animation: avatar-elastic-in 800ms cubic-bezier(.22,1.4,.36,1) both; }
            .avatar-card.elastic-out { animation: avatar-elastic-out 620ms cubic-bezier(.22,1,.36,1) both; }

            @keyframes avatar-elastic-in {
                0% { transform: scale(1); }
                45% { transform: scale(1.14); }
                70% { transform: scale(1.05); }
                85% { transform: scale(1.10); }
                100% { transform: scale(1.08); }
            }
            @keyframes avatar-elastic-out {
                0% { transform: scale(1.06); }
                40% { transform: scale(0.98); }
                70% { transform: scale(1.02); }
                100% { transform: scale(1); }
            }

    /* Animated gradient title */
    .gradient-title {
        /* fallback color for older browsers */
        color: #111827; /* tailwind gray-800 */
        background: linear-gradient(
            90deg,
            #B11A1A,
            #8f68ff,
            #487bff,
            #8f68ff,
            #B11A1A
        );
        background-size: 200% auto;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: title-gradient-move 3s linear infinite;
    }
    @keyframes title-gradient-move {
        to { background-position: 200% center; }
    }
</style>
@endpush

        @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Elastic hover for avatar cards
                const cards = document.querySelectorAll('.avatar-card');
                cards.forEach(card => {
                    card.addEventListener('mouseenter', () => {
                        card.classList.remove('elastic-out');
                        card.classList.add('hovered');
                        // restart elastic-in animation
                        card.classList.remove('elastic-in');
                        void card.offsetWidth; // reflow
                        card.classList.add('elastic-in');
                    }, { passive: true });

                    card.addEventListener('mouseleave', () => {
                        card.classList.remove('elastic-in');
                        // start elastic-out, keep hovered until animation ends
                        void card.offsetWidth;
                        card.classList.add('elastic-out');
                    }, { passive: true });

                    card.addEventListener('animationend', () => {
                        if (card.classList.contains('elastic-out')) {
                            card.classList.remove('elastic-out');
                            card.classList.remove('hovered');
                        } else if (card.classList.contains('elastic-in')) {
                            card.classList.remove('elastic-in');
                        }
                    });
                });

                // Seamless marquee with single content
                const makeTicker = (container) => {
                    const track = container.querySelector('.marquee__track');
                    const group = track.querySelector('.marquee__group');
                    if (!track || !group) return;

                    // Clone items until track width exceeds container width x2 (buffer)
                    const containerWidth = container.clientWidth;
                    let totalWidth = group.scrollWidth;
                    while (totalWidth < containerWidth * 2) {
                        const clone = group.cloneNode(true);
                        clone.setAttribute('aria-hidden', 'true');
                        track.appendChild(clone);
                        totalWidth += group.scrollWidth;
                    }

                    // Animation state
                    const dir = container.dataset.direction === 'right' ? 1 : -1;
                    const speed = parseFloat(container.dataset.speed || '30'); // px/seg
                    let offset = 0;
                    let rafId;
                    let lastTs = performance.now();
                    let paused = false;

                    const step = (ts) => {
                        const dt = (ts - lastTs) / 1000; // seg
                        lastTs = ts;
                        if (!paused) {
                            offset += dir * speed * dt;
                            const groupWidth = group.scrollWidth;
                            // wrap-around para efecto infinito, usando ancho del primer grupo
                            if (dir < 0) {
                                if (offset <= -groupWidth) {
                                    offset += groupWidth;
                                }
                            } else {
                                if (offset >= 0) {
                                    offset -= groupWidth;
                                }
                            }
                            track.style.transform = `translateX(${offset}px)`;
                        }
                        rafId = requestAnimationFrame(step);
                    };

                    const onEnter = () => { paused = true; };
                    const onLeave = () => { paused = false; lastTs = performance.now(); };
                    container.addEventListener('mouseenter', onEnter);
                    container.addEventListener('mouseleave', onLeave);

                    // Init
                    track.style.willChange = 'transform';
                    requestAnimationFrame((t) => { lastTs = t; step(t); });
                };

                document.querySelectorAll('.js-marquee').forEach(makeTicker);
            });
        </script>
        @endpush
