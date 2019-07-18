@extends('layout.app')   <!-- tell the program where to import these -->

@section('content')       <!-- categorize the part will be imported -->
<h1>Welcome to {{config('app.name', 'Giazza')}} </h1>
<p>{{$title}}</p>
@endsection

