
@extends('layout.app')   <!-- tell the program where to look for the layout -->
@section('content')      <!-- categorize the part will be imported -->

<div class="jumpbotron text-center">
<ul>
    <h3><li>Programmer: {{$programmer}}.</li></h3> 
    <h3><li>Owner:</h3>
        <ul class="list-group">
            @foreach($owner as $chief) 
                <li class="list-group-item">{{$chief}}.</li>
            @endforeach
        </ul>
    <h3><li>Supervisor: {{$supervisor}}.</li></h3>  
</ul>
</div>

@endsection


