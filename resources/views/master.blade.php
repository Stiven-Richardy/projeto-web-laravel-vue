<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    body {
        background-color: #121212; /* Fundo escuro */
        color: #ffffff; /* Texto claro */
        font-family: 'Figtree', sans-serif; /* Usa a fonte já definida */
    }
</style>

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>
</html>