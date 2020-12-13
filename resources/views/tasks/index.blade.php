@extends('app')

@section('content')

    <div class="flex justify-between">
        <h2 class="text-2xl">Tasks list:</h2>
        @auth
            <a class="text-xl text-white py-2 px-8 rounded-lg bg-yellow-900" href="{{route('tasks.create')}}">Add task</a>
        @endauth
    </div>

    @forelse($tasks as $index => $task)
        <div class="mt-4 border-2 rounded-xl p-4 flex justify-between items-center">
            <div>{{++$index}}. {{$task->task}}</div>
            <ul class="flex flex-col md:flex-row">
                <li class="ml-3 text-green-500"><a href="{{route('tasks.show',$task)}}">Show</a></li>
                @auth
                    <li class="ml-3 text-yellow-500"><a href="{{route('tasks.edit',$task)}}">Edit</a></li>
                    <li class="ml-3 text-red-500">
                        <form action="{{route('tasks.delete',$task)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    @empty
        <h3>Not tasks!</h3>
    @endforelse

@endsection
