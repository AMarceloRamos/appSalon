<?php
    foreach($alertas as $key => $mensajes):
        foreach($mensajes as $mensaje):

            $clases = '';

            switch($key) {
                case 'error':
                    $clases = 'bg-red-500/10 border-red-500/30 text-red-300';
                    break;

                case 'exito':
                    $clases = 'bg-emerald-500/10 border-emerald-500/30 text-emerald-300';
                    break;

                default:
                    $clases = 'bg-zinc-800 border-zinc-700 text-zinc-300';
                    break;
            }
?>

    <div class="mb-6 rounded-2xl border backdrop-blur-md px-5 py-4 shadow-lg <?php echo $clases; ?>">

        <div class="flex items-center gap-3">

            <!-- Icono -->
            <div class="flex-shrink-0">

                <?php if($key === 'error') { ?>

                    <svg xmlns="http://www.w3.org/2000/svg" 
                         class="w-6 h-6 text-red-400" 
                         fill="none" 
                         viewBox="0 0 24 24" 
                         stroke="currentColor">
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M12 8v4m0 4h.01M21 12A9 9 0 113 12a9 9 0 0118 0z" />
                    </svg>

                <?php } elseif($key === 'exito') { ?>

                    <svg xmlns="http://www.w3.org/2000/svg" 
                         class="w-6 h-6 text-emerald-400" 
                         fill="none" 
                         viewBox="0 0 24 24" 
                         stroke="currentColor">
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M5 13l4 4L19 7" />
                    </svg>

                <?php } else { ?>

                    <svg xmlns="http://www.w3.org/2000/svg" 
                         class="w-6 h-6 text-zinc-300" 
                         fill="none" 
                         viewBox="0 0 24 24" 
                         stroke="currentColor">
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M13 16h-1v-4h-1m1-4h.01" />
                    </svg>

                <?php } ?>

            </div>

            <!-- Mensaje -->
            <p class="text-sm md:text-base font-medium tracking-wide">
                <?php echo $mensaje; ?>
            </p>

        </div>

    </div>

<?php
        endforeach;
    endforeach;
?>