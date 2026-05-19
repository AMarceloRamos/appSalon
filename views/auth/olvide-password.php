<div class="min-h-screen flex items-center justify-center bg-zinc-950 relative overflow-hidden px-4">

    <!-- Fondo decorativo -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(251,191,36,0.10),_transparent_40%)]"></div>

    <div class="relative z-10 w-full max-w-md">

        <!-- Card -->
        <div class="backdrop-blur-xl bg-white/5 border border-white/10 rounded-3xl shadow-2xl p-10">

            <!-- Header -->
            <div class="text-center mb-10">

                <div class="flex justify-center mb-5">

                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-amber-400 to-yellow-600 flex items-center justify-center shadow-2xl shadow-amber-500/20">

                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="w-10 h-10 text-black" 
                             fill="none" 
                             viewBox="0 0 24 24" 
                             stroke="currentColor">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M12 11c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1zm0 0V9a4 4 0 10-8 0v2m14 0h-1V9a6 6 0 10-12 0v2H4a2 2 0 00-2 2v7a2 2 0 002 2h14a2 2 0 002-2v-7a2 2 0 00-2-2z" />
                        </svg>

                    </div>

                </div>

                <h1 class="text-4xl md:text-5xl font-black uppercase tracking-wide text-white">
                    Recuperar Acceso
                </h1>

                <p class="text-zinc-400 mt-4 leading-relaxed">
                    Ingresa tu correo electrónico y te enviaremos instrucciones para reestablecer tu contraseña.
                </p>

            </div>

            <?php 
                include_once __DIR__ . "/../templates/alertas.php";
            ?>

            <!-- Formulario -->
            <form action="/olvide" method="POST" class="space-y-6">

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

                <!-- Botón -->
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-amber-400 to-yellow-600
                    hover:scale-[1.02] hover:shadow-amber-500/30
                    text-black font-bold uppercase tracking-widest
                    py-4 rounded-2xl transition duration-300 shadow-xl"
                >
                    Enviar Instrucciones
                </button>

            </form>

            <!-- Links -->
            <div class="mt-8 flex flex-col gap-4 text-center">

                <a 
                    href="/"
                    class="text-zinc-300 hover:text-amber-400 transition text-sm tracking-wide"
                >
                    ¿Ya tienes una cuenta? Inicia Sesión
                </a>

                <a 
                    href="/crear-cuenta"
                    class="text-zinc-500 hover:text-zinc-300 transition text-sm"
                >
                    ¿Aún no tienes una cuenta? Crear una
                </a>

            </div>

        </div>

    </div>

</div>