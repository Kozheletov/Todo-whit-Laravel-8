@extends('app')

@section('content')

    <h1 class="text-3xl text-center my-5">
        {{$task->task}}
    </h1>
    <div class="text-right">
        <a href="{{route('tasks.home')}}" class="text-xl text-white py-2 px-8 rounded-lg bg-yellow-900">back</a>
    </div>

@endsection
