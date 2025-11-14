<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uvítací stránka</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gradient-to-b from-black via-gray-900 to-gray-800 flex items-center justify-center text-white">

    <div class="text-center px-6">

        <!-- Logo / Název -->
        <h1 class="text-5xl font-extrabold mb-4 text-red-500 drop-shadow-lg">
            Zvířecí Tinder
        </h1>

        <!-- Popisek -->
        <p class="text-lg text-gray-300 mb-10 max-w-xl mx-auto leading-relaxed">
            Objevujte nová zvířecí přátelství, procházejte profily, dávejte swipy
            a najděte ten nejlepší match pro svého mazlíčka.
        </p>

        <!-- Tlačítka -->
        <div class="flex flex-col gap-4 max-w-sm mx-auto">

            <a href="/register"
                class="w-full py-3 text-center bg-white/20 hover:bg-white/30 rounded-full font-semibold text-xl shadow-lg backdrop-blur-sm transition">
                Registrovat se
            </a>

            <a href="/login"
                class="w-full py-3 text-center bg-black/30 hover:bg-black/40 rounded-full font-semibold text-xl shadow-lg backdrop-blur-sm transition">
                Přihlásit se
            </a>

        </div>


    </div>

</body>

</html>