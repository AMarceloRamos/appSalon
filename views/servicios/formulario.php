<!-- Nombre -->
<div>

    <label 
        for="nombre"
        class="block text-sm uppercase tracking-widest text-zinc-300 mb-3"
    >
        Nombre del Servicio
    </label>

    <input 
        type="text"
        id="nombre"
        placeholder="Ej: Corte Premium"
        name="nombre"
        value="<?php echo $servicio->nombre; ?>"
        class="w-full bg-zinc-900/70 border border-zinc-700
        rounded-2xl px-5 py-4 text-white placeholder-zinc-500
        focus:outline-none focus:ring-2 focus:ring-amber-400
        focus:border-transparent transition duration-300"
    />

</div>

<!-- Precio -->
<div>

    <label 
        for="precio"
        class="block text-sm uppercase tracking-widest text-zinc-300 mb-3"
    >
        Precio
    </label>

    <div class="relative">

        <span class="absolute left-5 top-1/2 -translate-y-1/2 text-amber-400 font-bold">
            $
        </span>

        <input 
            type="number"
            id="precio"
            placeholder="15000"
            name="precio"
            value="<?php echo $servicio->precio; ?>"
            class="w-full bg-zinc-900/70 border border-zinc-700
            rounded-2xl pl-10 pr-5 py-4 text-white placeholder-zinc-500
            focus:outline-none focus:ring-2 focus:ring-amber-400
            focus:border-transparent transition duration-300"
        />

    </div>

</div>