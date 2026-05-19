<div class="min-h-screen bg-zinc-950 text-white">

    <?php 
        include_once __DIR__ . '/../templates/barra.php';
    ?>

    <div class="max-w-6xl mx-auto px-4 py-10">

        <!-- Header -->
        <div class="mb-12">

            <h1 class="text-5xl font-black uppercase tracking-wide text-white">
                Crear Nueva Cita
            </h1>

            <p class="text-zinc-400 mt-3 text-lg">
                Reserva tu experiencia premium en nuestra barbería
            </p>

        </div>

        <!-- App -->
        <div id="app">

            <!-- Tabs -->
            <nav class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">

                <button 
                    class="actual bg-gradient-to-r from-amber-400 to-yellow-600 text-black font-bold py-4 rounded-2xl uppercase tracking-widest shadow-xl transition duration-300"
                    type="button" 
                    data-paso="1"
                >
                    Servicios
                </button>

                <button 
                    type="button" 
                    data-paso="2"
                    class="bg-white/5 border border-white/10 hover:border-amber-400/40
                    text-zinc-300 hover:text-white font-semibold py-4 rounded-2xl
                    uppercase tracking-widest transition duration-300"
                >
                    Información
                </button>

                <button 
                    type="button" 
                    data-paso="3"
                    class="bg-white/5 border border-white/10 hover:border-amber-400/40
                    text-zinc-300 hover:text-white font-semibold py-4 rounded-2xl
                    uppercase tracking-widest transition duration-300"
                >
                    Resumen
                </button>

            </nav>

            <!-- Paso 1 -->
            <div 
                id="paso-1" 
                class="seccion bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-2xl"
            >

                <div class="mb-8">

                    <h2 class="text-4xl font-black text-white mb-3">
                        Servicios
                    </h2>

                    <p class="text-zinc-400">
                        Elige los servicios que deseas reservar
                    </p>

                </div>

                <div 
                    id="servicios" 
                    class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6"
                ></div>

            </div>

            <!-- Paso 2 -->
            <div 
                id="paso-2" 
                class="seccion bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-2xl hidden"
            >

                <div class="mb-8">

                    <h2 class="text-4xl font-black text-white mb-3">
                        Tus Datos
                    </h2>

                    <p class="text-zinc-400">
                        Completa la información de tu cita
                    </p>

                </div>

                <form class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Nombre -->
                    <div>

                        <label 
                            for="nombre"
                            class="block text-sm uppercase tracking-widest text-zinc-300 mb-3"
                        >
                            Nombre
                        </label>

                        <input
                            id="nombre"
                            type="text"
                            placeholder="Tu Nombre"
                            value="<?php echo $nombre; ?>"
                            disabled
                            class="w-full bg-zinc-900/70 border border-zinc-700 
                            rounded-2xl px-5 py-4 text-zinc-400
                            focus:outline-none"
                        />

                    </div>

                    <!-- Fecha -->
                    <div>

                        <label 
                            for="fecha"
                            class="block text-sm uppercase tracking-widest text-zinc-300 mb-3"
                        >
                            Fecha
                        </label>

                        <input
                            id="fecha"
                            type="date"
                            min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?>"
                            class="w-full bg-zinc-900 border border-zinc-700
                            rounded-2xl px-5 py-4 text-white
                            focus:outline-none focus:ring-2 focus:ring-amber-400
                            focus:border-transparent transition duration-300"
                        />

                    </div>

                    <!-- Hora -->
                    <div>

                        <label 
                            for="hora"
                            class="block text-sm uppercase tracking-widest text-zinc-300 mb-3"
                        >
                            Hora
                        </label>

                        <input
                            id="hora"
                            type="time"
                            class="w-full bg-zinc-900 border border-zinc-700
                            rounded-2xl px-5 py-4 text-white
                            focus:outline-none focus:ring-2 focus:ring-amber-400
                            focus:border-transparent transition duration-300"
                        />

                    </div>

                    <input 
                        type="hidden" 
                        id="id" 
                        value="<?php echo $id; ?>" 
                    >

                </form>

            </div>

            <!-- Paso 3 -->
            <div 
                id="paso-3" 
                class="seccion contenido-resumen bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-2xl hidden"
            >

                <div class="mb-8">

                    <h2 class="text-4xl font-black text-white mb-3">
                        Resumen
                    </h2>

                    <p class="text-zinc-400">
                        Verifica que toda la información sea correcta
                    </p>

                </div>

            </div>

            <!-- Navegación -->
            <div class="flex items-center justify-between mt-10 gap-4">

                <button 
                    id="anterior"
                    class="bg-white/5 border border-white/10 hover:border-white/20
                    hover:bg-white/10 text-zinc-300 hover:text-white
                    font-semibold px-8 py-4 rounded-2xl transition duration-300"
                >
                    &laquo; Anterior
                </button>

                <button 
                    id="siguiente"
                    class="bg-gradient-to-r from-amber-400 to-yellow-600
                    hover:scale-105 text-black font-black uppercase tracking-widest
                    px-8 py-4 rounded-2xl transition duration-300 shadow-xl"
                >
                    Siguiente &raquo;
                </button>

            </div>

        </div>

    </div>

</div>

<?php 
    $script = "
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script src='/build/js/app.js'></script>
    ";
?>