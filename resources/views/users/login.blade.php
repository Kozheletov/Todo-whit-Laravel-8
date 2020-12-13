@extends('app')

@section('content')

    <h2 class="flex justify-center"><span class="text-2xl text-center border-b-2 mb-5 border-black">Login</span></h2>
    <div class="max-w-xl mx-auto">

        <form action="{{route('auth')}}" method="POST">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="text-xl" for="email">Email</label>
                <input class="border-2 rounded-xl p-2 border-black @error('email') border-red-600 @enderror"
                       type="email"
                       name="email"
                       id="email"
                       value="{{old('email')}}">
                @error('email') <span class="text-red-600">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl" for="password">Password</label>
                <input class="border-2 rounded-xl p-2 border-black @error('password') border-red-600 @enderror"
                       type="password"
                       name="password"
                       id="password">
                @error('password') <span class="text-red-600">{{$message}}</span> @enderror
            </div>

            <button type="submit" class="border-2 rounded-xl text-xl border-black px-5 py-2">Login</button>
        </form>

    </div>

@endsection
