<div class="min-h-screen bg-zinc-950 text-white">

    <?php
        include_once __DIR__ . '/../templates/barra.php';
    ?>

    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- Header -->
        <div class="mb-10">

            <p class="text-amber-400 uppercase tracking-[0.3em] text-sm mb-3">
                Administración
            </p>

            <h1 class="text-5xl font-black uppercase tracking-wide text-white">
                Servicios
            </h1>

            <p class="text-zinc-400 mt-4 text-lg">
                Gestiona todos los servicios disponibles en la barbería.
            </p>

        </div>

        <!-- Grid Servicios -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            <?php foreach($servicios as $servicio) { ?>

                <div class="bg-white/5 border border-white/10 backdrop-blur-xl 
                rounded-3xl p-8 shadow-2xl hover:border-amber-400/40
                transition duration-300 group">

                    <!-- Servicio -->
                    <div class="mb-8">

                        <div class="flex items-center justify-between mb-4">

                            <span class="text-xs uppercase tracking-[0.3em] text-amber-400">
                                Servicio
                            </span>

                            <div class="w-12 h-12 rounded-2xl bg-amber-400/10 
                            flex items-center justify-center text-amber-400">

                                <svg xmlns="http://www.w3.org/2000/svg" 
                                     class="w-6 h-6" 
                                     fill="none" 
                                     viewBox="0 0 24 24" 
                                     stroke="currentColor">
                                    <path stroke-linecap="round" 
                                          stroke-linejoin="round" 
                                          stroke-width="2" 
                                          d="M14.121 14.121L19 19m-4.879-4.879A3 3 0 1110 5a3 3 0 014.121 9.121z" />
                                </svg>

                            </div>

                        </div>

                        <h2 class="text-3xl font-black text-white mb-4 group-hover:text-amber-400 transition duration-300">
                            <?php echo $servicio->nombre; ?>
                        </h2>

                        <div class="inline-flex items-center bg-amber-400/10 
                        border border-amber-400/20 rounded-2xl px-4 py-2">

                            <span class="text-amber-400 font-black text-2xl">
                                $<?php echo $servicio->precio; ?>
                            </span>

                        </div>

                    </div>

                    <!-- Acciones -->
                    <div class="flex flex-col gap-4">

                        <a 
                            class="w-full bg-gradient-to-r from-amber-400 to-yellow-600
                            hover:scale-[1.02] text-black font-black uppercase
                            tracking-widest py-4 rounded-2xl text-center
                            transition duration-300 shadow-xl"
                            href="/servicios/actualizar?id=<?php echo $servicio->id; ?>"
                        >
                            Actualizar
                        </a>

                        <form action="/servicios/eliminar" method="POST">

                            <input 
                                type="hidden" 
                                name="id" 
                                value="<?php echo $servicio->id; ?>"
                            >

                            <button
                                type="submit"
                                class="w-full bg-red-500/10 border border-red-500/20
                                hover:bg-red-500 hover:text-white
                                text-red-400 font-bold uppercase tracking-widest
                                py-4 rounded-2xl transition duration-300"
                            >
                                Eliminar
                            </button>

                        </form>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</div>