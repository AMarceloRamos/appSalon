<div class="min-h-screen bg-zinc-950 text-white">

    <?php 
        include_once __DIR__ . '/../templates/barra.php';
    ?>

    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- Header -->
        <div class="mb-10">

            <h1 class="text-5xl font-black uppercase tracking-wide text-white">
                Panel de Administración
            </h1>

            <p class="text-zinc-400 mt-3">
                Gestiona las citas y servicios de la barbería.
            </p>

        </div>

        <!-- Buscador -->
        <div class="bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-6 mb-10 shadow-xl">

            <h2 class="text-2xl font-bold mb-6 text-amber-400">
                Buscar Citas
            </h2>

            <form class="space-y-4">

                <div>

                    <label 
                        for="fecha"
                        class="block text-sm uppercase tracking-widest text-zinc-300 mb-3"
                    >
                        Fecha
                    </label>

                    <input 
                        type="date"
                        id="fecha"
                        name="fecha"
                        value="<?php echo $fecha; ?>"
                        class="w-full md:w-80 bg-zinc-900 border border-zinc-700
                        rounded-2xl px-5 py-4 text-white
                        focus:outline-none focus:ring-2 focus:ring-amber-400
                        focus:border-transparent transition duration-300"
                    />

                </div>

            </form>

        </div>

        <!-- Sin citas -->
        <?php if(count($citas) === 0) { ?>

            <div class="bg-red-500/10 border border-red-500/20 rounded-3xl p-8 text-center">

                <h2 class="text-2xl font-bold text-red-300">
                    No hay citas para esta fecha
                </h2>

            </div>

        <?php } ?>

        <!-- Citas -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">

            <?php 
                $idCita = 0;

                foreach($citas as $key => $cita) {

                    if($idCita !== $cita->id) {

                        $total = 0;
            ?>

                <div class="bg-white/5 border border-white/10 backdrop-blur-xl 
                rounded-3xl p-8 shadow-2xl hover:border-amber-400/40
                transition duration-300">

                    <!-- Top -->
                    <div class="flex items-center justify-between mb-6">

                        <div>

                            <p class="text-zinc-400 text-sm uppercase tracking-widest">
                                Cita
                            </p>

                            <h3 class="text-3xl font-black text-white">
                                #<?php echo $cita->id; ?>
                            </h3>

                        </div>

                        <div class="bg-amber-400/10 text-amber-400 px-4 py-2 rounded-2xl text-sm font-bold">
                            <?php echo $cita->hora; ?>
                        </div>

                    </div>

                    <!-- Cliente -->
                    <div class="space-y-3 mb-8">

                        <div class="flex items-center justify-between border-b border-white/5 pb-3">
                            <span class="text-zinc-400">Cliente</span>
                            <span class="font-semibold"><?php echo $cita->cliente; ?></span>
                        </div>

                        <div class="flex items-center justify-between border-b border-white/5 pb-3">
                            <span class="text-zinc-400">Email</span>
                            <span class="font-semibold"><?php echo $cita->email; ?></span>
                        </div>

                        <div class="flex items-center justify-between border-b border-white/5 pb-3">
                            <span class="text-zinc-400">Teléfono</span>
                            <span class="font-semibold"><?php echo $cita->telefono; ?></span>
                        </div>

                    </div>

                    <!-- Servicios -->
                    <div>

                        <h4 class="text-xl font-bold text-amber-400 mb-5">
                            Servicios
                        </h4>

                        <div class="space-y-4">

            <?php 
                    $idCita = $cita->id;
                }

                $total += $cita->precio;
            ?>

                            <div class="flex items-center justify-between bg-zinc-900/60 border border-zinc-800 rounded-2xl px-5 py-4">

                                <span class="font-medium">
                                    <?php echo $cita->servicio; ?>
                                </span>

                                <span class="text-amber-400 font-bold">
                                    $<?php echo $cita->precio; ?>
                                </span>

                            </div>

            <?php 
                $actual = $cita->id;
                $proximo = $citas[$key + 1]->id ?? 0;

                if(esUltimo($actual, $proximo)) {
            ?>

                        </div>

                        <!-- Footer -->
                        <div class="mt-8 pt-6 border-t border-white/10">

                            <div class="flex items-center justify-between mb-6">

                                <span class="text-zinc-400 uppercase tracking-widest text-sm">
                                    Total
                                </span>

                                <span class="text-3xl font-black text-amber-400">
                                    $<?php echo $total; ?>
                                </span>

                            </div>

                            <form action="/api/eliminar" method="POST">

                                <input 
                                    type="hidden" 
                                    name="id" 
                                    value="<?php echo $cita->id; ?>"
                                >

                                <button
                                    type="submit"
                                    class="w-full bg-red-500/10 border border-red-500/20
                                    hover:bg-red-500 hover:text-white
                                    text-red-400 font-bold uppercase tracking-widest
                                    py-4 rounded-2xl transition duration-300"
                                >
                                    Eliminar Cita
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            <?php 
                    }
                }
            ?>

        </div>

    </div>

</div>

<?php
    $script = "<script src='/build/js/buscador.js'></script>";
?>