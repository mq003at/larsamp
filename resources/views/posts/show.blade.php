@extends('layout.app')

@section('content')
<div class="jumpbotron jumbotron-fluid text-center">
     <h1>{{$post->title}}</h1>
     <small>Written on {{$post->created_at}}</small>
     <div>
        <p>{{$post->body}}</p>
     </div>
     <a href="{{url('posts')}}/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
     <a href="{{url('posts')}}" class="btn btn-primary">Go Back</a>
     {{-- Below is the most bullshjt delete method I have ever seen. Have to include a little bit css or the form will break everything. Damnn it! --}}
     <form action="{{ url('/posts', ['id' => $post->id]) }}" method="post" style="display:inline-block;">
        <input class="btn btn-primary" type="submit" value="Delete" />
        @method('delete')
        @csrf
    </form>

</div>
@endsection
