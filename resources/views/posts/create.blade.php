@extends('layout.app')

@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Time to create your post!!
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
        <form method="post" action="{{ route('posts.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">Post Title:</label>
                <input type="text" class="form-control" name="title"/>
            </div>
            <div class="form-group">
                <label for="price">Post Body :</label>
                <input type="text" class="form-control" name="body"/>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
  </div>
@endsection

{{-- href="{{url('posts')}}/{{$post->id}}" --}}