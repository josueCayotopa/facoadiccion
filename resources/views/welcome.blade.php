@extends('layouts.app')

@section('title', 'I Congreso Internacional')
@section('description', 'I Congreso Internacional de Oftalmología - Facoadicción 2026. Lima, Perú. 5 al 7 de Junio, 2026.')

@section('content')

    {{-- Navbar --}}
    @include('components.navigations.navbar')

    {{-- Hero Section --}}
    @include('components.sections.hero')

    {{-- Welcome Section --}}
    @include('components.sections.welcome')

    {{-- Organizer Section --}}
    @include('components.sections.organizer')

    {{-- Committee Section --}}
    @include('components.sections.committee')

    {{-- Advisors Section --}}
    @include('components.sections.advisors')

    {{-- Facoadicción Info Section --}}
    @include('components.sections.info-facoadiccion')

    {{-- Activities Section --}}
    @include('components.sections.activities')

    {{-- Contests Section --}}
    @include('components.sections.contests')

    {{-- Speakers Section --}}
    @include('components.sections.speakers')

    {{-- Program Section --}}
    @include('components.sections.program')

    {{-- Institutions Section --}}
    @include('components.sections.institutions')

    {{-- Footer --}}
    @include('components.navigations.footer')

@endsection

@push('scripts')
<script>
    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offset = 64;
                const targetPosition = target.offsetTop - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Registro buttons (fallback solo si no existe el nuevo modal)
    const registroBtns = [
        document.getElementById('registro-btn'),
        document.getElementById('registro-hero-btn')
    ];

    if (!document.getElementById('registro-modal')) {
        registroBtns.forEach(btn => {
            if (btn) {
                btn.addEventListener('click', () => {
                    alert('¡Gracias por tu interés en Facoadicción 2026!\n\nLas inscripciones se abrirán próximamente. Te notificaremos cuando estén disponibles.\n\nMientras tanto, síguenos en nuestras redes sociales para estar al día con todas las novedades del congreso.');
                });
            }
        });
    }
</script>
@endpush

@push('modals')
    <x-ui.modal id="registro-modal" data-endpoint="https://formbold.com/s/oDRlV">
        <div class="px-6 md:px-8 py-6 md:py-8 text-gray-800">
            <div class="flex items-center gap-3 mb-4">
                <i class="fas fa-bell text-primary text-2xl"></i>
                <h3 id="registro-modal-title" class="text-xl md:text-2xl font-bold">Avísenme cuando abran las inscripciones</h3>
            </div>
            <p class="text-sm md:text-base text-gray-600 mb-5">Déjanos tu correo y te notificaremos apenas se habiliten las inscripciones. Puedes darte de baja en cualquier momento.</p>

            <form id="registro-form" class="space-y-4" novalidate action="https://formbold.com/s/oDRlV" method="POST">
                <div>
                    <label for="registro-nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                    <input id="registro-nombre" name="name" type="text" autocomplete="name"
                           class="w-full rounded-lg border border-gray-300 focus:border-primary focus:ring-primary px-4 py-3 text-base"
                           placeholder="Tu nombre" />
                </div>
                <div>
                    <label for="registro-email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                    <input id="registro-email" name="email" type="email" inputmode="email" autocomplete="email" required
                           class="w-full rounded-lg border border-gray-300 focus:border-primary focus:ring-primary px-4 py-3 text-base"
                           placeholder="tucorreo@ejemplo.com" />
                    <p id="registro-error" class="mt-2 text-sm text-red-600 hidden">Ingresa un correo válido.</p>
                </div>
                <button type="submit" id="registro-submit" class="w-full bg-primary hover:bg-primary/90 text-white font-semibold px-6 py-3 rounded-lg flex items-center justify-center gap-2 transition-colors">
                    <i class="fas fa-paper-plane"></i>
                    <span>Quiero que me avisen</span>
                </button>
                <p id="registro-success" class="mt-2 text-sm text-green-600 hidden">¡Listo! Te avisaremos apenas abran las inscripciones.</p>
            </form>
            <p class="mt-4 text-xs text-gray-500">Tus datos se envían de forma segura al servicio configurado para notificaciones.</p>
        </div>
    </x-ui.modal>
@endpush
