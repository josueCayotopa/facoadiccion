<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facoadicción 2026 - I Congreso Internacional | Lima, Perú</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#B11A1A',
                        secondary: '#0D3049',
                        accent: '#669BBB',
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        /* Agregando animación de fade-in para el logo */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>

<body class="font-sans bg-white text-gray-900">
    

    <nav class="fixed top-0 left-0 right-0 bg-black/95 backdrop-blur-sm z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-8">
                    <a href="index.html" class="text-white hover:text-primary transition-colors text-sm">Inicio</a>
                    <a href="#bienvenida" class="text-white hover:text-primary transition-colors text-sm">Bienvenida</a>
                    <a href="#comite" class="text-white hover:text-primary transition-colors text-sm">Comité</a>
                    <a href="#programa" class="text-white hover:text-primary transition-colors text-sm">Programa</a>
                    <a href="#registro" class="text-white hover:text-primary transition-colors text-sm">Registro</a>
                </div>
                
            
                <button id="mobile-menu-btn" class="md:hidden text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <div class="flex flex-col gap-3">
                    <a href="index.html" class="text-white hover:text-primary transition-colors py-2">Inicio</a>
                    <a href="#bienvenida" class="text-white hover:text-primary transition-colors py-2">Bienvenida</a>
                    <a href="#comite" class="text-white hover:text-primary transition-colors py-2">Comité</a>
                    <a href="#programa" class="text-white hover:text-primary transition-colors py-2">Programa</a>
                    <a href="#registro" class="text-white hover:text-primary transition-colors py-2">Registro</a>
                </div>
            </div>
        </div>
    </nav>

     
    <section class="relative min-h-screen flex items-center justify-center text-white pt-16 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img src="/images/Mesa de trabajo 1.png" 
                 alt="Background" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div>
        </div>

        <div class="container mx-auto px-4 lg:px-8 text-center py-20 relative z-10">
            <div class="max-w-6xl mx-auto">
                
                <div class="mb-12 animate-fade-in">
                    <img src="/images/logo-facoadiccion.png" 
                         alt="Facoadicción Logo" 
                         class="mx-auto max-w-3xl w-full drop-shadow-2xl">
                </div>
                
                <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-12 mb-14">
                    <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-full px-8 py-4 border border-white/20 hover:bg-white/20 transition-all">
                        <i class="fas fa-calendar-alt text-accent text-3xl"></i>
                        <div class="text-left">
                            <p class="text-xs text-white/70 uppercase tracking-wider">Fecha</p>
                            <p class="text-xl font-bold text-white">5 al 7 de Junio, 2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-full px-8 py-4 border border-white/20 hover:bg-white/20 transition-all">
                        <i class="fas fa-map-marker-alt text-accent text-3xl"></i>
                        <div class="text-left">
                            <p class="text-xs text-white/70 uppercase tracking-wider">Ubicación</p>
                            <p class="text-xl font-bold text-white">Westin Hotel, Lima - Perú</p>
                        </div>
                    </div>
                </div>
                
               
                <div class="flex flex-col items-center gap-5">
                    <button id="registro-btn" class="group relative bg-primary hover:bg-primary/90 text-white px-16 py-6 rounded-full text-xl md:text-2xl font-bold shadow-2xl transition-all hover:scale-105 hover:shadow-primary/50 flex items-center gap-4 border-2 border-primary hover:border-white/30">
                        <i class="fas fa-bell text-2xl group-hover:animate-pulse"></i>
                        <span>Notificarme cuando abran inscripciones</span>
                    </button>
                    <p class="text-white/70 text-base md:text-lg font-light">
                        Las inscripciones se abrirán próximamente • Mantente informado
                    </p>
                </div>
                
              
                <div class="mt-12 flex items-center justify-center gap-8 text-white/60">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-users"></i>
                        <span class="text-sm">Expertos Internacionales</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-microscope"></i>
                        <span class="text-sm">Cirugías en Vivo</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-trophy"></i>
                        <span class="text-sm">Concursos</span>
                    </div>
                </div>
            </div>
        </div>
        
     
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce z-10">
            <div class="w-8 h-12 border-2 border-white/40 rounded-full flex items-start justify-center p-2">
                <div class="w-1.5 h-4 bg-white/60 rounded-full animate-pulse"></div>
            </div>
        </div>
    </section>


    <section id="bienvenida" class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-12">
                    Bienvenidos a Facoadicción 2026
                </h2>
                
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        
                        <p class="text-lg leading-relaxed">
                            Es la primera edición del congreso internacional organizado por la Clínica La Luz de Lima - Perú, 
                            que se realizará en un ambiente confortable y amigable con la finalidad de integrar los conocimientos, 
                            las experiencias de los expertos de todo el mundo y las tendencias de la innovación tecnológica de la 
                            industria oftalmológica.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Ofrecemos un programa académico, asistencial y científico en las subespecialidades oftalmológicas de 
                            Segmento Anterior, Córnea y Cirugía Refractiva, Glaucoma y Retina, que garantice en 3 días la 
                            actualización y fortalecimiento de nuestros conocimientos en beneficio de la capacitación continua 
                            del oftalmólogo peruano para mejorar la atención de nuestros pacientes.
                        </p>
                        <p class="text-lg leading-relaxed">
                            Facoadicción construirá una comunidad de seguidores o <strong>adictos al cuidado de la salud visual</strong> 
                            para disminuir la ceguera en el Perú, trabajando muy cerca y de manera preferente con los residentes 
                            y fellows de todo el país.
                        </p>
                        <p class="text-xl font-semibold mt-8">
                            Dr. Fermín Silva<br>
                            <span class="text-sm font-normal">Presidente del Congreso</span>
                        </p>
                    </div>
                    
                    <div class="flex justify-center">
                        <div class="w-100 h-100  overflow-hidden border-8 border-white shadow-2xl">
                            <img src="/images/ferminsilva.PNG?height=400&width=400" 
                                 alt="Dr. Fermín Silva" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Logo centrado -->
            <div class="flex justify-center mb-6">
                <img src="/images/LOGO CLÍNICA LA LUZ.png" 
                     alt="Logo Clínica La Luz"
                     class="h-20 w-auto object-contain">
            </div>
            
            <p class="text-xl text-gray-700 leading-relaxed mb-4">
                <strong>Organiza:</strong> Clínica La Luz, Lima - Perú
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Facoadicción será el congreso internacional que se realizará en el Perú cada 2 años sin fines de lucro, 
                con el apoyo de las principales instituciones académicas, científicas y laboratorios farmacológicos 
                oftalmológicos del Perú.
            </p>
        </div>
    </div>
</section>


    <section id="comite" class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                    Comité Organizador
                </h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                        <p class="text-accent font-semibold mb-2">Presidente</p>
                        <p class="text-lg">Por confirmar</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                        <p class="text-accent font-semibold mb-2">Vicepresidente</p>
                        <p class="text-lg">Por confirmar</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                        <p class="text-accent font-semibold mb-2">Secretaria General</p>
                        <p class="text-lg">Por confirmar</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                        <p class="text-accent font-semibold mb-2">Sec. Asuntos Académicos y Científicos</p>
                        <p class="text-lg">Por confirmar</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                        <p class="text-accent font-semibold mb-2">Sec. Marketing y Comunicaciones</p>
                        <p class="text-lg">Por confirmar</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                        <p class="text-accent font-semibold mb-2">Sec. Tesorería</p>
                        <p class="text-lg">Por confirmar</p>
                    </div>
                    <div class="bg-white/10 rounded-lg p-6 backdrop-blur-sm">
                        <p class="text-accent font-semibold mb-2">Sec. Logística</p>
                        <p class="text-lg">Por confirmar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 text-gray-800">
                    Comité de Asesores
                </h2>

                <div class="mb-16">
                    <h3 class="text-2xl font-bold text-center mb-8 text-primary">Asesores Nacionales</h3>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-8 justify-items-center">
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-3">
                                <img src="/placeholder.svg?height=150&width=150" alt="Antonio Roca" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800">Dr. Antonio Roca</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-3">
                                <img src="/placeholder.svg?height=150&width=150" alt="Juan Carlos Corbera" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800">Dr. Juan Carlos Corbera</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-3">
                                <img src="/placeholder.svg?height=150&width=150" alt="Felipe Torres" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800">Dr. Felipe Torres</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-3">
                                <img src="/placeholder.svg?height=150&width=150" alt="Dino Nateri" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800">Dr. Dino Nateri</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-300 shadow-lg mb-3">
                                <img src="/placeholder.svg?height=150&width=150" alt="Jose Maria Viaña Perez" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800">Dr. Jose Maria Viaña Perez</p>
                        </div>
                    </div>
                </div>
                
                 Asesores Internacionales 
                <div>
                    <h3 class="text-2xl font-bold text-center mb-8 text-primary">Asesores Internacionales</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6 justify-items-center">
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130" alt="Luis Scaf" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-sm">Dr. Luis Scaf</p>
                            <p class="text-center text-xs text-gray-600">Colombia</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130" alt="Gerardo Valvecchia" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-sm">Dr. Gerardo Valvecchia</p>
                            <p class="text-center text-xs text-gray-600">Argentina</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130" alt="Eduardo Chavez" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-sm">Dr. Eduardo Chavez</p>
                            <p class="text-center text-xs text-gray-600">México</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130" alt="Jorge Pacheco" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-sm">Dr. Jorge Pacheco</p>
                            <p class="text-center text-xs text-gray-600">México</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130" alt="Antonio Sierra" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-sm">Dr. Antonio Sierra</p>
                            <p class="text-center text-xs text-gray-600">México</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130" alt="Lyle Neywall" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-sm">Dr. Lyle Neywall</p>
                            <p class="text-center text-xs text-gray-600">Colombia</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-primary shadow-lg mb-3">
                                <img src="/placeholder.svg?height=130&width=130" alt="David Flikier" class="w-full h-full object-cover bg-gray-400">
                            </div>
                            <p class="text-center font-semibold text-gray-800 text-sm">Dr. David Flikier</p>
                            <p class="text-center text-xs text-gray-600">Costa Rica</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     Facoadicción Info 
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-5xl mx-auto text-center">
                <div class="mb-12">
                    <h2 class="text-6xl font-black mb-4">
                        <span class="text-primary">FACO</span><span class="text-gray-800">ADICCIÓN</span>
                    </h2>
                    <p class="text-2xl text-accent font-semibold">
                        Construyendo una comunidad de adictos a la excelencia quirúrgica
                    </p>
                </div>
                
                <p class="text-lg text-gray-700 leading-relaxed mb-12 max-w-3xl mx-auto">
                    Facoadicción es más que un congreso, es una experiencia inmersiva en el mundo de la cirugía de catarata 
                    y segmento anterior. Reunimos a los mejores especialistas internacionales para compartir conocimientos, 
                    técnicas innovadoras y casos clínicos que desafían los límites de la oftalmología moderna.
                </p>
                
                <div class="bg-primary text-white rounded-3xl p-12 shadow-2xl">
                    <h3 class="text-3xl font-bold mb-6">¿Qué es Facoadicción?</h3>
                    <p class="text-lg leading-relaxed mb-6">
                        Un congreso internacional dedicado exclusivamente a la cirugía de facoemulsificación, técnicas avanzadas 
                        de catarata, y las últimas innovaciones en segmento anterior. Durante tres días intensivos, los participantes 
                        tendrán acceso a:
                    </p>
                    <ul class="text-left max-w-2xl mx-auto space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Conferencias magistrales de expertos internacionales</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Cirugías en vivo con transmisión en alta definición</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Talleres prácticos con simuladores de última generación</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Presentación de casos clínicos complejos</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-accent text-xl mt-1"></i>
                            <span>Networking con líderes de opinión en oftalmología</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

     Nueva sección de Actividades Académicas 
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800">
                    Actividades Académicas
                </h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-microscope text-primary text-3xl"></i>
                            <h3 class="text-2xl font-bold text-primary">Segmento Anterior</h3>
                        </div>
                        <p class="text-gray-700">Responsable: Dr. Alejandro Silva</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-eye text-primary text-3xl"></i>
                            <h3 class="text-2xl font-bold text-primary">Córnea</h3>
                        </div>
                        <p class="text-gray-700">Responsable: Dr. Fermín Silva</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-star text-primary text-3xl"></i>
                            <h3 class="text-2xl font-bold text-primary">Superficie Ocular</h3>
                        </div>
                        <p class="text-gray-700">Responsable: Dra. Luisa Gonzalez</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-glasses text-primary text-3xl"></i>
                            <h3 class="text-2xl font-bold text-primary">Cirugía Refractiva</h3>
                        </div>
                        <p class="text-gray-700">Responsable: Por confirmar</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-circle text-primary text-3xl"></i>
                            <h3 class="text-2xl font-bold text-primary">Glaucoma</h3>
                        </div>
                        <p class="text-gray-700">Responsables: Dr. Yoaner Martins, Dr. Meiday Julio Blanco</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-eye-dropper text-primary text-3xl"></i>
                            <h3 class="text-2xl font-bold text-primary">Retina</h3>
                        </div>
                        <p class="text-gray-700">Responsables: Dr. Eduardo, Dr. Sergio, Dr. Alemani</p>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-lg p-8 md:col-span-2">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-robot text-primary text-3xl"></i>
                            <h3 class="text-2xl font-bold text-primary">Inteligencia Artificial</h3>
                        </div>
                        <p class="text-gray-700">Responsable: Dr. Edgar Gonzales</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     Nueva sección de Concursos 
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4">
                    Concursos para Residentes
                </h2>
                <p class="text-center text-white/80 text-lg mb-16">
                    Especialmente diseñados para R1, R2 y R3 de todo el Perú
                </p>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm border border-white/20">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-video text-accent text-3xl"></i>
                            <h3 class="text-2xl font-bold">Concurso de Videos Quirúrgicos</h3>
                        </div>
                        <p class="text-white/90 mb-4">
                            Videos de cirugías de catarata para R3 de todo el Perú. Demuestra tu técnica y habilidades quirúrgicas.
                        </p>
                        <div class="flex items-center gap-2 text-accent">
                            <i class="fas fa-trophy"></i>
                            <span class="font-semibold">Premios para los mejores videos</span>
                        </div>
                    </div>
                    
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm border border-white/20">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-file-alt text-accent text-3xl"></i>
                            <h3 class="text-2xl font-bold">Trabajos de Investigación</h3>
                        </div>
                        <p class="text-white/90 mb-4">
                            Concurso de trabajos de investigación publicados para R3. Comparte tus hallazgos científicos.
                        </p>
                        <div class="flex items-center gap-2 text-accent">
                            <i class="fas fa-trophy"></i>
                            <span class="font-semibold">Reconocimiento a la investigación</span>
                        </div>
                    </div>
                    
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm border border-white/20">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-lightbulb text-accent text-3xl"></i>
                            <h3 class="text-2xl font-bold">Emprendimientos</h3>
                        </div>
                        <p class="text-white/90 mb-4">
                            Concurso de emprendimientos de oftalmólogos jóvenes en prevención de ceguera en el Perú.
                        </p>
                        <div class="flex items-center gap-2 text-accent">
                            <i class="fas fa-trophy"></i>
                            <span class="font-semibold">Impulsa tu proyecto</span>
                        </div>
                    </div>
                    
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm border border-white/20">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fab fa-tiktok text-accent text-3xl"></i>
                            <h3 class="text-2xl font-bold">Concurso de TikToks</h3>
                        </div>
                        <p class="text-white/90 mb-4">
                            Contenido sobre comunicación de oftalmología para R1, R2 y R3. Educa de forma creativa.
                        </p>
                        <div class="flex items-center gap-2 text-accent">
                            <i class="fas fa-trophy"></i>
                            <span class="font-semibold">Mejor contenido educativo</span>
                        </div>
                    </div>
                    
                    <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm border border-white/20 md:col-span-2">
                        <div class="flex items-center gap-3 mb-4">
                            <i class="fas fa-procedures text-accent text-3xl"></i>
                            <h3 class="text-2xl font-bold">Cirugías en Vivo - Casos Complejos</h3>
                        </div>
                        <p class="text-white/90">
                            Cirugías en vivo de casos complejos de catarata, córnea, glaucoma y retina, donde se plantearán 
                            los escenarios más adversos que puede enfrentar un experto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     Profesores Invitados 
     Actualizado con todos los profesores del PDF 
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800">
                    Profesores Invitados
                </h2>
                
                <div class="space-y-12">
                     Profesores de La Luz 
                    <div>
                        <h3 class="text-2xl font-bold text-primary mb-6 text-center">Profesores de La Luz</h3>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                <div class="text-gray-700">Dr. Fermín Silva</div>
                                <div class="text-gray-700">Dr. Alejandro Silva</div>
                                <div class="text-gray-700">Dr. Edgar Gonzales</div>
                                <div class="text-gray-700">Dra. Luisa Gonzales</div>
                                <div class="text-gray-700">Dr. Victor Viaña</div>
                                <div class="text-gray-700">Dr. Roberto Valvuena</div>
                                <div class="text-gray-700">Dr. Jorge Vega</div>
                                <div class="text-gray-700">Dra. Evelyn Eneque</div>
                                <div class="text-gray-700">Dra. Fabiola Custodio</div>
                                <div class="text-gray-700">Dr. Yoaner Martin</div>
                                <div class="text-gray-700">Dr. Sergio Sanchez</div>
                                <div class="text-gray-700">Dr. Ernesto Alimañy Rubio</div>
                                <div class="text-gray-700">Dr. Eduardo Zans</div>
                                <div class="text-gray-700">Dra. Marita Masedo</div>
                            </div>
                        </div>
                    </div>
                    
                     Ex Fellows 
                    <div>
                        <h3 class="text-2xl font-bold text-primary mb-6 text-center">Profesores Ex-Fellows</h3>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                <div class="text-gray-700">Dr. Raul Plasencia</div>
                                <div class="text-gray-700">Dra. Claudia Sotomayor</div>
                                <div class="text-gray-700">Dr. Carlos Ortega</div>
                                <div class="text-gray-700">Dr. Eduardo Tarazona</div>
                                <div class="text-gray-700">Dr. Klever Apolo</div>
                                <div class="text-gray-700">Dra. Zulema</div>
                                <div class="text-gray-700">Dr. Jose Luis</div>
                                <div class="text-gray-700">Dr. Juan Carlos Hanampa</div>
                            </div>
                        </div>
                    </div>
                    
                     Profesores Nacionales 
                    <div>
                        <h3 class="text-2xl font-bold text-primary mb-6 text-center">Profesores Nacionales (Perú)</h3>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                <div class="text-gray-700">Dr. Felipe Torres</div>
                                <div class="text-gray-700">Dr. Edmar Uribe</div>
                                <div class="text-gray-700">Dr. Cristian Beker</div>
                                <div class="text-gray-700">Dr. Jorge Velasco</div>
                                <div class="text-gray-700">Dr. Jorge Ruiz</div>
                                <div class="text-gray-700">Dra. Karina Arellano</div>
                                <div class="text-gray-700">Dr. Cesar Diaz</div>
                                <div class="text-gray-700">Dra. Daniela Roca</div>
                                <div class="text-gray-700">Dr. JC Corbera</div>
                                <div class="text-gray-700">Dr. Miguel Guzman</div>
                                <div class="text-gray-700">Dr. Antonio Roca</div>
                                <div class="text-gray-700">Dr. Carlos Wong Jr</div>
                                <div class="text-gray-700">Dra. Vanesa Pongo</div>
                            </div>
                        </div>
                    </div>
                    
                     Profesores Internacionales 
                    <div>
                        <h3 class="text-2xl font-bold text-primary mb-6 text-center">Profesores Internacionales</h3>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. David Flikier</span>
                                    <span class="text-gray-600">Costa Rica</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Jorge Pacheco</span>
                                    <span class="text-gray-600">México</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Antonio Sierra Acevedo</span>
                                    <span class="text-gray-600">México</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Luis Scaf</span>
                                    <span class="text-gray-600">Colombia</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Lyle Neywall</span>
                                    <span class="text-gray-600">Colombia</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Gerardo Valvecchia</span>
                                    <span class="text-gray-600">Argentina</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dra. Bruna Ventura</span>
                                    <span class="text-gray-600">Brasil</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Carlos Arce</span>
                                    <span class="text-gray-600">Brasil</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Lusio Maranhao</span>
                                    <span class="text-gray-600">Brasil</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Pedro Bertino</span>
                                    <span class="text-gray-600">Brasil</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Fernando Soler</span>
                                    <span class="text-gray-600">España</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Agarwal</span>
                                    <span class="text-gray-600">India</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Ay Kamed</span>
                                    <span class="text-gray-600">Canadá</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Paolo Ferrara</span>
                                    <span class="text-gray-600">Brasil</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Ibrain Piloto</span>
                                    <span class="text-gray-600">Cuba</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-gray-200 pb-2">
                                    <span class="text-gray-700 font-semibold">Dr. Raul Hernandez</span>
                                    <span class="text-gray-600">Cuba</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     Programa del Evento 
    <section id="programa" class="py-20 bg-gray-50 relative">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800">
                    Programa del Evento
                </h2>
                <p class="text-xl text-gray-600 mb-12">
                    5 al 7 de Junio, 2026 - Westin Hotel, Lima, Perú
                </p>
                
                <div class="mb-12">
                    <img src="/placeholder.svg?height=400&width=600" 
                         alt="Congreso Facoadicción" 
                         class="w-full max-w-2xl mx-auto rounded-lg shadow-xl">
                </div>
                
                 Actualizado botón de registro 
                <div class="flex flex-col items-center gap-4">
                    <button id="registro-hero-btn" class="bg-primary hover:bg-primary/90 text-white px-12 py-5 rounded-full text-xl font-bold shadow-2xl transition-all hover:scale-105 flex items-center gap-3">
                        <i class="fas fa-bell"></i>
                        Notificarme cuando abran inscripciones
                    </button>
                    <p class="text-gray-600 text-sm">
                        Próximamente: Información detallada del programa académico
                    </p>
                </div>
            </div>
        </div>
    </section>

     Sponsors Section 
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-gray-800">
                    Instituciones Colaboradoras
                </h2>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-12 items-center justify-items-center mb-16">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md w-full h-32 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">Institución 1</span>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md w-full h-32 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">Institución 2</span>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md w-full h-32 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-400">Institución 3</span>
                    </div>
                </div>
                
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">
                    Participación Internacional
                </h3>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="Paraguay" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">Paraguay</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="India" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">India</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="Costa Rica" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">Costa Rica</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-gray-300 shadow-md mb-3">
                            <img src="/placeholder.svg?height=100&width=100" 
                                 alt="Estados Unidos" 
                                 class="w-full h-full object-cover">
                        </div>
                        <p class="text-center font-semibold text-gray-700">Estados Unidos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     Footer 
    <footer class="bg-primary text-white py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold mb-4">
                        <span class="text-white">FACO</span><span class="text-white/80">ADICCIÓN</span> 2026
                    </h3>
                    <p class="text-white/80 mb-2">
                        I Congreso Internacional de Cirugía de Catarata y Segmento Anterior
                    </p>
                    <p class="text-white/70 text-sm">
                        5 al 7 de Junio, 2026 • Westin Hotel, Lima - Perú
                    </p>
                </div>
                
                <div class="flex justify-center gap-6 mb-8">
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-tiktok text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
                
                <div class="border-t border-white/20 pt-8 text-center text-sm text-white/60">
                    <p>&copy; 2026 Facoadicción. Todos los derechos reservados.</p>
                    <p class="mt-2">Organizado por Clínica La Luz y La Luz Educa</p>
                </div>
            </div>
        </div>
    </footer>

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
</body>

</html>
