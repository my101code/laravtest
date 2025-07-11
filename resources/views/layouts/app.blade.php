<?php $url='http://localhost/mis-proyectos/Laravel/laravtest/public' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('titlePage')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-2">
    <ul class=" flex space-x-2">
        <li><a href="<?= $url ?>">Home</a></li>
        <li><a href="<?= $url ?>/contacto">Contacto</a></li>
        <li><a href="<?= $url ?>/tienda">Tienda</a></li>
    </ul>
    <h1 class=" font-bold text-center">@yield('titlePage') page </h1>
    <p>corregido</p>
</body>
</html>