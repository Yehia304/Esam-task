@if(\Session::has('Not found'))
    <script>
        alert('User not found')
    </script>
@endif

@extends('Layouts.master')

@section('content')
<div class="container">
    <h2>Users Table</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{route('users.details',['id'=>$user->id])}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="margin: auto; float:right;">
        {{$users->links()}}
    </div>
</div>
@endsection
