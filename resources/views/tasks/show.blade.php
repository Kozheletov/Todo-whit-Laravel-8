@extends('app')

@section('content')

    <div class="text-3xl text-center my-5">
        {{$task->task}}
    </div>
    <div class="my-4 flex justify-between text-xl">
        <p>Author: {{$task->user->name}}</p>
        <p>Date: {{$task->updated_at}}</p>
    </div>
    <div class="text-right">
        <a href="{{route('tasks.home')}}" class="text-xl text-white py-2 px-8 rounded-lg bg-yellow-900">back</a>
    </div>

@endsection
