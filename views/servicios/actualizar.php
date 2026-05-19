<div class="min-h-screen bg-zinc-950 text-white">

    <?php
        include_once __DIR__ . '/../templates/barra.php';
    ?>

    <div class="max-w-3xl mx-auto px-4 py-10">

        <!-- Header -->
        <div class="mb-10">

            <p class="text-amber-400 uppercase tracking-[0.3em] text-sm mb-3">
                Administración
            </p>

            <h1 class="text-5xl font-black uppercase tracking-wide text-white">
                Actualizar Servicio
            </h1>

            <p class="text-zinc-400 mt-4 text-lg">
                Modifica la información del servicio seleccionado.
            </p>

        </div>

        <!-- Alertas -->
        <div class="mb-8">
            <?php
                include_once __DIR__ . '/../templates/alertas.php';
            ?>
        </div>

        <!-- Card -->
        <div class="bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-2xl">

            <form method="POST" class="space-y-6">

                <?php include_once __DIR__ . '/formulario.php'; ?>

                <!-- Botón -->
                <div class="pt-4">

                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-amber-400 to-yellow-600
                        hover:scale-[1.02] hover:shadow-amber-500/30
                        text-black font-black uppercase tracking-widest
                        py-4 rounded-2xl transition duration-300 shadow-xl"
                    >
                        Actualizar Servicio
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>