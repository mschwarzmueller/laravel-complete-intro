@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/common.css') }}">
@append

@if(Session::has('fail'))
    <div class="info-box fail">
        {{ Session::get('fail') }}
    </div>
@endif
@if(Session::has('success'))
    <div class="info-box success">
        {{ Session::get('success') }}
    </div>
@endif
@if(count($errors) > 0)
    <div class="info-box fail">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif