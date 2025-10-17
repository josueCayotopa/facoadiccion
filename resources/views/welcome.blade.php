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

    // Registro buttons
    const registroBtns = [
        document.getElementById('registro-btn'),
        document.getElementById('registro-hero-btn')
    ];

    registroBtns.forEach(btn => {
        if (btn) {
            btn.addEventListener('click', () => {
                alert('¡Gracias por tu interés en Facoadicción 2026!\n\nLas inscripciones se abrirán próximamente. Te notificaremos cuando estén disponibles.\n\nMientras tanto, síguenos en nuestras redes sociales para estar al día con todas las novedades del congreso.');
            });
        }
    });
</script>
@endpush
