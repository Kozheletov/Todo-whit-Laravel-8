@extends('app')

@section('content')

    @if(count($users) >= 1)
        <table class="table-fixed w-full border-collapse border-2 border-green-800">
            <thead>
            <tr>
                <th class="p-1 w-1/12 border-2 border-green-600">N.</th>
                <th class="p-1 w-5/12 border-2 border-green-600">Name</th>
                <th class="p-1 w-3/12 border-2 border-green-600">Email</th>
                <th class="p-1 w-3/12 border-2 border-green-600">Date registration</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="text-center p-1 border-2 border-green-600">{{$loop->iteration}}</td>
                    <td class="p-1 border-2 border-green-600">{{$user->name}}</td>
                    <td class="p-1 border-2 border-green-600">{{$user->email}}</td>
                    <td class="p-1 border-2 border-green-600">{{$user->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p class="text-xl text-blue-500">Don't have users!</p>
    @endif

@endsection
