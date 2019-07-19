@extends('layout.app')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Edit your post here!!
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('posts.update', $post->id) }}">
        {{-- bullshit things from Laravel, the put method must be hidden. Also csrf token must be included --}}
        @method('PUT')
        @csrf
            <div class="form-group">
                <label for="name">Post Title:</label>
                <input type="text" class="form-control" name="title" value={{$post->title}}/>
            </div>
            <div class="form-group">
                <label for="price">Post Body:</label>
                <input type="text" class="form-control" name="body" value={{$post->body}}/>
            </div>
            <button type="submit" class="btn btn-primary">Edit!</button>
        </form>
    </div>
  </div>
@endsection

{{-- receive the data $post and allow user to make modification, then send back to the server as update request --}}