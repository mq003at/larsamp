@extends('layout.app')   <!-- tell the program where to import these -->

@section('content')       <!-- categorize the part will be imported -->

<div class="jumbotron text-center">
        <h1>Welcome To Winston Web!</h1>
        <p>This is a sample application to Ingo study.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
@endsection