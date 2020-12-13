<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container mx-auto">
    <header class="flex justify-between items-center px-2 py-4 bg-blue-600">
        <a class="text-white focus:text-green-300 hover:text-green-300 text-3xl" href="{{route('tasks.home')}}">
            Awesome todo!
        </a>
        <nav>
            <ul class="flex">
                @auth
                    <li class="ml-3 text-xl text-white"><a href="">{{auth()->user()->name}}</a></li>
                    <li class="ml-3 text-xl text-white"><a href="{{route('logout')}}">Logout</a></li>
                @endauth
                @guest
                    <li class="ml-3 text-xl text-white"><a href="{{route('login')}}">Login</a></li>
                    <li class="ml-3 text-xl text-white"><a href="{{route('users.create')}}">Register</a></li>
                @endguest
            </ul>
        </nav>
    </header>
    <main>
        <div class="max-w-5xl mx-auto mt-5">

            @yield('content')

        </div>
    </main>
</div>
</body>
</html>
