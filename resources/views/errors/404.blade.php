<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404 - Página Não Encontrada</title>
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    </head>
    <body class="bg-gray-100">
        <div class="flex flex-col items-center justify-center h-screen">
            <img src="<?=env('APP_URL')?>/img/404.png" alt="404" title="404" width="500" height="500" />
            <p class="mt-4 text-lg text-gray-600">Não foi possível encontrar a página que procura.</p>
            <a href="{{ url('/') }}" class="mt-6 px-6 py-3 bg-blue-500 text-lg rounded hover:bg-blue-600">Voltar à página inicial</a> <!-- Aumentado o padding e a fonte -->
        </div>
    </body>
</html>
