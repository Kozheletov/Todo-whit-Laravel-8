<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container 2xl mx-auto">
    <h1 class="text-center text-6xl text-blue-700">Hello, World!</h1>
    <main>
        <div class="max-w-5xl mx-auto mt-5">
            <h2 class="text-2xl">Tasks list:</h2>

            @forelse($tasks as $index => $task)
                <div class="mt-4 border-2 rounded-xl p-4 flex justify-between">
                    <div>{{++$index}}. {{$task->task}}</div>
                    <ul class="flex">
                        <li class="ml-3 text-green-500"><a href="{{$task->id}}">Show</a></li>
                        <li class="ml-3 text-yellow-500"><a href="">Edit</a></li>
                        <li class="ml-3 text-red-500"><a href="">Delete</a></li>
                    </ul>
                </div>
            @empty
                <h3>Not tasks!</h3>
            @endforelse

        </div>
    </main>
</div>
</body>
</html>
