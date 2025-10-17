{{-- Navbar Component --}}
<nav class="fixed top-0 left-0 right-0 bg-black/95 backdrop-blur-sm z-50 shadow-lg">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center gap-6 lg:gap-8">
                <a href="/" class="text-white hover:text-primary transition-colors text-sm lg:text-base font-medium">Inicio</a>
                <a href="#bienvenida" class="text-white hover:text-primary transition-colors text-sm lg:text-base font-medium">Bienvenida</a>
                <a href="#comite" class="text-white hover:text-primary transition-colors text-sm lg:text-base font-medium">Comité</a>
                <a href="#programa" class="text-white hover:text-primary transition-colors text-sm lg:text-base font-medium">Programa</a>
                <a href="#registro" class="text-white hover:text-primary transition-colors text-sm lg:text-base font-medium">Registro</a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="md:hidden text-white p-2 hover:text-primary transition-colors">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col gap-3">
                <a href="/" class="text-white hover:text-primary transition-colors py-2 text-base">Inicio</a>
                <a href="#bienvenida" class="text-white hover:text-primary transition-colors py-2 text-base">Bienvenida</a>
                <a href="#comite" class="text-white hover:text-primary transition-colors py-2 text-base">Comité</a>
                <a href="#programa" class="text-white hover:text-primary transition-colors py-2 text-base">Programa</a>
                <a href="#registro" class="text-white hover:text-primary transition-colors py-2 text-base">Registro</a>
            </div>
        </div>
    </div>
</nav>
