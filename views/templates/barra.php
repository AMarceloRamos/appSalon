<div class="bg-zinc-950 border-b border-white/10 shadow-lg">

    <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

        <!-- Usuario -->
        <div class="flex items-center gap-4">

            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600 flex items-center justify-center text-black font-black text-lg shadow-lg">
                <?php echo strtoupper(substr($nombre ?? 'U', 0, 1)); ?>
            </div>

            <div>
                <p class="text-zinc-400 text-sm uppercase tracking-widest">
                    Bienvenido
                </p>

                <h2 class="text-white font-bold text-lg">
                    <?php echo $nombre ?? ''; ?>
                </h2>
            </div>

        </div>

        <!-- Navegación -->
        <div class="flex flex-wrap items-center gap-3">

            <?php if(isset($_SESSION['admin'])) { ?>

                <a 
                    href="/admin"
                    class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10
                    text-zinc-200 hover:text-black hover:bg-amber-400
                    transition duration-300 font-medium"
                >
                    Ver Citas
                </a>

                <a 
                    href="/servicios"
                    class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10
                    text-zinc-200 hover:text-black hover:bg-amber-400
                    transition duration-300 font-medium"
                >
                    Ver Servicios
                </a>

                <a 
                    href="/servicios/crear"
                    class="px-5 py-3 rounded-2xl bg-gradient-to-r from-amber-400 to-yellow-600
                    text-black font-bold hover:scale-105 transition duration-300 shadow-lg"
                >
                    + Nuevo Servicio
                </a>

            <?php } ?>

            <a 
                href="/logout"
                class="px-5 py-3 rounded-2xl bg-red-500/10 border border-red-500/20
                text-red-400 hover:bg-red-500 hover:text-white
                transition duration-300 font-semibold"
            >
                Cerrar Sesión
            </a>

        </div>

    </div>

</div>