@extends('Layouts.master')


@section('content')

    @foreach($posts as $post)
        <div class="container">
        <div class="card" style="width: 70%; margin: auto; text-align: center">
            <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
            </div>
        </div>
        <br>
        </div>
    @endforeach
    <br>
    <div style="margin: auto; float: right">
        {{$posts->links()}}
    </div>
@endsection
