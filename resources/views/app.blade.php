<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container 2xl mx-auto px-2">
    <h1 class="text-center text-6xl text-blue-700">Hello, World!</h1>
    <main>
        <div class="max-w-5xl mx-auto mt-5">

            @yield('content')

        </div>
    </main>
</div>
</body>
</html>
