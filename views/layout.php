<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Barber Studio</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <link rel="stylesheet" href="/build/css/tailwind.css">

    <!-- Tus estilos -->
    <link rel="stylesheet" href="/build/css/app.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #09090b;
        }

        .contenedor-app {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr;
        }

        @media (min-width: 1024px) {
            .contenedor-app {
                grid-template-columns: 1.1fr 1fr;
            }
        }

        .imagen {
            position: relative;
            background-image: 
                linear-gradient(
                    rgba(0,0,0,.75),
                    rgba(0,0,0,.85)
                ),
                url('/build/img/barberia.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: none;
            overflow: hidden;
        }

        @media (min-width: 1024px) {
            .imagen {
                display: block;
            }
        }

        .imagen::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(
                circle at top,
                rgba(251, 191, 36, 0.25),
                transparent 45%
            );
        }

        .imagen-contenido {
            position: relative;
            z-index: 10;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 4rem;
        }

        .app {
            min-height: 100vh;
            background:
                radial-gradient(circle at top, rgba(251,191,36,.08), transparent 35%),
                #09090b;
        }
    </style>

</head>

<body>

    <div class="contenedor-app">

        <!-- Imagen lateral -->
        <div class="imagen">

            <div class="imagen-contenido">

                <div class="max-w-lg">

                    <p class="text-amber-400 uppercase tracking-[0.4em] text-sm mb-4">
                        Premium Barber Experience
                    </p>

                    <h1 class="text-6xl font-black text-white leading-tight mb-6">
                        Barber <br> Studio
                    </h1>

                    <p class="text-zinc-300 text-lg leading-relaxed">
                        Reserva tu cita online y disfruta de una experiencia moderna, elegante y profesional.
                    </p>

                </div>

            </div>

        </div>

        <!-- Contenido -->
        <main class="app">
            <?php echo $contenido; ?>
        </main>

    </div>

    <?php
        echo $script ?? '';
    ?>

</body>
</html>