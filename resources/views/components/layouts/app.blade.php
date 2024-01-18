<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <!-- Link to Cairo font from Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap">
        <style>
            html {
                font-family: 'Cairo', sans-serif;
            }
        </style>

    </head>

    <body class="flex bg-gray-100">

        <aside class="w-1/6 bg-gray-800 text-white p-6">
            <nav>
                <a href="/" @class(['block py-2 px-4 hover:bg-gray-700','font-bold'=> request()->is('/')]) >Todos</a>
                <a href="/create-post" @class(['block py-2 px-4 hover:bg-gray-700','font-bold'=> request()->is('/')])
                    >أضف دواءً</a>
                <a href="/counter" @class(['block py-2 px-4 hover:bg-gray-700', 'font-bold'=> request()->is('counter')])
                    >Counter</a>
            </nav>
        </aside>

        <main class="flex-1 p-4">
            {{ $slot }}
        </main>
    </body>

</html>
