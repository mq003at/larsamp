@extends('layout.app')

@section('content')
    <div class="jumpbotron text-center"> 
        <h1>Posts</h1>
        <div class="list-group">
        @if(count($posts)>1)
            @foreach($posts as $post)
                <div class="well">
                    <div class="list-group-item">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->body}}</p>
                    <small>Written on {{$post->created_at}}</small>
                </div>
                </div>
            @endforeach
        @else
            <p>No post found in the database.</p>
        @endif
        </div>
    </div>
@endsection