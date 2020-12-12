@extends('app')

@section('content')

    <div class="max-w-3xl mx-auto">

        <div class="flex justify-between align-center">
            <h2 class="text-2xl align-middle">Adding task</h2>
            <a href="{{route('tasks.home')}}" class="text-xl text-white py-2 px-8 rounded-lg bg-yellow-900">back</a>
        </div>

        <form action="{{route('tasks.store')}}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
                <label for="task">Your task:</label>
                <textarea class="border-2 rounded-xl p-2 border-black @error('task') border-red-600 @enderror"
                          name="task" id="task" cols="30" rows="5">
                    {{old('task')}}
                </textarea>
                @error('task')<span class="text-sm text-red-600">{{$message}}</span>@enderror
            </div>
            <button type="submit" class="border-2 rounded-xl border-black px-5 py-1">Send</button>
        </form>

    </div>

@endsection
