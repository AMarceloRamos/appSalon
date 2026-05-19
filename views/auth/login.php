<div class="min-h-screen flex items-center justify-center bg-zinc-950 relative overflow-hidden">

    <!-- Fondo decorativo -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.08),_transparent_40%)]"></div>

    <div class="w-full max-w-md relative z-10">

        <!-- Card -->
        <div class="backdrop-blur-xl bg-white/5 border border-white/10 rounded-3xl shadow-2xl p-10">

            <!-- Logo / Título -->
            <div class="text-center mb-10">

                <div class="flex justify-center mb-5">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600 flex items-center justify-center shadow-lg">
                        
                        <!-- Icono -->
                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="w-10 h-10 text-black" 
                             fill="none" 
                             viewBox="0 0 24 24" 
                             stroke="currentColor">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M14.121 14.121L19 19m-7-7a5 5 0 100-10 5 5 0 000 10z" />
                        </svg>

                    </div>
                </div>

                <h1 class="text-5xl font-black tracking-wide text-white uppercase">
                    Barber
                </h1>

                <p class="text-zinc-400 mt-3 text-sm tracking-widest uppercase">
                    Premium Experience
                </p>

            </div>

            <?php 
                include_once __DIR__ . "/../templates/alertas.php";
            ?>

            <!-- Formulario -->
            <form method="POST" action="/" class="space-y-6">

                <div>
                    <label 
                        for="email"
                        class="block text-sm uppercase tracking-wider text-zinc-300 mb-3"
                    >
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="correo@barber.com"
                        class="w-full bg-zinc-900/70 border border-zinc-700 
                        rounded-2xl px-5 py-4 text-white placeholder-zinc-500
                        focus:outline-none focus:ring-2 focus:ring-amber-400
                        focus:border-transparent transition duration-300"
                    />
                </div>

                <div>
                    <label 
                        for="password"
                        class="block text-sm uppercase tracking-wider text-zinc-300 mb-3"
                    >
                        Password
                    </label>

                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="••••••••"
                        class="w-full bg-zinc-900/70 border border-zinc-700 
                        rounded-2xl px-5 py-4 text-white placeholder-zinc-500
                        focus:outline-none focus:ring-2 focus:ring-amber-400
                        focus:border-transparent transition duration-300"
                    />
                </div>

                <!-- Botón -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-amber-400 to-yellow-600
                    hover:scale-[1.02] hover:shadow-amber-500/30
                    text-black font-bold uppercase tracking-widest
                    py-4 rounded-2xl transition duration-300 shadow-xl"
                >
                    Iniciar Sesión
                </button>

            </form>

            <!-- Links -->
            <div class="mt-8 flex flex-col gap-4 text-center">

                <a 
                    href="/crear-cuenta"
                    class="text-zinc-300 hover:text-amber-400 transition text-sm tracking-wide"
                >
                    ¿No tienes cuenta? Crear una
                </a>

                <a 
                    href="/olvide"
                    class="text-zinc-500 hover:text-zinc-300 transition text-sm"
                >
                    Recuperar Password
                </a>

            </div>

        </div>

    </div>

</div>