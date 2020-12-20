@extends('app')

@section('content')

    <h1 class="text-3xl text-center">Hello {{$user->name}}</h1>
    <h2 class="text 2xl">Your profile</h2>

    <table class="table-fixed w-full border-collapse border-2 border-green-800">
        <thead>
        <tr>
            <th class="p-1 w-1/12 border-2 border-green-600">Id</th>
            <th class="p-1 w-5/12 border-2 border-green-600">Name</th>
            <th class="p-1 w-3/12 border-2 border-green-600">Email</th>
            <th class="p-1 w-3/12 border-2 border-green-600">Date registration</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="text-center p-1 border-2 border-green-600">{{$user->id}}</td>
            <td class="p-1 border-2 border-green-600">{{$user->name}}</td>
            <td class="p-1 border-2 border-green-600">{{$user->email}}</td>
            <td class="p-1 border-2 border-green-600">{{$user->created_at}}</td>
        </tr>
        </tbody>
    </table>
    <div class="mt-5 text-right">
        <a class="border-2 border-yellow-800 p-2 text-yellow-500 rounded-md" href="{{route('users.edit', $user)}}">Delete profile</a>
        <a class="border-2 border-yellow-800 p-2 text-red-500 rounded-md" href="{{route('users.edit', $user)}}">Edit profile</a>
    </div>

@endsection
