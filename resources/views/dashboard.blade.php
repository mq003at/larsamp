@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        <a href="{{url('posts')}}/create" class="btn btn-primary">Create a post</a>
                        <h3>Your posts</h3>
                        @if(count($posts)>0) 
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Wanna Edit?</th>
                                <th>Wanna Delete?</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th><a href="{{url('posts')}}/{{$post->id}}">{{$post->title}}</a></th>
                                    <th><a href="{{url('posts')}}/{{$post->id}}/edit" class="btn btn-primary">Edit </th>
                                    <th>
                                        <form action="{{ url('/posts', ['id' => $post->id]) }}" method="post" style="display:inline-block;">
                                        <input class="btn btn-danger" type="submit" value="Delete" />
                                        @method('delete')
                                        @csrf
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You have no post.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
