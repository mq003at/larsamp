{{-- containing all the notification messages. CURRENTLY NOT WORK, but it works now after restaring PC -_- --}}
@if(count($errors)>0)
    @foreach($errors as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
@endif

