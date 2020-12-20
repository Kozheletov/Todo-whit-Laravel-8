@extends('app')

@section('content')

    <div class="max-w-3xl mx-auto">

        <div class="flex justify-between align-center">
            <h2 class="text-2xl align-middle">Edit profile</h2>
            <a href="{{route('tasks.home')}}" class="text-xl text-white py-2 px-8 rounded-lg bg-yellow-900">back</a>
        </div>

        <form action="{{route('users.update', $user)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col mb-4">
                <label class="text-xl" for="name">Name</label>
                <input class="border-2 rounded-xl p-2 border-black @error('name') border-red-600 @enderror"
                       type="text"
                       name="name"
                       id="name"
                       value="{{$user->name}}">
                @error('name') <span class="text-red-600">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl" for="email">Email</label>
                <input class="border-2 rounded-xl p-2 border-black @error('email') border-red-600 @enderror"
                       type="email"
                       name="email"
                       id="email"
                       value="{{$user->email}}">
                @error('email') <span class="text-red-600">{{$message}}</span> @enderror
            </div>
            <button type="submit" class="border-2 rounded-xl border-black px-5 py-1 hover:text-blue-500 hover:border-blue-500
            focus:border-blue-500 focus:outline-none focus:text-blue-500">Edit
            </button>
        </form>

    </div>

@endsection
