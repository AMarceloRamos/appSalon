<div class="min-h-screen flex items-center justify-center bg-zinc-950 relative overflow-hidden px-4 py-10">

    <!-- Fondo decorativo -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(251,191,36,0.10),_transparent_40%)]"></div>

    <div class="relative z-10 w-full max-w-2xl">

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
                                  d="M5.121 17.804A9 9 0 1118.36 4.565M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                    </div>

                </div>

                <h1 class="text-5xl font-black uppercase tracking-wide text-white">
                    Crear Cuenta
                </h1>

                <p class="text-zinc-400 mt-4 tracking-wide">
                    Únete a la experiencia premium de nuestra barbería
                </p>

            </div>

            <?php 
                include_once __DIR__ . "/../templates/alertas.php";
            ?>

            <!-- Formulario -->
            <form method="POST" action="/crear-cuenta" class="space-y-6">

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Nombre -->
                    <div>
                        <label 
                            for="nombre"
                            class="block text-sm uppercase tracking-wider text-zinc-300 mb-3"
                        >
                            Nombre
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Tu Nombre"
                            value="<?php echo s($usuario->nombre); ?>"
                            class="w-full bg-zinc-900/70 border border-zinc-700 
                            rounded-2xl px-5 py-4 text-white placeholder-zinc-500
                            focus:outline-none focus:ring-2 focus:ring-amber-400
                            focus:border-transparent transition duration-300"
                        />
                    </div>

                    <!-- Apellido -->
                    <div>
                        <label 
                            for="apellido"
                            class="block text-sm uppercase tracking-wider text-zinc-300 mb-3"
                        >
                            Apellido
                        </label>

                        <input
                            type="text"
                            id="apellido"
                            name="apellido"
                            placeholder="Tu Apellido"
                            value="<?php echo s($usuario->apellido); ?>"
                            class="w-full bg-zinc-900/70 border border-zinc-700 
                            rounded-2xl px-5 py-4 text-white placeholder-zinc-500
                            focus:outline-none focus:ring-2 focus:ring-amber-400
                            focus:border-transparent transition duration-300"
                        />
                    </div>

                </div>

                <!-- Teléfono -->
                <div>
                    <label 
                        for="telefono"
                        class="block text-sm uppercase tracking-wider text-zinc-300 mb-3"
                    >
                        Teléfono
                    </label>

                    <input
                        type="tel"
                        id="telefono"
                        name="telefono"
                        placeholder="+56 9 1234 5678"
                        value="<?php echo s($usuario->telefono); ?>"
                        class="w-full bg-zinc-900/70 border border-zinc-700 
                        rounded-2xl px-5 py-4 text-white placeholder-zinc-500
                        focus:outline-none focus:ring-2 focus:ring-amber-400
                        focus:border-transparent transition duration-300"
                    />
                </div>

                <!-- Email -->
                <div>
                    <label 
                        for="email"
                        class="block text-sm uppercase tracking-wider text-zinc-300 mb-3"
                    >
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="correo@barber.com"
                        value="<?php echo s($usuario->email); ?>"
                        class="w-full bg-zinc-900/70 border border-zinc-700 
                        rounded-2xl px-5 py-4 text-white placeholder-zinc-500
                        focus:outline-none focus:ring-2 focus:ring-amber-400
                        focus:border-transparent transition duration-300"
                    />
                </div>

                <!-- Password -->
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
                    Crear Cuenta
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
                    href="/olvide"
                    class="text-zinc-500 hover:text-zinc-300 transition text-sm"
                >
                    ¿Olvidaste tu password?
                </a>

            </div>

        </div>

    </div>

</div>